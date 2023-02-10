<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use App\Models\Evento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PDF;

class CalendarioController extends Controller
{
    public function index(){

        $fecha = date("Y");
        $fiestas = Evento::where('ano',$fecha)->get();
        //return "<h1>".$fecha."</h1>";
        return view("calendario/index", compact('fecha','fiestas'));
    }

    public function show($fecha){

        $fiestas = Evento::where('ano',$fecha)->get();

        return view("calendario/index", compact('fecha','fiestas'));
    }

    public function informe(){

        $fecha = "2023";
        $fiestas = Evento::where('ano',$fecha)->get();

        $pdf = PDF::loadView('calendario.informe', compact('fecha','fiestas'));
        //return view("calendario/informe", compact('fecha'));
        return $pdf->download('CalendarioLaboral2023.pdf');
    }

    public function calendario($fecha){

        $fiestas = Evento::where('ano',$fecha);
        $ano = $fecha;
        $pdf = PDF::loadView('calendario.informe', compact('ano','fiestas'));
        //return view("calendario/informe", compact('fecha'));
        return $pdf->download($empresa->Empresa.'-'.$empresa->Centro.'.pdf');
    }

    public function ftp(){

        $files = Storage::disk('ftp')->allfiles();
        dd($files);

    }

    public function empresas($fecha){
        $empresas = Empresa::all();
        $ano = $fecha;
        return view("calendario/empresas", compact('empresas','ano'));
    }

    public function empresa($id,$fecha){
        $empresa = Empresa::find($id);
        $fiestasc = Evento::where('ano', '=', $fecha)
        ->where(function ($query) use ($empresa) {
            $query->Where('comunidad_id', $empresa->localidad->comunidad_id)
                  ->orWhere('Evento', 'n');
        })->orderBy('fecha')->get();
        $fiestasl = Evento::where('ano', '=', $fecha)
        ->where(function ($query) use ($empresa) {
            $query->Where('localidad_id', $empresa->localidad_id);
        })->orderBy('fecha')->get();
        /*$fiestassql = Evento::where('ano', '=', $fecha)
        ->where(function ($query) use ($empresa) {
            $query->where('Tipo', 'n')
                  ->orWhere('Tipo', $empresa->Comunidad)
                  ->orWhere('Tipo', $empresa->Localidad);
        })
        ->toSql();*/
        $fecha = $fecha;

        $pdf = PDF::loadView('calendario.informe2', compact('fecha','fiestasc','fiestasl','empresa'));
        return $pdf->download($empresa->Empresa.'-'.$empresa->Centro.'.pdf');
        //return view("calendario/empresa", compact('empresa','ano','fiestas'));
    }


}
