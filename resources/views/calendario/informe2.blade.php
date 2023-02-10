<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link REL="stylesheet" href="{{asset('assets/css/reboot.css')}}">

    <link REL="stylesheet" href="{{asset('css/pdf.css')}}">
</head>
<body>
    <div class="container-fluid px-0">
        <table class="HeadTable">
            <tr vertical-align="top">
                <td  class='HeadLogo'><img src="{{asset('img/logo.png')}}"  width="250" alt="Grupo Asesor Ros"></td>
                <td  class='HeadTitulo'><h2>Calendario laboral {{$fecha}}</h2><br></td>
            </tr>
        </table>

        <table style='width:100%;border: 0px solid #ccc; border-collapse: collapse;margin-top:10px;'>
            <tr>
                <td style='text-align:left;width:5%'>Empresa:</td>
                <td style='text-align:left;width:65%;border-bottom:1px solid #ccc'><strong>{{$empresa->Empresa}}</strong></td>
                <td style='text-align:left;width:5%'>Localidad:</td>
                <td style='text-align:left;width:25%;border-bottom:1px solid #ccc'>{{strtoupper($empresa->Localidad->Localidad)}}</td>
            </tr>
            <tr>
                <td colspan="1" style='text-align:left;width:5%'>Domicilio:</td>
                <td colspan="3" style='text-align:left;width:65%;border-bottom:1px solid #ccc'>{{$empresa->Domicilio}}</td>
            </tr>
            <tr>
                <td colspan="1" style='text-align:left;width:5%'>Actividad:</td>
                <td colspan="3" style='text-align:left;width:65%;border-bottom:1px solid #ccc'>{{$empresa->Actividad}}</td>
            </tr>
            <tr>
                <td colspan="1" style='text-align:left;width:5%'>Convenio:</td>
                <td colspan="3" style='text-align:left;width:65%;border-bottom:1px solid #ccc'>{{$empresa->Convenio}}</td>
            </tr>
        </table>
        <table class="HeadTable2" style='margin-top:20px;'>
            <tr>
                <td style='padding:10px 10px 5px 0px'><x-calendariopdf localidad="{{$empresa->localidad_id}}" comunidad="{{$empresa->localidad->comunidad_id}}" month="{{$fecha}}-01" /></td>
                <td style='padding:10px 10px 5px 0px'><x-calendariopdf localidad="{{$empresa->localidad_id}}" comunidad="{{$empresa->localidad->comunidad_id}}" month="{{$fecha}}-02" /></td>
                <td style='padding:10px 10px 5px 0px'><x-calendariopdf localidad="{{$empresa->localidad_id}}" comunidad="{{$empresa->localidad->comunidad_id}}" month="{{$fecha}}-03" /></td>
                <td style='padding:10px 0px 5px 0px'><x-calendariopdf localidad="{{$empresa->localidad_id}}" comunidad="{{$empresa->localidad->comunidad_id}}" month="{{$fecha}}-04" /></td>
            </tr>
            <tr>
                <td style='padding:5px 10px 5px 0px'><x-calendariopdf localidad="{{$empresa->localidad_id}}" comunidad="{{$empresa->localidad->comunidad_id}}" month="{{$fecha}}-05" /></td>
                <td style='padding:5px 10px 5px 0px'><x-calendariopdf localidad="{{$empresa->localidad_id}}" comunidad="{{$empresa->localidad->comunidad_id}}" month="{{$fecha}}-06" /></td>
                <td style='padding:5px 10px 5px 0px'><x-calendariopdf localidad="{{$empresa->localidad_id}}" comunidad="{{$empresa->localidad->comunidad_id}}" month="{{$fecha}}-07" /></td>
                <td style='padding:5px 0px 5px 0px'><x-calendariopdf localidad="{{$empresa->localidad_id}}" comunidad="{{$empresa->localidad->comunidad_id}}" month="{{$fecha}}-08" /></td>
            </tr>
            <tr>
                <td style='padding:5px 10px 5px 0px'><x-calendariopdf localidad="{{$empresa->localidad_id}}" comunidad="{{$empresa->localidad->comunidad_id}}" month="{{$fecha}}-09" /></td>
                <td style='padding:5px 10px 5px 0px'><x-calendariopdf localidad="{{$empresa->localidad_id}}" comunidad="{{$empresa->localidad->comunidad_id}}" month="{{$fecha}}-10" /></td>
                <td style='padding:5px 10px 5px 0px'><x-calendariopdf localidad="{{$empresa->localidad_id}}" comunidad="{{$empresa->localidad->comunidad_id}}" month="{{$fecha}}-11" /></td>
                <td style='padding:5px 0px 5px 0px'><x-calendariopdf localidad="{{$empresa->localidad_id}}" comunidad="{{$empresa->localidad->comunidad_id}}" month="{{$fecha}}-12" /></td>
            </tr>
        </table>
        <table style='width:100%;border: 1px solid #3a5e43; border-collapse: collapse;margin-top:20px;'>
            <tr>
                <th colspan="2" class="ThCab"><span class="DiasCab">Fiestas {{$empresa->Localidad->Comunidad->Comunidad}}</span></th>
                <th class="ThCab"><span class="DiasCab2">Fiestas locales</span></th>
            </tr>
            <tr>
                <td valign="top">
                    @foreach ($fiestasc as $fiestac)
                        @if  ($fiestac->columna == 1 and $loop->iteration <= $loop->count/2)
                            <div id="dias">{{date('d',strtotime($fiestac->fecha))}} {{$fiestac->mes}} <span id="diasmes">{{$fiestac->nombre}}</span></div>
                        @endif
                    @endforeach
                </td>
                <td valign="top">
                    @foreach ($fiestasc as $fiestac)
                        @if  ($fiestac->columna == 1 and $loop->iteration > $loop->count/2)
                        <div id="dias">{{date('d',strtotime($fiestac->fecha))}} {{$fiestac->mes}} <span id="diasmes">{{$fiestac->nombre}}</span></div>
                        @endif
                    @endforeach
                </td>
                <td id="margenlocal" valign="top">
                    @foreach ($fiestasl as $fiestal)
                    @if  ($fiestal->columna == 2)
                    <div id="dias2">{{date('d',strtotime($fiestal->fecha))}} {{$fiestal->mes}} <span id="diasmes">{{$fiestal->nombre}}</span></div>
                    @endif
                    @endforeach
                </td>
            </tr>
        </table>
        <table style='margin-top:20px;' width="100%">
            <tr>
                <td width="75">Observaciones: </td>
                <td style='text-align:right' width="25">{{$empresa->Localidad->Localidad}}, a 1 de enero de {{$fecha}}</td>
            </tr>

        </table>
    </div>
</body>
</html>








