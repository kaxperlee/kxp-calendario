<div class="container px-0">
    <div class="d-flex bg-primary text-white"  >
        <div class="text-center py-2 mx-auto">
            <h5 class="text-uppercase my-0 {{$fontsize}}">{{$mespanish}} {{$datos['year']}}</h5>
        </div>
    </div>
    <table width="100%" class="{{$fondo}} {{$color}} mb-0">
      <tr style="border-bottom: 1px solid white;border-top: 1px solid white;">
        <th class="py-1 {{$fontsize}}" style="text-align: center">L</th>
        <th class="py-1 {{$fontsize}}" style="text-align: center">M</th>
        <th class="py-1 {{$fontsize}}" style="text-align: center">X</th>
        <th class="py-1 {{$fontsize}}" style="text-align: center">J</th>
        <th class="py-1 {{$fontsize}}" style="text-align: center">V</th>
        <th class="py-1 {{$fontsize}}" style="text-align: center">S</th>
        <th class="py-1 {{$fontsize}}" style="text-align: center">D</th>
      </tr>
      @foreach ($datos['calendar'] as $weekdata)
        <!-- ciclo de dia por semana -->
        <tr>
        @foreach  ($weekdata['datos'] as $dayweek)
          @if  ($dayweek['mes']==$mes)
            <td style="" class="{{$dayweek['festivo']}} py-1 text-center {{$dayweek['diaactual']}}   {{$dayweek['evento']}} {{$fontsize}}">
               {{ $dayweek['dia']  }}
            </td>
          @else
          <td class="box-dayoff  py-1"></td>
          @endif
        @endforeach
          </tr>
      @endforeach
      @if ($datos['semanas']==5)
      <tr>
        <td colspan="7" class='{{$fontsize}} py-1'>&nbsp;</td>
      </tr>
      @endif
      @if ($datos['semanas']==4)
      <tr>
        <td colspan="7" class='{{$fontsize}} py-1'>&nbsp;</td>
      </tr>
      <tr>
        <td colspan="7" class='fs-5 py-1'>&nbsp;</td>
      </tr>
      @endif
      
    </table>
</div>