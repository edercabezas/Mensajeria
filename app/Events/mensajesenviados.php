<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel; //cabal publico
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel; //canal provado
use Illuminate\Broadcasting\PresenceChannel; //canal provado
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class mensajesenviados implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public $mensaje;

    public function __construct($mensa)
    {
        $this->mensaje = $mensa;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('users.'.$this->mensaje->to_id);
    }
}
