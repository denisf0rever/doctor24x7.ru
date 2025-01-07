<?php

namespace App\Services;

use App\Models\Consultation\UserByCategory;

final class DoctorService
{
	 public function create(array $data): UserByCategory
	 {
		$userByCategory = UserByCategory::create([
			'user_id' => $data['user_id'],
			'category_id' => $data['category_id']
		]);
			
		return $userByCategory;
	 }
	 
	 public function update(array $data): UserByCategory
	 {
		 $userByCategory = UserByCategory::query()
			->where('id',  $data['id'])
			->firstOrFail();
			
		$userByCategoryuserByCategory->user_id = $data['user_id'];
		$userByCategory->category_id = $data['category_id'];
		$userByCategor->save();
		
		return $userByCategory;
	 }
}
