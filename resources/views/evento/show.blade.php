@extends('layouts.main')

@section('sidebar')
<x-sb-calendario />
@endsection

@section('main')
<x-cab1 texto="Empresas" />
<x-cab2 texto="Empresa: {{$evento->nombre}}" />
@switch($evento->Evento)
@case('n')
    <div class="px-3">
        <div class="container-fluid">
        <div class="row">
            <div class="col-6 my-2">
                <label for="nombre">Fiesta:</label><br>
                <input  class="form-control" type="text" name="nombre" value="{{$evento->nombre}}" readonly>
            </div>

            <div class="col-6 my-2">
                <label for="fecha">Fecha:</label><br>
                <input  class="form-control" type="text" name="fecha" value="{{$evento->fecha}}" readonly>
            </div>

            <div class="col my-2">
                <a type="button" href="{{route('evento.edit', $evento)}}" class="btn btn-primary me-2"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
            </div>
        </div>
        </div>
    </div>
    @break

@case('c')
    <div class="px-3">
        <div class="container-fluid">
        <div class="row">
            <div class="col-5 my-2">
                <label for="nombre">Fiesta:</label><br>
                <input  class="form-control" type="text" name="nombre" value="{{$evento->nombre}}" readonly>
            </div>

            <div class="col-2 my-2">
                <label for="fecha">Fecha:</label><br>
                <input  class="form-control" type="text" name="fecha" value="{{$evento->fecha}}" readonly>
            </div>
            <div class="col-5 my-2">
                <label for="columna">Comunidad:</label><br>
                <input  class="form-control" type="text" name="columna" value="{{$evento->Comunidad->Comunidad}}" readonly>
            </div>

            <div class="col my-2">
                <a type="button" href="{{route('evento.edit', $evento)}}" class="btn btn-primary me-2"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
            </div>
        </div>
        </div>
    </div>
    @break

@case('l')
    <div class="px-3">
        <div class="container-fluid">
        <div class="row">
            <div class="col-5 my-2">
                <label for="nombre">Fiesta:</label><br>
                <input  class="form-control" type="text" name="nombre" value="{{$evento->nombre}}" readonly>
            </div>

            <div class="col-2 my-2">
                <label for="fecha">Fecha:</label><br>
                <input  class="form-control" type="text" name="fecha" value="{{$evento->fecha}}" readonly>
            </div>
            <div class="col-5 my-2">
                <label for="localidad">Localidad:</label><br>
                <input  class="form-control" type="text" name="localidad" value="{{$evento->Localidad->Localidad}}" readonly>
            </div>

            <div class="col my-2">
                <a type="button" href="{{route('evento.edit', $evento)}}" class="btn btn-primary me-2"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
            </div>
        </div>
        </div>
    </div>
@endswitch

@endsection
