<?php

namespace App\Http\Controllers;

use App\Models\CalComunidad;
use App\Models\CalLocalidad;
use Illuminate\Http\Request;

class LocalidadController extends Controller
{
    public function index($comunidad){

        $localidades = CalLocalidad::where('comunidad_id',$comunidad)->get();
        //return "<h1>".$fecha."</h1>";
        //return $localidades;
        return view("localidad/index", compact('localidades'));
    }

    public function show($id){

        $localidad = CalLocalidad::find($id);
        return view("localidad/show", compact('localidad'));
        return $localidad;

    }

    public function edit($id){

        $comunidades = CalComunidad::orderBy('Comunidad','asc')->pluck('Comunidad','id');
        $localidad = CalLocalidad::find($id);
        return view("localidad/edit", compact('localidad','comunidades'));
        return $localidad;

    }

    public function create(){
        $comun = CalComunidad::orderBy('Comunidad','asc')->pluck('Comunidad','id');

        return view("localidad/create", compact('comun'));
    }

    public function store(Request $request)
    {

        $localidad = new CalLocalidad();
        $localidad->comunidad_id = $request->Comunidad;
        $localidad->Localidad = $request->Localidad;
        $localidad->save();
        //return $evento;
        return redirect()->route('localidad.index', $localidad);
    }
    public function update(Request $request, $localidad)
    {
        //return $request->Localidad;
        CalLocalidad::find($localidad)->update(['Localidad' => 'Elchess']);

        //$localidad = $CalLocalidad;
        //return $localidad;
        return redirect()->route('localidad.index', $localidad);
    }
}
