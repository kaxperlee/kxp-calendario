<div>
    <x-cal fontsize="fs-6" month="" tipo="sb" />
    <x-cab1 texto="Calendario laboral" />
    <ul>
        <li><a href="{{ url("/calendario/".($year)) }}">{{$year}}</a></li>
        <li><a href="{{ url("/calendario/".($year+1)) }}">{{$year+1}}</a></li>
        <li><a href="{{route('calendario.empresas', $year)}}">Empresas {{$year}}</a></li>
        <li><a href="{{route('calendario.empresas', $year+1)}}">Empresas {{$year+1}}</a></li>
    </ul>
    <x-cab1 texto="Empresas" />
    <ul>
        <li><a href="{{route('empresa.index')}}">Empresas</a></li>
        <li><a href="{{route('empresa.create')}}">Alta Empresa</a></li>
    </ul>
    <x-cab1 texto="Eventos" />
    <ul>
        @foreach ($eventos as $evento)
        <li><a href="{{route('evento.index',$evento->ano)}}">{{$evento->ano}}</a></li>
        @endforeach
        <li><a href="{{route('evento.create')}}">Alta Evento</a></li>
    </ul>
    <x-cab1 texto="Localidades" />
    <ul>
        @foreach ($comunidades as $comunidad)
        <li><a href="{{route('localidad.index',$comunidad->id)}}">{{$comunidad->comunidad->Comunidad}}</a></li>
        @endforeach
        <li><a href="{{route('localidad.create')}}">Alta Localidad</a></li>
    </ul>
</div>
