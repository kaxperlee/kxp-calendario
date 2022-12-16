<?php

namespace App\View\Components;

use App\Models\Evento;
use Illuminate\View\Component;

class SbCalendario extends Component
{
    public $year;
    public $fecha;
    public $fecha2;
    public $fecha3;
    public $fecha4;
    public $eventos;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->eventos = Evento::select('ano')->groupBy('ano')->get();
        $this->year = date("Y");
        $this->fecha['date'] = date("Y-m");
        $this->fecha['nombre'] = $this->spanish_month(date("M", strtotime( $this->fecha['date'])))." ".date("Y",strtotime($this->fecha['date']));
        $this->fecha2['date'] = date("Y-m",strtotime($this->fecha['date']."+ 1 month"));
        $this->fecha2['nombre'] = $this->spanish_month(date("M", strtotime( $this->fecha2['date'])))." ".date("Y",strtotime($this->fecha2['date']));
        $this->fecha3['date'] = date("Y-m",strtotime($this->fecha['date']."- 1 month"));
        $this->fecha3['nombre'] = $this->spanish_month(date("M", strtotime( $this->fecha3['date'])))." ".date("Y",strtotime($this->fecha3['date']));
        $this->fecha4['date'] = date("Y-m",strtotime($this->fecha['date']."- 2 month"));
        $this->fecha4['nombre'] = $this->spanish_month(date("M", strtotime( $this->fecha4['date'])))." ".date("Y",strtotime($this->fecha4['date']));




        //echo "<h3>Holassss</h3>";
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
        return view('components.sb-calendario');
    }
}
