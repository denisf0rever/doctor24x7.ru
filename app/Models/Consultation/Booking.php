<?php

namespace App\Models\Consultation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Consultation\Consultation;

class Booking extends Model
{
    use HasFactory;
	
	protected $table = 'sf_consultation_comment_booking';
	
	protected $fillable = [
		'user_id',
		'comment_id'
	];
	
	public function consultation()
    {
        return $this->belongsTo(Consultation::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
		
	public static function canBooking($consultation_id): bool
    {
		$consultation = Consultation::find($consultation_id);
			
		$booking_amount = $consultation->bookings->count();
			
		$answers_count = $consultation->tariff->answers_count;
		
		return $booking_amount < $answers_count ? true : false;
    }
}
