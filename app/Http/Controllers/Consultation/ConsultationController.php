<?php

namespace App\Http\Controllers\Consultation;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use App\Http\Controllers\Controller;
use App\Models\Consultation\Consultation;
use App\Models\Consultation\Booking;
use App\Models\Tariff\Tariff;
use App\Models\Consultation\ConsultationCategory as Category;
use App\Models\Consultation\Discussion;
use App\Models\Consultation\ConsultationComment as Comment;
use App\Models\Consultation\Contents;
use App\Models\UserMain;
use App\Models\Settings\UserSettings as Settings;
use App\Http\Requests\ConsultationRequest;
use App\Http\Requests\ConsultationUpdateRequest;
use App\Services\ConsultationService;
use App\Services\BookingService;
use App\Events\ConsultationCreated;
use App\Helpers\LinkHelper;
use Carbon\Carbon;

class ConsultationController extends Controller
{
	// Вывод консультаций
	public function dashboard()
	{
		$consultations = Consultation::select('id', 'title', 'visit_count', 'created_at')
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
		$startTime = microtime(true);
		
        $consultation = Consultation::query()
            ->where('id', $id)
			->with(['comments' => fn($comments) => $comments->where('to_answer_id', null)])
            ->firstOrFail();
			
		$lengthDescription = Str::length($consultation->description);
		$cityId = $consultation->city_id;
		
		$coefficientCity = $cityId == 4400 ? 1.1 : 1;
			
		$coefficientLength = match(true) {
			$lengthDescription > 1750 => 1.9,
			$lengthDescription > 1500 => 1.8,
			$lengthDescription > 1250 => 1.7,
			$lengthDescription > 1000 => 1.6,
			$lengthDescription > 750 => 1.5,
			default => 1,
		};
		
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
			
		$doctors = UserMain::whereHas('bookings', function ($query) use ($id) {
            $query->where('comment_id', $id);
        })->select('id', 'first_name', 'last_name', 'avatar')
		->get();
				
		$endTime = microtime(true);
        $executionTime = ($endTime - $startTime); // Время в миллисекундах
		
		return view('dashboard.consultation.item', compact('consultation', 'hasBooking', 'canBooking', 'hasAnswerForm', 'currentHour', 'photos', 'executionTime', 'coefficientCity', 'coefficientLength', 'lengthDescription', 'doctors'));
    }
	
    public function index()
    {
		return view('consultation.list');
    }

	// Форма для подачи вопроса
    public function form()
    {
		$categories = Category::select('id', 'short_title')->get();
		
		return view('consultation.form', compact('categories'));
    } 
	
	// Создание консультации
	public function create(ConsultationRequest $request, ConsultationService $service)
    {
		$consultation = $service->create($request->validated());

		$data = [
			'name' => $request->username,
			'email' => $request->email,
			'consultation_id' => $consultation->id
		];
				
		if ($consultation) {
			ConsultationCreated::dispatch($data);
		
			return redirect()->route('payment.consultation', $consultation->id)->with('success', 'Консультация добавлена');
		} else {
			return redirect()->back()->with('error', 'Какая-то ошибка при добавлении');
		}
    }

	// Просмотр консультации в паблике
    public function consultation(string $slug)
    {
		$startTime = microtime(true);
			
		$cacheKey = 'consultation_' . $slug;
		$discussionCache = 'discussion_' . $slug;
		$contentCache = 'content_' . $slug;
		$userListCache = 'userlist_' . $slug;
		
		$timeCache = 60;

		// Попробуйте получить данные из кэша
		//LinkHelper::convertToHtmlLink();
		// 
		$consultation = cache()->remember($cacheKey, $timeCache, fn () => Consultation::query()
			->where('slug', $slug)
			->with([
				'discussion' => fn ($discussion) => $discussion->with('subcategory'),
				'comments' => fn ($comments) => $comments->where('to_answer_id', NULL)
					->withCount('like')
					->with(['children' => fn ($children) => $children->withCount('like')])
					->with('user')
				])
			->firstOrFail());
		
		$consultationId = $consultation->id;
		
		$consultation->setRelation('content', cache()->remember($contentCache, $timeCache, fn () => Contents::where('comment_id', $consultationId)->get()));
		
		$discussion = cache()->remember($discussionCache, $timeCache, fn () => Discussion::query()
			->where('comment_id', $consultationId)
			->count());
		
		/* !!!!!!!!!!!!! нужно подумать над проверкой внизу !!!!!!!!!!!!!!!*/
		
		if ($consultation->comments->count() >= 0) {
			$consultantsArray = cache()->remember($userListCache, $timeCache, fn () => DB::table('sf_consultation_comment_answer as ca')
				->join('sf_guard_user as u', 'ca.user_id', '=', 'u.id')
				->where('ca.comment_id', $consultation->id)
				->distinct()
					->select('u.id', 'u.username', 'u.email_address', 'u.first_name', 'u.last_name', 'u.middle_name', 'u.avatar') // выбор полей о пользователях
				->get());
		}
			
		$endTime = microtime(true);
        $executionTime = ($endTime - $startTime); // Время в миллисекундах
		
		
		//@if ($consultation->bookings->count() > 0)
		//@foreach ($consultation->bookings as $booking)
		//	@include('consultation.user.userlist', ['user' => $booking])
		//@endforeach
		//@else
		//@endif
		//$this->incrementView($id);
		
		return view('consultation.item', compact('consultation', 'executionTime', 'discussion', 'consultantsArray'));
    }
	
	// Редактирование консультации
    public function edit(string $id)
    {
        $consultation = Consultation::query()
			->where('id', $id)
			->firstOrFail();
			
		return view('dashboard.consultation.edit-consultation', compact('consultation'));
    }

	// Обновление консультации
    public function update(ConsultationUpdateRequest $request, string $id)
    {
        $data = $request->validated();
	
		$consultation = Consultation::query()
            ->where('id', $id)
            ->firstOrFail();
			
		$consultation->description = $request->input('description');
		$consultation->email = $request->input('email');
		$consultation->save();
		
		return redirect()->back()->with('success', 'Консультация обновлена');
    }
	 
	// Удаление консультации
    public function destroy(string $id)
    {
        $consultation = Consultation::query()
            ->where('id', $id)
            ->firstOrFail();
		
		$consultation->delete();
		
		return redirect()->back()->with('success', 'Консультация удалена');
    }
	
	public function clearConsultationCache($slug)
	{
		$cacheKey = 'consultation_' . $slug;
		cache()->forget($cacheKey);
	}
	
}
