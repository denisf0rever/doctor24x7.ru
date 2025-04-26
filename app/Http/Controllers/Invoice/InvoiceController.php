<?php

namespace App\Http\Controllers\Invoice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Invoice\Invoice;
use App\Models\Consultation\Consultation;
use App\Events\Invoice\InvoiceCreated;

class InvoiceController extends Controller
{
    public function index()
	{
		$invoices = Invoice::query()
			->select('id', 'comment_id', 'cost')
			->get();
			
		return view('dashboard.invoice.index', compact('invoices'));
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
		$invoice = Invoice::create([
			'comment_id' => $request->consultation_id,
			'cost' => $request->cost,
		]);
		
		$email = $invoice->consultation->email;
		$username = $invoice->consultation->username;
		$consultation_id = $invoice->comment_id;
		
		$array = [
			'username' => $username,
			'email' => $email,
			'consultation_id' => $consultation_id
		];
				
		InvoiceCreated::dispatch($array);
		
		return redirect()->back()->with('success', 'Инвойс успешно создан!');
	}
}
