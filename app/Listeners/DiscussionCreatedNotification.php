<?php

namespace App\Listeners;

use Illuminate\Support\Facades\Mail;
use App\Events\DiscussionCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Mail\Discussion\DiscussionCreated as DiscussionCreatedMail;

class DiscussionCreatedNotification
{
    public function handle(DiscussionCreated $event)
    {
        try {
			$discussionName = $event->discussionName;
		
			Mail::to(config('config.admin_mail'))->send(new DiscussionCreatedMail($discussionName));
			
		} catch (\Exception $e) {
            return response()->json(['error' => 'Ошибка отправки: ' . $e->getMessage()], 500);
        }
    }
}
