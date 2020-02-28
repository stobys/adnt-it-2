<?php

namespace App\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class UserPasswordChanged
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $user;
    public $executor;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(User $user, $executor = null)
    {
        $this -> user = $user;
        $this -> executor = $executor;
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
