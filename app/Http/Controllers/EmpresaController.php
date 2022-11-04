<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    public function index(){
        $empresas = Empresa::all();

       return view("empresa/index", compact('empresas'));
    }

    public function create(){

        return view("empresa/create");
    }
    public function store(Request $request)
    {
        $empresa = new Empresa();
        $empresa->Empresa = $request->Empresa;
        $empresa->Domicilio = $request->Domicilio;
        $empresa->Actividad = $request->Actividad;
        $empresa->Convenio = $request->Convenio;
        $empresa->Localidad = $request->Localidad;
        $empresa->Comunidad = $request->Comunidad;
        $empresa->Centro = $request->Centro;
        $empresa->save();
        return redirect()->route('empresa.show', $empresa);
        //return $incidencia;
    }

    public function show($id)
    {
        $empresas = Empresa::find($id);

        return view('empresa.show', compact('empresas'));
    }
    public function edit($id){

        $empresas = Empresa::find($id);

        return view("empresa/edit", compact('empresas'));
    }

    public function update($id){

        return "Update";
    }
}
