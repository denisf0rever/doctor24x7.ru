<?php

namespace App\Models\Testimonials;

use Illuminate\Database\Eloquent\Model;
use App\Models\UserMain;
use App\Models\Consultation\Consultation;

class Testimonial extends Model
{
    protected $table = 'sf_consultation_comment_testimonial';
	
	public function doctor()
    {
        return $this->belongsTo(UserMain::class, 'user_id');
    }
	
	public function consultation()
    {
        return $this->belongsTo(Consultation::class, 'comment_id');
    }
}
