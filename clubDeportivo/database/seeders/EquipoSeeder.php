<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class EquipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('equipos')->insert([
        	'nombre' => 'equipo 1',
        	'entrenador' => 'Juan',
        	'categoria' => 'sub10'
        ]);
        DB::table('equipos')->insert([
        	'nombre' => 'equipo 2',
        	'entrenador' => 'Ana',
        	'categoria' => 'sub12'
        ]);
    }
}
