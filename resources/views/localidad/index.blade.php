@extends('layouts.main')

@section('sidebar')
<x-sb-calendario />
@endsection

@section('main')
<x-cab1 texto="Calendario" />
<x-cab2 texto="Comunidades Autónomas" />

<table class="table">
    <tr>
        <th>id</th>
        <th>Comunidad Autónoma</th>
        <th>Localidad</th>

    </tr>

    @foreach ($localidades as $localidad)
    <tr>
        <td><a href="{{route('localidad.show',$localidad->id)}}">{{$localidad->id}}</a></td>
        <td>{{$localidad->Comunidad->Comunidad}}</td>
        <td>{{$localidad->Localidad}}</td>

    </tr>
    @endforeach
</table>

@endsection
