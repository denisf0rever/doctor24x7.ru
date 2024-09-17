<?php

namespace App\Models\Consultation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsultationCategory extends Model
{
    use HasFactory;
	
	public $timestamps = false;
	
	protected $table = 'sf_consultation_rubric';
	  
	protected $fillable = [];
	
	public function consultation()
    {
        return $this->hasMany(Consultation::class);
    }
}
