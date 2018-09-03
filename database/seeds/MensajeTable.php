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
        'contect' =>'¿Como estas men?'
       ]);

        mensajes::create([

       	'from_id' => 2,
        'to_id' => 1,
        'contect' =>'¿Bien gracias y tud?'
       ]);

         mensajes::create([

       	'from_id' => 1,
        'to_id' => 2,
        'contect' =>'¿muy bien gracias por preguntar?'
       ]);
          mensajes::create([

       	'from_id' => 2,
        'to_id' => 1,
        'contect' =>'¿ok no hay lio?'
       ]);
    }
}
