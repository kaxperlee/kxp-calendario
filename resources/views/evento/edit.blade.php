@extends('layouts.main')

@section('sidebar')
<x-sb-calendario />
@endsection
@section('main')
<x-cab1 texto="Empresas" />
<x-cab2 texto="Editar evento: {{$evento->nombre}}" />

<div class="px-3">
    {!! Form::model($evento,['route' => ['evento.update',$evento],'method'=>'put']) !!}

    <div class="container-fluid">
        <div class="row">
            <div class="col-6 my-2">
                {!! Form::label('nombre','Nombre:') !!}
                {!! Form::text('nombre',NULL,['class'=>'form-control']) !!}
            </div>
            <div class="col-6 my-2">
                {!! Form::label('fecha','Fecha:') !!}
                {!! Form::date('fecha',NULL,['class'=>'form-control']) !!}
            </div>

        </div>
    </div>
    {!! Form::hidden('Evento','n',['class'=>'form-control']) !!}
    <div class="col my-2">
        <button type="submit"  class="btn btn-primary me-2"><i class="fa-solid fa-ban"></i> Actualizar</button>
        <a type="button" href="{{ROUTE('evento.show',$evento)}}" class="btn btn-primary me-2"><i class="fa-solid fa-arrows-rotate"></i> Cancelar</a>
    </div>
    {!! Form::close() !!}
    </div>
@endsection
