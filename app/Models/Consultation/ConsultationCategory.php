<?php

namespace App\Models\Consultation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tariff\Tariff;
use App\Models\Consultation\SubCategories;
use App\Models\User\CategoryText;

class ConsultationCategory extends Model
{
    use HasFactory;
	
	public $timestamps = false;
	
	protected $table = 'sf_consultation_rubric';
	  
	protected $fillable = [];
	
	public function consultation()
    {
        return $this->hasMany(Consultation::class, 'rubric_id');
    }
	
	public function tariffs()
    {
        return $this->belongsToMany(Tariff::class, 'sf_consultation_tariff_rubric');
    }
	
	public function subcategories()
    {
        return $this->hasMany(SubCategories::class, 'parent_id')->orderBy('short_title', 'asc');
    }
	
	public function textForCategory()
    {
        return $this->hasMany(CategoryText::class, 'category_id', 'id');
    }

}
