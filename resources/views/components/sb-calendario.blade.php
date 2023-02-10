<div>
    <x-cal fontsize="fs-6" month="" tipo="sb" />
    <x-cab1 texto="CALENDARIO LABORAL" />
    <ul>
        @foreach ($eventos as $evento)
        <li><a href="{{ url("/calendario/".($evento->ano)) }}">{{$evento->ano}}</a></li>
        @endforeach
        @foreach ($eventos as $evento)
        <li><a href="{{route('calendario.empresas', $evento->ano)}}">Empresas {{$evento->ano}}</a></li>
        @endforeach
        
    </ul>
    <x-cab1 texto="Empresas" />
    <ul>
        @if ($empresas > 0)
        <li><a href="{{route('empresa.index')}}">Empresas <span class="badge bg-secondary">{{$empresas}}</span></a></li> 
        @endif
        
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
        <li><a href="{{route('localidad.index',$comunidad->comunidad_id)}}">{{$comunidad->comunidad->Comunidad}}</a></li>
        @endforeach
        <li><a href="{{route('localidad.create')}}">Alta Localidad</a></li>
    </ul>
</div>
