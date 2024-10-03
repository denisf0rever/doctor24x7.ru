<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use App\Models\Consultation\Booking;
use App\Models\Consultation\Consultation;
use Illuminate\Support\Facades\Response;
use App\Http\Controllers\Consultation\BookingController as Book;

final class BookingService
{
	private $consultationData;
	
	public function __construct($consultationData) 
	{
		$this->consultation_id = $consultationData['consultation_id'];
		$this->user_id = $consultationData['user_id'];
	}
	
	public static function canBooking($consultation_id, $user_id): bool
	{
		return Book::hasButton($consultation_id, $user_id);
	}
	
	public static function checkSlot($consultation_id, $user_id): bool
	{
		return Book::checkSlot($consultation_id, $user_id);
	}
	
	public function createBooking()
	{
		try {
			$result = DB::transaction(function () {
				return Booking::create([
					'comment_id' => $this->consultation_id,
					'user_id' => $this->user_id
				]);
			});

			return $result; // Это будет объект Booking, если всё успешно
		} catch (\Exception $e) {
			// Логируйте ошибку или обрабатывайте ее
			return false; // Или выбросьте исключение в случае ошибки
		}
    }
}