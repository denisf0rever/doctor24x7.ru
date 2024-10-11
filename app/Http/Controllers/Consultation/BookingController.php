<?php

namespace App\Http\Controllers\Consultation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Services\BookingService;
use App\Models\Consultation\Booking;
use App\Events\ConsultationAddBooking;
use App\Events\BookingAdded;

class BookingController extends Controller
{
    public function makeRequest(Request $request, $id)
    {
		try {
			$consultation_id = $request->consultation_id;
			$user_id = $request->user_id;
			
			$service = new BookingService($consultation_id, $user_id);
			$result = $service->createBooking();
			
			if ($result) {
				$userId = auth()->id();
				ConsultationAddBooking::dispatch($userId);
				
				$email = 'predlozhi@bk.ru';
				$name = 'denis';
				
				$array = ['email' => $email, 'username' => $name];
				BookingAdded::dispatch($array);
				
				return Response::json(['success' => true, 'message' => 'Вы взяли вопрос']);
			} 
			
			return Response::json(['success' => false, 'message' => 'К сожалению, данный вопрос в работе']);
			
			} catch (\Exception $e) {
				return Response::json(['success' => false, 'message' => 'Error creating booking: ' . $e->getMessage()], 500);
			}
	}	
}