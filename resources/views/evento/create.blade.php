@extends('layouts.main')

@section('sidebar')
<x-sb-calendario />
@endsection

@section('main')
<x-cab1 texto="Eventos" />
<x-cab2 texto="Alta evento" />
<div class="px-3">
    <x-cab2 texto="Evento Nacional" />
    {!! Form::open(['route' => 'evento.store']) !!}
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

                {!! Form::hidden('Evento','n') !!}
            <div class="col my-2">
                <button class="btn btn-primary" type="submit">Guardar</button>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
</br>
    <x-cab2 texto="Evento Comunidad Autónoma" />
    {!! Form::open(['route' => 'evento.store']) !!}
    <div class="container-fluid">
        <div class="row">
            <div class="col-5 my-2">
                {!! Form::label('nombre','Nombre:') !!}
                {!! Form::text('nombre',NULL,['class'=>'form-control']) !!}
            </div>
            <div class="col-2 my-2">
                {!! Form::label('fecha','Fecha:') !!}
                {!! Form::date('fecha',NULL,['class'=>'form-control']) !!}
            </div>
            <div class="col-5 my-2">
                {!! Form::label('comunidad_id','Comunidad Autónoma:') !!}
                {!! Form::select('comunidad_id',$comunidades,null,['class'=>'form-control','placeholder' => 'Selecciona una Comunidad']) !!}
            </div>

            {!! Form::hidden('Evento','c',['class'=>'form-control']) !!}
            <div class="col my-2">
                <button class="btn btn-primary" type="submit">Guardar</button>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
</br>
<x-cab2 texto="Evento Local" />
    {!! Form::open(['route' => 'evento.store']) !!}
    <div class="container-fluid">
        <div class="row">
            <div class="col-5 my-2">
                {!! Form::label('nombre','Nombre:') !!}
                {!! Form::text('nombre',NULL,['class'=>'form-control']) !!}
            </div>
            <div class="col-2 my-2">
                {!! Form::label('fecha','Fecha:') !!}
                {!! Form::date('fecha',NULL,['class'=>'form-control']) !!}
            </div>
            <div class="col-5 my-2">
                {!! Form::label('localidad_id','Localidad:') !!}
                {!! Form::select('localidad_id',$localidades,NULL,['class'=>'form-control','placeholder' => 'Selecciona una Localidad']) !!}
            </div>

            {!! Form::hidden('Evento','l',['class'=>'form-control']) !!}
            <div class="col my-2">
                <button class="btn btn-primary" type="submit">Guardar</button>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
</div>
@endsection
