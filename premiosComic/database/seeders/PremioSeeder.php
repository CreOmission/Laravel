<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PremioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('premios')->insert([
        	'anio' => '2020',
        	'autor' => 'Javier de Isusi',
        	'comic' => 'La divina comedia de Oscar Wilde',
        	'portada' => 'divinaComedia.jpg',
        	'user_id' => 1
        ]);
        DB::table('premios')->insert([
        	'anio' => '2021',
        	'autor' => 'Diego Corbalán',
        	'comic' => 'Primavera para Madrid',
        	'portada' => 'divinaComedia.jpg',
        	'user_id' => 2
        ]);
    }
}
