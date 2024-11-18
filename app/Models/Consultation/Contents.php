<?php

namespace App\Models\Consultation;

use Illuminate\Database\Eloquent\Model;

class Contents extends Model
{
	protected $table = 'sf_consultation_comment_contents';
	
	public function consultation()
	{
		return $this->belongsTo(Consultation::class, 'comment_id');
	}
}
