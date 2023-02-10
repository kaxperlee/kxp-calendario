<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\CalComunidad;
use App\Models\CalLocalidad;
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

$codigo = new CalComunidad();
$codigo->Comunidad= "Comunidad Valenciana";
$codigo->save();

$codigo = new CalComunidad();
$codigo->Comunidad= "Región de Murcia";
$codigo->save();

$codigo = new CalComunidad();
$codigo->Comunidad= "Andalucía";
$codigo->save();

$codigo = new CalComunidad();
$codigo->Comunidad= "Aragón";
$codigo->save();

$codigo = new CalComunidad();
$codigo->Comunidad= "Principado de Asturias";
$codigo->save();

$codigo = new CalComunidad();
$codigo->Comunidad= "Illes Balears";
$codigo->save();

$codigo = new CalComunidad();
$codigo->Comunidad= "Canarias";
$codigo->save();

$codigo = new CalComunidad();
$codigo->Comunidad= "Cantabria";
$codigo->save();

$codigo = new CalComunidad();
$codigo->Comunidad= "Castilla y León";
$codigo->save();

$codigo = new CalComunidad();
$codigo->Comunidad= "Castilla-La Mancha";
$codigo->save();

$codigo = new CalComunidad();
$codigo->Comunidad= "cataluña";
$codigo->save();

$codigo = new CalComunidad();
$codigo->Comunidad= "Extremadura";
$codigo->save();

$codigo = new CalComunidad();
$codigo->Comunidad= "Comunidad de Madrid";
$codigo->save();

$codigo = new CalComunidad();
$codigo->Comunidad= "Navarra";
$codigo->save();

$codigo = new CalComunidad();
$codigo->Comunidad= "País Vasco";
$codigo->save();

$codigo = new CalComunidad();
$codigo->Comunidad= "La Rioja";
$codigo->save();

$codigo = new CalComunidad();
$codigo->Comunidad= "Ceuta";
$codigo->save();
$codigo = new CalComunidad();
$codigo->Comunidad= "Melilla";
$codigo->save();

$codigo = new CalComunidad();
$codigo->Comunidad= "Ceuta";
$codigo->save();


//Localidades
$codigo = new CalLocalidad();
$codigo->comunidad_id = 1;
$codigo->Localidad = "Alicante";
$codigo->save();

$codigo = new CalLocalidad();
$codigo->comunidad_id = 1;
$codigo->Localidad = "Almoradí";
$codigo->save();

$codigo = new CalLocalidad();
$codigo->comunidad_id = 1;
$codigo->Localidad = "Altea";
$codigo->save();

$codigo = new CalLocalidad();
$codigo->comunidad_id = 1;
$codigo->Localidad = "Aspe";
$codigo->save();

$codigo = new CalLocalidad();
$codigo->comunidad_id = 1;
$codigo->Localidad = "Benijofar";
$codigo->save();

$codigo = new CalLocalidad();
$codigo->comunidad_id = 1;
$codigo->Localidad = "Callosa de Segura";
$codigo->save();

$codigo = new CalLocalidad();
$codigo->comunidad_id = 1;
$codigo->Localidad = "Castala";
$codigo->save();

$codigo = new CalLocalidad();
$codigo->comunidad_id = 1;
$codigo->Localidad = "Catral";
$codigo->save();

$codigo = new CalLocalidad();
$codigo->comunidad_id = 1;
$codigo->Localidad = "Cox";
$codigo->save();

$codigo = new CalLocalidad();
$codigo->comunidad_id = 1;
$codigo->Localidad = "Crevillente";
$codigo->save();

$codigo = new CalLocalidad();
$codigo->comunidad_id = 1;
$codigo->Localidad = "Elche";
$codigo->save();

$codigo = new CalLocalidad();
$codigo->comunidad_id = 1;
$codigo->Localidad = "Elda";
$codigo->save();

$codigo = new CalLocalidad();
$codigo->comunidad_id = 1;
$codigo->Localidad = "Guardamar";
$codigo->save();

$codigo = new CalLocalidad();
$codigo->comunidad_id = 1;
$codigo->Localidad = "Hondón de las Nieves";
$codigo->save();

$codigo = new CalLocalidad();
$codigo->comunidad_id = 13;
$codigo->Localidad = "Madrid";
$codigo->save();

$codigo = new CalLocalidad();
$codigo->comunidad_id = 2;
$codigo->Localidad = "Molina de Segura";
$codigo->save();

$codigo = new CalLocalidad();
$codigo->comunidad_id = 2;
$codigo->Localidad = "Murcia";
$codigo->save();

$codigo = new CalLocalidad();
$codigo->comunidad_id = 1;
$codigo->Localidad = "Novelda";
$codigo->save();

$codigo = new CalLocalidad();
$codigo->comunidad_id = 1;
$codigo->Localidad = "Orihuela";
$codigo->save();

$codigo = new CalLocalidad();
$codigo->comunidad_id = 1;
$codigo->Localidad = "petrer";
$codigo->save();

$codigo = new CalLocalidad();
$codigo->comunidad_id = 1;
$codigo->Localidad = "Redovan";
$codigo->save();

$codigo = new CalLocalidad();
$codigo->comunidad_id = 1;
$codigo->Localidad = "Rojales";
$codigo->save();

$codigo = new CalLocalidad();
$codigo->comunidad_id = 1;
$codigo->Localidad = "San Juan de Alicante";
$codigo->save();

$codigo = new CalLocalidad();
$codigo->comunidad_id = 1;
$codigo->Localidad = "San Vicente del Raspeig";
$codigo->save();

$codigo = new CalLocalidad();
$codigo->comunidad_id = 1;
$codigo->Localidad = "Santa Pola";
$codigo->save();

$codigo = new CalLocalidad();
$codigo->comunidad_id = 1;
$codigo->Localidad = "Torrevieja";
$codigo->save();

$codigo = new CalLocalidad();
$codigo->comunidad_id = 1;
$codigo->Localidad = "Villajoyosa";
$codigo->save();

$codigo = new CalLocalidad();
$codigo->comunidad_id = 1;
$codigo->Localidad = "Villena";
$codigo->save();

//Fiestas Nacionales 2023
$codigo = new Evento();
$codigo->nombre = "Viernes Santo";
$codigo->Evento = "n";
$codigo->descripcion = "nacional";
$codigo->Tipo = "Nacional";
$codigo->ano = "2023";
$codigo->dia = "07";
$codigo->mes = "Abril";
$codigo->columna = 1;
$codigo->fecha = "2023-04-07";
$codigo->save();

$codigo = new Evento();
$codigo->nombre = "Día del trabajo";
$codigo->Evento = "n";
$codigo->descripcion = "nacional";
$codigo->Tipo = "Nacional";
$codigo->ano = "2023";
$codigo->dia = "01";
$codigo->mes = "Mayo";
$codigo->columna = 1;
$codigo->fecha = "2023-05-01";
$codigo->save();

$codigo = new Evento();
$codigo->nombre = "Asunción de la Virgen";
$codigo->Evento = "n";
$codigo->descripcion = "nacional";
$codigo->Tipo = "Nacional";
$codigo->ano = "2023";
$codigo->dia = "15";
$codigo->mes = "Agosto";
$codigo->columna = 1;
$codigo->fecha = "2023-08-15";
$codigo->save();

$codigo = new Evento();
$codigo->nombre = "Fiesta Nacional";
$codigo->Evento = "n";
$codigo->descripcion = "nacional";
$codigo->Tipo = "Nacional";
$codigo->ano = "2023";
$codigo->dia = "14";
$codigo->mes = "octubre";
$codigo->columna = 1;
$codigo->fecha = "2023-10-12";
$codigo->save();

$codigo = new Evento();
$codigo->nombre = "Todos los Santos";
$codigo->Evento = "n";
$codigo->descripcion = "nacional";
$codigo->Tipo = "Nacional";
$codigo->ano = "2023";
$codigo->dia = "01";
$codigo->mes = "Noviembre";
$codigo->columna = 1;
$codigo->fecha = "2023-11-01";
$codigo->save();

$codigo = new Evento();
$codigo->nombre = "Día de la Constitución";
$codigo->Evento = "n";
$codigo->descripcion = "nacional";
$codigo->Tipo = "Nacional";
$codigo->ano = "2023";
$codigo->dia = "06";
$codigo->mes = "Diciembre";
$codigo->columna = 1;
$codigo->fecha = "2023-12-06";
$codigo->save();

$codigo = new Evento();
$codigo->nombre = "Inmaculada Concepción";
$codigo->Evento = "n";
$codigo->descripcion = "nacional";
$codigo->Tipo = "Nacional";
$codigo->ano = "2023";
$codigo->dia = "08";
$codigo->mes = "Diciembre";
$codigo->columna = 1;
$codigo->fecha = "2023-12-08";
$codigo->save();

$codigo = new Evento();
$codigo->nombre = "Natividad del Señor";
$codigo->Evento = "n";
$codigo->descripcion = "nacional";
$codigo->Tipo = "Nacional";
$codigo->ano = "2023";
$codigo->dia = "25";
$codigo->mes = "Diciembre";
$codigo->columna = 1;
$codigo->fecha = "2023-12-25";
$codigo->save();

//Fiestas Comunidad Valenciana 2023

$codigo = new Evento();
$codigo->nombre = "Epifanía del Señor";
$codigo->Evento = "c";
$codigo->comunidad_id = 1;
$codigo->descripcion = "nacional";
$codigo->Tipo = "Valenciana";
$codigo->ano = "2023";
$codigo->mes = "Enero";
$codigo->dia = "06";
$codigo->columna = 1;
$codigo->fecha = "2023-01-06";
$codigo->save();

$codigo = new Evento();
$codigo->nombre = "Lunes de Pascua";
$codigo->Evento = "c";
$codigo->comunidad_id = 1;
$codigo->descripcion = "nacional";
$codigo->Tipo = "Valenciana";
$codigo->ano = "2023";
$codigo->dia = "10";
$codigo->mes = "Abril";
$codigo->columna = 1;
$codigo->fecha = "2023-04-10";
$codigo->save();

$codigo = new Evento();
$codigo->nombre = "San Juan";
$codigo->Evento = "c";
$codigo->comunidad_id = 1;
$codigo->descripcion = "nacional";
$codigo->Tipo = "Valenciana";
$codigo->ano = "2023";
$codigo->dia = "24";
$codigo->mes = "Junio";
$codigo->columna = 1;
$codigo->fecha = "2023-06-24";
$codigo->save();

$codigo = new Evento();
$codigo->nombre = "Día Comunitat Valenciana";
$codigo->Evento = "c";
$codigo->comunidad_id = 1;
$codigo->descripcion = "nacional";
$codigo->Tipo = "Valenciana";
$codigo->ano = "2023";
$codigo->dia = "09";
$codigo->mes = "Octubre";
$codigo->columna = 1;
$codigo->fecha = "2023-10-09";
$codigo->save();

//Festivos locales Elche

$codigo = new Evento();
$codigo->nombre = "Segundo lunes de Pascua";
$codigo->Evento = "l";
$codigo->localidad_id = 11;
$codigo->descripcion = "local";
$codigo->Tipo = "Local";
$codigo->ano = "2023";
$codigo->dia = "17";
$codigo->mes = "Abril";
$codigo->columna = 2;
$codigo->fecha = "2023-04-17";
$codigo->save();

$codigo = new Evento();
$codigo->nombre = "Venida de la Virgen";
$codigo->Evento = "l";
$codigo->localidad_id = 11;
$codigo->descripcion = "local";
$codigo->Tipo = "Local";
$codigo->ano = "2023";
$codigo->dia = "29";
$codigo->mes = "Diciembre";
$codigo->columna = 2;
$codigo->fecha = "2023-12-29";
$codigo->save();

$codigo = new Evento();
$codigo->nombre = "Fiesta Local";
$codigo->Evento = "l";
$codigo->localidad_id = 1;
$codigo->descripcion = "local";
$codigo->Tipo = "Local";
$codigo->ano = "2023";
$codigo->columna = 2;
$codigo->fecha = "2023-04-20";
$codigo->save();

$codigo = new Evento();
$codigo->nombre = "Fiesta Local";
$codigo->Evento = "l";
$codigo->localidad_id = 1;
$codigo->descripcion = "local";
$codigo->Tipo = "Local";
$codigo->ano = "2023";
$codigo->columna = 2;
$codigo->fecha = "2023-06-23";
$codigo->save();

$codigo = new Evento();
$codigo->nombre = "Fiesta Local";
$codigo->Evento = "l";
$codigo->localidad_id = 2;
$codigo->descripcion = "local";
$codigo->Tipo = "Local";
$codigo->ano = "2023";
$codigo->columna = 2;
$codigo->fecha = "2023-11-30";
$codigo->save();

