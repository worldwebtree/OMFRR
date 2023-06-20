<?php

namespace App\Listeners;

use App\Models\User;
use App\Notifications\NewRestaurantNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Notification;

class SendNewRestaurantNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $customers = User::where('role', 'customer')->get();

        Notification::send($customers, new NewRestaurantNotification($event->user));
    }
}
