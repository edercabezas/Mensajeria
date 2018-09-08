<?php

use Illuminate\Database\Seeder;
use\App\mensajes;
class MensajeTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       mensajes::create([

       	'from_id' => 1,
        'to_id' => 2,
        'contecnt' =>'¿Hola como estas men?'
       ]);

        mensajes::create([

       	'from_id' => 2,
        'to_id' => 1,
        'contecnt' =>'¿Bien gracias y tud?'
       ]);

         mensajes::create([

       	'from_id' => 1,
        'to_id' => 3,
        'contecnt' =>'¿Hola Como vas?'
       ]);
          mensajes::create([

       	'from_id' => 3,
        'to_id' => 1,
        'contecnt' =>'¿Muy bien, y tud?'
       ]);


    }
}
