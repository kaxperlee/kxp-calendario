<?php

namespace App\Http\Controllers;

use App\Models\CalComunidad;
use App\Models\CalLocalidad;
use App\Models\Evento;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    public function index($ano='2023'){
        $eventos_n = Evento::where('ano',$ano)->where('Evento','n')->get();
        $eventos_c = Evento::where('ano',$ano)->where('Evento','c')->get();
        $eventos_l = Evento::where('ano',$ano)->where('Evento','l')->get();

        //return $eventos_c;
        return view("evento/index", compact('eventos_n','eventos_c','eventos_l','ano'));
    }

    public function create(){

        $comunidades = CalComunidad::orderBy('Comunidad','asc')->pluck('Comunidad','id');
        $localidades = CalLocalidad::orderBy('Localidad','asc')->pluck('Localidad','id');
        return view("evento/create",compact('comunidades','localidades'));
    }
    public function store(Request $request)
    {

        $evento = new Evento();
        $evento->nombre = $request->nombre;
        $evento->Evento = $request->Evento;
        $evento->Tipo = $request->Tipo;
        $evento->fecha = $request->fecha;
        if($evento->Evento == 'n'){
            $evento->descripcion = "nacional";
            $evento->columna = 1;
        }
        elseif($evento->Evento == 'c'){
            $evento->descripcion = "nacional";
            $evento->comunidad_id = $request->comunidad_id;
            $evento->columna = 1;
        }
        else{
            $evento->descripcion = "local";
            $evento->localidad_id = $request->localidad_id;
            $evento->columna = 2;
        }
        $evento->ano = date('Y',strtotime($request->fecha));
        $evento->dia = date('d',strtotime($request->fecha));
        $evento->mes = $this->mes(date('m',strtotime($request->fecha)));
        $evento->save();
        //return $evento;
        return redirect()->route('evento.create', $evento);
    }


    public function show( Evento $evento)
    {
        //$empresa = Empresa::find($empresa);

        return view('evento.show', compact('evento'));
    }
    public function edit(Evento $evento){
        $comunidades = CalComunidad::orderBy('Comunidad','asc')->pluck('Comunidad','id');
        $localidades = CalLocalidad::orderBy('Localidad','asc')->pluck('Localidad','id');
        switch ($evento->Evento) {
            case 'n':
                return view("evento/edit", compact('evento'));
                break;
            case 'c':
                return view("evento/editc", compact('evento','comunidades'));
                break;
            case 'l':
                return view("evento/editl", compact('evento','localidades'));
                break;
        }
        return view("evento/edit", compact('evento','comunidades','localidades'));
    }

    public function update(Request $request, Evento $evento){

        $ano = date('Y',strtotime($request->fecha));
        $dia = date('d',strtotime($request->fecha));
        $mes = $this->mes(date('m',strtotime($request->fecha)));
        if($request->Evento == 'n'){$descripcion = "nacional";}
        elseif($request->Evento == 'c'){$descripcion = "nacional";}
        else{{$descripcion = "local";}}

        switch ($evento->Evento) {
            case 'n':
                $evento->update(['nombre' => $request->nombre, 'descripcion' => $descripcion, 'ano' => $ano,
                'dia' => $dia,'mes' => $mes, 'fecha' => $request->fecha, 'columna' => $request->columna]);
                break;
            case 'c':
                $evento->update(['nombre' => $request->nombre, 'descripcion' => $descripcion, 'ano' => $ano,
                'dia' => $dia,'mes' => $mes, 'fecha' => $request->fecha,'comunidad_id' => $request->comunidad_id, 'columna' => $request->columna]);
                break;
            case 'l':
                $evento->update(['nombre' => $request->nombre, 'descripcion' => $descripcion, 'ano' => $ano,
                'dia' => $dia,'mes' => $mes, 'fecha' => $request->fecha,'localidad_id' => $request->localidad_id, 'columna' => $request->columna]);
                break;
        }
        //return $request->all();
        //$empresa = Empresa::find($request->id);
        //$datos = $request;
        //return $evento;
        return redirect()->route('evento.show',$evento);
        //return $empresa;
    }

    public function mes($mes){
        switch ($mes) {
            case '01':
            $mes = "Enero";
                break;
            case '2':
                $mes = "Febrero";
                break;
            case '3':
                $mes = "Marzo";
                break;
            case '4':
                $mes = "Abril";
                break;
            case '5':
                $mes = "Mayo";
                break;
            case '6':
                $mes = "Junio";
                break;
            case '7':
                $mes = "Julio";
                break;
            case '8':
                $mes = "Agosto";
                break;
            case '9':
                $mes = "Septiembre";
                break;
            case '10':
                $mes = "Octubre";
                break;
            case '11':
                $mes = "Noviembre";
                break;
            case '12':
                $mes = "Diciembre";
                break;
        }
        return $mes;
    }

}
