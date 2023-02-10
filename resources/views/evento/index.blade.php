@extends('layouts.main')

@section('sidebar')
<x-sb-calendario />
@endsection

@section('main')
<x-cab1 texto="Eventos" />
<x-cab2 texto="Listado de eventos ({{$ano}})" />
<x-cab2 texto="Fiestas Nacionales" />
<table class="table">
    <tr>
        <th>Evento</th>
        <th>Fiesta</th>
        <th>Fecha</th>

    </tr>

    @foreach ($eventos_n as $evento_n)
    <tr>
        <td><a href="{{route('evento.show',$evento_n)}}">{{$evento_n->nombre}}</a></td>
        <td>Nacional</td>
        <td>{{$evento_n->fecha}}</td>

    </tr>
    @endforeach
</table>
<x-cab2 texto="Fiestas Comunidad" />
<table class="table">
    <tr>
        <th>Evento</th>
        <th>Fiesta</th>
        <th>Fecha</th>

    </tr>

    @foreach ($eventos_c as $evento_c)
    <tr>
        <td><a href="{{route('evento.show',$evento_c)}}">{{$evento_c->nombre}}</a></td>
        <td>{{$evento_c->Comunidad->Comunidad}}</td>
        <td>{{$evento_c->fecha}}</td>

    </tr>
    @endforeach
</table>
<x-cab2 texto="Fiestas Locales" />
<table class="table">
    <tr>
        <th>Evento</th>
        <th>Fiesta</th>
        <th>Fecha</th>

    </tr>

    @foreach ($eventos_l as $evento_l)
    <tr>
        <td><a href="{{route('evento.show',$evento_l)}}">{{$evento_l->nombre}}</a></td>
        <td> {{$evento_l->Localidad->Localidad}}</td>
        <td>{{$evento_l->fecha}}</td>

    </tr>
    @endforeach
</table>
@endsection
