<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Hash;



final class UserService
{
	 public function createUser(array $userData, array $images, int $is_priority, int $is_active)
	 {
		$user = User::create([
			'email' => $userData['email'],
			'username' => $userData['username'],
			'password' => Hash::make($userData['password']),
			'name' => $userData['name'],
			'last_name' => $userData['last_name'],
			'middle_name' => $userData['middle_name'],
			'city' => $userData['city'],
			'phone' => $userData['phone'],
			'is_priority' => $is_priority,
			'is_active' => $is_active,
			'avatar' => $images['avatarImage'],
			'webp_avatar' => $images['avatarWebp']
		]);
			
		return $user;
	 }
}
