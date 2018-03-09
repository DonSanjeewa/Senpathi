<?php

namespace App\Listeners;

use App\Approval;
use App\Events\ApprovalRequired;
use App\Events\Approved;
use App\Role;
use App\Teacher;
use App\User;
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
        $approval = Approval::find($event->approvalId);

        $approval->status = "approved";
        $approval->approved_by = $event->approvedBy;

        switch ($approval->reference_class){
            case Teacher::class :

                $user = User::find($event->approvedBy);

                switch ( $user->role()->slug ){

                    case "vice_principal":
                        event(new ApprovalRequired(Teacher::class , Approval::find($event->approvalId)->reference_id , Role::getPrincipalIds() ));
                        break;

                    case "principal":

                        $teacher = Teacher::find(Approval::find($event->approvalId)->reference_id);
                        $teacher->approval = "approved";
                        $teacher->update();

                        break;
                }

                break;
        }

        $approval->update();
    }
}
