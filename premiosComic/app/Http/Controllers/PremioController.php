<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\premio;
use App\Models\Users;

class PremioController extends Controller
{
    public function listado(){

    	$premios = premio::All()->sortByDesc('anio');

    	return view('/dashboard',['listaPremios' => $premios]);
    }

    public function formCrearPremio(){

    	return view('/crearPremio');
    }

    public function crearPremio(Request $datos){
    	
    	$p = new premio();

    	$p->anio = $datos->anio;
    	$p->autor = $datos->autor;
    	$p->comic = $datos->titulo;
    	$p->portada = "";
    	$p->user_id = Auth::User()->id;

    	$p->save();

    	return redirect()->route('dashboard');

    	$datos
    }

    public function misPremios(){


    	$misPrem = premio::where('user_id',Auth::User()->id)->get();
    	return view('/misPremios',['misPremios' => $misPrem]);
    }

}
