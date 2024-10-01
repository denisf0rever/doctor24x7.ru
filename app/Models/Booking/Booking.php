<?php

namespace App\Models\Booking;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
	
	
	public $timestamps = false;
	
	protected $fillable = [
		'user_id',
		'comment_id',
		'created_at',
		'updated_at'
	];
	
	public function consultation()
    {
        return $this->belongsTo(Consultation::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
