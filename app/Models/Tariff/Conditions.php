<?php

namespace App\Models\Tariff;

use Illuminate\Database\Eloquent\Model;

class Conditions extends Model
{
	public $timestamps = false;
	
    protected $table = 'sf_consultation_tariff_condition';
	
	public function tariff()
    {
        return $this->belongsTo(Tariff::class);
    }
}
