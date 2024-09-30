<?php

namespace App\Models\Consultation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsultationComment extends Model
{
    use HasFactory;
	
	protected $table = 'sf_consultation_comment_answer';
	
	public function consultation()
    {
        return $this->belongsTo(Consultation::class, 'id');
    }
	
	public function parent()
    {
        return $this->belongsTo(ConsultationComment::class, 'parent_id');
    }
	
	public function children()
    {
        return $this->hasMany(self::class, 'to_answer_id', 'id');
    }
	
	public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
	
}
