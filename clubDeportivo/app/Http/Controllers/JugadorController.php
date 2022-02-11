<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jugador;
use App\Models\equipo;


class JugadorController extends Controller
{
    public function listadoJugadores($id){
    	$listaJugadores = jugador::where('equipo_id',$id)->get();
			//lp es una variable que recogerá los datos y los pasará
    	return view('listaJugadores',['lj' => $listaJugadores]);
    }


    public function formCrear(){
    	return view('formularioCrearJugador',['leq'=>equipo::All()]);
    }

    public function guardar(Request $datos){
    	//validar
    	$respuesta = $datos->validate([
    		'nombre' => 'required',
    		'edad' => 'required|numeric',
            'equipo_id'=>'required'
    	]);
    	//crear modelo
    	$j = new jugador();

    	$j->nombre = $datos->nombre;
    	$j->edad = $datos->edad;
    	$j->equipo_id = $datos->equipo_id;

    	$j->save();
			//utilizamos el nombre de la ruta. También necesita parámetro en este caso
    	return redirect()->route('listaJugadores',['id'=>$datos->equipo_id]);
    }



    public function borrar($id){

        $j = jugador::find($id);

        $j->delete();

        $equipo_id  =$j->equipo_id;
       return redirect()->route('listaJugadores',['id'=>$equipo_id]);
    
    }





    public function modificar($id){

        $j = jugador::find($id);

        $equipos = equipo::All();

       return view('formularioCrearJugador',['jugador'=>$j,'leq'=>$equipos]);
    
    }

    public function modificarGuardarBD(Request $datos, $id){
        $j = jugador::find($id);

        $j->nombre = $datos->nombre;
        $j->edad = $datos->edad;
        $j->equipo_id = $datos->equipo_id;

        $j->save();

        return redirect()->route('dashboard');
    }
 /*   public function crearJugador(Request $datos){
    	$j = new jugador();

    	$j->nombre = $datos->nombre;
    	$j->edad = $datos->edad;
    	$j->equipo_id = $datos->equipo_id;

    	$j->save();

    	return redirect()->route('dashboard');

    }*/
}
