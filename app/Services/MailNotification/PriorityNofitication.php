<?php

namespace App\Services\MailNotification;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Mail;
use App\Models\Doctors\Doctors;
use App\Mail\Payment\DoctorNotification;

class PriorityNofitication
{
	public function send()
	{
		$cachedEmails = null;
			
		if (is_null($cachedEmails)) {
			$getPriorityDoctors = Doctors::getPriorityDoctors();

			if ($getPriorityDoctors->isNotEmpty()) {
				$emails = $getPriorityDoctors->pluck('email_address')->all();
				
				Cache::store('redis')->forever('doctorsEmail', $cachedEmails);
				
			} else {
				return; 
			}
		} else {
			$emails = $cachedEmails;
		}
		
		$this->foreach($emails);
	}
	
	public function foreach($emails)
	{
		foreach ($emails as $email) {;
			if ($email == 'predlozhi@bk.ru') {
				$details = [
					'consultation_id' => 664540,
					'price' => 5959,
					'tariff' => 'Строка',
					'description' => 'Описание'
				];
						
				Mail::to($email)->send(new DoctorNotification($details));
				return;
			}
		}
	}
}