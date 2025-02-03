<?php

namespace App\Models\Consultation;

use Illuminate\Database\Eloquent\Model;

use App\Models\Consultation\Consultation;

class Photos extends Model
{
	protected $table = 'sf_consultation_comment_photo';
	
	public function consultation()
    {
        return $this->belongsTo(Consultation::class, 'comment_id');
    }
}