$codigo = new Evento();
$codigo->nombre = "Fiesta Local";
$codigo->Evento = "l";
$codigo->localidad_id = 2;
$codigo->descripcion = "local";
$codigo->Tipo = "Local";
$codigo->ano = "2023";
$codigo->columna = 2;
$codigo->fecha = "2023-12-26";
$codigo->save();
$codigo = new Evento();
$codigo->nombre = "Fiesta Local";
$codigo->Evento = "l";
$codigo->localidad_id = 3;
$codigo->descripcion = "local";
$codigo->Tipo = "Local";
$codigo->ano = "2023";
$codigo->columna = 2;
$codigo->fecha = "2023-09-25";
$codigo->save();

$codigo = new Evento();
$codigo->nombre = "Fiesta Local";
$codigo->Evento = "l";
$codigo->localidad_id = 3;
$codigo->descripcion = "local";
$codigo->Tipo = "Local";
$codigo->ano = "2023";
$codigo->columna = 2;
$codigo->fecha = "2023-09-26";
$codigo->save();
$codigo = new Evento();
$codigo->nombre = "Fiesta Local";
$codigo->Evento = "l";
$codigo->localidad_id = 4;
$codigo->descripcion = "local";
$codigo->Tipo = "Local";
$codigo->ano = "2023";
$codigo->columna = 2;
$codigo->fecha = "2023-02-16";
$codigo->save();

$codigo = new Evento();
$codigo->nombre = "Fiesta Local";
$codigo->Evento = "l";
$codigo->localidad_id = 4;
$codigo->descripcion = "local";
$codigo->Tipo = "Local";
$codigo->ano = "2023";
$codigo->columna = 2;
$codigo->fecha = "2023-08-05";
$codigo->save();
$codigo = new Evento();
$codigo->nombre = "Fiesta Local";
$codigo->Evento = "l";
$codigo->localidad_id = 5;
$codigo->descripcion = "local";
$codigo->Tipo = "Local";
$codigo->ano = "2023";
$codigo->columna = 2;
$codigo->fecha = "2023-04-17";
$codigo->save();

$codigo = new Evento();
$codigo->nombre = "Fiesta Local";
$codigo->Evento = "l";
$codigo->localidad_id = 5;
$codigo->descripcion = "local";
$codigo->Tipo = "Local";
$codigo->ano = "2023";
$codigo->columna = 2;
$codigo->fecha = "2023-07-25";
$codigo->save();
$codigo = new Evento();
$codigo->nombre = "Fiesta Local";
$codigo->Evento = "l";
$codigo->localidad_id = 6;
$codigo->descripcion = "local";
$codigo->Tipo = "Local";
$codigo->ano = "2023";
$codigo->columna = 2;
$codigo->fecha = "2023-04-17";
$codigo->save();

$codigo = new Evento();
$codigo->nombre = "Fiesta Local";
$codigo->Evento = "l";
$codigo->localidad_id = 6;
$codigo->descripcion = "local";
$codigo->Tipo = "Local";
$codigo->ano = "2023";
$codigo->columna = 2;
$codigo->fecha = "2023-08-16";
$codigo->save();
$codigo = new Evento();
$codigo->nombre = "Fiesta Local";
$codigo->Evento = "l";
$codigo->localidad_id = 8;
$codigo->descripcion = "local";
$codigo->Tipo = "Local";
$codigo->ano = "2023";
$codigo->columna = 2;
$codigo->fecha = "2023-02-06";
$codigo->save();

$codigo = new Evento();
$codigo->nombre = "Fiesta Local";
$codigo->Evento = "l";
$codigo->localidad_id = 8;
$codigo->descripcion = "local";
$codigo->Tipo = "Local";
$codigo->ano = "2023";
$codigo->columna = 2;
$codigo->fecha = "2023-12-07";
$codigo->save();
$codigo = new Evento();
$codigo->nombre = "Fiesta Local";
$codigo->Evento = "l";
$codigo->localidad_id = 9;
$codigo->descripcion = "local";
$codigo->Tipo = "Local";
$codigo->ano = "2023";
$codigo->columna = 2;
$codigo->fecha = "2023-05-15";
$codigo->save();

$codigo = new Evento();
$codigo->nombre = "Fiesta Local";
$codigo->Evento = "l";
$codigo->localidad_id = 9;
$codigo->descripcion = "local";
$codigo->Tipo = "Local";
$codigo->ano = "2023";
$codigo->columna = 2;
$codigo->fecha = "2023-09-08";
$codigo->save();
$codigo = new Evento();
$codigo->nombre = "Fiesta Local";
$codigo->Evento = "l";
$codigo->localidad_id = 10;
$codigo->descripcion = "local";
$codigo->Tipo = "Local";
$codigo->ano = "2023";
$codigo->columna = 2;
$codigo->fecha = "2023-04-06";
$codigo->save();

$codigo = new Evento();
$codigo->nombre = "Fiesta Local";
$codigo->Evento = "l";
$codigo->localidad_id = 10;
$codigo->descripcion = "local";
$codigo->Tipo = "Local";
$codigo->ano = "2023";
$codigo->columna = 2;
$codigo->fecha = "2023-10-10";
$codigo->save();
$codigo = new Evento();
$codigo->nombre = "Fiesta Local";
$codigo->Evento = "l";
$codigo->localidad_id = 12;
$codigo->descripcion = "local";
$codigo->Tipo = "Local";
$codigo->ano = "2023";
$codigo->columna = 2;
$codigo->fecha = "2023-04-06";
$codigo->save();

$codigo = new Evento();
$codigo->nombre = "Fiesta Local";
$codigo->Evento = "l";
$codigo->localidad_id = 12;
$codigo->descripcion = "local";
$codigo->Tipo = "Local";
$codigo->ano = "2023";
$codigo->columna = 2;
$codigo->fecha = "2023-09-08";
$codigo->save();
$codigo = new Evento();
$codigo->nombre = "Fiesta Local";
$codigo->Evento = "l";
$codigo->localidad_id = 13;
$codigo->descripcion = "local";
$codigo->Tipo = "Local";
$codigo->ano = "2023";
$codigo->columna = 2;
$codigo->fecha = "2023-07-25";
$codigo->save();

$codigo = new Evento();
$codigo->nombre = "Fiesta Local";
$codigo->Evento = "l";
$codigo->localidad_id = 13;
$codigo->descripcion = "local";
$codigo->Tipo = "Local";
$codigo->ano = "2023";
$codigo->columna = 2;
$codigo->fecha = "2023-10-06";
$codigo->save();
$codigo = new Evento();
$codigo->nombre = "Fiesta Local";
$codigo->Evento = "l";
$codigo->localidad_id = 14;
$codigo->descripcion = "local";
$codigo->Tipo = "Local";
$codigo->ano = "2023";
$codigo->columna = 2;
$codigo->fecha = "2023-02-17";
$codigo->save();

$codigo = new Evento();
$codigo->nombre = "Fiesta Local";
$codigo->Evento = "l";
$codigo->localidad_id = 14;
$codigo->descripcion = "local";
$codigo->Tipo = "Local";
$codigo->ano = "2023";
$codigo->columna = 2;
$codigo->fecha = "2023-08-05";
$codigo->save();
$codigo = new Evento();
$codigo->nombre = "Fiesta Local";
$codigo->Evento = "l";
$codigo->localidad_id = 15;
$codigo->descripcion = "local";
$codigo->Tipo = "Local";
$codigo->ano = "2023";
$codigo->columna = 2;
$codigo->fecha = "2023-05-15";
$codigo->save();

$codigo = new Evento();
$codigo->nombre = "Fiesta Local";
$codigo->Evento = "l";
$codigo->localidad_id = 15;
$codigo->descripcion = "local";
$codigo->Tipo = "Local";
$codigo->ano = "2023";
$codigo->columna = 2;
$codigo->fecha = "2023-11-09";
$codigo->save();
$codigo = new Evento();
$codigo->nombre = "Fiesta Local";
$codigo->Evento = "l";
$codigo->localidad_id = 16;
$codigo->descripcion = "local";
$codigo->Tipo = "Local";
$codigo->ano = "2023";
$codigo->columna = 2;
$codigo->fecha = "2023-01-17";
$codigo->save();

$codigo = new Evento();
$codigo->nombre = "Fiesta Local";
$codigo->Evento = "l";
$codigo->localidad_id = 16;
$codigo->descripcion = "local";
$codigo->Tipo = "Local";
$codigo->ano = "2023";
$codigo->columna = 2;
$codigo->fecha = "2023-09-18";
$codigo->save();
$codigo = new Evento();
$codigo->nombre = "Fiesta Local";
$codigo->Evento = "l";
$codigo->localidad_id = 17;
$codigo->descripcion = "local";
$codigo->Tipo = "Local";
$codigo->ano = "2023";
$codigo->columna = 2;
$codigo->fecha = "2023-04-11";
$codigo->save();

$codigo = new Evento();
$codigo->nombre = "Fiesta Local";
$codigo->Evento = "l";
$codigo->localidad_id = 17;
$codigo->descripcion = "local";
$codigo->Tipo = "Local";
$codigo->ano = "2023";
$codigo->columna = 2;
$codigo->fecha = "2023-09-12";
$codigo->save();
$codigo = new Evento();
$codigo->nombre = "Fiesta Local";
$codigo->Evento = "l";
$codigo->localidad_id = 18;
$codigo->descripcion = "local";
$codigo->Tipo = "Local";
$codigo->ano = "2023";
$codigo->columna = 2;
$codigo->fecha = "2023-07-22";
$codigo->save();

$codigo = new Evento();
$codigo->nombre = "Fiesta Local";
$codigo->Evento = "l";
$codigo->localidad_id = 18;
$codigo->descripcion = "local";
$codigo->Tipo = "Local";
$codigo->ano = "2023";
$codigo->columna = 2;
$codigo->fecha = "2023-12-26";
$codigo->save();
$codigo = new Evento();
$codigo->nombre = "Fiesta Local";
$codigo->Evento = "l";
$codigo->localidad_id = 19;
$codigo->descripcion = "local";
$codigo->Tipo = "Local";
$codigo->ano = "2023";
$codigo->columna = 2;
$codigo->fecha = "2023-07-17";
$codigo->save();

$codigo = new Evento();
$codigo->nombre = "Fiesta Local";
$codigo->Evento = "l";
$codigo->localidad_id = 19;
$codigo->descripcion = "local";
$codigo->Tipo = "Local";
$codigo->ano = "2023";
$codigo->columna = 2;
$codigo->fecha = "2023-09-08";
$codigo->save();
$codigo = new Evento();
$codigo->nombre = "Fiesta Local";
$codigo->Evento = "l";
$codigo->localidad_id = 21;
$codigo->descripcion = "local";
$codigo->Tipo = "Local";
$codigo->ano = "2023";
$codigo->columna = 2;
$codigo->fecha = "2023-09-08";
$codigo->save();

$codigo = new Evento();
$codigo->nombre = "Fiesta Local";
$codigo->Evento = "l";
$codigo->localidad_id = 21;
$codigo->descripcion = "local";
$codigo->Tipo = "Local";
$codigo->ano = "2023";
$codigo->columna = 2;
$codigo->fecha = "2023-09-29";
$codigo->save();
$codigo = new Evento();
$codigo->nombre = "Fiesta Local";
$codigo->Evento = "l";
$codigo->localidad_id = 22;
$codigo->descripcion = "local";
$codigo->Tipo = "Local";
$codigo->ano = "2023";
$codigo->columna = 2;
$codigo->fecha = "2023-06-29";
$codigo->save();

$codigo = new Evento();
$codigo->nombre = "Fiesta Local";
$codigo->Evento = "l";
$codigo->localidad_id = 22;
$codigo->descripcion = "local";
$codigo->Tipo = "Local";
$codigo->ano = "2023";
$codigo->columna = 2;
$codigo->fecha = "2023-10-07";
$codigo->save();
$codigo = new Evento();
$codigo->nombre = "Fiesta Local";
$codigo->Evento = "l";
$codigo->localidad_id = 23;
$codigo->descripcion = "local";
$codigo->Tipo = "Local";
$codigo->ano = "2023";
$codigo->columna = 2;
$codigo->fecha = "2023-09-14";
$codigo->save();

$codigo = new Evento();
$codigo->nombre = "Fiesta Local";
$codigo->Evento = "l";
$codigo->localidad_id = 23;
$codigo->descripcion = "local";
$codigo->Tipo = "Local";
$codigo->ano = "2023";
$codigo->columna = 2;
$codigo->fecha = "2023-09-15";
$codigo->save();
$codigo = new Evento();
$codigo->nombre = "Fiesta Local";
$codigo->Evento = "l";
$codigo->localidad_id = 26;
$codigo->descripcion = "local";
$codigo->Tipo = "Local";
$codigo->ano = "2023";
$codigo->columna = 2;
$codigo->fecha = "2023-04-17";
$codigo->save();

