<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\conversaciones;
class ConversacionController extends Controller
{
    public function index(){
    	//retorne todas las conversaciones de usuario $_SESSION
    	return conversaciones::where('user_id', auth()->id())

        ->get([
    			'id',
				'contact_id',
				'has_blocked',
				'listen_notificacion',
				'last_message',
                'las_time'

    	]);
    	//conta_name
    }
}









