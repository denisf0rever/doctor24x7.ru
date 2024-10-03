<?php

namespace App\Http\Controllers\Consultation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Services\BookingService;
use App\Models\Consultation\Booking;
use App\Models\Consultation\ConsultationComment as Answer;

class BookingController extends Controller
{
	public static function hasButton($consultation_id, $user_id): bool
    {
        return //Answer::hasAnswer();
            //&& $this->hasSlot()
            Booking::hasBooking($consultation_id, $user_id);

    }
	
	public static function checkSlot($consultation_id, $user_id)
    {
        $result = match (false) {
            Booking::hasBooking($consultation_id, $user_id) => 'Вы взяли вопрос',
            //$this->hasSlot() => 'Взять вопрос',
            default => 'К сожалению вопрос уже занят'
        };

        return $result;
    }
	
    public function makeRequest(Request $request, $id)
    {
		try {
		$service = new BookingService($request->all());
		$result = $service->createBooking();
			if ($result) {
				return Response::json(['success' => true, 'message' => 'все ок']);
			} else {
				return Response::json(['success' => false, 'message' => 'Не ок']);
			}
        } catch (\Exception $e) {
            return Response::json(['success' => false, 'message' => 'Error creating booking: ' . $e->getMessage()], 500);
        }
	}
		
		
		//ConsultationCreated::dispatch($data);
   
        //return Response::json(['success' => false, 'message' => 'Ошибка при создании бронирования.']);
}