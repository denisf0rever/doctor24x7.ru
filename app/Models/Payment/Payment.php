<?php

namespace App\Models\Payment;

use Illuminate\Database\Eloquent\Model;
use App\Models\Consultation\Consultation;

class Payment extends Model
{
    protected $table = 'sf_consultation_order';
	
	public function consultation()
	{
		return $this->belongsTo(Consultation::class);
	}
}
