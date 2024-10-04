<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use App\Models\Consultation\Booking;
use App\Models\Consultation\Consultation;
use App\Models\Consultation\Tariff;
use Illuminate\Support\Facades\Response;

final class BookingService
{
	private $consultation_id;
	private $user_id;
	
	public function __construct($consultation_id, $user_id) 
	{
		$this->consultation_id = $consultation_id;
		$this->user_id = $user_id;
	}
	
	public function checkStatus()
	{
		$result = Booking::hasBooking($this->consultation_id, $this->user_id) ? true : false;
		
		return $result;
	}
	
	public function createBooking()
	{
		try {
			// Возвращает можно ли сделать бронирование, есть ли свободные слоты
			$canBooking = Booking::canBooking($this->consultation_id);
			
			if($canBooking) {
				$result = DB::transaction(function () {
					return Booking::create([
						'comment_id' => $this->consultation_id,
						'user_id' => $this->user_id
					]);
				});
				
				return $result;
			}
			
			return false;
		} catch (\Exception $e) {
			return false;
		}
    }
}