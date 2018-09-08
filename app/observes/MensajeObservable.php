<?php

namespace App\observes;

use App\mensajes;
use App\conversaciones;


class MensajeObservable
{
    /**
     * Listen to the mensajes created event.
     *
     * @param  \App\mensajes  $mensajes
     * @return void
     */
    public function created(mensajes $mensa)
    {
        $conversa = conversaciones::where('user_id',$mensa->from_id)
                    ->where('contact_id', $mensa->to_id)->first();

                if($conversa){
                    $conversa->last_message = "Tú :  $mensa->contecnt";
                    $conversa->las_time = $mensa->created_at;
                    $conversa->save();
            }

     
        $conversa = conversaciones::where('contact_id',$mensa->from_id)
                    ->where('user_id', $mensa->to_id)->first();

                if($conversa){
                    $conversa->last_message = "$conversa->contact_name:  $mensa->contecnt";
                    $conversa->las_time = $mensa->created_at;
                    $conversa->save();
            }


    }

}