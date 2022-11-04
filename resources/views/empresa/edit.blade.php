@extends('layouts.main')

@section('sidebar')
<x-sb-calendario />
@endsection
@section('main')
<x-cab1 texto="Empresas" />
<x-cab2 texto="Editar empresa: " />

<div class="px-3">
    {!! Form::model($empresas,['route' => ['empresa.update',$empresas],'method'=>'put']) !!}

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
            <div class="col-4 my-2">
                {!! Form::label('Localidad','Localidad:') !!}
                {!! Form::text('Localidad',NULL,['class'=>'form-control']) !!}
            </div>
            <div class="col-4 my-2">
                {!! Form::label('Comunidad','Comunidad:') !!}
                {!! Form::text('Comunidad',NULL,['class'=>'form-control']) !!}
            </div>
            <div class="col-4 my-2">
                {!! Form::label('Centro','Centro:') !!}
                {!! Form::text('Centro',NULL,['class'=>'form-control']) !!}
            </div>

        </div>
    </div>
    <div class="d-flex flex-row-reverse mt-3">
        <button type="submit"  class="btn btn-primary btn-sm me-2"><i class="fa-solid fa-ban"></i> Actualizar</button>
        <a type="button" href="{{route('empresa.show', $empresas)}}" class="btn btn-primary btn-sm me-2"><i class="fa-solid fa-arrows-rotate"></i> Cancelar</a>
    </div>
    {!! Form::close() !!}
    </div>
@endsection
