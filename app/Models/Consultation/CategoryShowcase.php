<?php

namespace App\Models\Consultation;

use Illuminate\Database\Eloquent\Model;
use App\Models\UserMain;
use App\Models\Consultation\ConsultationCategory;

class CategoryShowcase extends Model
{
	public $timestamps = false;
	
    protected $table = 'sf_consultation_rubric_showcase';
	
	protected $fillable = [
		'category_id',
		'user_id',
        'position'
	];
	
	public function user()
    {
        return $this->belongsTo(UserMain::class);
    }
	
	public function category()
	{
		return $this->belongsTo(ConsultationCategory::class);
	}
}
