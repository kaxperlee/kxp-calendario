<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Evento;
use App\Models\Empresa;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $codigo = new Evento();
        $codigo->nombre = "Epifanía del Señor";
        $codigo->descripcion = "nacional";
        $codigo->Tipo = "n";
        $codigo->ano = "2023";
        $codigo->mes = "Enero";
        $codigo->dia = "06";
        $codigo->columna = 1;
        $codigo->fecha = "2023-01-06";
        $codigo->save();

        $codigo = new Evento();
        $codigo->nombre = "Viernes Santo";
        $codigo->descripcion = "nacional";
        $codigo->Tipo = "n";
        $codigo->ano = "2023";
        $codigo->dia = "07";
        $codigo->mes = "Abril";
        $codigo->columna = 1;
        $codigo->fecha = "2023-04-07";
        $codigo->save();

        $codigo = new Evento();
        $codigo->nombre = "Lunes de Pascua";
        $codigo->descripcion = "nacional";
        $codigo->Tipo = "n";
        $codigo->ano = "2023";
        $codigo->dia = "10";
        $codigo->mes = "Abril";
        $codigo->columna = 1;
        $codigo->fecha = "2023-04-10";
        $codigo->save();

        $codigo = new Evento();
        $codigo->nombre = "Fiesta del trabajo";
        $codigo->descripcion = "nacional";
        $codigo->Tipo = "n";
        $codigo->ano = "2023";
        $codigo->dia = "01";
        $codigo->mes = "Mayo";
        $codigo->columna = 1;
        $codigo->fecha = "2023-05-01";
        $codigo->save();

        $codigo = new Evento();
        $codigo->nombre = "San Juan";
        $codigo->descripcion = "nacional";
        $codigo->Tipo = "n";
        $codigo->ano = "2023";
        $codigo->dia = "24";
        $codigo->mes = "Junio";
        $codigo->columna = 1;
        $codigo->fecha = "2023-06-24";
        $codigo->save();

        $codigo = new Evento();
        $codigo->nombre = "Asunción de la Virgen";
        $codigo->descripcion = "nacional";
        $codigo->Tipo = "n";
        $codigo->ano = "2023";
        $codigo->dia = "15";
        $codigo->mes = "Agosto";
        $codigo->columna = 1;
        $codigo->fecha = "2023-08-15";
        $codigo->save();

        $codigo = new Evento();
        $codigo->nombre = "Día Comunitat Valenciana";
        $codigo->descripcion = "nacional";
        $codigo->Tipo = "C.Valenciana";
        $codigo->ano = "2023";
        $codigo->dia = "09";
        $codigo->mes = "Octubre";
        $codigo->columna = 2;
        $codigo->fecha = "2023-10-09";
        $codigo->save();

        $codigo = new Evento();
        $codigo->nombre = "Fiesta Nacional de España";
        $codigo->descripcion = "nacional";
        $codigo->Tipo = "n";
        $codigo->ano = "2023";
        $codigo->dia = "14";
        $codigo->mes = "octubre";
        $codigo->columna = 2;
        $codigo->fecha = "2023-10-12";
        $codigo->save();

        $codigo = new Evento();
        $codigo->nombre = "Todos los Santos";
        $codigo->descripcion = "nacional";
        $codigo->Tipo = "n";
        $codigo->ano = "2023";
        $codigo->dia = "01";
        $codigo->mes = "Noviembre";
        $codigo->columna = 2;
        $codigo->fecha = "2023-11-01";
        $codigo->save();

        $codigo = new Evento();
        $codigo->nombre = "Día Constitución Española";
        $codigo->descripcion = "nacional";
        $codigo->Tipo = "n";
        $codigo->ano = "2023";
        $codigo->dia = "06";
        $codigo->mes = "Diciembre";
        $codigo->columna = 2;
        $codigo->fecha = "2023-12-06";
        $codigo->save();

        $codigo = new Evento();
        $codigo->nombre = "Inmaculada Concepción";
        $codigo->descripcion = "nacional";
        $codigo->Tipo = "n";
        $codigo->ano = "2023";
        $codigo->dia = "08";
        $codigo->mes = "Diciembre";
        $codigo->columna = 2;
        $codigo->fecha = "2023-12-08";
        $codigo->save();

        $codigo = new Evento();
        $codigo->nombre = "Natividad del Señor";
        $codigo->descripcion = "nacional";
        $codigo->Tipo = "n";
        $codigo->ano = "2023";
        $codigo->dia = "25";
        $codigo->mes = "Diciembre";
        $codigo->columna = 2;
        $codigo->fecha = "2023-12-25";
        $codigo->save();

        $codigo = new Evento();
        $codigo->nombre = "Segundo lunes de Pascua";
        $codigo->descripcion = "local";
        $codigo->Tipo = "Elche";
        $codigo->ano = "2023";
        $codigo->dia = "17";
        $codigo->mes = "Abril";
        $codigo->columna = 3;
        $codigo->fecha = "2023-04-17";
        $codigo->save();

        $codigo = new Evento();
        $codigo->nombre = "Venida de la Virgen";
        $codigo->descripcion = "local";
        $codigo->Tipo = "Elche";
        $codigo->ano = "2023";
        $codigo->dia = "29";
        $codigo->mes = "Diciembre";
        $codigo->columna = 3;
        $codigo->fecha = "2023-12-29";
        $codigo->save();


        $codigo = new Evento();
        $codigo->nombre = "Año nuevo";
        $codigo->descripcion = "nacional";
        $codigo->Tipo = "n";
        $codigo->ano = "2022";
        $codigo->mes = "Enero";
        $codigo->dia = "01";
        $codigo->columna = 1;
        $codigo->fecha = "2022-01-01";
        $codigo->save();

        $codigo = new Evento();
        $codigo->nombre = "Epifanía del Señor";
        $codigo->descripcion = "nacional";
        $codigo->Tipo = "n";
        $codigo->ano = "2022";
        $codigo->mes = "Enero";
        $codigo->dia = "06";
        $codigo->columna = 1;
        $codigo->fecha = "2022-01-06";
        $codigo->save();

        $codigo = new Evento();
        $codigo->nombre = "San José";
        $codigo->descripcion = "nacional";
        $codigo->Tipo = "n";
        $codigo->ano = "2022";
        $codigo->mes = "Marzo";
        $codigo->dia = "19";
        $codigo->columna = 1;
        $codigo->fecha = "2022-03-19";
        $codigo->save();

        $codigo = new Evento();
        $codigo->nombre = "Jueves Santo";
        $codigo->descripcion = "nacional";
        $codigo->Tipo = "n";
        $codigo->ano = "2022";
        $codigo->mes = "Abril";
        $codigo->dia = "14";
        $codigo->columna = 1;
        $codigo->fecha = "2022-04-14";
        $codigo->save();

        $codigo = new Evento();
        $codigo->nombre = "Viernes Santo";
        $codigo->descripcion = "nacional";
        $codigo->Tipo = "n";
        $codigo->ano = "2022";
        $codigo->dia = "15";
        $codigo->mes = "Abril";
        $codigo->columna = 1;
        $codigo->fecha = "2022-04-15";
        $codigo->save();

        $codigo = new Evento();
        $codigo->nombre = "Lunes de Pascua";
        $codigo->descripcion = "nacional";
        $codigo->Tipo = "n";
        $codigo->ano = "2022";
        $codigo->dia = "18";
        $codigo->mes = "Abril";
        $codigo->columna = 1;
        $codigo->fecha = "2022-04-18";
        $codigo->save();

        $codigo = new Evento();
        $codigo->nombre = "San Juan";
        $codigo->descripcion = "nacional";
        $codigo->Tipo = "n";
        $codigo->ano = "2022";
        $codigo->dia = "24";
        $codigo->mes = "Junio";
        $codigo->columna = 1;
        $codigo->fecha = "2022-06-24";
        $codigo->save();

        $codigo = new Evento();
        $codigo->nombre = "Asunción de la Virgen";
        $codigo->descripcion = "nacional";
        $codigo->Tipo = "n";
        $codigo->ano = "2022";
        $codigo->dia = "15";
        $codigo->mes = "Agosto";
        $codigo->columna = 1;
        $codigo->fecha = "2022-08-15";
        $codigo->save();

        $codigo = new Evento();
        $codigo->nombre = "Fiesta Nacional de España";
        $codigo->descripcion = "nacional";
        $codigo->Tipo = "n";
        $codigo->ano = "2022";
        $codigo->dia = "14";
        $codigo->mes = "octubre";
        $codigo->columna = 2;
        $codigo->fecha = "2022-10-12";
        $codigo->save();

        $codigo = new Evento();
        $codigo->nombre = "Todos los Santos";
        $codigo->descripcion = "nacional";
        $codigo->Tipo = "n";
        $codigo->ano = "2022";
        $codigo->dia = "01";
        $codigo->mes = "Noviembre";
        $codigo->columna = 2;
        $codigo->fecha = "2022-11-01";
        $codigo->save();

        $codigo = new Evento();
        $codigo->nombre = "Día Constitución Española";
        $codigo->descripcion = "nacional";
        $codigo->Tipo = "n";
        $codigo->ano = "2022";
        $codigo->dia = "06";
        $codigo->mes = "Diciembre";
        $codigo->columna = 2;
        $codigo->fecha = "2022-12-06";
        $codigo->save();

        $codigo = new Evento();
        $codigo->nombre = "Inmaculada Concepción";
        $codigo->descripcion = "C.Valenciana";
        $codigo->Tipo = "n";
        $codigo->ano = "2022";
        $codigo->dia = "08";
        $codigo->mes = "Diciembre";
        $codigo->columna = 2;
        $codigo->fecha = "2022-12-08";
        $codigo->save();

        $codigo = new Evento();
        $codigo->nombre = "San Vicente Ferrer";
        $codigo->descripcion = "local";
        $codigo->Tipo = "Elche";
        $codigo->ano = "2022";
        $codigo->dia = "25";
        $codigo->mes = "Abril";
        $codigo->columna = 3;
        $codigo->fecha = "2022-04-25";
        $codigo->save();

        $codigo = new Evento();
        $codigo->nombre = "Venida de la Virgen";
        $codigo->descripcion = "local";
        $codigo->Tipo = "Elche";
        $codigo->ano = "2022";
        $codigo->dia = "29";
        $codigo->mes = "Diciembre";
        $codigo->columna = 3;
        $codigo->fecha = "2022-12-29";
        $codigo->save();

        $codigo = new Empresa();
        $codigo->Empresa = "3DFILAMENTS SL";
        $codigo->Domicilio = "CL EMILIO SALA HERNANDEZ 49";
        $codigo->Actividad = "FCA.PROD.QUIMICOS";
        $codigo->Convenio = "INDUSTRIA QUÍMICA";
        $codigo->Localidad = "Elche";
        $codigo->Comunidad = "C.Valenciana";
        $codigo->save();

        $codigo = new Empresa();
        $codigo->Empresa = "2014 MI ALMACEN S.L.";
        $codigo->Domicilio = "CL/ ESPRONCEDA Nº 120";
        $codigo->Actividad = "PERFUMERÍA Y DROGUERÍA";
        $codigo->Convenio = "COMERCIO MINORISTA DE DROGUERÍAS, HERBORISTERÍAS Y PERFUMERÍAS";
        $codigo->Localidad = "Elche";
        $codigo->Comunidad = "C.Valenciana";
        $codigo->save();
    }
}
