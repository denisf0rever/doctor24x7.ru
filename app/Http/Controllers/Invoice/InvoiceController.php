<?php

namespace App\Http\Controllers\Invoice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Invoice\Invoice;
use App\Models\Consultation\Consultation;

class InvoiceController extends Controller
{
    public function index()
	{
		return view('dashboard.invoice.index');
	}
	
	public function addInvoice(int $id)
	{
		$consultation = Consultation::query()
			->where('id', $id)
			->select('id')
			->firstOrFail();
			
		return view('dashboard.invoice.create', compact('consultation'));
	}
	
	public function create(Request $request)
	{		
		/*$invoice = Invoice::create([
			'comment_id' => $request->consultation_id,
			'cost' => $request->cost,
		]);*/
		
		$invoice = Invoice::query()
			->where('comment_id', $request->consultation_id)
			->firstOrFail();
		
		dd($invoice->consultation);
	}
}
