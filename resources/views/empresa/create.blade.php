@extends('layouts.main')

@section('sidebar')
<x-sb-calendario />
@endsection

@section('main')
<x-cab1 texto="Empresas" />
<x-cab2 texto="Alta empresa" />
<div class="px-3">
{!! Form::open(['route' => 'empresa.store']) !!}
    <div class="container-fluid">
    <div class="row">
        <div class="col-3 my-2">
            {!! Form::label('Empresa','Empresas:') !!}
            {!! Form::text('Empresa',NULL,['class'=>'form-control']) !!}
        </div>
        <div class="col-9 my-2">
            {!! Form::label('Domicilio','Domicilio:') !!}
            {!! Form::text('Domicilio',NULL,['class'=>'form-control']) !!}
        </div>
        <div class="col-6 my-2">
            {!! Form::label('Actividad','Actividad:') !!}
            {!! Form::text('Actividad',NULL,['class'=>'form-control']) !!}
        </div>
        <div class="col-6 my-2">
            {!! Form::label('Convenio','Convenio:') !!}
            {!! Form::text('Convenio',NULL,['class'=>'form-control']) !!}
        </div>
        <div class="col-6 my-2">
            {!! Form::label('Localidad','Localidad:') !!}
            {!! Form::select('Localidad',$localidades,null,['class'=>'form-control','placeholder' => 'Selecciona una localidad']) !!}
        </div>

        <div class="col-6 my-2">
            {!! Form::label('Centro','Centro:') !!}
            {!! Form::text('Centro',null,['class'=>'form-control']) !!}
        </div>
        <div class="col my-2">
            <button class="btn btn-primary" type="submit">Guardar</button>
        </div>
    </div>
    </div>
{!! Form::close() !!}
</div>
@endsection
