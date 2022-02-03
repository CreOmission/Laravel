<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	//el seeder de la tabla
       $this->call([
       		equiposSeeder::class,
          usuariosSeeder::class
       ]);
    }
}
