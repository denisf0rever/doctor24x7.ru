<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\BreadcrumbService;
use Illuminate\Support\Facades\Auth;

use App\Models\UserMain as User;
use App\Models\Account\BalanceAccount;

class AccountController extends Controller
{
	public function __construct(BreadcrumbService $breadcrumbService)
	{
		$this->breadcrumbService = $breadcrumbService;
	}
	
	public function index()
	{
		return 'ok';
	}
	
    public function balance()
	{
		if (Auth::guard('client')->check()) {
			$user_id = Auth::guard('client')->id();
				
			$balance = BalanceAccount::balance($user_id);
		
			$this->breadcrumbService->add('account', 'Ваш аккаунт', route('account.index'));
			$this->breadcrumbService->add('account', 'Пополнить баланс', route('account.balance'));
			
			$breadcrumbs = $this->breadcrumbService->getAll('account');
			
			return view('account.balance', compact('breadcrumbs', 'balance'));
			
		} else {
			return redirect()->route('login');
		}
	}
}
