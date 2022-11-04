@extends('layouts.main')

@section('sidebar')
<x-sb-calendario />
@endsection

@section('main')
<x-cab1 texto="Empresas" />
<x-cab2 texto="Alta empresa" />
<form method="POST" action="{{route('empresa.store')}}">
    @csrf
    <div class="container">
    <div class="row">
        <div class="col-3 my-2">
            <label for="Empresa">Empresa:</label><br>
            <input  class="form-control" type="text" name="Empresa" value="">
        </div>
        <div class="col-9 my-2">
            <label for="Domicilio">Domicilio:</label><br>
            <input  class="form-control" type="text" name="Domicilio" value="">
        </div>
        <div class="col-6 my-2">
            <label for="Actividad">Actividad: </label><br>
            <input class="form-control" type="text" name="Actividad" value="">
        </div>
        <div class="col-6 my-2">
            <label for="Convenio">Convenio:</label><br>
            <input  class="form-control" type="text" name="Convenio" value="">
        </div>
        <div class="col-4 my-2">
            <label for="Localidad">Localidad:</label><br>
        <input  class="form-control" type="text" name="Localidad" value="">

        </div>
        <div class="col-4 my-2">
            <label for="Comunidad">Comunidad:</label><br>
            <input  class="form-control" type="text" name="Comunidad" value="">
        </div>
        <div class="col-4 my-2">
            <label for="Centro">Centro:</label><br>
        <input  class="form-control" type="text" name="Centro" value="">
        </div>
        <div class="col my-2">
            <button class="btn btn-primary" type="submit">Guardar</button>
        </div>
    </div>
    </div>
</form>
@endsection
