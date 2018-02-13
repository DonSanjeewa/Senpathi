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

    public $approvedClass;
    public $approvedId;
    public $approvedBy;

    /**
     * Create a new event instance.
     *
     * @param $approvedClass
     * @param $approvedId
     * @param $approvedBy
     */
    public function __construct($approvedClass, $approvedId, $approvedBy)
    {
        $this->approvedClass = $approvedClass;
        $this->approvedId = $approvedId;
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
