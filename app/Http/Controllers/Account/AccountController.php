<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\BreadcrumbService;
use Illuminate\Support\Facades\Auth;

use App\Models\UserMain as User;
use App\Models\Account\Account;

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
		if (Auth::check()) {
			$userId = Auth::id();
			
			$account = Account::where('user_id', $userId)->firstOrFail();
		
			$this->breadcrumbService->add('account', 'Ваш аккаунт', route('account.index'));
			$this->breadcrumbService->add('account', 'Пополнить баланс', route('account.balance'));
			
			$breadcrumbs = $this->breadcrumbService->getAll('account');
			
			return view('account.balance', compact('breadcrumbs', 'account'));
			
		} else {
			return redirect()->route('login');
		}
	}
}
