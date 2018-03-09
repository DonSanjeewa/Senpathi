<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\ApprovalRequired' => [
            'App\Listeners\SendForApproval',
        ],
        'App\Events\Approved' => [
            'App\Listeners\Approve',
        ],
        'App\Events\Rejected' => [
            'App\Listeners\Reject',
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
