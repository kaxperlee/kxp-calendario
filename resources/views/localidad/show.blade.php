@extends('layouts.main')

@section('sidebar')
<x-sb-calendario />
@endsection

@section('main')
<x-cab1 texto="Calendario" />
<x-cab2 texto="Localidad" />

<div class="px-3">
    {!! Form::model($localidad,['route' => ['localidad.edit',$localidad]]) !!}
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 my-2">
                {!! Form::setModel($localidad['Comunidad']) !!}
                {!! Form::label('Comunidad','Nombre:') !!}
                {!! Form::text('Comunidad',NULL,['class'=>'form-control']) !!}
            </div>
            <div class="col-6 my-2">
                {!! Form::setModel($localidad) !!}
                {!! Form::label('Localidad','Localidad:') !!}
                {!! Form::text('Localidad',NULL,['class'=>'form-control']) !!}
            </div>

            <div class="col my-2">
                <a type="button" href="{{route('localidad.edit', $localidad)}}" class="btn btn-primary me-2"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
            </div>
        </div>
        </div>
    {!! Form::close() !!}

    </div>
@endsection
