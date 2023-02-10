@extends('layouts.main')

@section('sidebar')
<x-sb-calendario />
@endsection

@section('main')
<x-cab1 texto="Empresas: {{$empresas->count();}}" />
<x-cab2 texto="Listado de empresas" />
<table class="table">
    <tr>
        <th>Empresa</th>
        <th>Localidad</th>
        <th>Comumidad</th>
        <th>Centro</th>
    </tr>

    @foreach ($empresas as $empresa)
    <tr>
        <td><a href="{{route('empresa.show',$empresa)}}">{{$empresa->Empresa}}</a></td>
        <td>{{$empresa->Localidad->Localidad}}</td>
        <td>{{$empresa->Localidad->Comunidad->Comunidad}}</td>
        <td>{{$empresa->Centro}}</td>
    </tr>
    @endforeach
</table>
@endsection