$codigo = new Evento();
$codigo->nombre = "Fiesta Local";
$codigo->Evento = "l";
$codigo->localidad_id = 26;
$codigo->descripcion = "local";
$codigo->Tipo = "Local";
$codigo->ano = "2023";
$codigo->columna = 2;
$codigo->fecha = "2023-12-26";
$codigo->save();
$codigo = new Evento();
$codigo->nombre = "Fiesta Local";
$codigo->Evento = "l";
$codigo->localidad_id = 28;
$codigo->descripcion = "local";
$codigo->Tipo = "Local";
$codigo->ano = "2023";
$codigo->columna = 2;
$codigo->fecha = "2023-04-17";
$codigo->save();

$codigo = new Evento();
$codigo->nombre = "Fiesta Local";
$codigo->Evento = "l";
$codigo->localidad_id = 28;
$codigo->descripcion = "local";
$codigo->Tipo = "Local";
$codigo->ano = "2023";
$codigo->columna = 2;
$codigo->fecha = "2023-09-08";
$codigo->save();


//Empresas
$codigo = new Empresa();
$codigo->Empresa= "AMERICAN SUPPLY CORPOATION S.A";
$codigo->Domicilio= "AV ANTIGUA PESETA 147";
$codigo->Actividad= "COMERCIO MAYOR CALZADO";
$codigo->Convenio= "COMERCIO CURTIDOS Y ARTICULOS PARA CALZADO";
$codigo->localidad_id= "1";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "COLOR-DEC ESPAÑA,S.L.";
$codigo->Domicilio= "AV ANTIGUA PESETA 147";
$codigo->Actividad= "COMERCIO ARTICULOS DECORACION";
$codigo->Convenio= "COMER.MAY. PRODUC.QUIMICOS IND. DROG. PERF";
$codigo->localidad_id= "1";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "CONTROLES MUCHAMIEL SL";
$codigo->Domicilio= "AV LORING Nº 6 BJ";
$codigo->Actividad= "APARCAMIENTOS LAV.Y ENGR.";
$codigo->Convenio= "GARAJES Y ESTC.LAV.ENGR";
$codigo->localidad_id= "1";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "ENSA RESTAURACION S,L.L.";
$codigo->Domicilio= "AV LOCUTOR VICENTE HIPOLITO S/N";
$codigo->Actividad= "CAFETERIA-RESTAURANTE";
$codigo->Convenio= "HOSTELERIA";
$codigo->localidad_id= "1";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "TREND FINISH,S.L.";
$codigo->Domicilio= "DE LA LIBRA POL IND ATALAYA Nº 116";
$codigo->Actividad= "FABRICACION DE OTROS PRODUCTOS TEXTILES";
$codigo->Convenio= "TEXTIL AUXILIAR";
$codigo->localidad_id= "1";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "URBAN SUNSET, S.L.";
$codigo->Domicilio= "AV PINTOR XAVIER SOLER Nº 3";
$codigo->Actividad= "CAFETERIA-RESTAURANTE";
$codigo->Convenio= "HOSTELERIA";
$codigo->localidad_id= "1";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "E.I. LAS CASITAS 2015, SL";
$codigo->Domicilio= "AV. PRINCIPE DE ESPAÑA 91";
$codigo->Actividad= "CENTRO PREESCOLAR";
$codigo->Convenio= "CENTROS DE ASISTENCIA Y EDUCACION INFANTIL";
$codigo->localidad_id= "2";
$codigo->Centro= "ALICANTE";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "E.I. LAS CASITAS 2015, SL";
$codigo->Domicilio= "AV. PRINCIPE DE ESPAÑA 91";
$codigo->Actividad= "CENTRO PREESCOLAR";
$codigo->Convenio= "CENTROS DE ASISTENCIA Y EDUCACION INFANTIL";
$codigo->localidad_id= "2";
$codigo->Centro= "ALMORADI";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "CASA ENTRE VIÑAS SL";
$codigo->Domicilio= "CL/ ESTRIBOR URB. ALTEA DORADA 4";
$codigo->Actividad= "INMOBILIARIA";
$codigo->Convenio= "GESTION Y MEDIACION INMOBILIARIA";
$codigo->localidad_id= "3";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "HOTEL SERVIMAR S.L.";
$codigo->Domicilio= "CL BENIARDA 1";
$codigo->Actividad= "HOSTAL";
$codigo->Convenio= "HOSTELERIA";
$codigo->localidad_id= "3";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "ACROSSCAR S.L.U.";
$codigo->Domicilio= "Cl/ ALGEZAR, 9";
$codigo->Actividad= "FAB CARROCERIAS VEHICULOS";
$codigo->Convenio= "INDUSTRIA DE LA MADERA";
$codigo->localidad_id= "4";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "ALMACENES CEDISMA S.L.";
$codigo->Domicilio= "C/ PLAZA MAYOR Nº3";
$codigo->Actividad= "PERFUMERÍA Y DROGUERÍA";
$codigo->Convenio= "COMERCIO MINORISTA DE DROGUERÍAS, HERBORISTERÍAS Y PERFUMERÍAS";
$codigo->localidad_id= "4";
$codigo->Centro= "ASPE";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "AUTOMATICOS MIRIAM S.L.";
$codigo->Domicilio= "CL LAS PARRAS 10";
$codigo->Actividad= "Actividades de juegos de azar y apuestas";
$codigo->Convenio= "SIDEROMETAL";
$codigo->localidad_id= "4";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "BERND LOTHAR ASPE SL";
$codigo->Domicilio= "CM VIEJO DE HONDON 275";
$codigo->Actividad= "INMOBILIARIA";
$codigo->Convenio= "GESTION Y MEDIAC.INMOB.";
$codigo->localidad_id= "4";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "IMYECA S.L.";
$codigo->Domicilio= "CR DE NOVELDA 5,200";
$codigo->Actividad= "FABRIC.PROD.CAUCHO Y MAT.PLASTICOS";
$codigo->Convenio= "IND.HORM.TACON.yCUÑAS";
$codigo->localidad_id= "4";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "INMUEBLES LAROS SL";
$codigo->Domicilio= "CL LAS PARRAS 10";
$codigo->Actividad= "ARREND.LOCALES COM";
$codigo->Convenio= "OFIC. Y DESP. ";
$codigo->localidad_id= "4";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "INYECTADOS MIÑI S.L.";
$codigo->Domicilio= "CL ALGEZAR.POL.IND.TRES HERMANAS 26";
$codigo->Actividad= "FCA. SUELAS CZDO";
$codigo->Convenio= "IND.HORM.TACON.yCUÑAS ";
$codigo->localidad_id= "4";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "JANSSENS AND PARTNER SL";
$codigo->Domicilio= "AV. CONSTITUCIÓN 41";
$codigo->Actividad= "INMOBILIARIA";
$codigo->Convenio= "GESTION Y MEDIAC.INMOB.";
$codigo->localidad_id= "4";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "RECREATIVOS LARA S.A.";
$codigo->Domicilio= "CL LAS PARRAS 10";
$codigo->Actividad= "EXP MAQ RECREATIVAS";
$codigo->Convenio= "SIDEROMETAL ";
$codigo->localidad_id= "4";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "TRANSPORTES Y GRUAS ARACIL SL";
$codigo->Domicilio= "CL/ MIGUEL HERNANDEZ 35-2-D";
$codigo->Actividad= "TRANSP.MERCANCIAS";
$codigo->Convenio= "TRANSP.MERCANCIAS CARR";
$codigo->localidad_id= "4";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "OCKWELL, CHANADE DOREEN";
$codigo->Domicilio= "CL/ RAFAEL ALBERTI 16-A";
$codigo->Actividad= "BAR-RESTAURANTE";
$codigo->Convenio= "HOSTELERIA";
$codigo->localidad_id= "5";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "ALMACENES CEDISMA S.L.";
$codigo->Domicilio= "AV. CONSTITUCION, 5";
$codigo->Actividad= "DROGUERIA";
$codigo->Convenio= "MINOR.DROGUE Y PERF";
$codigo->localidad_id= "6";
$codigo->Centro= "CALLOSA DE SEGURA";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "ALMACENES CEDISMA S.L.";
$codigo->Domicilio= "AV. CONSTITUCION, 28";
$codigo->Actividad= "DROGUERIA";
$codigo->Convenio= "MINOR.DROGUE Y PERF";
$codigo->localidad_id= "6";
$codigo->Centro= "CALLOSA DE SEGURA";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "APARADOS CALLOSA SL";
$codigo->Domicilio= "CL. VICENTE MOLINS, 3";
$codigo->Actividad= "TALLER DE APARADOS PARA CALZADO";
$codigo->Convenio= "PIEL ( IND. CALZADO )";
$codigo->localidad_id= "6";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "MANIPULADOS CASTALLA S.L.";
$codigo->Domicilio= "CL/ APARTADO DE CORREOS 109";
$codigo->Actividad= "MANIP. CAJAS CARTON";
$codigo->Convenio= "ARTES GRAFICAS";
$codigo->localidad_id= "7";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "ALMACENES CEDISMA S.L.";
$codigo->Domicilio= "AVENIDA DE LA PURISIMA Nº 15";
$codigo->Actividad= "PERFUMERÍA Y DROGUERÍA";
$codigo->Convenio= "COMERCIO MINORISTA DE DROGUERÍAS, HERBORISTERÍAS Y PERFUMERÍAS";
$codigo->localidad_id= "8";
$codigo->Centro= "CATRAL";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "INDUSTRIAS PROMISUR S.L.";
$codigo->Domicilio= "CM/ PUENTE DEL ROYO (PG. IND. SAN JUAN) Nº 30";
$codigo->Actividad= "FABRICACIÓN DE PRODUCTOS QUÍMICOS";
$codigo->Convenio= "INDUSTRIA QUÍMICA";
$codigo->localidad_id= "8";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "PROSERVI S.A.";
$codigo->Domicilio= "AV/ DE LA CONSTITUCÓN, 27";
$codigo->Actividad= "ACTIVIDADES DE JUEGOS DE AZAR Y APUESTAS";
$codigo->Convenio= "HOSTELERÍA";
$codigo->localidad_id= "8";
$codigo->Centro= "CATRAL";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "ALMACENES CEDISMA S.L.";
$codigo->Domicilio= "AV DEL CARMEN, 32";
$codigo->Actividad= "DROGUERIA";
$codigo->Convenio= "MINOR.DROGUE Y PERF ";
$codigo->localidad_id= "9";
$codigo->Centro= "COX";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "ALARWOOL EXCELENTE, S.L.";
$codigo->Domicilio= "PD DE DEULA S/N";
$codigo->Actividad= "FABRICA DE ALFOMBRAS";
$codigo->Convenio= "TEXTIL";
$codigo->localidad_id= "10";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "JUGUETES PEREZ,S.L.";
$codigo->Domicilio= "PG.IND. FAYMA CR.MURCIA ALICANTE,KM. 49,50";
$codigo->Actividad= "COMERCIO MAYO NO ESPECIALIZADO";
$codigo->Convenio= "COMERCIO METAL";
$codigo->localidad_id= "10";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "3DFILAMENTS SL";
$codigo->Domicilio= "CL EMILIO SALA HERNANDEZ 49";
$codigo->Actividad= "FCA.PROD.QUIMICOS";
$codigo->Convenio= "INDUSTRIA QUÍMICA";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "A.E.C. FERIAS S.L";
$codigo->Domicilio= "CL SEVERO OCHOA PARQUE IND TORRELLANO 42";
$codigo->Actividad= "ASOC. SIN ANIMO DE LUCRO";
$codigo->Convenio= "OFICINAS Y DESPACHOS";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "ADORNOS DIGITAL ROTULOS SL";
$codigo->Domicilio= "PD MAITINO POLIGONO 2";
$codigo->Actividad= "FCA.ART.CALZADO";
$codigo->Convenio= "PIEL(IND.CALZADO)";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "ADORNOS DIGITAL ROTULOS SL";
$codigo->Domicilio= "PD MAITINO POLIGONO 2";
$codigo->Actividad= "SIDEROMETAL ";
$codigo->Convenio= "CARPINTERIA METALICA";
$codigo->localidad_id= "11";
$codigo->Centro= "SIDERO";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "AGRO GILARTE SL";
$codigo->Domicilio= "AV/ PAIS VALENCIANO, 23";
$codigo->Actividad= "AGRARIA";
$codigo->Convenio= "ACTIVIDAD AGROPECUARIAS";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "AGUILAS ALTA SL";
$codigo->Domicilio= "AVENIDA DE ALICANTE Nº 62 ";
$codigo->Actividad= "ARRENDAMIENTO LOCALES";
$codigo->Convenio= "OFICINAS Y DESPACHOS";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "ALBEROLA CULLERA, RAMON";
$codigo->Domicilio= "CL/ ASUNCIÓN PARREÑO GARCÍA, 83";
$codigo->Actividad= "TALLER REPAR.AUTOS";
$codigo->Convenio= "SIDEROMETAL";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "ALGOROSA S.L.";
$codigo->Domicilio= "AP CORREOS 1068";
$codigo->Actividad= "ARREND.LOCALES.COM";
$codigo->Convenio= "ESTATUTO TRABAJADORES S.M.I";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "ALMACENES CEDISMA S.L.";
$codigo->Domicilio= "CL/ ESPRONCEDA Nº 120";
$codigo->Actividad= "PERFUMERÍA Y DROGUERÍA";
$codigo->Convenio= "COMERCIO MINORISTA DE DROGUERÍAS, HERBORISTERÍAS Y PERFUMERÍAS";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "ALMACENES CEDISMA S.L.";
$codigo->Domicilio= "CL/ ALFONSO XII Nº 16 1 1";
$codigo->Actividad= "PERFUMERÍA Y DROGUERÍA";
$codigo->Convenio= "COMERCIO MINORISTA DE DROGUERÍAS, HERBORISTERÍAS Y PERFUMERÍAS";
$codigo->localidad_id= "11";
$codigo->Centro= "ELCHE-ALFONSO XII";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "ALMACENES CEDISMA S.L.";
$codigo->Domicilio= "C/ ANTONIO BROTONS PASTOR Nº41";
$codigo->Actividad= "PERFUMERÍA Y DROGUERÍA";
$codigo->Convenio= "COMERCIO MINORISTA DE DROGUERÍAS, HERBORISTERÍAS Y PERFUMERÍAS";
$codigo->localidad_id= "11";
$codigo->Centro= "ELCHE-ANTONIO BROTONS PASTOR";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "ALMACENES CEDISMA S.L.";
$codigo->Domicilio= "CL/ ANTONIO MORA FERRANDEZ Nº 26";
$codigo->Actividad= "PERFUMERÍA Y DROGUERÍA";
$codigo->Convenio= "COMERCIO MINORISTA DE DROGUERÍAS, HERBORISTERÍAS Y PERFUMERÍAS";
$codigo->localidad_id= "11";
$codigo->Centro= "ELCHE-ANTONIO MORA FERRANDEZ";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "ALMACENES CEDISMA S.L.";
$codigo->Domicilio= "CL/ HOSPITAL Nº 23";
$codigo->Actividad= "PERFUMERÍA Y DROGUERÍA";
$codigo->Convenio= "COMERCIO MINORISTA DE DROGUERÍAS, HERBORISTERÍAS Y PERFUMERÍAS";
$codigo->localidad_id= "11";
$codigo->Centro= "ELCHE-HOSPITAL";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "ALMACENES CEDISMA S.L.";
$codigo->Domicilio= "CL/ JAIME GOMEZ ORTS Nº 18";
$codigo->Actividad= "PERFUMERÍA Y DROGUERÍA";
$codigo->Convenio= "COMERCIO MINORISTA DE DROGUERÍAS, HERBORISTERÍAS Y PERFUMERÍAS";
$codigo->localidad_id= "11";
$codigo->Centro= "ELCHE-JAIME GOMEZ ORTS";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "ALMACENES CEDISMA S.L.";
$codigo->Domicilio= "CL/ OSCAR ESPLÁ Nº 29";
$codigo->Actividad= "PERFUMERÍA Y DROGUERÍA";
$codigo->Convenio= "COMERCIO MINORISTA DE DROGUERÍAS, HERBORISTERÍAS Y PERFUMERÍAS";
$codigo->localidad_id= "11";
$codigo->Centro= "ELCHE-OSCAR ESPLÁ";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "ALMACENES CEDISMA S.L.";
$codigo->Domicilio= "CL/ PEDRO JUAN PERPIÑAN Nº 38";
$codigo->Actividad= "PERFUMERÍA Y DROGUERÍA";
$codigo->Convenio= "COMERCIO MINORISTA DE DROGUERÍAS, HERBORISTERÍAS Y PERFUMERÍAS";
$codigo->localidad_id= "11";
$codigo->Centro= "ELCHE-PEDRO JUAN PERPIÑAN";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "ALMACENES CEDISMA S.L.";
$codigo->Domicilio= "CL/ PUERTA DE ALICANTE Nº1";
$codigo->Actividad= "PERFUMERÍA Y DROGUERÍA";
$codigo->Convenio= "COMERCIO MINORISTA DE DROGUERÍAS, HERBORISTERÍAS Y PERFUMERÍAS";
$codigo->localidad_id= "11";
$codigo->Centro= "ELCHE-PUERTA DE ALICANTE";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "ALMACENES CEDISMA S.L.";
$codigo->Domicilio= "CL/ SAN FRANCISCO DE ASIS, Nº1 (ALTET)";
$codigo->Actividad= "PERFUMERÍA Y DROGUERÍA";
$codigo->Convenio= "COMERCIO MINORISTA DE DROGUERÍAS, HERBORISTERÍAS Y PERFUMERÍAS";
$codigo->localidad_id= "11";
$codigo->Centro= "ELCHE-SAN FRANCISCO DE ASIS";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "ANASTORE BIO,S.L";
$codigo->Domicilio= "CL JUAN NEGRIN,17";
$codigo->Actividad= "COMERCIO MENOR PLANTAS Y HIERBAS";
$codigo->Convenio= "ESTATUTO TRABAJADORES S.M.I";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "ANOL S.A.";
$codigo->Domicilio= "PZ DE LAS FLORES 12";
$codigo->Actividad= "PROMOCION DE EDIFICACIONES";
$codigo->Convenio= "CONSTRUCCION";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "APA INST.NAL.DE BACHILLERATO LA ASUNCION";
$codigo->Domicilio= "CL TEULADA Nº 2";
$codigo->Actividad= "ASOCIACION SIN ANIMO DE LUCRO";
$codigo->Convenio= "OCIO EDUCATIVO Y ANIMACION SOCIO CULTURAL";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "APARADOS KATI S.L.";
$codigo->Domicilio= "CL JOSE GOMEZ MOMPEAN, 62";
$codigo->Actividad= "TALLER CORT.-APARADO";
$codigo->Convenio= "PIEL(IND.CALZADO)";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "APM FOOTWEAR TRADING, S.L";
$codigo->Domicilio= "CL. FELIX RODRIGUEZ DE LA FUENTE, 6";
$codigo->Actividad= "COMERCIO CALZADO";
$codigo->Convenio= "COMERCIO CALZADO";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "ARRE Y GEST PATRIMONIAL PENALVA Y MARTINEZ,SL";
$codigo->Domicilio= "CL.JOSE ANTON AGULLO,17";
$codigo->Actividad= "ALQUILER DE INMUEBLE";
$codigo->Convenio= "OFICINAS Y DESPACHOS";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "ART.PARA EL CALZADO Y CINTURONES,S.L.";
$codigo->Domicilio= "CL. ARNERO PG. IND. CARRUS,13 1";
$codigo->Actividad= "FCA.ART. MARROQUINERIA";
$codigo->Convenio= "PIEL ( IND. CALZADO )";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "ART.PARA EL CALZADO Y CINTURONES,S.L.";
$codigo->Domicilio= "CL. ARNERO PG. IND. CARRUS,13";
$codigo->Actividad= "FCA.ART. MARROQUINERIA";
$codigo->Convenio= "PIEL ( IND. CALZADO )";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "ART.PARA EL CALZADO Y CINTURONES,S.L.";
$codigo->Domicilio= "CL. ARNERO PG. IND. CARRUS,13 SO";
$codigo->Actividad= "FCA.ART. MARROQUINERIA";
$codigo->Convenio= "PIEL ( IND. CALZADO )";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "ART.PARA EL CALZADO Y CINTURONES,S.L.";
$codigo->Domicilio= "CL. JOSE GOMEZ MOMPEAN,74";
$codigo->Actividad= "FCA.ART. MARROQUINERIA";
$codigo->Convenio= "PIEL ( IND. CALZADO )";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "ASOC ESPAÑOLA DE EMPRESAS DE COMPONENTES";
$codigo->Domicilio= "CL SEVERO OCHOA 42";
$codigo->Actividad= "ASOCIACIÓN SIN ANIMO DE LUCRO";
$codigo->Convenio= "OFIC Y DESPACHOS";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "ASSUATTO COMMERCE SL";
$codigo->Domicilio= "CR/ CASA DEL LEON 1,2";
$codigo->Actividad= "COMERCIO MAY.CALZADO";
$codigo->Convenio= "COMERCIO CALZADO";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "ATELIER DU SOLEIL 2003,S.L.";
$codigo->Domicilio= "CL MARQUES DE LAPLACE Nº 4,";
$codigo->Actividad= "FABRICACION DE CALZADO";
$codigo->Convenio= "PIEL (IND CALZADO)";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "AUDIOLOGIA Y SERVICIOS DE LEVANTE, S.L.";
$codigo->Domicilio= "C/REINA VICTORIA Nº58";
$codigo->Actividad= "VENTA DE AUDIFONOS E IMPLANTES COCLEARES";
$codigo->Convenio= "COMERCIO METAL";
$codigo->localidad_id= "11";
$codigo->Centro= "REINA VICTORIA Nº 58";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "AUDIOLOGIA Y SERVICIOS DE LEVANTE, S.L.";
$codigo->Domicilio= "CL/CORREDORA Nº 14";
$codigo->Actividad= "VENTA DE AUDIFONOS E IMPLANTES COCLEARES";
$codigo->Convenio= "COMERCIO METAL";
$codigo->localidad_id= "11";
$codigo->Centro= "CL CORREDORA Nº 14";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "BALCHINI, S.L.";
$codigo->Domicilio= "CL JOAQUIN GARCIA MORA, 24";
$codigo->Actividad= "COMERCIO MAYOR DE CALZADO";
$codigo->Convenio= "COMERCIO MAYORISTAS Y EXPORT. DE CALZADO PROV. DE ALICANTE";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "BERJHAY SA";
$codigo->Domicilio= "CR DOLORES 1,8(4102001)ATDO.767";
$codigo->Actividad= "FABRICACION DE CALZADO";
$codigo->Convenio= "IND. CALZADO";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "BERMUQUI";
$codigo->Domicilio= "CR DOLORES, KM. 1,800 31   ";
$codigo->Actividad= "ALQUILER LOCALES INDUST";
$codigo->Convenio= "OFICINAS Y DESPACHOS";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "BLASCO SANSANO RAMON";
$codigo->Domicilio= "CL CAPITAN GASPAR ORTIZ Nº 46 BJ";
$codigo->Actividad= "ODONTOLOGOS";
$codigo->Convenio= "ODONTOLOGOS Y ESTOMATOLOGOS";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "BUFETE FUENTES";
$codigo->Domicilio= "AV/ BLASCO IBAÑEZ Nº 3 ENLO";
$codigo->Actividad= "ACTIVIDADES JURÍDICAS";
$codigo->Convenio= "OFICINAS Y DESPACHOS";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "CARTONAJES URBAN S.L.";
$codigo->Domicilio= "CL FUENSALIDA, 9";
$codigo->Actividad= "FABRICA CAJA CARTON";
$codigo->Convenio= "ARTES GRAFICAS ";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "CHARTER URBANA S.L.";
$codigo->Domicilio= "AP/APARTADO CORREOS 1068";
$codigo->Actividad= "ARREND.LOCALES COM";
$codigo->Convenio= "ESTATUTO TRABAJADORES S.M.I.";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "CLICK SOLUCIONES EMPRESARIALES S.L.";
$codigo->Domicilio= "AV LIBERTAD 86 4 EN 3";
$codigo->Actividad= "SERVICIOS INFORMATIC";
$codigo->Convenio= "OFICINAS Y DESPACHOS ";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "COLL RUIZ MIGUEL ANGEL";
$codigo->Domicilio= "PD ALZABARES BAJO. POLIGINI 2 Nº43";
$codigo->Actividad= "CARPINTERIA METALICA";
$codigo->Convenio= "SIDEROMETAL";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "COM.DE REGANTES 4 CANAL DE LEVANTE Y 7";
$codigo->Domicilio= "CL. SANTUARIO DE LA LUZ Nº 1";
$codigo->Actividad= "DISTRIBUCION DE AGUA";
$codigo->Convenio= "COMUNIDAD REGANTES";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "COMERCIAL DISDULBA S.A.";
$codigo->Domicilio= "CL BREA PG IND CARRUS 23";
$codigo->Actividad= "COM.MAYOR BARATIJAS";
$codigo->Convenio= "ESTATUTO TRABAJADORES ";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "COMERCIAL SAMBLES,S.L";
$codigo->Domicilio= "CL PITAGORAS,11";
$codigo->Actividad= "FABRICACION DE PLANTILLAS PARA EL CALZADO";
$codigo->Convenio= "INDUSTRIAS DEL CALZADO";
$codigo->localidad_id= "11";
$codigo->Centro= "FABRICA";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "COMERCIAL SAMBLES,S.L";
$codigo->Domicilio= "CL PITAGORAS,12";
$codigo->Actividad= "COMERCIO MAYORES CURTIDOS";
$codigo->Convenio= "COMERCIO CURTIDOS Y ART. CALZADO";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "COMERPLAST S.A.";
$codigo->Domicilio= "CR/ MURCIA ALICANTE KM. 60";
$codigo->Actividad= "COMERCIO AL POR MAYOR DE SINTÉTICOS";
$codigo->Convenio= "COMERCIO DE CURTIDOS Y ARTÍCULOS PARA EL CALZADO";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "COMUNIDAD REGANTES DE CARRIZALES";
$codigo->Domicilio= "CL. PUENTE ORTICES,13";
$codigo->Actividad= "CAPTACION Y DISTRI.AGUA";
$codigo->Convenio= "ESTATUTO DE LOS TRABAJADORES";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "CONSTRUCCIONES FALIN SA";
$codigo->Domicilio= "PZ DE LAS FLORES, 12";
$codigo->Actividad= "PROMOCION DE EDIFICACIONES";
$codigo->Convenio= "OFICINAS Y DESPACHOS ";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "CONSTRUCTEC INTERIORISMOS SL";
$codigo->Domicilio= "PD ALZABARES BAJO PG 1 123 - 4";
$codigo->Actividad= "PROMOCION DE EDIFICACIONES";
$codigo->Convenio= "PROMOCION DE EDIFICACIONES";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "CONTROL Y SERVICIOS VARIOS SL";
$codigo->Domicilio= "AV DE LA LIBERTAD Nº 107";
$codigo->Actividad= "LIMPIEZA ESTABLECIMIENTO";
$codigo->Convenio= "LIMPIEZA EDIFICI.Y. LOC";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "CORPORACION BERESIN SL";
$codigo->Domicilio= "PS ERES DE SANTA LLUCIA";
$codigo->Actividad= "ALQUILER LOCALES INDUST";
$codigo->Convenio= "OFICINAS Y DESPACHOS";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "CORPORACION COBERNES S.L.";
$codigo->Domicilio= "PS ERES DE SANTA LLUCIA";
$codigo->Actividad= "SERV.GEST.ADMVA.";
$codigo->Convenio= "OFICINAS  Y DESPACHOS";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "CORPORACION IND. DEL CALZADO SL";
$codigo->Domicilio= "CR MURCIA-ALICANTE, Nº 61";
$codigo->Actividad= "FCA. CALZADO";
$codigo->Convenio= "PIEL (IND. CALZADO)";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "DAMAYCO C.B.";
$codigo->Domicilio= "UR. COSTA BELLA 1";
$codigo->Actividad= "FCA.ARTºCALZADO";
$codigo->Convenio= "PIEL(IND.CALZADO)";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "DINTELPA, S.L.";
$codigo->Domicilio= "CL. JOSE SANCHEZ SAEZ Nº 30";
$codigo->Actividad= "COMERCIO PAPELERIA";
$codigo->Convenio= "COMERCIO PAPEL Y ARTES GRAFICAS";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "E.U. DE C. DE ELCHE, PARQUE INDUSTRIAL";
$codigo->Domicilio= "CL GALILEO GALILEI 2";
$codigo->Actividad= "ASOC.SIN ANIMO LUCRO";
$codigo->Convenio= "OFICINAS Y DESPACHOS ";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "EDS ROBOTICS S.L.";
$codigo->Domicilio= "CL SILLERÍA - PG.IND.TRES HERMANAS FASE II 13";
$codigo->Actividad= "FABRICACIÓN DE OTRA MÁQUINARIA DE USO GENERAL";
$codigo->Convenio= "INDUSTRIA, SERVICIOS Y TECNOLOGIAS DEL SECTOR DEL METAL";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "EL PALMERAL SDAD.COOP.VAL.";
$codigo->Domicilio= "CL. OROPESA,11";
$codigo->Actividad= "LIMPIEZA DE EDIFICIOS";
$codigo->Convenio= "LIMP.EDIFICIOS Y LOCALES";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "ELECTRICAS MAISA DEL NORTE SLU";
$codigo->Domicilio= "CL ASUNCION PARREÑO GARCIA";
$codigo->Actividad= "COMER.ELEC.Y FONTAN";
$codigo->Convenio= "COMERCIO METAL ";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "EME STQG SL";
$codigo->Domicilio= "PD ALGOROS PG 2 CR CASA LEON";
$codigo->Actividad= "COMERCIO AL POR MAYOR DE PRENDAS DE VESTIR";
$codigo->Convenio= "COMERCIO TEXTIL";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "ENVALUX S.L";
$codigo->Domicilio= "C/MURCIA Nº2";
$codigo->Actividad= "FÁBRICACIÓN CAJAS DE CARTÓN";
$codigo->Convenio= "ARTES GRÁFICAS";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "ENVASES SOLER S.L";
$codigo->Domicilio= "PASEO DE ELCHE Nº 18";
$codigo->Actividad= "FABRICACION DE CAJAS DE CARTON";
$codigo->Convenio= "ARTES GRÁFICAS";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "EVATHINK SL";
$codigo->Domicilio= "CL GOMERA, 8";
$codigo->Actividad= "FABRICACION DE PLANCHAS GOMA EVA";
$codigo->Convenio= "INDUSTRIAS QUIMICAS";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "EVENTOS MEDICOS Y SOCIALES,S.L.U.";
$codigo->Domicilio= "CL/ MAJOR DE LA VILA Nº 1";
$codigo->Actividad= "ORGANIZACIÓN DE CONVECCIONES Y EVENTOS";
$codigo->Convenio= "ESTATUTO DE LOS TRABAJADORES";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "F.GINER JUEGOS RECREATIVOS S.L.";
$codigo->Domicilio= "CL/ VALVERDE DEL CAMINO Nº 24";
$codigo->Actividad= "EXPLOTACIÓN MÁQUINAS RECREATIVAS";
$codigo->Convenio= "INDUSTRIA, SERVICIOS Y TECNOLOGÍAS DEL SECTOR DEL METAL";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "FABRICA EXPORTADORA METALICA SL";
$codigo->Domicilio= "CL GERMAN BERNACER 22";
$codigo->Actividad= "COM. MAY. ART. CZDO.";
$codigo->Convenio= "COMER.CURTIDOS-ART.CZDO";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "FALIN URBANA S.L.";
$codigo->Domicilio= "CL PLAZA DE LAS FLORES, 12";
$codigo->Actividad= "PROMOCION DE EDIFICACIONES";
$codigo->Convenio= "OFICINAS Y DESPACHOS ";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "FLORAL COMERCIALIZACION, S.L.";
$codigo->Domicilio= "CL CONSUETA Nº 15 3º";
$codigo->Actividad= "COMERCIO FLORES Y PLANTAS";
$codigo->Convenio= "COMERCIO FLORES Y PLANTAS";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "FREE FASHION S.L";
$codigo->Domicilio= "CL APEROS PG IND TRES HNAS 6";
$codigo->Actividad= "FCA.CALZADO";
$codigo->Convenio= "PIEL(IND.CALZADO)";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "FRONTERA FAST S.L.";
$codigo->Domicilio= "AP APARTADO CORREOS 1068";
$codigo->Actividad= "ARREND.LOCALES COM";
$codigo->Convenio= "OFICINAS Y DESPACHOS";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "FRONTERA S.L.";
$codigo->Domicilio= "AP APARTADO CORREOS 1068";
$codigo->Actividad= "ARREND.LOCALES COM";
$codigo->Convenio= "OFICINAS Y DESPACHOS";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "FUNDACIÓN CIDARIS";
$codigo->Domicilio= "PZ/ SAN JUAN s/n";
$codigo->Actividad= "ACTIVIDADES DE MUSEOS";
$codigo->Convenio= "ESTATUTO DE LOS TRABAJADORES";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "GABARRÓN QUÍMICA TECNOLÓGICA S.L.";
$codigo->Domicilio= "CL/ POETA MIGUEL HERNANDEZ Nº 9 7";
$codigo->Actividad= "INTERMEDIARIOS DE COMERCIO DE PRODUCTOS DIVERSOS";
$codigo->Convenio= "MAYORISTAS E IMPORTADORES DE PRODUCTOS INDUSTRIALES, DROGUERÍA Y PERFUMERÍA";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "GMD AMBROSIO BERNABEU SLP";
$codigo->Domicilio= "PS ERES DE SANTA LUCIA Nº 6 BJ";
$codigo->Actividad= "ODONTOLOGOS";
$codigo->Convenio= "ODONTOLOGOS Y ESTOMATOLOGOS";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "GONZÁLEZ SÁNCHEZ, JOSÉ MANUEL";
$codigo->Domicilio= "CL/VICTORIA, 3";
$codigo->Actividad= "FERRETERÍA";
$codigo->Convenio= "COMERCIO METAL";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "GONZALEZ Y PELLICER SL";
$codigo->Domicilio= "CL MURCIA 12";
$codigo->Actividad= "VENTA DE AUTOMOVILES";
$codigo->Convenio= "COMERCIO METAL ";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "GRUPO ASESOR ROS S.L.P";
$codigo->Domicilio= "CARRER MAYOR DE LA VILA, 9";
$codigo->Actividad= "ASESORIA EMPRESA";
$codigo->Convenio= "GRUPO ASESOR ROS S.L.P.";
$codigo->localidad_id= "11";
$codigo->Centro= "ELCHE (JURIDICO)";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "GRUPO ASESOR ROS S.L.P";
$codigo->Domicilio= "PLAZA PALACIO nº 1 ENT";
$codigo->Actividad= "ASESORIA EMPRESA";
$codigo->Convenio= "GRUPO ASESOR ROS S.L.P.";
$codigo->localidad_id= "11";
$codigo->Centro= "ELCHE";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "GRUPO INSEOR SL";
$codigo->Domicilio= "CL/ SEVERO OCHOA 8";
$codigo->Actividad= "NMOBILIARIA";
$codigo->Convenio= "GESTION Y MEDIAC.INMOB";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "HISPAMOVIL S.A";
$codigo->Domicilio= "C/ MONÓVAR ESQUINA NORTE VALL D'UXO";
$codigo->Actividad= "VENTA DE VEHÍCULOS";
$codigo->Convenio= "COMERCIO METAL";
$codigo->localidad_id= "11";
$codigo->Centro= "ELCHE (comercio metal)";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "HISPAMOVIL S.A";
$codigo->Domicilio= "C/ MONÓVAR ESQUINA NORTE VALL D'UXO";
$codigo->Actividad= "MANTENIMIENTO Y REPARACIÓN DE VEHÍCULOS";
$codigo->Convenio= "INDUSTRIA, SERVICIOS Y TECNOLOGIAS DEL SECTOR DEL METAL";
$codigo->localidad_id= "11";
$codigo->Centro= "ELCHE (sidero)";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "HUERTO LAS PALMERAS S.L.";
$codigo->Domicilio= "PS ERES DE SANTA LLUCIA";
$codigo->Actividad= "ALQUILER LOCALES INDUST";
$codigo->Convenio= "OFICINAS Y DESPACHOS";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "INMOBILIARIA ALTABIX S.A.";
$codigo->Domicilio= "CR/ MURCIA ALICANTE KM. 60";
$codigo->Actividad= "ALQUILER DE BIENES INMOBILIARIOS";
$codigo->Convenio= "COMERCIO DE CURTIDOS Y ARTÍCULOS PARA EL CALZADO";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "INSOLETEC,S.L";
$codigo->Domicilio= "CL PITAGORAS,11";
$codigo->Actividad= "COMERCIO MAYOR DE CALZADO";
$codigo->Convenio= "COMERCIO MAYORISTA Y EXPORT CALZADO PROV ALICANTE";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "INSTALACIONES DEPORTIVAS SPORTBER S.L.U.";
$codigo->Domicilio= "CR DOLORES, KM. 1,800 31  ";
$codigo->Actividad= "CONSTRUCCION";
$codigo->Convenio= "COMERCIO METAL";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "INTERSHOE CONSULTANT SERVICES SL";
$codigo->Domicilio= "CL. SEVERO OCHOA 46-2 PISO 1 PTA 2";
$codigo->Actividad= "COMERCIO CALZADO";
$codigo->Convenio= "COMERCIO CALZADO";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "INVERSIONES LOVY S.L.";
$codigo->Domicilio= "AP APARTADO CORREOS 1068";
$codigo->Actividad= "INMOBILIARIA";
$codigo->Convenio= "ESTATUTO TRABAJADORES S.M.I";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "IVAN MARQUEZ SL";
$codigo->Domicilio= "CL GERMAN BERNACER 22";
$codigo->Actividad= "COMERCIALIZACION";
$codigo->Convenio= "COMERCIO GENERAL CDAD VALENCIANA ";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "J`HAYBER S.L.";
$codigo->Domicilio= "CR DOLORES NAVE 31 1,8";
$codigo->Actividad= "FABRICACION DE CALZADO";
$codigo->Convenio= "IND. CALZADO";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "J´BER SA";
$codigo->Domicilio= "CL LEONARDO DA VINCI, PARCELA 27-28 7   ";
$codigo->Actividad= "CENTRO LOGISTICO";
$codigo->Convenio= "IND. CALZADO";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "JAVA 72 S.L.";
$codigo->Domicilio= "CL/ CARRUS URB ALTAMIRA 31";
$codigo->Actividad= "AGEN.PROP.INMOBILIA.";
$codigo->Convenio= "OFICINAS Y DESPACHOS";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "JORMA CONSTRUCCIONES ESPECIALIZADAS SL";
$codigo->Domicilio= "CL MAXIMILIA THOUS 92, 1 - IZQ";
$codigo->Actividad= "PROMOCION DE EDIFICACIONES";
$codigo->Convenio= "CONSTRUCCION ";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "JOSE SOLER SOLER S.L.";
$codigo->Domicilio= "PASEO DE ELCHE (PG. IMPERIAL) Nº 18";
$codigo->Actividad= "FABRICACION DE CAJAS DE CARTON";
$codigo->Convenio= "ARTES GRAFICAS";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "LA FRONTERA CREATIVE DESING S.L.";
$codigo->Domicilio= "CL ANTONIO MOYA ALBALADEJO 1 BJ";
$codigo->Actividad= "CREACION DE PROGRAMAS INFORMATICOS";
$codigo->Convenio= "CONSULTORAS DE PLANIF";
$codigo->localidad_id= "11";
$codigo->Centro= "ELCHE";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "LABORATOIRE HEVEA S.L";
$codigo->Domicilio= "CL LEONARDO DA VINCI ELCHE PQ IND 15";
$codigo->Actividad= "FCA.PROD.QUIMICOS";
$codigo->Convenio= "INDUSTRIAS QUIMICAS";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "LOPEZ CAPITELLI, ALEXANDRA DANIELA";
$codigo->Domicilio= "C/ FATXO Nº11 PISO 2";
$codigo->Actividad= "COMERCIO MAYOR DE ARTICULOS DE PERFUMERIA Y DROGUERIA";
$codigo->Convenio= "ESTATUTO DE LOS TRABAJADORES";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "MACOOL RB,S.L.";
$codigo->Domicilio= "CL. GERMAN BERNACER, 45";
$codigo->Actividad= "EQ.FRIO.Y HOST.";
$codigo->Convenio= "SIDEROMETALURGICA";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "MANUFACTURAS INDEPIEL, S.L.";
$codigo->Domicilio= "PTDA. ALGOROS, POL.2 45-17";
$codigo->Actividad= "TALLER DE CORTADO APARADO DE CALZADO";
$codigo->Convenio= "INDUSTRIAS DEL CALZADO";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "MAQUINAS DE VENTA,S.L";
$codigo->Domicilio= "PG/IND. GERMAN BENACER - TORRELLANO 51";
$codigo->Actividad= "COMERCIO MAQUINARIA";
$codigo->Convenio= "COMERCIO MAQUINARIA";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "MARFRUIT FRUTAS Y HORTALIZAS S L";
$codigo->Domicilio= "CM MANZANILLA POL 2 192";
$codigo->Actividad= "COMER. MAYOR FRUTOS";
$codigo->Convenio= "COMER. MAYOR ALIMENT.";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "METADATIA TECHNOLOGIES S.L.";
$codigo->Domicilio= "CL/ JUAN DE LA CIERVA, 43 1 5";
$codigo->Actividad= "OTROS SERV.REL.TECNOLÓGIA DE LA INFORMACIÓN Y LA INFORMÁTICA";
$codigo->Convenio= "INDUSTRIA, SERVICIOS Y TECNOLOGIAS DEL SECTOR DEL METAL";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "MIL AN FORNITURAS Y APLIQUES SL";
$codigo->Domicilio= "CL GERMAN BERNACER 22";
$codigo->Actividad= "COM. MAY. ART. CZDO.";
$codigo->Convenio= "COMER.CURTIDOS-ART.CZDO";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "MILENIUM INICIATIVAS S.L.";
$codigo->Domicilio= "AR/APARTADO CORREOS 1068";
$codigo->Actividad= "ARREND. LOCALES COM";
$codigo->Convenio= "ESTATUTO TRABAJADORES S.M.I";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "MUEBLES SERAFIN,S.L.";
$codigo->Domicilio= "PD- PEÑA LAS AGUILAS P.2";
$codigo->Actividad= "FCA. MUEBLES";
$codigo->Convenio= "INDUSTRIA DE LA MADERA";
$codigo->localidad_id= "11";
$codigo->Centro= "FABRICA";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "MUEBLES SERAFIN,S.L.";
$codigo->Domicilio= "AV. PAIS VALENCIANO,13";
$codigo->Actividad= "COMERCIO MUEBLES";
$codigo->Convenio= "COMERCIO MUEBLES";
$codigo->localidad_id= "11";
$codigo->Centro= "TIENDA";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "MUEBLES ZOILO,S.L.";
$codigo->Domicilio= "CL. JUAN RAMON JIMENEZ,8";
$codigo->Actividad= "COMERCIO MUEBLES";
$codigo->Convenio= "COMERCIO MUEBLES";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "NUMAJOMA SL";
$codigo->Domicilio= "CL/ MARQUES DE ASPRILLAS, 39";
$codigo->Actividad= "ALQUILER LOCALES INDUST";
$codigo->Convenio= "OFICINAS Y DESPACHOS";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "OFTASOLER S.L.";
$codigo->Domicilio= "PZ/ MENENDEZ PELAYO Nº 6 BJ";
$codigo->Actividad= "OFTAMOLOGÍA";
$codigo->Convenio= "ESTATUTO DE LOS TRABAJADORES";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "PAPEL WORDL ECCO LOGIC SL";
$codigo->Domicilio= "CL SEVERO OCHOA 8";
$codigo->Actividad= "ARTES GRAFICAS";
$codigo->Convenio= "FABRICA CAJA CARTON";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "PAPEL WORDL ECCO LOGIC SL";
$codigo->Domicilio= "CL SEVERO OCHOA 8";
$codigo->Actividad= "ARTES GRAFICAS";
$codigo->Convenio= "FABRICA CAJA CARTON";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "PASTOR MAS, MERCEDES";
$codigo->Domicilio= "CL/ HOSPITAL Nº 2";
$codigo->Actividad= "PERFUMERÍA Y DROGUERÍA";
$codigo->Convenio= "COMERCIO MINORISTA DE DROGUERÍAS, HERBORISTERÍAS Y PERFUMERÍAS";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "PIENELLI SL";
$codigo->Domicilio= "CL MARIA GARCIA FERRANDEZ 14";
$codigo->Actividad= "TALLER APARADO";
$codigo->Convenio= "PIEL(IND.CALZADO)";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "PINET PRODUCTOS QUIMICOS S.A";
$codigo->Domicilio= "CR CASA DEL LEON KM2";
$codigo->Actividad= "COM MAY ART CALZADO";
$codigo->Convenio= "MAYORISTA PRODUCTOS QUIMICOS";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "PLANTILLAS MONTAPLANT SL";
$codigo->Domicilio= "PD/ ALZABARES BAJO 123";
$codigo->Actividad= "FCA TROQUELES CZDO";
$codigo->Convenio= "IND.CALZADO";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "PRODUCPLANT, S.L.";
$codigo->Domicilio= "CALLE PITOGARAS Nº 9";
$codigo->Actividad= "FABRICACION DE CALZADO";
$codigo->Convenio= "PIEL (IND. CALZADO)";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "PROJUBAL S.L";
$codigo->Domicilio= "CL ALGORFA 4";
$codigo->Actividad= "ALQUILER DE LOCALES";
$codigo->Convenio= "OFICINAS  Y DESPACHOS";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "PROSERVI S.A.";
$codigo->Domicilio= "AV/ DE LA ALEGRIA, 32";
$codigo->Actividad= "ACTIVIDADES DE JUEGOS DE AZAR Y APUESTAS";
$codigo->Convenio= "HOSTELERÍA";
$codigo->localidad_id= "11";
$codigo->Centro= "LA MARINA";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "PROSERVI S.A.";
$codigo->Domicilio= "CL/ POETA MIGUEL HERNÁNDEZ, 1";
$codigo->Actividad= "ACTIVIDADES DE JUEGOS DE AZAR Y APUESTAS";
$codigo->Convenio= "HOSTELERÍA";
$codigo->localidad_id= "11";
$codigo->Centro= "ELCHE";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "PROSERVI S.A.";
$codigo->Domicilio= "CL/ VICENT ANDRÉS ESTELLÉS, 3";
$codigo->Actividad= "ACTIVIDADES DE JUEGOS DE AZAR Y APUESTAS";
$codigo->Convenio= "HOSTELERÍA";
$codigo->localidad_id= "11";
$codigo->Centro= "ELCHE-ALTABIX";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "PROSERVI S.A.";
$codigo->Domicilio= "CL/ VALVERDE DEL CAMINO Nº 24";
$codigo->Actividad= "ACTIVIDADES DE JUEGOS DE AZAR Y APUESTAS";
$codigo->Convenio= "HOSTELERÍA";
$codigo->localidad_id= "11";
$codigo->Centro= "ELCHE-PRINCIPAL";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "REPRESENTACIONES ELVIRA CONSULTORES SL";
$codigo->Domicilio= "CL SUCRE 27, BA";
$codigo->Actividad= "COMERCIALIZACION";
$codigo->Convenio= "COMERCIO GENERAL CDAD VALENCIANA";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "ROBOTICS & VISIÓN TECHNOLOGIES S.L.";
$codigo->Domicilio= "CL SILLERÍA - PG.IND.TRES HERMANAS, 21";
$codigo->Actividad= "OTROS SERV.REL.TECNOLÓGIA DE LA INFORMACIÓN Y LA INFORMÁTICA";
$codigo->Convenio= "INDUSTRIA, SERVICIOS Y TECNOLOGIAS DEL SECTOR DEL METAL";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "RODENAS CASES, FRANCISCO MIGUEL";
$codigo->Domicilio= "CL/ DOCTOR CARO 58";
$codigo->Actividad= "PELUQUERIA SEÑORES";
$codigo->Convenio= "PELQ.INS.BELLEZ GIMN";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "SANCHEZ CARBONELL, JUAN";
$codigo->Domicilio= "CL/ SANTA BARBARA, 6";
$codigo->Actividad= "AFILADOR";
$codigo->Convenio= "SIDEROMETAL";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "SAPENA FOOTWEAR SL";
$codigo->Domicilio= "CL. SEVERO OCHOA 46-2";
$codigo->Actividad= "COMERCIO CALZADO";
$codigo->Convenio= "COMERCIO CALZADO";
$codigo->localidad_id= "11";
$codigo->Centro= "ELCHE";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "SERIGRAFIA INDECAL, S.L.";
$codigo->Domicilio= "CL. PEDRO JUAN PERPIÑAN, 92";
$codigo->Actividad= "SERIGRAFIAS";
$codigo->Convenio= "PIEL(IND.CALZADO)";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "SHOES HOUSE PROMOTIONS,S.L.";
$codigo->Domicilio= "CL. MAESTRO GINER, 6 ENTLO";
$codigo->Actividad= "CONSTRUCCION VIVIENDAS";
$codigo->Convenio= "CONSTRUCCION";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "SOLER MONTALBAN HERMANO S.L";
$codigo->Domicilio= "PD/ PEÑA DE LAS AGUILAS PG.185 PARC 130,137-138";
$codigo->Actividad= "AGRARIA";
$codigo->Convenio= "ACTIVIDADES AGROPECUARIAS";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "SUROESTE CALZADO EUROPEO S.L.";
$codigo->Domicilio= "CL/ JOAQUIN GARCIA MORA Nº 31 2";
$codigo->Actividad= "COMERCIO CALZADO";
$codigo->Convenio= "COMERCIO MINORISTAS, MAYORISTAS Y EXPORT. DE CALZADO Y ARTÍCULOS DE PIEL Y VIAJE";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "SUSI Y JAIME,S.L.";
$codigo->Domicilio= "AV. CARTAGENA ESQ. SAN FCO.,7";
$codigo->Actividad= "COMERCIO M.ALIMENTACION";
$codigo->Convenio= "AUTOS.SUPERM.ALIMENTACION";
$codigo->localidad_id= "11";
$codigo->Centro= "ELCHE";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "SUSI Y JAIME,S.L.";
$codigo->Domicilio= "CL LA PALMERA,3";
$codigo->Actividad= "COMERCIO M.ALIMENTACION";
$codigo->Convenio= "AUTOS.SUPERM.ALIMENTACION";
$codigo->localidad_id= "11";
$codigo->Centro= "ELCHE";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "SYNTHELAST,S.A";
$codigo->Domicilio= "CR ELCHE ALICANTE KM 62";
$codigo->Actividad= "TRANSFORMACION DE PLASTICOS";
$codigo->Convenio= "IND HORMAS, TACONES Y CUÑAS";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "TALLERES DE REPARACION MAGERIT S.L.";
$codigo->Domicilio= "CL MURCIA PG IND ALTABIX 11";
$codigo->Actividad= "REPAR.AUTOMOVILES";
$codigo->Convenio= "SIDEROMETAL ";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "TAYBA URBANA";
$codigo->Domicilio= "CL/ LA MERCE Nº7 4º IZQ";
$codigo->Actividad= "ALQUILER DE BIENES E INMUEBLES";
$codigo->Convenio= "ESTATUTO DE LOS TRABAJADORES";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "TECNICA AUTOMATICA S.A.";
$codigo->Domicilio= "CL/ VALVERDE DEL CAMINO PG .IND. CARRÚS Nº 24";
$codigo->Actividad= "FABRICACIÓN MÁQUINAS RECREATIVAS";
$codigo->Convenio= "INDUSTRIA, SERVICIOS Y TECNOLOGÍAS DEL SECTOR DEL METAL";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "TERAVISTA TECHNOLOGIES SL";
$codigo->Domicilio= "CL MURCIA PG IND ALTABIX 11";
$codigo->Actividad= "CL DOCTOR CARO 45, ENT";
$codigo->Convenio= "ESTATUTO TRABAJADORES";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "TEXPIEL TEXTILES SL";
$codigo->Domicilio= "CL JUAN NEGRIN 31";
$codigo->Actividad= "COM. MAY. ART. CZDO.";
$codigo->Convenio= "COMER.CURT.Y AR.CAL.";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "TEXTILES Y ART PARA CALZADO SL";
$codigo->Domicilio= "CL JUAN NEGRIN 31";
$codigo->Actividad= "COM. MAY. ART. CZDO.";
$codigo->Convenio= "COMER.CURT.Y AR.CAL.";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "THORPE, SIMONE";
$codigo->Domicilio= "CL/ JUAN CARLOS I Nº 28";
$codigo->Actividad= "HOSTELERIA";
$codigo->Convenio= "HOSTELERIA";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "TOMILINDA SL";
$codigo->Domicilio= "AV PAIS VALENCIANO (REG. ESP. AGRARIO) 23";
$codigo->Actividad= "AGRARIA";
$codigo->Convenio= "ACTIVIDAD AGROPECUARIAS";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "TRASTA, S.L.";
$codigo->Domicilio= "CL. SEVERO OCHOA 46";
$codigo->Actividad= "COMERCIO CALZADO";
$codigo->Convenio= "COMERCIO CALZADO";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "TROQUELES MORCILLO,S.L.";
$codigo->Domicilio= "CL. ASILO, POL IND. ALTABIX PG 2 92";
$codigo->Actividad= "TROQUELAJES";
$codigo->Convenio= "SIDEROMETALURGICA";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "VENDING MAQUINARIA,S.L";
$codigo->Domicilio= "CL GERMAN BERNACER POL.IND TORRELLANO 49";
$codigo->Actividad= "ALQUILER DE INMUEBLE";
$codigo->Convenio= "COMERCIO METAL";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "VERA AND THE BIRDS BEAUTY SL";
$codigo->Domicilio= "C/ FATXO Nº11";
$codigo->Actividad= "COMERCIO MAYOR DE ARTICULOS DE PERFUMERIA Y DROGUERIA";
$codigo->Convenio= "COMERCIO MINORISTA DE DROGUERÍAS, HERBORISTERÍAS Y PERFUMERÍAS";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "VULCANIZADOS CABRERA, S.L";
$codigo->Domicilio= "CL BREA PG.INF CARRUS Nº37";
$codigo->Actividad= "FABRICACION DE CALZADO";
$codigo->Convenio= "PIEL (IND. CALZADO)";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "VULCANIZADOS MARPEN SL";
$codigo->Domicilio= "CL. FELIX RODRIGUEZ DE LA FUENTE, 18";
$codigo->Actividad= "FCA. ZAPATILLAS VULCANIZADAS";
$codigo->Convenio= "PIEL IND. CALZADO";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "YOKONO EUROPE SLU";
$codigo->Domicilio= "CL SEVERO OCHOA 8";
$codigo->Actividad= "COMERCIO CALZADO";
$codigo->Convenio= "COMERCIO CALZADO";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "ZACHA SPORT S.L.";
$codigo->Domicilio= "CL JUAN CARLOS I  8";
$codigo->Actividad= "COMERCIO MENOR JUGUETES Y ART ";
$codigo->Convenio= "COMERCIO TEXTIL";
$codigo->localidad_id= "11";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "BINBIN INICIATIVAS, S.L.";
$codigo->Domicilio= "CL/ JUAN CARLOS I AP. 977";
$codigo->Actividad= "ALQUILER DE INMUEBLE";
$codigo->Convenio= "ESTATUTO TRABAJADORES";
$codigo->localidad_id= "12";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "CHISPASAL FAMILIAR S.L.";
$codigo->Domicilio= "CL/ FRAY LUIS DE GRANADA 59";
$codigo->Actividad= "ALQUILER DE INMUEBLE";
$codigo->Convenio= "OFICINAS Y DESPACHOS";
$codigo->localidad_id= "12";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "EURO-RIVES, S.L";
$codigo->Domicilio= "AV/ JOSE MARTINEZ GONZALEZ, 32";
$codigo->Actividad= "COM.MEN.MQ.HOSTELERIA";
$codigo->Convenio= "COMERCIO METAL";
$codigo->localidad_id= "12";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "EVENTUAL INICIATIVAS, S.L";
$codigo->Domicilio= "CL/ MENENDEZ PELAYO 2";
$codigo->Actividad= "ARREND.LOCALES COM";
$codigo->Convenio= "OFICINAS Y DESPACHOS";
$codigo->localidad_id= "12";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "GRUPO ASESOR ROS S.L.P";
$codigo->Domicilio= "CL/ JUAN CARLOS I - 3";
$codigo->Actividad= "ASESORIA EMPRESA";
$codigo->Convenio= "GRUPO ASESOR ROS S.L.P.";
$codigo->localidad_id= "12";
$codigo->Centro= "ELDA";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "MEDITERRANEA STONE,S.L.";
$codigo->Domicilio= "CL/ VIRGEN DEL REMEDIO Nº 17 BJ";
$codigo->Actividad= "ARREND.LOCALES COM";
$codigo->Convenio= "MARMOLISTA";
$codigo->localidad_id= "12";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "NICE SHOES S.L";
$codigo->Domicilio= "CL/INFANTES 4";
$codigo->Actividad= "FCA.CALZADO";
$codigo->Convenio= "PIEL IND. CALZADO";
$codigo->localidad_id= "12";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "QUIRAMORES S.L.";
$codigo->Domicilio= "AV/ JOSE MARTINEZ GONZALEZ 32";
$codigo->Actividad= "ALQUILER DE INMUEBLE";
$codigo->Convenio= "OFICINAS Y DESPACHOS";
$codigo->localidad_id= "12";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "SAPENA FOOTWEAR SL";
$codigo->Domicilio= "";
$codigo->Actividad= "COMERCIO CALZADO";
$codigo->Convenio= "COMERCIO CALZADO";
$codigo->localidad_id= "12";
$codigo->Centro= "ELDA";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "TORRES OLIVER S.L";
$codigo->Domicilio= "CL/ JUAN CARLOS I ENTLO. 3";
$codigo->Actividad= "ARRENDAMIENTO BIENES";
$codigo->Convenio= "OFICINAS Y DESPACHOS";
$codigo->localidad_id= "12";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "ALDEGUER MARTINEZ, DAVID";
$codigo->Domicilio= "AV MEDITERRANEO Nº 20";
$codigo->Actividad= "AGENTES DE LA PROPIEDAD INMOBILIARIA";
$codigo->Convenio= "GESTION Y MEDIACIO INMOBILIARIA";
$codigo->localidad_id= "13";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "ARDAPORCOCHE SL";
$codigo->Domicilio= "CL. MEDIODIA, 18";
$codigo->Actividad= "COMPRA - VENTA VEHICULOS";
$codigo->Convenio= "COMERCIO METAL 2021";
$codigo->localidad_id= "13";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "ARDAPORCOCHE SL";
$codigo->Domicilio= "CL. MAYOR 65";
$codigo->Actividad= "LAVADO DE COCHES";
$codigo->Convenio= "GARAJES Y ESTC.LAV.ENGR";
$codigo->localidad_id= "13";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "BRAUNGER, SILVIA";
$codigo->Domicilio= "CL/ SOL 36";
$codigo->Actividad= "PELUQUERIA";
$codigo->Convenio= "PELQ,INST.BELLZ.,GIMN.";
$codigo->localidad_id= "13";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "ESPAÑA VILLAS & APARTMENTS 2007 SL";
$codigo->Domicilio= "CL/ AUSTRIA 12";
$codigo->Actividad= "HOSTAL";
$codigo->Convenio= "HOSTELERÍA";
$codigo->localidad_id= "13";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "ESTACION DE SERVICIO EL MONCAYO, SL";
$codigo->Domicilio= "PD/ EL ALDIBE, 21";
$codigo->Actividad= "EXPENDEDOR GASOLINA";
$codigo->Convenio= "ESTACIONES DE SERVICIO";
$codigo->localidad_id= "13";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "G.A.ROS ASESORES S.L.";
$codigo->Domicilio= "CL/ MAYOR Nº 10 1";
$codigo->Actividad= "ASESORÍA DE EMPRESAS";
$codigo->Convenio= "GRUPO ASESOR ROS S.L.P.";
$codigo->localidad_id= "13";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "HILMERSSON TRYGG, ANNA JENNY MATILDA";
$codigo->Domicilio= "CL. SAN EUGENIO 27";
$codigo->Actividad= "CAFETERIA BAR";
$codigo->Convenio= "HOSTELERIA AÑO 2022";
$codigo->localidad_id= "13";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "MARINA DE LAS DUNAS SA";
$codigo->Domicilio= "AV/ DEL PUERTO 259";
$codigo->Actividad= "EXPLOTACION PUERTOS, CANALES Y DIQUES";
$codigo->Convenio= "MARINA DE LAS DUNAS SA";
$codigo->localidad_id= "13";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "MICKISCH, UNDINE";
$codigo->Domicilio= "CL EL DENTOL 18";
$codigo->Actividad= "RESIDENCIA ANCIANOS";
$codigo->Convenio= "RESIDENCIAS PRIVADAS TERCERA EDAD. 2020";
$codigo->localidad_id= "13";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "PAYAGAR-5 S.L.";
$codigo->Domicilio= "CL MIGUEL HERNANDEZ 64";
$codigo->Actividad= "COMERCIO TEXTIL";
$codigo->Convenio= "COMERCIO TEXTIL AÑO 2021";
$codigo->localidad_id= "13";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "PERSDOTTER, LISELOTTE";
$codigo->Domicilio= "CL/ SAN EUGENIO 27";
$codigo->Actividad= "CAFETERIA BAR";
$codigo->Convenio= "HOSTELERIA";
$codigo->localidad_id= "13";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "RICARDAS Y SANDRA, S.L.";
$codigo->Domicilio= "CL/ AUSTRIA 2";
$codigo->Actividad= "RESTAURANTE";
$codigo->Convenio= "HOSTELERIA";
$codigo->localidad_id= "13";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "ROSARIO MARTINEZ IBORRA S.L.";
$codigo->Domicilio= "PG SANTA ANA 59-64";
$codigo->Actividad= "COM. MAYOR BEBIDAS";
$codigo->Convenio= "COMERC.MAYOR ALIMENT.";
$codigo->localidad_id= "13";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "ROSARIO MARTINEZ IBORRA, S.L.";
$codigo->Domicilio= "PG SANTA ANA";
$codigo->Actividad= "COMERCIO MAYOR BEBIDAS";
$codigo->Convenio= "COMERCIO MAYOR ALIMENTACION";
$codigo->localidad_id= "13";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "SPQR SL";
$codigo->Domicilio= "AV. EUROPA ESQ. CL. AZORIN 2";
$codigo->Actividad= "RESTAURANTE";
$codigo->Convenio= "HOSTELERIA";
$codigo->localidad_id= "13";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "ALMACENES CEDISMA S.L.";
$codigo->Domicilio= "CL MAYOR, 2";
$codigo->Actividad= "DROGUERIA";
$codigo->Convenio= "MINOR.DROGUE. Y PERF. ";
$codigo->localidad_id= "14";
$codigo->Centro= "HONDON DE LAS NIEVES";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "RUIZ ABAD, MARIA REMEDIOS";
$codigo->Domicilio= "AV/ EL SALVADOR 10";
$codigo->Actividad= "CAFETERIA BAR";
$codigo->Convenio= "HOSTELERIA";
$codigo->localidad_id= "14";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "LA FRONTERA CREATIVE DESIGN SL";
$codigo->Domicilio= "CL MONTALBAN 3 6 IZ";
$codigo->Actividad= "CREACION DE PROGRAMAS INFORMATICOS";
$codigo->Convenio= "CONSULTORAS DE PLANIF";
$codigo->localidad_id= "15";
$codigo->Centro= "MADRID";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "ALMACENES CEDISMA S.L.";
$codigo->Domicilio= "CL PROFESOR JOAQUIN ABELLAN";
$codigo->Actividad= "DROGUERIA";
$codigo->Convenio= "MINOR.DROGUE Y PERF ";
$codigo->localidad_id= "16";
$codigo->Centro= "MURCIA 2";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "ALMACENES CEDISMA S.L.";
$codigo->Domicilio= "CL PROFESOR JOAQUIN ABELLAN";
$codigo->Actividad= "DROGUERIA";
$codigo->Convenio= "MINOR.DROGUE. Y PERF. ";
$codigo->localidad_id= "16";
$codigo->Centro= "MOLINA DE SEGURA (CL PROFESOR)";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "ALMACENES CEDISMA S.L.";
$codigo->Domicilio= "CL PROFESOR JOAQUIN ABELLAN, 9";
$codigo->Actividad= "DROGUERIA";
$codigo->Convenio= "MINOR.DROGUE. Y PERF. ";
$codigo->localidad_id= "16";
$codigo->Centro= "MOLINA DE SEGURA";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "ALMACENES CEDISMA S.L.";
$codigo->Domicilio= "CT MADRID (CABEZO CORTAO)";
$codigo->Actividad= "ALMACEN DROG.Y PERF.";
$codigo->Convenio= "COMER.MAY. PRODUC.QUIMICOS IND. DROG. PERF ";
$codigo->localidad_id= "17";
$codigo->Centro= "MURCIA";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "ALMACENES CEDISMA S.L.";
$codigo->Domicilio= "CT MADRID (CABEZO CORTAO)";
$codigo->Actividad= "ALMACEN DROG.Y PERF.";
$codigo->Convenio= "COMER.MAY. PRODUC.QUIMICOS IND. DROG. PERF ";
$codigo->localidad_id= "17";
$codigo->Centro= "MURCIA 2";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "ALMACENES CEDISMA S.L.";
$codigo->Domicilio= "CT MADRID (CABEZO CORTAO)";
$codigo->Actividad= "ALMACEN DROG.Y PERF.";
$codigo->Convenio= "COMER.MAY. PRODUC.QUIMICOS IND. DROG. PERF";
$codigo->localidad_id= "17";
$codigo->Centro= "MURCIA";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "ALMACENES CEDISMA S.L.";
$codigo->Domicilio= "CL ESCULTOR ROQUE LOPEZ";
$codigo->Actividad= "DROGUERIA";
$codigo->Convenio= "MINOR.DROGUE Y PERF ";
$codigo->localidad_id= "17";
$codigo->Centro= "MURCIA 2";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "ALMACENES CEDISMA S.L.";
$codigo->Domicilio= "CL ESCULTOR ROQUE LOPEZ";
$codigo->Actividad= "DROGUERIA";
$codigo->Convenio= "MINOR.DROGUE. Y PERF. ";
$codigo->localidad_id= "17";
$codigo->Centro= "MURCIA (ESCULTOR)";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "GARCIA RUIZ ENRIQUE";
$codigo->Domicilio= "CARDENAL CISNEROS Nº 22 BJ";
$codigo->Actividad= "PANADERIA";
$codigo->Convenio= "PANADERIA Y PASTELERIA";
$codigo->localidad_id= "18";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "MOZOLEVSKAYA, TATIANA";
$codigo->Domicilio= "CL/ ROSALES 14";
$codigo->Actividad= "CAFETERIA BAR";
$codigo->Convenio= "HOSTELERIA";
$codigo->localidad_id= "19";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "FRAMESA GESTION, S.L.";
$codigo->Domicilio= "AV DE LA LIBERTAD Nº 17";
$codigo->Actividad= "PREFABRICADOS DE CALZADO";
$codigo->Convenio= "PIEL (IND. CALZADO)";
$codigo->localidad_id= "20";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "PREFABIRCADOS NOHALES, S.L.";
$codigo->Domicilio= "AV DE LA LIBERTAD Nº 17";
$codigo->Actividad= "PREFABRICADOS DE CALZADO";
$codigo->Convenio= "PIEL (IND. CALZADO)";
$codigo->localidad_id= "20";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "HISPAMOVIL S.A";
$codigo->Domicilio= "CR/ NACIONAL 340 - PG. IND. SAN CARLOS KM.29,200";
$codigo->Actividad= "VENTA DE VEHÍCULOS";
$codigo->Convenio= "COMERCIO METAL";
$codigo->localidad_id= "21";
$codigo->Centro= "REDOVAN (comercio metal)";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "HISPAMOVIL S.A";
$codigo->Domicilio= "CR/ NACIONAL 340 - PG. IND. SAN CARLOS KM.29,201";
$codigo->Actividad= "MANTENIMIENTO Y REPARACIÓN DE VEHÍCULOS";
$codigo->Convenio= "INDUSTRIA, SERVICIOS Y TECNOLOGIAS DEL SECTOR DEL METAL";
$codigo->localidad_id= "21";
$codigo->Centro= "REDOVAN (sidero)";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "DESGUACE SANCHEZ 4X4 SL";
$codigo->Domicilio= "CT. ROJALES GUARDAMAR KM 2";
$codigo->Actividad= "DESGUACE";
$codigo->Convenio= "SIDEROMETALURGICA";
$codigo->localidad_id= "22";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "AUDIOLOGIA Y SERVICIOS DE LEVANTE, S.L.";
$codigo->Domicilio= "CALLE DEL MERCADO Nº 15";
$codigo->Actividad= "COM.MEN.APARATOS MEDICOS, ORTOPEDICOS";
$codigo->Convenio= "COMERCIO METAL";
$codigo->localidad_id= "23";
$codigo->Centro= "CALLE MERCADO ALICANE";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "INFORMÁTICA DAVID ROS S.L.";
$codigo->Domicilio= "CL/ GABRIEL MIRÓ Nº 19";
$codigo->Actividad= "COMERCIO MATERIAL INFORMÁTICO";
$codigo->Convenio= "COMERCIO METAL";
$codigo->localidad_id= "24";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "LILLO MONTOYO, MARÍA ANTONIA";
$codigo->Domicilio= "CL/ MIGUEL HERNÁNDEZ 8";
$codigo->Actividad= "ESTANCO";
$codigo->Convenio= "ESTATUTO DE LOS TRABAJADORES";
$codigo->localidad_id= "24";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "ALMACENES CEDISMA S.L.";
$codigo->Domicilio= "CL/ ELCHE Nº 45";
$codigo->Actividad= "PERFUMERIA Y DROGUERIA";
$codigo->Convenio= "COMERCIO MINORISTA DE DROGUERÍAS, HERBORISTERÍAS Y PERFUMERÍAS";
$codigo->localidad_id= "25";
$codigo->Centro= "SANTA POLA";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "ALUCRONO CARPINTERIA METALICA SL";
$codigo->Domicilio= "CL ARRIEROS PG IND 2 S/N";
$codigo->Actividad= "CARPINTERIA METALICA";
$codigo->Convenio= "SIDEROMETAL ";
$codigo->localidad_id= "25";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "ATMOSS ELECTRIC EQUIPMENT SLU";
$codigo->Domicilio= "CL MECANICOS (PG IND NUM 2) 5";
$codigo->Actividad= "COMER.ELEC.Y FONTAN.";
$codigo->Convenio= "COMERCIO METAL ";
$codigo->localidad_id= "25";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "BLASCO Y VALERO S.L.";
$codigo->Domicilio= "AV/ DE RONDA, Nº 43";
$codigo->Actividad= "SALÓN RECREATIVO";
$codigo->Convenio= "HOSTELERÍA";
$codigo->localidad_id= "25";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "SANTA POLA LIFE RESORT S.L";
$codigo->Domicilio= "Cl/ MONTE DE SANTA POLA URB GRAN ALACANT , B";
$codigo->Actividad= "SERVICIOS DE ALOJAMIENTO";
$codigo->Convenio= "HOSTELERÍA";
$codigo->localidad_id= "25";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "CERCELARU, EDMOND";
$codigo->Domicilio= "CL. BACO URB. TORREBLANCA LOS CISNES 2";
$codigo->Actividad= "CONSTRUCC.VIVIENDAS";
$codigo->Convenio= "CONSTRUCCION 2021";
$codigo->localidad_id= "26";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "FREITAS DIAZ, AVELINO";
$codigo->Domicilio= "CL. CENTRO COMERCIAL LA SIESTA 2";
$codigo->Actividad= "RESTAURANTE";
$codigo->Convenio= "HOSTELERIA AÑO 2022";
$codigo->localidad_id= "26";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "HISPAMOVIL S.A";
$codigo->Domicilio= "C/ PARC. R6 EL LIMONAR II";
$codigo->Actividad= "VENTA DE VEHÍCULOS";
$codigo->Convenio= "COMERCIO METAL";
$codigo->localidad_id= "26";
$codigo->Centro= "TORREVIEJA (comercio metal)";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "HISPAMOVIL S.A";
$codigo->Domicilio= "C/ PARC. R6 EL LIMONAR II";
$codigo->Actividad= "MANTENIMIENTO Y REPARACIÓN DE VEHÍCULOS";
$codigo->Convenio= "INDUSTRIA, SERVICIOS Y TECNOLOGIAS DEL SECTOR DEL METAL";
$codigo->localidad_id= "26";
$codigo->Centro= "TORREVIEJA (sidero)";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "WANIEK, LORENA";
$codigo->Domicilio= "CL BAZAN 10";
$codigo->Actividad= "INMOBILIARIA";
$codigo->Convenio= "GESTION Y MEDIAC.INMOB.2021/2022";
$codigo->localidad_id= "26";
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "AUDIOLOGIA Y SERVICIOS DE LEVANTE, S.L.";
$codigo->Domicilio= "JUAN CARLOS I Nº 24";
$codigo->Actividad= "COM.MEN.APARATOS MEDICOS, ORTOPEDICOS";
$codigo->Convenio= "COMERCIO METAL";
$codigo->localidad_id= "27";
$codigo->Centro= "JUAN CARLOS I";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "PROSERVI S.A.";
$codigo->Domicilio= "AV/ ENSEYANTS DE LA VILA (LOCAL 4), 2 2";
$codigo->Actividad= "ACTIVIDADES DE JUEGOS DE AZAR Y APUESTAS";
$codigo->Convenio= "HOSTELERÍA";
$codigo->localidad_id= "27";
$codigo->Centro= "VILLAJOYOSA";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "J.M. LOS FRUTALES S.A.";
$codigo->Domicilio= "CT MADRID ALICANTE KM  360";
$codigo->Actividad= "AGRARIA";
$codigo->Convenio= "ACTIVIDAD AGROPECUARIAS";
$codigo->localidad_id= "28";
$codigo->Centro= "";
$codigo->save();






    }
}
