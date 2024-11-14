<?php

namespace App\Http\Controllers\Consultation;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use App\Models\Consultation\Consultation;
use App\Models\Consultation\Booking;
use App\Models\Tariff\Tariff;
use App\Models\Consultation\ConsultationCategory as Category;
use App\Models\Consultation\Discussion;
use App\Models\Consultation\ConsultationComment as Comment;
use App\Models\Settings\UserSettings as Settings;
use App\Http\Requests\ConsultationRequest;
use App\Http\Requests\ConsultationUpdateRequest;
use App\Services\ConsultationService;
use App\Services\BookingService;
use App\Events\ConsultationCreated;

use Carbon\Carbon;

class ConsultationController extends Controller
{
	public function dashboard()
	{
		$consultations = Consultation::query()
			->where('is_payed', true)
			->orderBy('created_at', 'desc')
            ->take(100)
            ->get();
			
		$totalConsultations = Cache::flexible(
			'Consultations',
			[720, 725],
			fn () => Consultation::count()
		);

		$totalAnswers = Cache::flexible(
			'Answers',
			[720, 725],
			fn () => Comment::count()
		);
			
		return view('dashboard.consultation.list', compact('consultations', 'totalConsultations', 'totalAnswers'));
	}
	
	// Просмотр консультации в панели
    public function show(string $id)
    {
        $consultation = Consultation::query()
            ->where('id', $id)
			->with(['comments' => fn($comments) => $comments->where('to_answer_id', null)])
            ->firstOrFail();
		
		$user_id = auth()->id();
		
		$dateTimeString = $consultation->created_at;
		$dateTime = Carbon::parse($dateTimeString);

		$currentHour = $dateTime->format('H:i');
		
		$hasBooking = Consultation::hasBooking($consultation->id, $user_id);
		$canBooking = Booking::canBooking($consultation->id);
		$hasAnswerForm = Settings::hasAnswerForm($user_id);
		
		$photos = DB::table('sf_consultation_comment_photo')
			->where('comment_id', $id)
			->get();
		
		return view('dashboard.consultation.item', compact('consultation', 'hasBooking', 'canBooking', 'hasAnswerForm', 'currentHour', 'photos'));
    }
	
    public function index()
    {
		return view('consultation.list');
    }

    public function form()
    {
		$categories = Category::all();
		
		return view('consultation.form', compact('categories'));
    } 
	
	public function create(ConsultationRequest $request, ConsultationService $service)
    {
		$consultation = $service->create($request->validated());

		$data = [
			'name' => $request->username,
			'email' => $request->email,
			'consultation_id' => $consultation->id
		];
				
		ConsultationCreated::dispatch($data);
    }

	// Просмотр консультации в паблике
    public function consultation(string $id)
    {
		$startTime = microtime(true);
		
		$ipAddress = request()->ip();
		
		$cacheKey = 'consultation_' . $id . '_' . md5($ipAddress);

// Попробуйте получить данные из кэша
$consultation = cache()->remember($cacheKey, 60, fn () => Consultation::query()
        ->where('id', $id)
        ->with([
            'discussion' => fn ($discussion) => $discussion->with('subcategory'),
            'comments' => fn ($comments) => $comments->where('to_answer_id', null)
                ->withCount('like')
                ->with(['like' => fn ($like) => $like->where('ip', $ipAddress)])
        ])
        ->firstOrFail());
			
		$endTime = microtime(true); // Запоминаем время конца
        $executionTime = ($endTime - $startTime) * 1000; // Время в миллисекундах
		
		//dd($executionTime);
		//$this->incrementView($id);
		
		return view('consultation.item', compact('consultation', 'executionTime'));
    }
	
    public function edit(string $id)
    {
        $consultation = Consultation::query()
			->where('id', $id)
			->firstOrFail();
			
		return view('dashboard.consultation.edit-consultation', compact('consultation'));
    }

    public function update(ConsultationUpdateRequest $request, string $id)
    {
        $data = $request->validated();
	
		$consultation = Consultation::query()
            ->where('id', $id)
            ->firstOrFail();
			
		$consultation->description = $request->input('description');
		$consultation->save();
		
		if ($consultation) {
			return redirect()->back()->with('success', 'Консультация обновлена');
		} else {
			return redirect()->back()->with('success', 'Возникла ошибка');
		}
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $consultation = Consultation::query()
            ->where('id', $id)
            ->firstOrFail();
		
		$consultation->delete();
				
		if ($consultation) {
			 return redirect()->back()->with('success', 'Консультация удалена');
		}
    }
}
