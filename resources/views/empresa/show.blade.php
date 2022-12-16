@extends('layouts.main')

@section('sidebar')
<x-sb-calendario />
@endsection

@section('main')
<x-cab1 texto="Empresas" />
<x-cab2 texto="Empresa: {{$empresa->Empresa}}" />
<div class="px-3">
    <div class="container-fluid">
    <div class="row">
        <div class="col-3 my-2">
            <label for="Empresa">Empresa:</label><br>
            <input  class="form-control" type="text" name="Empresa" value="{{$empresa->Empresa}}" readonly>
        </div>
        <div class="col-9 my-2">
            <label for="Domicilio">Domicilio:</label><br>
            <input  class="form-control" type="text" name="Domicilio" value="{{$empresa->Domicilio}}" readonly>
        </div>
        <div class="col-6 my-2">
            <label for="Actividad">Actividad: </label><br>
            <input  class="form-control" type="text" name="Actividad" value="{{$empresa->Actividad}}" readonly>
        </div>
        <div class="col-6 my-2">
            <label for="Convenio">Convenio:</label><br>
            <input  class="form-control" type="text" name="Convenio" value="{{$empresa->Convenio}}" readonly>
        </div>
        <div class="col-6 my-2">
            <label for="Localidad">Localidad:</label><br>
            <input  class="form-control" type="text" name="Localidad" value="{{$empresa->Localidad->Localidad}}" readonly>
        </div>

        <div class="col-6 my-2">
            <label for="Centro">Centro:</label><br>
        <input  class="form-control" type="text" name="Centro" value="{{$empresa->Centro}}" readonly>
        </div>
        <div class="col my-2">
            <a type="button" href="{{route('empresa.edit', $empresa)}}" class="btn btn-primary me-2"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
        </div>
    </div>
    </div>
</div>
@endsection
