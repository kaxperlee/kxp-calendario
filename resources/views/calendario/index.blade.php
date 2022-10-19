@extends('layouts.main')

@section('sidebar')
<x-sb-calendario />
@endsection

@section('main')
<x-cab1 texto="Calendario" />
<x-cab2 texto="Calendario laboral {{$fecha}}" />
<div class="container">
    <div class="row">
        <div class="col-3">
            <x-calendario fontsize="fs-6" month="{{$fecha}}-01" />
        </div>

    </div>
  </div>
@endsection
