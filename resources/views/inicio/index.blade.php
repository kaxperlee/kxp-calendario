@extends('layouts.main')

@section('sidebar')
<x-sb-calendario />
@endsection

@section('main')
<x-cab1 texto="Calendario" />
<x-cab2 texto="Calendario laboral {{$fecha}}" />
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-6  col-xl-4 col-xxl-3">
            <x-calendario fontsize="fs-6" month="{{$fecha}}-01" />
        </div>
      <div class="col-sm-12 col-md-6 col-xl-4 col-xxl-3">
        <x-calendario fontsize="fs-6" month="{{$fecha}}-02" />
      </div>
      <div class="col-sm-12 col-md-6 col-xl-4 col-xxl-3">
        <x-calendario fontsize="fs-6" month="{{$fecha}}-03" />
      </div>
      <div class="col-sm-12 col-md-6 col-xl-4 col-xxl-3">
        <x-calendario fontsize="fs-6" month="{{$fecha}}-04" />
      </div>
      <div class="col-sm-12 col-md-6 col-xl-4 col-xxl-3">
        <x-calendario fontsize="fs-6" month="{{$fecha}}-05" />
      </div>
      <div class="col-sm-12 col-md-6 col-xl-4 col-xxl-3">
        <x-calendario fontsize="fs-6" month="{{$fecha}}-06" />
      </div>
      <div class="col-sm-12 col-md-6 col-xl-4 col-xxl-3">
        <x-calendario fontsize="fs-6" month="{{$fecha}}-07" />
      </div>
      <div class="col-sm-12 col-md-6 col-xl-4 col-xxl-3">
        <x-calendario fontsize="fs-6" month="{{$fecha}}-08" />
      </div>
      <div class="col-sm-12 col-md-6 col-xl-4 col-xxl-3">
        <x-calendario fontsize="fs-6" month="{{$fecha}}-09" />
      </div>
      <div class="col-sm-12 col-md-6 col-xl-4 col-xxl-3">
        <x-calendario fontsize="fs-6" month="{{$fecha}}-10" />
      </div>
      <div class="col-sm-12 col-md-6 col-xl-4 col-xxl-3">
        <x-calendario fontsize="fs-6" month="{{$fecha}}-11" />
      </div>
      <div class="col-sm-12 col-md-6 col-xl-4 col-xxl-3">
        <x-calendario fontsize="fs-6" month="{{$fecha}}-12" />
      </div>
    </div>
  </div>
@endsection
