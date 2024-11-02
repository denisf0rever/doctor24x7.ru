<?php

namespace App\Models\Tariff;

use Illuminate\Database\Eloquent\Model;

class Rubric extends Model
{
    public $timestamps = false;
	
    protected $table = 'sf_consultation_tariff_rubric';
	
	public function tariffs() {
        return $this->belongsToMany(Tariff::class, 'sf_consultation_tariff_rubric', 'tariff_id', 'rubric_id');
    }
}
