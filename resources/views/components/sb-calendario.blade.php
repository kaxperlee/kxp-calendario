<div>
    <x-cab1 texto="Calendario" />
    <x-calendario fontsize="fs-6" month="" tipo="sb" />
    <x-cab1 texto="Control horario" />
    <ul>
        <li><a href="{{ url("/horario/".date($fecha4['date'])) }}">{{$fecha4['nombre']}}</a></li>
        <li><a href="{{ url("/horario/".date($fecha3['date'])) }}">{{$fecha3['nombre']}}</a></li>
        <li><a href="{{ url("/horario") }}">{{$fecha['nombre']}}</a></li>
    </ul>
    <x-cab1 texto="Calendario laboral" />
    <ul>
        <li><a href="{{ url("/calendario/".($year-1)) }}">{{$year-1}}</a></li>
        <li><a href="{{ url("/calendario/".($year)) }}">{{$year}}</a></li>
        <li><a href="{{ url("/calendario/".($year+1)) }}">{{$year+1}}</a></li>
    </ul>
    <x-cab1 texto="Plantilla horario" />
    <ul>
        <li><a href="{{ url("/horario/pdf/".$fecha3['date']) }}">{{$fecha3['nombre']}}</a></li>
        <li><a href="{{ url("/horario/pdf/".$fecha['date']) }}">{{$fecha['nombre']}}</a></li>
        <li><a href="{{ url("/horario/pdf/".$fecha2['date']) }}">{{$fecha2['nombre']}}</a></li>
    </ul>
</div>