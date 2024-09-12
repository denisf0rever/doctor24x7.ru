<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class RegistrationController extends Controller
{
    public function show()
	{
        return view('user.register');
	}
	
	public function register(Request $request)
    {
		$data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:user|string',
            'password' => 'required|min:6',
            'username' => 'required|unique:user|string',
            'last_name' => 'required|string',
            'middle_name' => 'required|string',
            'city' => 'required|string|max:255',
            'phone' => 'required|string|max:255'
        ]);
			
		$user = User::create([
                'username' => Str::lower($data['username']),
                'email' => Str::lower($data['email']),
                'password' => Hash::make($data['password']),
                'name' => $data['name'],
                'last_name' => $data['last_name'],
                'middle_name' => $data['middle_name'],
                'city' => $data['city'],
                'phone' => $data['phone']
            ]);
			
		if ($user) {
            Auth::login($user);
            $request->session()->regenerate();
		
			return redirect(route('user.profile.item', ['id' => $user->id]));
		}
		
    }
}
