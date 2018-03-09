<?php

namespace App\Listeners;

use App\Approval;
use App\Events\Rejected;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class Reject
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
     * @param  Rejected $event
     * @return void
     */
    public function handle(Rejected $event)
    {
        $approval = Approval::find($event->approvalId);

        $approval->status = "rejected";
        $approval->approved_by = $event->rejectedBy;

        switch ($approval->reference_class) {
            case Teacher::class :

                $teacher = Teacher::find(Approval::find($event->approvalId)->reference_id);
                $teacher->approval = "rejected";
                $teacher->update();

                break;
        }

        $approval->update();
    }
}
