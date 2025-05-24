<?php

namespace App\Http\Controllers\Payment;

use App\Services\Telegram\Notifier\TelegramNotifier;
use App\Http\Controllers\Controller;
use App\Http\Requests\Payment\PaymentRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

use App\Models\Consultation\Consultation;
use App\Models\Consultation\ConsultationCategory as Category;

use App\Models\Payment\Payment;
use App\Models\Invoice\Invoice;
use App\Models\Config\Config;
use App\Models\Tariff\Rubric;
use App\Models\Tariff\Tariff;
use Carbon\Carbon;

use App\Classes\Payment\TBankClass;

class PaymentController extends Controller
{
    public function index()
    {
        $payments = Payment::query()
			->get();
		 
		$categories = Category::withCount(['consultationsToday' => function ($query) {
			$query->where('is_payed', 1); // Фильтрация по оплаченным консультациям за сегодня
		},
		'consultationsYesterday' => function ($query) {
			$query->where('is_payed', 1); // Фильтрация по оплаченным консультациям за вчера
		}, 
		'wasConsultations',
		'todayConsultations'
		])
			->get();
		 
		$consultationsCount = Consultation::whereDate('created_at', Carbon::today())
			->count();
			
		$paidConsultationsCount = Consultation::where('is_payed', 1)
			->whereDate('created_at', Carbon::today())
			->count();
			
		$totalPaymentsToday = Consultation::where('is_payed', 1)
			->whereDate('created_at', Carbon::today())
			->sum('payed_amount');
			
		$consultationsWithPhotos = DB::table('sf_consultation_comment as consultations')
			->join('sf_consultation_comment_photo', 'consultations.id', '=', 'sf_consultation_comment_photo.comment_id')
			->whereDate('consultations.created_at', '=', Carbon::today())
			->groupBy('consultations.id') // Группируем по ID консультации
			->select('consultations.id')
			->get();
			
		$consultationsWithPhotosPaid = DB::table('sf_consultation_comment as consultations')
			->join('sf_consultation_comment_photo', 'consultations.id', '=', 'sf_consultation_comment_photo.comment_id')
			->whereDate('consultations.created_at', '=', Carbon::today())
			->where('consultations.is_payed', true)
			->groupBy('consultations.id') // Группируем по ID консультации
			->select('consultations.id')
			->get();
			
		$consultationsWithPhotosYesterday = DB::table('sf_consultation_comment as consultations')
			->join('sf_consultation_comment_photo', 'consultations.id', '=', 'sf_consultation_comment_photo.comment_id')
			->whereDate('consultations.created_at', '=', Carbon::yesterday())
			->groupBy('consultations.id') // Группируем по ID консультации
			->select('consultations.id')
			->get();
			
		$consultationsWithPhotosYesterdayPaid = DB::table('sf_consultation_comment as consultations')
			->join('sf_consultation_comment_photo', 'consultations.id', '=', 'sf_consultation_comment_photo.comment_id')
			->whereDate('consultations.created_at', '=', Carbon::yesterday())
			->where('consultations.is_payed', true)
			->groupBy('consultations.id') // Группируем по ID консультации
			->select('consultations.id')
			->get();
			
		return view('dashboard.payment.index', compact('payments', 'totalPaymentsToday', 'paidConsultationsCount', 'consultationsWithPhotos', 'consultationsCount', 'consultationsWithPhotosYesterday', 'categories', 'consultationsWithPhotosPaid', 'consultationsWithPhotosYesterdayPaid'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function consultation(string $id)
    {
        $consultation = Consultation::query()
            ->where('id', $id)
			->select('id', 'rubric_id')
            ->firstOrFail();
			
		$tariffs = DB::table('sf_consultation_tariff')
            ->join('sf_consultation_tariff_rubric', 'sf_consultation_tariff.id', '=', 'sf_consultation_tariff_rubric.tariff_id')
			->where('sf_consultation_tariff_rubric.rubric_id', $consultation->rubric_id)
			->where('sf_consultation_tariff.is_active', true)
			->orderBy('position', 'asc')
            ->get();
			
		$hasPhoto = DB::table('sf_consultation_comment_photo')
			->where('comment_id', $consultation->id)
			->count();
		
		$tariffArray = [];
		$is_show = false;
		
		foreach ($tariffs as $tariff) {
			if (null === $tariff->condition_id) {
				$is_show = true;
			}
				
			if (5 == $tariff->condition_id) {
				$is_show = $hasPhoto == 0;
			}
			
			if (6 == $tariff->condition_id) {
				$is_show = $hasPhoto > 0;
			}
			
            if($is_show){
                $tariffArray[] = $tariff; 
            }
        }
		
		return view('payment.index', compact('consultation', 'tariffArray'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
	
    public function init(PaymentRequest $request)
	{
		TelegramNotifier::notify('Переход на оплату', 'event');
		
		return match ($request->payment_method) {
			't_bank' => TBankClass::init($request),
			'u_kassa' => 'OK',
			default => redirect()->back()->with('error', 'Недопустимый тип платежа.'), // Этот случай валидации уже обрабатывается
		};
	}
	
	public function chat(string $id)
	{
		$invoice = Invoice::query()
			->where('id', $id)
			->firstOrFail();
			
		return view('payment.chat', compact('invoice'));
	}
	
	public function success()
	{
		return view('payment.success');
	}
}