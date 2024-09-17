<?php

namespace App\Services;

use App\Models\Consultation\Consultation;
use Illuminate\Support\Facades\DB;

final class ConsultationService
{
	 public function create(array $consultation)
	 {
		$result = DB::transaction(function () use ($consultation) {
			$consultation = Consultation::create([
				'email' => $consultation['email'],
				'username' => $consultation['username'],
				'title' => $consultation['title'],
				'description' => $consultation['description'],
				'age' => $consultation['age'],
				'city_id' => $consultation['city_id'],
				'rubric_id' => $consultation['rubric_id']
			]);
			
		$consultation->slug = $consultation->id;
		$consultation->save();
		
		return $consultation;
		
		});	
		
		return $result;
	 }
}
