<?php

namespace App\Http\Controllers\Consultation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Services\BookingService;
use App\Models\Booking\Booking;

class BookingController extends Controller
{
    public function makeRequest(Request $request, $id, BookingService $service)
    {
		try {
			$service = $service->createBooking($request->all());
			
			if ($service) {
				return Response::json(['success' => true, 'message' => 'все ок']);
			} else {
				return Response::json(['success' => false, 'message' => 'Не ок']);
			}
        } catch (\Exception $e) {
            return Response::json(['success' => false, 'message' => 'Error creating booking: ' . $e->getMessage()], 500);
        }
		
		
			//ConsultationCreated::dispatch($data);
      

        //return Response::json(['success' => false, 'message' => 'Ошибка при создании бронирования.']);
    }
}