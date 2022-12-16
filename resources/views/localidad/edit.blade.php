@extends('layouts.main')

@section('sidebar')
<x-sb-calendario />
@endsection

@section('main')
<x-cab1 texto="Calendario" />
<x-cab2 texto="Localidad" />

<div class="px-3">
    {!! Form::model($localidad,['route' => ['localidad.update',$localidad],'method'=>'put']) !!}
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 my-2">

                {!! Form::label('Comunidad','Nombre:') !!}
                {!! Form::select('Comunidad',$comunidades,$localidad->comunidad_id,['class'=>'form-control','placeholder' => 'Selecciona una Comunidad']) !!}
            </div>
            <div class="col-6 my-2">

                {!! Form::label('Localidad','Localidad:') !!}
                {!! Form::text('Localidad',NULL,['class'=>'form-control']) !!}
            </div>

            <div class="col my-2">
                <button class="btn btn-primary" type="submit">Actualizar</button>
            </div>
        </div>
        </div>
    {!! Form::close() !!}

    </div>
@endsection
