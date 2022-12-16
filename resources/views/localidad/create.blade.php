@extends('layouts.main')

@section('sidebar')
<x-sb-calendario />
@endsection

@section('main')
<x-cab1 texto="Calendarios" />
<x-cab2 texto="Alta Localidad" />
<div class="px-3">
{!! Form::open(['route' => 'localidad.store']) !!}
<div class="container-fluid">
    <div class="row">
        <div class="col-6 my-2">
            {!! Form::label('Comunidad','Nombre:') !!}
            {!! Form::select('Comunidad',$comun,NULL,['class'=>'form-control']) !!}
        </div>
        <div class="col-6 my-2">
            {!! Form::label('Localidad','Localidad:') !!}
            {!! Form::text('Localidad',NULL,['class'=>'form-control']) !!}
        </div>

        <div class="col my-2">
            <button class="btn btn-primary" type="submit">Guardar</button>
        </div>
    </div>
    </div>
{!! Form::close() !!}

</div>
@endsection
