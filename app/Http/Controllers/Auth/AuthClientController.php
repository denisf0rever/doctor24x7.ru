<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthClientController extends Controller
{
    public function logout(Request $request)
    {
        Auth::guard('client')->logout();
 
		$request->session()->invalidate();
 
		$request->session()->regenerateToken();
 
		return redirect('/');
    }
}
