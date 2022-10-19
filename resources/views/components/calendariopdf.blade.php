
<div id="MesCal">{{$mespanish}} {{$datos['year']}}</div>
<table width="100%">
    <tr style="border-bottom: 1px solid white;border-top: 1px solid white;">
        <th id="ThCal"  style="">L</th>
        <th id="ThCal"  style="">M</th>
        <th id="ThCal"  style="">X</th>
        <th id="ThCal"  style="">J</th>
        <th id="ThCal"  style="">V</th>
        <th id="ThCal"  style="">S</th>
        <th id="ThCal"  style="">D</th>
    </tr>
    @foreach ($datos['calendar'] as $weekdata)
        <!-- ciclo de dia por semana -->
        <tr>
        @foreach  ($weekdata['datos'] as $dayweek)
            @if  ($dayweek['mes']==$mes)
                <td id="TdCal" class="{{$dayweek['festivo']}} {{$dayweek['diaactual']}}   {{$dayweek['evento']}} {{$fontsize}}">
                    {{ $dayweek['dia']  }}
                </td>
            @else
                <td id="TdCal" class="box-dayoff"></td>
            @endif
        @endforeach
        </tr>
    @endforeach
    @if ($datos['semanas']==5)
    <tr>
        <td id="TdCal" colspan="7">&nbsp;</td>
    </tr>
    @endif
    @if ($datos['semanas']==4)
    <tr>
        <td id="TdCal" colspan="7">&nbsp;</td>
    </tr>
    <tr>
        <td id="TdCal" colspan="7">&nbsp;</td>
    </tr>
    @endif
</table>

