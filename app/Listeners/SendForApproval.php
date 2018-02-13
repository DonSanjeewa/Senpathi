<?php

namespace App\Listeners;

use App\Approval;
use App\Events\ApprovalRequired;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendForApproval
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
     * @param  TeacherCreated  $event
     * @return void
     */
    public function handle(ApprovalRequired $event)
    {
        Approval::create([
            "reference_class" => $event->requiredClass,
            "reference_id"    => $event->requiredId,
            "approvers"       => json_encode($event->approvers),
        ]);

    }
}
