<?php

namespace App\Models\Consultation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tariff extends Model
{
    use HasFactory;
	
	protected $table = 'sf_consultation_tariff';
	
	public function consultations()
    {
        return $this->hasMany(Consultation::class);
    }
}
