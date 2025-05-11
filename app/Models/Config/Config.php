<?php

namespace App\Models\Config;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    protected $table = 'sf_setting';
	public $timestamps = false;
	
	public function canAdminNotify()
	{
		$setting = self::where('setting', 'invoice')->first();
		$invoice = $setting->value;
		
		return $invoice;
	}
}
