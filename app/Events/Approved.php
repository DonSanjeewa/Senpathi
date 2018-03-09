<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class Approved
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $approvalId;
    public $approvedBy;
    public $nextApproval;

    /**
     * Create a new event instance.
     *
     * @param $approvedClass
     * @param $approvedId
     * @param $approvedBy
     */
    public function __construct($approvalId, $approvedBy)
    {
        $this->approvalId = $approvalId;
        $this->approvedBy = $approvedBy;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}