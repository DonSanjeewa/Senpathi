<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class Rejected
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $rejectedClass;
    public $rejectedId;
    public $rejectedBy;

    /**
     * Create a new event instance.
     *
     * @param $rejectedClass
     * @param $rejectedId
     * @param $rejectedBy
     */
    public function __construct($rejectedClass, $rejectedId, $rejectedBy)
    {
        $this->rejectedClass = $rejectedClass;
        $this->rejectedId = $rejectedId;
        $this->rejectedBy = $rejectedBy;
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
