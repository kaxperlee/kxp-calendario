<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Evento;

class calendario extends Component
{
    public $mes;
    public $month;
    public $mespanish;
    public $datos;
    public $semanas;
    public $fontsize;
    public $color;
    public $fondo;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($month="", $fontsize="fs-5", $color="text-dark", $fondo="bg-white", $mespanish="")
    {
        if ($month=="") {$month = date("Y-m");}
        $datos = $this->calendar_month($month);
        $mes = $datos['month'];
        // obtener mes en espanol
        $mespanish = $this->spanish_month($mes);
        //$mes = $datos['month'];

        $this->mespanish = $mespanish;
        $this->mes = $mes;
        $this->month = $month;
        $this->datos = $datos;
        $this->fontsize = $fontsize;
        $this->color = $color;
        $this->fondo = $fondo;
    }
    public function index_month ()
    {
        $month = date("Y-m");
        $datos = $this->calendar_month($month);
        $mes = $datos['month'];
        // obtener mes en espanol
        $mespanish = $this->spanish_month($mes);
        $mes = $datos['month'];


        $this->mespanish = $mespanish;
        $this->mes = $mes;
        $this->month = $month;
        $this->datos = $datos;
    }
    public static function calendar_month($month){
        //$mes = date("Y-m");
        $mes = $month;
        //sacar el ultimo de dia del mes
        $daylast =  date("Y-m-d", strtotime("last day of ".$mes));
        //echo "<h2>daylast: ".$daylast."</h2>";
        //sacar el dia de dia del mes
        $fecha      =  date("Y-m-d", strtotime("first day of ".$mes));
        //echo "<h2>dayfirst: ".$fecha."</h2>";
        $daysmonth  =  date("d", strtotime($fecha));
        //echo "<h2>primer dia: ".$daysmonth."</h2>";

        $daysmonth2  =  date("d", strtotime($daylast));
        //echo "<h2>Ultimo dia: ".$daysmonth2."</h2>";

        //sumamos ultimo fia y los ultimos del mes anterior que entran en la primera semana y dividimos por 7, nos
        // na el numero de semanas
        $montmonth  =  date("m", strtotime($fecha));
        //echo "<h2>monthmonth: ".$montmonth."</h2>";
        $yearmonth  =  date("Y", strtotime($fecha));
        //echo "<h2>yearmonth: ".$yearmonth."</h2>";
        // sacar el lunes de la primera semana
        $nuevaFecha = mktime(0,0,0,$montmonth,$daysmonth,$yearmonth);
        //echo "<h2>yearmnueva fechaonth: ".$nuevaFecha."</h2>";
        $diaDeLaSemana = date("w", $nuevaFecha);
        if($diaDeLaSemana == 0){$diaDeLaSemana = 7;}
        //echo "<h2>dia semana: ".$diaDeLaSemana."</h2>";

        $totaldias = $diaDeLaSemana + $daysmonth2 - 1;
        //echo "<h2>Total dias: ".$totaldias."</h2>";
        $totalsemanas = ceil(((int)$totaldias/7));
        //echo "<h2>Total semanas: ".$totalsemanas."</h2>";

        $nuevaFecha = $nuevaFecha - ($diaDeLaSemana*24*3600); //Restar los segundos totales de los dias transcurridos de la semana
        $dateini = date ("Y-m-d",$nuevaFecha);

        //echo "<h2>dateini: ".$dateini."</h2>";
        //$dateini = date("Y-m-d",strtotime($dateini."+ 1 day"));



        $semana = $totalsemanas;
        // semana todal del mes
        $datafecha = $dateini;
        $calendario = array();
        $iweek = 0;
        while ($iweek < $semana):
            $iweek++;
            //echo "Semana $iweek <br>";
            //
            $weekdata = [];
            for ($iday=0; $iday < 7 ; $iday++){
              // code...
              $datafecha = date("Y-m-d",strtotime($datafecha."+ 1 day"));
              $datanew['mes'] = date("M", strtotime($datafecha));
              $datanew['dia'] = date("d", strtotime($datafecha));
              $datanew['fecha'] = $datafecha;
              $diaDeLaSemana = date("w", strtotime($datafecha));
              //echo "<h2>Dia de la semana: ".$diaDeLaSemana."</h2>";
              //DIA ACTUAL
              if ($datanew['dia'] == date("d") && $datanew['mes']==date("M")){$datanew['diaactual']='bg-warning';}else{$datanew['diaactual']="";}
              //AGREGAR CONSULTAS EVENTO
              //Domingos
              if ($diaDeLaSemana == 0){$datanew['festivo'] = "text-white bg-primary";}else{$datanew['festivo'] = "";}
              //if (Evento::where("fecha",$datafecha)->get()){$datanew['festivo2'] = "bg-warning";}else{$datanew['festivo2'] = "";}
              //echo "<h3>".$datanew['festivo2']."</h3>";
              if ($festivo = Evento::where("fecha",$datafecha)->first()){
                $festivo = $festivo->descripcion;}else {
                  $festivo = "";
                }
              $datanew['evento'] = $festivo;
              array_push($weekdata,$datanew);
            }
            $dataweek['semana'] = $iweek;
            $dataweek['datos'] = $weekdata;
            //$datafecha['horario'] = $datahorario;
            array_push($calendario,$dataweek);
        endwhile;
        $nextmonth = date("Y-M",strtotime($mes."+ 1 month"));
        $lastmonth = date("Y-M",strtotime($mes."- 1 month"));
        $month = date("M",strtotime($mes));
        $yearmonth = date("Y",strtotime($mes));
        //$month = date("M",strtotime("2019-03"));
        $data = array(
          'next' => $nextmonth,
          'month'=> $month,
          'year' => $yearmonth,
          'last' => $lastmonth,
          'calendar' => $calendario,
          'semanas' => $semana
        );
        return $data;
      }
    public static function spanish_month($month)
    {

        $mes = $month;
        if ($month=="Jan") {
          $mes = "Enero";
        }
        elseif ($month=="Feb")  {
          $mes = "Febrero";
        }
        elseif ($month=="Mar")  {
          $mes = "Marzo";
        }
        elseif ($month=="Apr") {
          $mes = "Abril";
        }
        elseif ($month=="May") {
          $mes = "Mayo";
        }
        elseif ($month=="Jun") {
          $mes = "Junio";
        }
        elseif ($month=="Jul") {
          $mes = "Julio";
        }
        elseif ($month=="Aug") {
          $mes = "Agosto";
        }
        elseif ($month=="Sep") {
          $mes = "Septiembre";
        }
        elseif ($month=="Oct") {
          $mes = "Octubre";
        }
        elseif ($month=="Nov") {
          $mes = "Noviembre";
        }
        elseif ($month=="Dec") {
          $mes = "Diciembre";
        }
        else {
          $mes = $month;
        }
        return $mes;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.calendario');
    }
}
