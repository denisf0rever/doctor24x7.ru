<?php

namespace App\Services;

use App\Models\Booking\Booking;
use Illuminate\Support\Facades\Response;

final class BookingService
{
	public function createBooking(array $bookingData)
	{
		$booking = Booking::create([
			'comment_id' => $bookingData['consultation_id'],
			'user_id' => $bookingData['user_id']
		]);
		
		return $booking ? true : false;
		
    }
}