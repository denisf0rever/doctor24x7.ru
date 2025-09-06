<?php

namespace App\Models\Account;

use Illuminate\Database\Eloquent\Model;

class BalanceAccount extends Model
{
    protected $table = 'account_balance';
	
	protected $fillable = [
		'user_id',
		'balance'
	];
	
	public static function findByUserId(string $id)
	{
		return self::where('user_id', $id)->first();
	}

	public static function balance(string $id): int
	{
		$balance = 0;
    
		$balance_account = self::findByUserId($id);
    
		if ($balance_account) {
			$balance = $balance_account->balance;
		}
    
		return $balance;
	}
}
