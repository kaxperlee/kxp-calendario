<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;
use PDF;

class CalendarioController extends Controller
{
    public function index($date="2023"){
        $fecha = $date;
        return view("calendario/index", compact('fecha'));
    }

    public function informe(){

        $fiestas = Evento::all();
        $fecha = "2023";
        $pdf = PDF::loadView('calendario.informe', compact('fecha','fiestas'));
        //return view("calendario/informe", compact('fecha'));
        return $pdf->download('CalendarioLaboral2023.pdf');
    }


}
