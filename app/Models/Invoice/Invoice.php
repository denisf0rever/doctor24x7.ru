<?php

namespace App\Models\Invoice;

use Illuminate\Database\Eloquent\Model;
use App\Models\Consultation\Consultation;

class Invoice extends Model
{
    protected $table = 'sf_invoices';
	
	protected $fillable = [
		'comment_id',
		'cost',
		'is_paid'
	];
	
	public function consultation()
	{
		return $this->belongsTo(Consultation::class, 'comment_id');
	}
	
	public static function findByCommentId($id)
    {
        return self::where('comment_id', $id)->firstOrFail();
    }
	
	public function isNotPaid(): int
	{
		return $this->is_paid === 0;
	}
}
