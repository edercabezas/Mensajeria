<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\DB;
class Usuarioseder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      User::create([
      	'name' => 'Eder Cortes',
      	'email' => 'edercortez10@gmail.com',
      	'password' => bcrypt('Peligro') 
      	]);
       User::create([
      	'name' => 'arley Cortes',
      	'email' => 'edercortez0@gmail.com',
      	'password' => bcrypt('Peligro20') 
      	]);
        User::create([
      	'name' => 'Eder ',
      	'email' => 'edercortes10@gmail.com',
      	'password' => bcrypt('Peligro') 
      	]);
      	 User::create([
      	'name' => ' Cortes',
      	'email' => 'edercortez@gmail.com',
      	'password' => bcrypt('Peligro10') 
      	]);
    }
}
