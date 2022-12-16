@extends('layouts.main')

@section('sidebar')
<x-sb-calendario />
@endsection

@section('main')
<x-cab1 texto="Calendario" />
<x-cab2 texto="Calendarios de empresa {{$ano}}" />
<table class='table'>
    <tr>
        <th>Empresa</th>
        <th>Localidad</th>
        <th>Comunidad</th>
        <th>Centro</th>
    </tr>

@foreach ($empresas as $empresa)
    <tr>
        <td><a href="{{route('calendario.empresa',[$empresa,$ano])}}">{{$empresa->Empresa}}</a></td>
        <td>{{$empresa->Localidad->Localidad}}</td>
        <td>{{$empresa->Localidad->Comunidad->Comunidad}}</td>
        <td>{{$empresa->Centro}}</td>
    </tr>
@endforeach
</table>
@endsection
