<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use App\Models\Consultation\Booking;
use App\Models\Consultation\Consultation;
use App\Models\Consultation\Tariff;

final class BookingService
{
	private $consultation_id;
	private $user_id;
	
	public function __construct($consultation_id, $user_id) 
	{
		$this->consultation_id = $consultation_id;
		$this->user_id = $user_id;
	}
	
	public function createBooking()
	{
		try {
			if (is_null($this->consultation_id) || is_null($this->user_id)) {
				return response()->json(['error' => 'Некорректные данные.'], 422);
			}
   
			// Возвращает можно ли сделать бронирование, есть ли свободные слоты
			$canBooking = Booking::canBooking($this->consultation_id);
			
			if($canBooking) {
				$result = DB::transaction(fn () => Booking::create([
						'comment_id' => $this->consultation_id,
						'user_id' => $this->user_id
					]));
				
				return $result;
			}
			
			return false;
		} catch (\Exception $e) {
			return false;
		}
    }
}