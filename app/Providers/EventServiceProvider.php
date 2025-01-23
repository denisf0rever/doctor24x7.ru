<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use App\Events\ConsultationCreated;
use App\Listeners\ConsultationCreatedNotification;
use App\Events\ConsultationAddBooking;
use App\Listeners\ConsultationBookingdNotification;
use App\Events\AnswerToAuthorCreated;
use App\Listeners\AnswerNotification;
use App\Events\AnswerToConsultantCreated;
use App\Listeners\AnswerToConsultantNotification;
use App\Events\ConsultationInWork;
use App\Listeners\ConsultationInWorkNotification;
use App\Events\FakeChat;
use App\Listeners\FakeChatNotification;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
		
		ConsultationAddBooking::class => [
			ConsultationBookingdNotification::class,
		],
		
		AnswerToAuthorCreated::class => [
			AnswerNotification::class,
		],
		
		ConsultationInWork::class => [
			ConsultationInWorkNotification::class,
		],
		
		AnswerToConsultantCreated::class => [
			AnswerToConsultantNotification::class,
		],
		
		FakeChat::class => [
			FakeChatNotification::class
		]
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
		Event::listen(
			ConsultationCreated::class,
			ConsultationCreatedNotification::class,
		);
		
		Event::listen(
			ConsultationAddBooking::class,
			ConsultationBookingdNotification::class
		);
		
		Event::listen(
			AnswerToAuthorCreated::class,
			AnswerNotification::class
		);
		
		Event::listen(
			AnswerToConsultantCreated::class,
			AnswerToConsultantNotification::class
		);
		
		Event::listen(
			ConsultationInWork::class,
			ConsultationInWorkNotification::class
		);
		
		Event::listen(
			FakeChat::class,
			FakeChatNotification::class
		);
    }
				
    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
