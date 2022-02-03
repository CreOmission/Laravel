<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipos;

class PartidoController extends Controller
{
    public function crearPartido(){
    	return view('formPartido',['listaEquipos' => Equipos::All()]);
    }
    public function modifClasificacion(Request $datosPartido){

    	//buscar el modelo del equipo1
    	$equipo1 = Equipos::find($datosPartido->equipo1);
    	//buscar el modelo del equipo2
    	$equipo2 = Equipos::find($datosPartido->equipo2);


    	//modificar los goles del equipo1
    	$equipo1->victorias = $equipo1->victorias + $datosPartido->victorias1;
    	$equipo1->derrotas = $equipo1->derrotas + $datosPartido->derrotas1;
    	//modificar los goles del equipo2
		$equipo2->victorias = $equipo2->victorias + $datosPartido->victorias2;
    	$equipo2->derrotas = $equipo2->derrotas + $datosPartido->derrotas2;


    	if ($equipo1->id != $equipo2->id) {
    		if($datosPartido->victorias1 > $datosPartido->victorias2){
    		//3 puntos para el equipo 1
    			$equipo1->puntos = $equipo1->puntos + 3;
	    	}else if ($datosPartido->victorias2 > $datosPartido->victorias1) {
	    		//tres para el equipo 2
	    		$equipo2->puntos = $equipo2->puntos + 3;
	    	}else{
	    		//un punto para cada uno
	    		$equipo1->puntos = $equipo1->puntos + 1;
	    		$equipo2->puntos = $equipo2->puntos + 1;

	    	}
    	}
    	

    	//salvar el equipo1
    	$equipo1->save();
    	//salvar el equipo2
    	$equipo2->save();

    	return redirect()->route('clasificacion');
    }
}
