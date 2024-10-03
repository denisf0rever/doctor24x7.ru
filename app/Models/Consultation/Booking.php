<?php

namespace App\Models\Consultation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
	
	
	// Вернет true если брони нет, и false если бронь есть
	public static function hasBooking($consultation_id, $user_id): bool
	{
		return self::query()
                ->where('comment_id', $consultation_id)
                ->where('user_id', $user_id)
                ->doesntExist();
	}
	
	/*public static function checkAvailableSlots($rateId)
    {
        // Получаем тариф
        $rate = Rate::find($rateId);
        if (!$rate) {
            return 0; // Тариф не найден
        }

        // Количество уже забронированных ответов
        $bookedAnswers = self::where('rate_id', $rateId)->where('is_confirmed', true)->count();

        // Возвращаем доступные слоты
        return $rate->max_answers - $bookedAnswers;
    }*/
}
