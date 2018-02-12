<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class ApprovalRequired
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $requiredClass;
    public $requiredId;
    public $approvers;

    /**
     * Create a new event instance.
     *
     * @param $requiredClass
     * @param $requiredId
     * @param $approvers
     */
    public function __construct($requiredClass , $requiredId ,$approvers)
    {
        $this->requiredClass = $requiredClass;
        $this->requiredId = $requiredId;
        $this->approvers = $approvers;
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
