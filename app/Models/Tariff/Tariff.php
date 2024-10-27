<?php

namespace App\Models\Tariff;

use Illuminate\Database\Eloquent\Model;
use App\Models\Consultation\Consultation;

class Tariff extends Model
{
	public $timestamps = false;
	
    protected $table = 'sf_consultation_tariff';
	
	public function consultation()
    {
        return $this->hasOne(Consultation::class);
    }
	
	public function conditions()
    {
        return $this->hasMany(Conditions::class, 'id', 'condition_id');
    }
	
	public function rubrics()
	{
        return $this->belongsToMany(Rubric::class, 'sf_consultation_tariff_rubric')
                ->withPivot('tariff_id'); 
	}
}
