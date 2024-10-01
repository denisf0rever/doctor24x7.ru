<?php

namespace App\Services;

use App\Models\Booking\Booking;
use Illuminate\Support\Facades\Response;

final class BookingService
{
	public function createBooking(array $bookingData)
	{
		try {
            $booking = Booking::create([
				'comment_id' => 672723,
				'user_id' => 1
		]);
            return Response::json(['success' => true, 'message' => 'все ок"']);
        } catch (\Exception $e) {
            return Response::json(['success' => false, 'message' => 'Error creating booking: ' . $e->getMessage()], 500);
        }
    }
}