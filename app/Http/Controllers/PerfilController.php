<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerfilController extends Controller
{


    public function edit()
    {
        return view('perfil');
    }


    public function update(Request $datos)
    {
        $user = auth()->user();

       // $user->email = $datos->email;
        $user->name = $datos->name;

        if($datos->clave)
            $user->password = bcrypt($datos->clave);

            $file = $datos->foto;
         if($file){

         $path = public_path('/users');
         $fileName =time() .'.'. $file->getClientOriginalExtension();
           $move =  $file->move($path, $fileName);
              $user->image = $fileName;
         }

        
            $user->save();

        return back();

      //  dd($datos);
    }

   
}
