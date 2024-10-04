<?php

namespace App\Http\Controllers\Consultation;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Consultation\Consultation;
use App\Models\Consultation\Booking;
use App\Models\Consultation\ConsultationCategory as Category;
use App\Models\Consultation\ConsultationComment as Comment;
use App\Http\Requests\ConsultationRequest;
use App\Services\ConsultationService;
use App\Services\BookingService;
use App\Events\ConsultationCreated;

class ConsultationController extends Controller
{
	public function dashboard()
	{
		$consultations = Consultation::query()
			->where('is_payed', true)
			->orderBy('created_at', 'desc')
            ->take(100)
            ->get();
			
		$totalConsultations = Consultation::count();
		$totalAnswers = 1000;
		
		return view('dashboard.consultation.list', compact('consultations', 'totalConsultations', 'totalAnswers'));
	}
	
	// Просмотр консультации в панели
	
    public function show(string $id)
    {
        $consultation = Consultation::query()
            ->where('id', $id)
			->with(['comments' => function($comments) {
				$comments->where('to_answer_id', null);}])
            ->firstOrFail();
		
		$hasBooking = Consultation::hasBooking($consultation->id, 1);
		$canBooking = Booking::canBooking($consultation->id, 1);
		$checkStatus = 1;
		
		return view('dashboard.consultation.item', compact('consultation', 'hasBooking', 'canBooking', 'checkStatus'));
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
		$consultation = Consultation::query()
            ->where('id', $id)
            ->firstOrFail();
			
		//$this->incrementView($id);
		
		return view('consultation.item', compact('consultation'));
    }

    public function edit(string $id)
    {
        //
    }

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
}
