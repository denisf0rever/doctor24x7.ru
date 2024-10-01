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
		
		//Booking::create([
		//	'comment_id' => 672723,
		//	'user_id' => 1,
			//'created_at' => '2024-09-30 14:25:40',
		//	'updated_at' => '2024-09-30 14:25:40'
		//]);
			
		 if ($request->header('X-CSRF-TOKEN')) {
            // Токен присутствует
            return response()->json(['success' => true, 'message' => 'CSRF токен передан.']);
		 }
			
      
			//);
			
			
			
			//return $result;
			//ConsultationCreated::dispatch($data);
      

        //return Response::json(['success' => false, 'message' => 'Ошибка при создании бронирования.']);
    }
}