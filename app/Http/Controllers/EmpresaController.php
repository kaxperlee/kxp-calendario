<?php

namespace App\Http\Controllers;

use App\Models\CalLocalidad;
use App\Models\Empresa;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    public function index(){
        $empresas = Empresa::orderBy('Empresa')->get();
        //return $empresas->Comunidad;
        return view("empresa/index", compact('empresas'));
    }

    public function create(){

        $localidades = CalLocalidad::orderBy('Localidad','asc')->pluck('Localidad','id');
        return view("empresa/create",compact('localidades'));
    }
    public function store(Request $request)
    {
        $empresa = new Empresa();
        $empresa->Empresa = $request->Empresa;
        $empresa->Domicilio = $request->Domicilio;
        $empresa->Actividad = $request->Actividad;
        $empresa->Convenio = $request->Convenio;
        $empresa->localidad_id = $request->Localidad;
        $empresa->Centro = $request->Centro;
        $empresa->save();
        return redirect()->route('empresa.show', $empresa);
        //return $incidencia;
    }

    public function show( Empresa $empresa)
    {
        //$empresa = Empresa::find($empresa);

        return view('empresa.show', compact('empresa'));
    }
    public function edit(Empresa $empresa){
        //return $empresa;
        $localidades = CalLocalidad::orderBy('Localidad','asc')->pluck('Localidad','id');
        return view("empresa/edit", compact('empresa','localidades'));
    }

    public function update(Request $request, Empresa $empresa){

        //$empresa = Empresa::find($request->id);
        //return $request->all();
        $empresa->update(['Empresa' => $request->Empresa, 'Domicilio' => $request->Domicilio, 'Actividad' => $request->Actividad,
        'Convenio' =>  $request->Convenio,'localidad_id' =>  $request->Localidad,'Centro' =>  $request->Centro]);
        return redirect()->route('empresa.show',$empresa);
        //return $empresa;
    }
}
