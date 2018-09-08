<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mensajes;
use DB;
class MensajesController extends Controller
{
   
   
    public function index(Request $request){
    	
    	$myid = auth()->id();
    	$contac = $request->contact_id;

    	
    	return mensajes::select(
    		
    		DB::raw(" id, CASE WHEN from_id = $myid THEN true ELSE false END as written_by_me,created_at,contecnt")

            )->where(function($query) use ($myid, $contac){

                $query->where('from_id', $myid)->where('to_id', $contac );

            })->orWhere(function($query) use ($myid,$contac){

                 $query->where('from_id', $contac)->where('to_id', $myid);

            })->get();
    		

    		
    }

    public function store(Request $request){

    	$mensaje = new mensajes();
    	$mensaje->from_id = auth()->id();
    	$mensaje->to_id = $request->to_id;
    	$mensaje->contecnt = $request->cont;
    	$save = $mensaje->save();

    	$data = [];
    	$data['success'] = $save;
    	return $data;


    }

}
