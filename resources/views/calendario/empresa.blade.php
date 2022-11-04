@extends('layouts.main')

@section('sidebar')
<x-sb-calendario />
@endsection

@section('main')
<x-cab1 texto="Calendario" />
<x-cab2 texto="Calendarios de empresa" />
<h4>{{$empresa->Empresa}}</h4>
<h4>{{$empresa->Domicilio}}</h4>
<h4>{{$empresa->Centro}}</h4>
<h4>{{$empresa->Localidad}}</h4>
<h4>{{$empresa->Comunidad}}</h4>
<h4>{{$empresa->Actividad}}</h4>
<h4>{{$empresa->Convenio}}</h4>
<h4>{{$ano}}</h4>
<h4>Fiestas: </h4>
@foreach ($fiestas as $fiesta)
<h5>{{$fiesta->nombre}} - {{$fiesta->descripcion}}</h5>
@endforeach
@endsection
