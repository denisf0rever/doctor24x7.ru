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
			
		$tariffss = DB::table('sf_consultation_tariff')
            ->join('sf_consultation_tariff_rubric', 'sf_consultation_tariff.id', '=', 'sf_consultation_tariff_rubric.tariff_id')
			->where('sf_consultation_tariff_rubric.rubric_id', $consultation->rubric_id)
			->where('sf_consultation_tariff.is_active', true)
			->orderBy('position', 'asc')
            ->get();
		
		
		$tariffs = [];
			
		foreach ($tariffss as $tariff) {
			 
            if ($tariff->condition_id){
                if (5 == $tariff->condition_id) {
                    $is_show = 1;
                }
				
                if (6 == $tariff->condition_id) {
                    $is_show = 1;
                }
            }
			
            if($is_show){
                $tariffs[] = $tariff; 
            }
        }
		
		return view('payment.index', compact('consultation', 'tariffs'));
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
		$response = Http::withHeaders([
			'Content-Type' => 'application/json',
		])->post('https://rest-api-test.tinkoff.ru/v2/Init', [
			'terminalKey' => '1729778851350DEMO',
			'Description' => 'Подарочная карта на 1000 рублей',
			'Amount' => 10,
			'OrderId' => '$request->OrderId',
			'Token' => '1iaDILU&TIstEwxv'
		]);
		
		dump($response);

	}
	
}