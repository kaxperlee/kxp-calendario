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
        <th>Localidad</th>
        <th>Comunidad Autónoma</th>
        

    </tr>

    @foreach ($localidades as $localidad)
    <tr>
        <td>{{$localidad->id}}</td>
        <td><a href="{{route('localidad.show',$localidad->id)}}">{{$localidad->Localidad}}</a></td>
        <td>{{$localidad->Comunidad->Comunidad}}</td>
        

    </tr>
    @endforeach
</table>

@endsection
