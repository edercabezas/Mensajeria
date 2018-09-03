<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\conversaciones;
class ConversacionController extends Controller
{
    public function index(){
    	//retorne todas las conversaciones de usuario $_SESSION
    	return conversaciones::where('user_id', auth()->id())->get();
    }
}
