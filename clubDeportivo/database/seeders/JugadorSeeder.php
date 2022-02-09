<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class JugadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jugadors')->insert([
        	'nombre' => 'Jorge',
        	'edad' => 9,
        	'equipo_id' => 1
        ]);
        DB::table('jugadors')->insert([
        	'nombre' => 'Maria',
        	'edad' => 9,
        	'equipo_id' => 1
        ]);
        DB::table('jugadors')->insert([
        	'nombre' => 'Luis',
        	'edad' => 11,
        	'equipo_id' => 2
        ]);
       DB::table('jugadors')->insert([
        	'nombre' => 'Isabel',
        	'edad' => 12,
        	'equipo_id' => 2
        ]);
    }
}
