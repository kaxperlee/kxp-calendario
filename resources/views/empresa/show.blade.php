@extends('layouts.main')

@section('sidebar')
<x-sb-calendario />
@endsection

@section('main')
<x-cab1 texto="Empresas" />
<x-cab2 texto="Empresa: {{$empresas->Empresa}}" />

    <div class="container">
    <div class="row">
        <div class="col-3 my-2">
            <label for="Empresa">Empresa:</label><br>
            <input  class="form-control" type="text" name="Empresa" value="{{$empresas->Empresa}}">
        </div>
        <div class="col-9 my-2">
            <label for="Domicilio">Domicilio:</label><br>
            <input  class="form-control" type="text" name="Domicilio" value="{{$empresas->Domicilio}}">
        </div>
        <div class="col-6 my-2">
            <label for="Actividad">Actividad: </label><br>
            <input  class="form-control" type="text" name="Actividad" value="{{$empresas->Actividad}}">
        </div>
        <div class="col-6 my-2">
            <label for="Convenio">Convenio:</label><br>
            <input  class="form-control" type="text" name="Convenio" value="{{$empresas->Convenio}}">
        </div>
        <div class="col-4 my-2">
            <label for="Localidad">Localidad:</label><br>
        <input  class="form-control" type="text" name="Localidad" value="{{$empresas->Localidad}}">

        </div>
        <div class="col-4 my-2">
            <label for="Comunidad">Comunidad:</label><br>
            <input  class="form-control" type="text" name="Comunidad" value="{{$empresas->Comunidad}}">
        </div>
        <div class="col-4 my-2">
            <label for="Centro">Centro:</label><br>
        <input  class="form-control" type="text" name="Centro" value="{{$empresas->Centro}}">
        </div>
        <div class="col my-2">
            <a type="button" href="{{route('empresa.edit', $empresas)}}" class="btn btn-primary me-2"><i class="fa-solid fa-pen-to-square"></i> Edit</a>

        </div>
    </div>
    </div>

@endsection
