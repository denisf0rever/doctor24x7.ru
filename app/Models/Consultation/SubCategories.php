<?php

namespace App\Models\Consultation;

use Illuminate\Database\Eloquent\Model;

class SubCategories extends Model
{
    protected $table = 'sf_consultation_sub_rubric';
	
	public function consultation()
	{
		return $this->belongsTo(Consultation::class);
	}
	
	public function category()
	{
		return $this->belongsTo(ConsultationCategory::class, 'parent_id');
	}
	
	public function discussion()
	{
		return $this->hasMany(Discussion::class);
	}
}
