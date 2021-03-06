<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(Usuarioseder::class);
         $this->call(ConversacionTable::class);
         $this->call(MensajeTable::class);
    }
}
