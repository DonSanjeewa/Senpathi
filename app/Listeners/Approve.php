<?php

namespace App\Listeners;

use App\Events\Approved;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class Approve
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
     * @param  Approved  $event
     * @return void
     */
    public function handle(Approved $event)
    {

    }
}
