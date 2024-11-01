<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Consultation\Consultation;

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
			//->with(['rubrics' => fn ($rubrics) => $rubrics->where('rubric')])
            ->firstOrFail();
			
		return view('payment.consultation', compact('consultation'));
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
	
    public function init(string $id)
    {
        $terminalKey = '1729778851350DEMO'; // Идентификатор терминала
		$secretKey = '1iaDILU&TIstEwxv'; // Секретный ключ
		$url = 'https://secure.tinkoff.ru/v2/Init'; // URL для инициации платежа

// Данные для запроса
$data = [
    'TerminalKey' => $terminalKey,
    'Amount' => 10000, // Сумма в копейках (например, 10000 = 100 рублей)
    'Currency' => 'RUB', // Валюта
    'OrderId' => '123456', // Уникальный идентификатор заказа
    'Description' => 'Тестовый платеж',
    'SuccessURL' => 'https://doctor24x7.ru/payment/success', // URL для перенаправления при успехе
    'FailURL' => 'https://doctor24x7.ru/payment/error' // URL для перенаправления при неуспехе
];

// Подписываем данные
$dataToSign = $terminalKey . $data['OrderId'] . $data['Amount'] . $data['Currency'] . $data['Description'] . $data['SuccessURL'] . $data['FailURL'] . $secretKey;
$data['Token'] = hash('sha256', $dataToSign);

// Инициация платежа
$options = [
    'http' => [
        'header' => "Content-Type: application/json\r\n",
        'method' => 'POST',
        'content' => json_encode($data),
    ],
];

$context = stream_context_create($options);
$response = file_get_contents($url, false, $context);

// Обработка ответа
if ($response === FALSE) {
    die('Ошибка при инициации платежа');
}

$responseData = json_decode($response, true);

// Выводим результат
if ($responseData['Success']) {
    echo "Оплата успешно инициирована. Ссылка на оплату: " . $responseData['PaymentURL'];
} else {
    echo "Ошибка: " . $responseData['Message'];
}
    }
}
