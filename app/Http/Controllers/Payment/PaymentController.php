<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

use App\Models\Consultation\Consultation;
use App\Models\Tariff\Rubric;
use App\Models\Tariff\Tariff;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
		$data = [
			'Amount' => 10*100,
			'Description' => 'Подарочная карта на 1000 рублей',
			'OrderId' => '444ddd',
			'Password' => '1iaDILU&TIstEwxv',
			'TerminalKey' => '1729778851350'
		];
				
		ksort($data);
		
		$values = array_values($data);
		 
		$concatenatedString = implode('', $values);
		
		$hashedString = hash('sha256', $concatenatedString);
		unset($data['Password']);
		$data['Token'] = $hashedString;
		
		$postDataJson = json_encode($data);
		
		 /*$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://rest-api-test.tinkoff.ru/v2/Init");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postDataJson);

    // Добавляем заголовки для указания того, что тело запроса содержит JSON
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
        'Content-Length: ' . strlen($postDataJson)
    ]);

    // Выполнение запроса и получение ответа
    $output = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
	
	echo  $output;

    if ($output === false || $httpCode !== 200) {
        error_log('Не удалось выполнить запрос, HTTP код: ' . $httpCode);
        return false;
    }
    $outputArray = json_decode($output, true); // true означает декодирование в массив
    
	
	
    if (json_last_error() !== JSON_ERROR_NONE) {
        error_log('Ошибка при декодировании JSON: ' . json_last_error_msg());
        return false;
    }

    if (isset($outputArray['Success']) && $outputArray['Success'] === true 
        && isset($outputArray['PaymentURL'])) {

        return $outputArray['PaymentURL'];
    } else {
        error_log("Ссылка не пришла");
        return false;
    }
	*/
	
		$response = Http::withHeaders([
			'Content-Type' => 'application/json',
		])->post('https://rest-api-test.tinkoff.ru/v2/Init', $postDataJson);
		
		echo $response;
		
	}
}