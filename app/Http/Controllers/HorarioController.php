<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HorarioController extends Controller
{
    public function index(){

        /*
        $fecha = date("Y");
        $fiestas = Evento::where('ano',$fecha)->get();
        //return "<h1>".$fecha."</h1>";
        return view("calendario/index", compact('fecha','fiestas'));
        */
        return view("horario/index");
    }
}
