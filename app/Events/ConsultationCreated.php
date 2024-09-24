<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ConsultationCreated
{
    use Dispatchable, SerializesModels;
	
	public $name;
    public $email;
    public $consultation_id;
	
    public function __construct(
		public array $array
	) {
		$this->name = $array['name'];
		$this->email = $array['email'];
		$this->consultation_id = $array['consultation_id'];
	}
}
