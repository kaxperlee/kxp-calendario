@extends('layouts.main')

@section('sidebar')
<x-sb-calendario />
@endsection

@section('main')
<x-cab1 texto="Calendario" />
<x-cab2 texto="Calendario laboral {{$fecha}}" />
<div class="container mb-3">
    <h5>Fiestas C.Valenciana</h5>
    <div class="row">
        @foreach ($fiestas as $fiesta)
            @if  ($fiesta->descripcion == 'nacional')
                <div class="col-3"><span class="text-danger"><strong>{{date('d',strtotime($fiesta->fecha))}} {{$fiesta->mes}}</strong></span> - {{$fiesta->nombre}}</div>
            @endif
        @endforeach
    </div>
    <h5 class='pt-3'>Fiestas locales</h5>
    <div class="row">
        @foreach ($fiestas as $fiesta)
            @if  ($fiesta->descripcion == 'local')
                <div class="col-3"><span class="text-warning strong"><strong>{{date('d',strtotime($fiesta->fecha))}} {{$fiesta->mes}}</strong></span> - {{$fiesta->nombre}}</div>
            @endif
        @endforeach
    </div>
</div>
<div class="container-fluid mb-5">
    <div class="row">
        <div class="col-3">
            <x-calendario fontsize="fs-6" month="{{$fecha}}-01" />
        </div>
        <div class="col-3">
            <x-calendario fontsize="fs-6" month="{{$fecha}}-02" />
        </div>
        <div class="col-3">
            <x-calendario fontsize="fs-6" month="{{$fecha}}-03" />
        </div>
        <div class="col-3">
            <x-calendario fontsize="fs-6" month="{{$fecha}}-04" />
        </div>
        <div class="col-3">
            <x-calendario fontsize="fs-6" month="{{$fecha}}-05" />
        </div>
        <div class="col-3">
            <x-calendario fontsize="fs-6" month="{{$fecha}}-06" />
        </div>
        <div class="col-3">
            <x-calendario fontsize="fs-6" month="{{$fecha}}-07" />
        </div>
        <div class="col-3">
            <x-calendario fontsize="fs-6" month="{{$fecha}}-08" />
        </div>
        <div class="col-3">
            <x-calendario fontsize="fs-6" month="{{$fecha}}-09" />
        </div>
        <div class="col-3">
            <x-calendario fontsize="fs-6" month="{{$fecha}}-10" />
        </div>
        <div class="col-3">
            <x-calendario fontsize="fs-6" month="{{$fecha}}-11" />
        </div>
        <div class="col-3">
            <x-calendario fontsize="fs-6" month="{{$fecha}}-12" />
        </div>
    </div>

  </div>
@endsection
