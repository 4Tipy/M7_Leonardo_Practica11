<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorEjercicio1 extends Controller
{
    public function ej1(){
        return 'estoy harto';
    
    }
    public function ej2($textoEj2){
        return $textoEj2;

    }
    public function ej3()
    {
        $textoFinal = 'Quiero morire ';
        return view('mensaje')->with(['text' => $textoFinal]);
    }
    public function ej4($param1, $param2, $param3, $param4)
    {
        $textoFinal = 'Primer parametro' . '"'. $param1 . '" . ';
        $textoFinal .= 'Segundo parametro ' . '"'. $param2 . '". ';
        $textoFinal .= 'Tercer parametro ' .'"'. $param3 . '". ';
        $textoFinal .= 'Cuarto Parametro ' .'"'. $param4 . '". ';

        return view('mensaje')->with(['text' => $textoFinal]);
    }
}
