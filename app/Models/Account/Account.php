<?php

namespace App\Models\Account;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $table = 'account_balance';
	
	public static function findByUserId($id)
    {
        return self::where('user_id', $id)->firstOrFail();
    }
}
