<?php

namespace App\Http\Controllers;

use App\Models\CalComunidad;
use App\Models\CalLocalidad;
use COM;
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
        return redirect()->route('localidad.index', $localidad->comunidad_id);
    }
    public function update(Request $request, CalLocalidad $localidad)
    {
        $localidad->update(['Localidad' => $request->Localidad, 'comunidad_id' => $request->Comunidad]);

        return redirect()->route('localidad.show', $localidad);
    }
}
