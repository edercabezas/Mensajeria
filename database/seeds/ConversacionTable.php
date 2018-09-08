        <?php

use Illuminate\Database\Seeder;
use\App\conversaciones;
class ConversacionTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      conversaciones::create([


            'user_id' =>1,
            'contact_id' =>2,
            'last_message' =>null,
            'las_time' =>null
      ]) ;

         conversaciones::create([


            'user_id' =>2,
            'contact_id' =>1,
            'last_message' =>null,
            'las_time' =>null
      ]) ;

             conversaciones::create([


            'user_id' =>1,
            'contact_id' =>3,
            'last_message' =>null,
            'las_time' =>null
      ]) ;
    }
}
