<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

use App\Models\Consultation\Consultation;
use App\Models\Consultation\ConsultationCategory as Category;

use App\Models\Payment\Payment;
use App\Models\Tariff\Rubric;
use App\Models\Tariff\Tariff;
use Carbon\Carbon;

class PaymentController extends Controller
{
	//protected static $terminal_key = '1729778851371';
	//protected static $password = 'UNUKBp3_0OMdREha';
	
	/** test **/
	
	private static string $terminal_key = '1729778851350DEMO';
	private static string $password = '1iaDILU&TIstEwxv';
	
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
    public function show(string $id)
    {
        $consultation = Consultation::query()
            ->where('id', $id)
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
	
    public function init(Request $request)
	{
		$request->validate([
			'payment_type' => 'required|string|in:t_bank,u_kassa'
		]);

		return match ($request->payment_type) {
			't_bank' => $this->tbank($request),
			'u_kassa' => $this->ukassa(),
			default => redirect()->back()->with('error', 'Недопустимый тип платежа.'), // Этот случай валидации уже обрабатывается
		};
	}
	
	public function tBank($request)
	{
		$preparedData = [
			'amount' => $request->amount,
			'chat' => $request->chat ?? 0,
			'order_id' => $request->OrderId,
			'tariff_id' => $request->tariff_id ?? 0,
			'total_sum' => $request->Sum,
			'urgency' => $request->urgency ?? 0,
			'pharma' => $request->pharma ?? 0,
			'option_phone' => $request->option_phone ?? 0,
			'video_consultation' => $request->video_consultation ?? 0,
		];

		$data = [
			'Amount' => 10 * 100,
			'Description' => 'Оплата консультации с врачом',
			'NotificationURL' => 'https://doctor24x7.ru/api/payment/status',
			'OrderId' => (string) Str::uuid(),
			'Password' => self::$password,
			'SuccessURL' => 'https://doctor24x7.ru/chat/' . $request->OrderId,
			'TerminalKey' => self::$terminal_key,
		];
		
		$values = array_values($data);
		 
		$concatenatedString = implode('', $values);
		
		$hashedString = hash('sha256', $concatenatedString);
		
		unset($data['Password']);
		
		$data['Token'] = $hashedString;
		//$data['DATA'] = $preparedData;
		
		ksort($data);
		
		$postDataJson = json_encode($data);
		
		try {
			
			$response = Http::post('https://securepay.tinkoff.ru/v2/Init', $data);
			
			$decode_response = json_decode($response, true);
			
			dd($decode_response);
		
			if (isset($decode_response['PaymentURL'])) {
				$paymentUrl = $decode_response['PaymentURL'];
				return redirect($paymentUrl);
			} else {
			
				if($decode_response['ErrorCode'] == 8) {
					dd($decode_response);
				}
			}
		} catch (Exception $e) {
			echo $e->message;
			
			return response()->json(['error' => 'Ошибка при отправке запроса'], $response->status());
		}
		
	}
	
	public function ukassa()
	{
		return 'OK';
	}
}