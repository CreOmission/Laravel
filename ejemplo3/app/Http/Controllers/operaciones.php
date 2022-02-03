<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class operaciones extends Controller
{
	public function operacion(Request $datosForm){
		$res = 0;
		$op = "";
		switch ($datosForm->operacion) {
			case 'sum':
				$res = $datosForm->oper1 + $datosForm->oper2;
				$op="suma";
				break;
			case 'res':
				$res = $datosForm->oper1 - $datosForm->oper2;
				$op="resta";
				break;
			case 'mul':
				$res = $datosForm->oper1 * $datosForm->oper2;
				$op="multiplicación";
				break;
			case 'divi':
				$res = $datosForm->oper1 / $datosForm->oper2;
				$op="división";
				break;
			default:
				
				break;
		}
		return view("resultado",['resul'=>$res,'oper'=>$op]);
	}

    //suma
    public function suma($op1,$op2){
    	$res = $op1+$op2;
		return view("resultado",['resul'=>$res,'oper'=>'suma']);    	
    }
    //resta
    public function resta($op1,$op2){
    	$res = $op1-$op2;
		return view("resultado",['resul'=>$res,'oper'=>'resta']);    	
    }
    //multiplicación
    public function multiplicacion($op1,$op2){
    	$res = $op1*$op2;
		return view("resultado",['resul'=>$res,'oper'=>'multiplicacion']);
    }
    //división
    public function division($op1,$op2){
    	$res = $op1/$op2;
		return view("resultado",['resul'=>$res,'oper'=>'division']);    	
    }

}
