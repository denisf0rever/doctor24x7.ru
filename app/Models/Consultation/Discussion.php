<?php

namespace App\Models\Consultation;

use Illuminate\Database\Eloquent\Model;

class Discussion extends Model
{
	public $timestamps = false;
	
    protected $table = 'sf_consultation_comment_pin';
	
	protected $fillable = [
		'title',
		'comment_id',
		'subrubric_id'
	];
	
	public function consultation()
	{
		return $this->belongsTo(Consultation::class, 'comment_id');
	}
	
	public function subcategory()
	{
		return $this->belongsTo(SubCategories::class, 'subrubric_id');
	}
}
