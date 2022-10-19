<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Evento;
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
        $codigo->mes = "Enero";
        $codigo->columna = 1;
        $codigo->fecha = "2023-01-06";
        $codigo->save();

        $codigo = new Evento();
        $codigo->nombre = "Viernes Santo";
        $codigo->descripcion = "nacional";
        $codigo->mes = "Abril";
        $codigo->columna = 1;
        $codigo->fecha = "2023-04-07";
        $codigo->save();

        $codigo = new Evento();
        $codigo->nombre = "Lunes de Pascua";
        $codigo->descripcion = "nacional";
        $codigo->mes = "Abril";
        $codigo->columna = 1;
        $codigo->fecha = "2023-04-10";
        $codigo->save();

        $codigo = new Evento();
        $codigo->nombre = "Fiesta del trabajo";
        $codigo->descripcion = "nacional";
        $codigo->mes = "Mayo";
        $codigo->columna = 1;
        $codigo->fecha = "2023-05-01";
        $codigo->save();

        $codigo = new Evento();
        $codigo->nombre = "San Juan";
        $codigo->descripcion = "nacional";
        $codigo->mes = "Junio";
        $codigo->columna = 1;
        $codigo->fecha = "2023-06-24";
        $codigo->save();

        $codigo = new Evento();
        $codigo->nombre = "Asunción de la Virgen";
        $codigo->descripcion = "nacional";
        $codigo->mes = "Agosto";
        $codigo->columna = 1;
        $codigo->fecha = "2023-08-15";
        $codigo->save();

        $codigo = new Evento();
        $codigo->nombre = "Día Comunitat Valenciana";
        $codigo->descripcion = "nacional";
        $codigo->mes = "Octubre";
        $codigo->columna = 2;
        $codigo->fecha = "2023-10-09";
        $codigo->save();

        $codigo = new Evento();
        $codigo->nombre = "Fiesta Nacional de España";
        $codigo->descripcion = "nacional";
        $codigo->mes = "octubre";
        $codigo->columna = 2;
        $codigo->fecha = "2023-10-12";
        $codigo->save();

        $codigo = new Evento();
        $codigo->nombre = "Todos los Santos";
        $codigo->descripcion = "nacional";
        $codigo->mes = "Noviembre";
        $codigo->columna = 2;
        $codigo->fecha = "2023-11-01";
        $codigo->save();

        $codigo = new Evento();
        $codigo->nombre = "Día Constitución Española";
        $codigo->descripcion = "nacional";
        $codigo->mes = "Diciembre";
        $codigo->columna = 2;
        $codigo->fecha = "2023-12-06";
        $codigo->save();

        $codigo = new Evento();
        $codigo->nombre = "Inmaculada Concepción";
        $codigo->descripcion = "nacional";
        $codigo->mes = "Diciembre";
        $codigo->columna = 2;
        $codigo->fecha = "2023-12-08";
        $codigo->save();

        $codigo = new Evento();
        $codigo->nombre = "Natividad del Señor";
        $codigo->descripcion = "nacional";
        $codigo->mes = "Diciembre";
        $codigo->columna = 2;
        $codigo->fecha = "2023-12-25";
        $codigo->save();

        $codigo = new Evento();
        $codigo->nombre = "Segundo lunes de Pascua";
        $codigo->descripcion = "local";
        $codigo->mes = "Abril";
        $codigo->columna = 3;
        $codigo->fecha = "2023-04-17";
        $codigo->save();

        $codigo = new Evento();
        $codigo->nombre = "Vnida de la Virgen";
        $codigo->descripcion = "local";
        $codigo->mes = "Diciembre";
        $codigo->columna = 3;
        $codigo->fecha = "2023-12-29";
        $codigo->save();
    }
}
