<?php

namespace App\Listeners;

use App\Events\CustomerWasCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMailing
{

    /**
     * Handle the event.
     *
     * @param  CustomerWasCreated  $event
     * @return void
     */
    public function handle(CustomerWasCreated $event)
    {
        dd($event->customer->toArray());
    }
}
