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
use App\Http\Requests\ConsultationUpdateRequest;
use App\Services\BookingService;
use App\Services\BreadcrumbService;
use App\Helpers\LinkHelper;
use Carbon\Carbon;
use App\Services\Cached\CachedData;

class ConsultationController extends Controller
{
	public function __construct(BreadcrumbService $breadcrumbService)
	{
		$this->breadcrumbService = $breadcrumbService;
	}

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
		
		return view('dashboard.consultation.item', compact('consultation', 'hasBooking', 'canBooking', 'hasAnswerForm', 'currentHour', 'photos', 'executionTime',  'coefficientLength', 'lengthDescription', 'doctors'));
    }
	
	public function category($id)
	{
		$consultations = Consultation::query()
			->where('rubric_id', $id)
			->whereDate('created_at', Carbon::today())
			->get();
			
		return view('dashboard.consultation.category', compact('consultations'));
	}
	
    public function index()
    {
		return view('consultation.list');
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
		
		$photos = DB::table('sf_consultation_comment_photo')
			->where('comment_id', $slug)
			->get();
			
		$endTime = microtime(true);
        $executionTime = ($endTime - $startTime); // Время в миллисекундах
		
		
		//@if ($consultation->bookings->count() > 0)
		//@foreach ($consultation->bookings as $booking)
		//	@include('consultation.user.userlist', ['user' => $booking])
		//@endforeach
		//@else
		//@endif
		//$this->incrementView($id);
		
		$this->breadcrumbService->add('consultation', 'Консультации', route('consult.form'));
		$this->breadcrumbService->add('consultation', $consultation->category->short_title, route('consultation.category', $consultation->category->slug));
		
		$breadcrumbs = $this->breadcrumbService->getAll('consultation');
		
		return view('consultation.item', compact('consultation', 'executionTime', 'discussion', 'consultantsArray', 'photos', 'breadcrumbs'));
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
			
		$consultation->title = $request->input('title');
		$consultation->description = $request->input('description');
		$consultation->email = $request->input('email');
		$consultation->is_special = $request->input('is_special');
		$consultation->save();
		
		return redirect()->back()->with('success', 'Консультация обновлена');
    }
	
	public function online()
	{
		return view('');
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
