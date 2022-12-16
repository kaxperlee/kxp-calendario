@extends('layouts.main')

@section('sidebar')
<x-sb-calendario />
@endsection
@section('main')
<x-cab1 texto="Empresas" />
<x-cab2 texto="Editar empresa: {{$empresa->Empresa}}" />

<div class="px-3">
    {!! Form::model($empresa,['route' => ['empresa.update',$empresa],'method'=>'put']) !!}

    <div class="container-fluid">
        <div class="row">
            <div class="col-3 my-2">
                {!! Form::label('Empresa','Empresa:') !!}
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
                {!! Form::setModel($empresa['Localidad']) !!}
                {!! Form::label('Localidad','Localidad:') !!}
                {!! Form::select('Localidad',$localidades,$empresa->localidad_id,['class'=>'form-control','placeholder' => 'Selecciona una localidad' ]) !!}
            </div>
            <div class="col-6 my-2">
                {!! Form::setModel($empresa) !!}
                {!! Form::label('Centro','Centro:') !!}
                {!! Form::text('Centro',NULL,['class'=>'form-control']) !!}
            </div>


        </div>
    </div>
    <div class="col my-2">
        <button type="submit"  class="btn btn-primary me-2"><i class="fa-solid fa-ban"></i> Actualizar</button>
        <a type="button" href="{{ROUTE('empresa.show',$empresa)}}" class="btn btn-primary me-2"><i class="fa-solid fa-arrows-rotate"></i> Cancelar</a>
    </div>
    {!! Form::close() !!}
    </div>
@endsection
