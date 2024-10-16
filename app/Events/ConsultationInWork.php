<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ConsultationInWork
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
 
	public $username;
    public $email;
	
    public function __construct(
		public array $array
	) {
		$this->username = $array['username'];
		$this->email = $array['email'];
	}
}
