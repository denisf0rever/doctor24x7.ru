<?php

namespace App\Models\Consultation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tariff\Tariff;

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
	
	public function tariffs()
    {
        return $this->belongsToMany(Tariff::class, 'sf_consultation_tariff_rubric');
    }
	
	public function subcategory()
	{
		return $this->hasOne(SubCategories::class);
	}
}
