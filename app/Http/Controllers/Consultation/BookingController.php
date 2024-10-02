<?php

namespace App\Http\Controllers\Consultation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Services\BookingService;
use App\Models\Booking\Booking;

class BookingController extends Controller
{
    public function makeRequest(Request $request, $id)
    {
		//$service = $service->createBooking($request->all());
		// , BookingService $service
		
		//
		
		
        
        $result = Booking::query()
                    ->create([
                      'comment_id' => $request->consultation_id,
                      'user_id' => 1
                  ]);
		
		 if ($request->header('X-CSRF-TOKEN')) {
            // Токен присутствует
            return response()->json(['success' => true, 'message' => 'OK']);
		 }
			
      
			//);
			
			
			
			//return $result;
			//ConsultationCreated::dispatch($data);
      

        //return Response::json(['success' => false, 'message' => 'Ошибка при создании бронирования.']);
    }
}