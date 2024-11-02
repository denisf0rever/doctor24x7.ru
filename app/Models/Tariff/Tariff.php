<?php

namespace App\Models\Tariff;

use Illuminate\Database\Eloquent\Model;
use App\Models\Consultation\Consultation;
use App\Models\Consultation\ConsultationCategory as Rubric;

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
        return $this->belongsTo(Conditions::class, 'condition_id', 'id');
    }
	
	public function rubrics()
	{
        return $this->belongsToMany(Rubric::class, 'sf_consultation_tariff_rubric', 'rubric_id', 'tariff_id', 'd');
	}
}
