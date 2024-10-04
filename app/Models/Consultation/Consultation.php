<?php

namespace App\Models\Consultation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Consultation\Booking;

class Consultation extends Model
{
    use HasFactory;
	
	protected $table = 'sf_consultation_comment';
	
	protected $fillable = [
		'email',
		'username',
        'title',
        'description',
        'age',
        'city_id',
		'rubric_id'
	];
	
	public function category()
    {
        return $this->belongsTo(ConsultationCategory::class);
    }
	
	public function comments()
    {
        return $this->hasMany(ConsultationComment::class, 'comment_id')->orderBy('created_at', 'asc');
    }
	
	public function bookings()
    {
        return $this->hasMany(Booking::class, 'comment_id');
    }

    public function tariff()
    {
        return $this->belongsTo(Tariff::class);
    }
	
	// Вернет false если брони нет, и true если бронь есть
	public static function hasBooking($consultation_id, $user_id): bool
	{
		return Booking::query()
                ->where('comment_id', $consultation_id)
                ->where('user_id', $user_id)
                ->exists();
	}
}
