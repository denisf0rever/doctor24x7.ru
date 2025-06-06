<?php

namespace App\Models\Consultation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Consultation\Booking;
use App\Models\Consultation\ConsultationCategory;
use App\Models\Consultation\Photos;
use App\Models\Tariff\Tariff;
use App\Models\Payment\Payment;
use App\Models\Invoice\Invoice;

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
        return $this->belongsTo(ConsultationCategory::class, 'rubric_id');
    }
	
	public function photos()
	{
		return $this->hasMany(Photos::class, 'comment_id', 'id');
	}
		
	public function comments()
    {
        return $this->hasMany(ConsultationComment::class, 'comment_id')->orderBy('created_at', 'asc');
    }
	
	public function content()
    {
        return $this->hasMany(Contents::class, 'comment_id')->orderBy('id', 'asc');
    }
	
	public function bookings()
    {
        return $this->hasMany(Booking::class, 'comment_id');
    }

    public function tariff()
    {
        return $this->belongsTo(Tariff::class);
    }
	
	public function discussion()
	{
		return $this->hasOne(Discussion::class, 'comment_id');
	}
	
	public function payment()
	{
		return $this->hasOne(Payment::class, 'consultation_id');
	}
	
	public function invoice()
    {
        return $this->hasOne(Invoice::class, 'comment_id');
    }
	
	// Вернет false если брони нет, и true если бронь есть
	public static function hasBooking($consultation_id, $user_id): bool
	{
		return Booking::query()
                ->where('comment_id', $consultation_id)
                ->where('user_id', $user_id)
                ->exists();
	}
	
	public static function findByCommentId($id)
    {
        return self::where('id', $id)->firstOrFail();
    }
}
