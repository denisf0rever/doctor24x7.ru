<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Model;
use App\Models\Consultation\ConsultationCategory;
use App\Models\UserMain;

class CategoryText extends Model
{
	public $timestamps = false;
	
    protected $table = 'sf_user_text_rubric';
	
	protected $fillable = [
		'user_id',
		'category_id',
		'description'
	];
	
	public function category()
	{
		return $this->belongsTo(ConsultationCategory::class);
	}
	
	public function user()
	{
		return $this->belongsTo(UserMain::class);
	}
}
