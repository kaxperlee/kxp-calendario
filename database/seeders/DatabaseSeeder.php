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

$codigo = new CalLocalidad();
$codigo->comunidad_id = 1;
$codigo->Localidad = "Elche";
$codigo->save();

$codigo = new CalLocalidad();
$codigo->comunidad_id = 2;
$codigo->Localidad = "Murcia";
$codigo->save();

$codigo = new CalLocalidad();
$codigo->comunidad_id = 1;
$codigo->Localidad = "Santa Pola";
$codigo->save();

$codigo = new CalLocalidad();
$codigo->comunidad_id = 1;
$codigo->Localidad = "Guardamar";
$codigo->save();

$codigo = new CalLocalidad();
$codigo->comunidad_id = 1;
$codigo->Localidad = "Aspe";
$codigo->save();

$codigo = new CalLocalidad();
$codigo->comunidad_id = 1;
$codigo->Localidad = "Hondón de las Nieves";
$codigo->save();

$codigo = new CalLocalidad();
$codigo->comunidad_id = 1;
$codigo->Localidad = "Callosa del Segura";
$codigo->save();

$codigo = new Empresa();
$codigo->Empresa= "3DFILAMENTS SL";
$codigo->Domicilio= "CL EMILIO SALA HERNANDEZ 49";
$codigo->Actividad= "FCA.PROD.QUIMICOS";
$codigo->Convenio= "NDUSTRIA QUÍMICA";
$codigo->localidad_id= '1';
$codigo->Centro= "";
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
$codigo->Evento = "1";
$codigo->descripcion = "nacional";
$codigo->Tipo = "Nacional";
$codigo->ano = "2023";
$codigo->dia = "08";
$codigo->mes = "Diciembre";
$codigo->columna = 2;
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
$codigo->localidad_id = 1;
$codigo->descripcion = "local";
$codigo->Tipo = "Elche";
$codigo->ano = "2023";
$codigo->dia = "17";
$codigo->mes = "Abril";
$codigo->columna = 2;
$codigo->fecha = "2023-04-17";
$codigo->save();

$codigo = new Evento();
$codigo->nombre = "Venida de la Virgen";
$codigo->Evento = "l";
$codigo->localidad_id = 1;
$codigo->descripcion = "local";
$codigo->Tipo = "Elche";
$codigo->ano = "2023";
$codigo->dia = "29";
$codigo->mes = "Diciembre";
$codigo->columna = 2;
$codigo->fecha = "2023-12-29";
$codigo->save();


$codigo = new Empresa();
$codigo->Empresa= "2014 MI ALMACEN S.L.";
$codigo->Domicilio= "CL/ ESPRONCEDA Nº 120";
$codigo->Actividad= "PERFUMERÍA Y DROGUERÍA";
$codigo->Convenio= "COMERCIO MINORISTA DE DROGUERÍAS, HERBORISTERÍAS Y PERFUMERÍAS";
$codigo->localidad_id= 1;
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "A.E.C. FERIAS S.L";
$codigo->Domicilio= "CL SEVERO OCHOA PARQUE IND TORRELLANO 42";
$codigo->Actividad= "ASOC. SIN ANIMO DE LUCRO";
$codigo->Convenio= "OFICINAS Y DESPACHOS";
$codigo->localidad_id= 1;
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "ACROSSCAR S.L.U.";
$codigo->Domicilio= "Cl/ ALGEZAR, 9";
$codigo->Actividad= "FAB CARROCERIAS VEHICULOS";
$codigo->Convenio= "INDUSTRIA DE LA MADERA";
$codigo->localidad_id= 5;
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "ADORNOS DIGITAL ROTULOS SL";
$codigo->Domicilio= "PD MAITINO POLIGONO 2";
$codigo->Actividad= "FCA.ARTºCALZADO";
$codigo->Convenio= "PIEL(IND.CALZADO)AÑO 2021";
$codigo->localidad_id= 1;
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "ADORNOS DIGITAL ROTULOS SL";
$codigo->Domicilio= "PD MAITINO POLIGONO 2";
$codigo->Actividad= "SIDEROMETAL 2019";
$codigo->Convenio= "CARPINTERIA METALICA";
$codigo->localidad_id= 1;
$codigo->Centro= "SIDERO";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "AGRO GILARTE SL";
$codigo->Domicilio= "AV/ PAIS VALENCIANO, 23";
$codigo->Actividad= "AGRARIA";
$codigo->Convenio= "ACTIVIDAD AGROPECUARIAS";
$codigo->localidad_id= 1;
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "ALBEROLA CULLERA, RAMON";
$codigo->Domicilio= "CL/ ASUNCIÓN PARREÑO GARCÍA, 83";
$codigo->Actividad= "TALLER REPAR.AUTOS";
$codigo->Convenio= "SIDEROMETAL";
$codigo->localidad_id= 1;
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "ALDEGUER MARTINEZ, DAVID";
$codigo->Domicilio= "AV MEDITERRANEO Nº 20";
$codigo->Actividad= "AGENTES DE LA PROPIEDAD INMOBILIARIA";
$codigo->Convenio= "GESTION Y MEDIACIO INMOBILIARIA";
$codigo->Localidad_id= 4;
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "ALGOROSA S.L.";
$codigo->Domicilio= "AP CORREOS 1068";
$codigo->Actividad= "ARREND.LOCALES.COM";
$codigo->Convenio= "ESTATUTO TRABAJADORES S.M.I";
$codigo->Localidad_id= 1;
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "ALMACENES CEDISMA S.L.";
$codigo->Domicilio= "CL MAYOR, 2";
$codigo->Actividad= "DROGUERIA";
$codigo->Convenio= "MINOR.DROGUE. Y PERF. 2018";
$codigo->Localidad_id= 6;
$codigo->Centro= "HONDON DE LAS NIEVES";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "ALMACENES CEDISMA S.L.";
$codigo->Domicilio= "CT MADRID (CABEZO CORTAO)";
$codigo->Actividad= "ALMACEN DROG.Y PERF.";
$codigo->Convenio= "COMER.MAY. PRODUC.QUIMICOS IND. DROG. PERF 2021";
$codigo->Localidad_id= 2;
$codigo->Centro= "MURCIA";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "ALMACENES CEDISMA S.L.";
$codigo->Domicilio= "CT MADRID (CABEZO CORTAO)";
$codigo->Actividad= "ALMACEN DROG.Y PERF.";
$codigo->Convenio= "COMER.MAY. PRODUC.QUIMICOS IND. DROG. PERF 2021";
$codigo->Localidad_id= 2;
$codigo->Centro= "MURCIA 2";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "ALMACENES CEDISMA S.L.";
$codigo->Domicilio= "CT MADRID (CABEZO CORTAO)";
$codigo->Actividad= "ALMACEN DROG.Y PERF.";
$codigo->Convenio= "COMER.MAY. PRODUC.QUIMICOS IND. DROG. PERF 2021";
$codigo->Localidad_id= 2;
$codigo->Centro= "MURCIA";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "ALUCRONO CARPINTERIA METALICA SL";
$codigo->Domicilio= "CL ARRIEROS PG IND 2 S/N";
$codigo->Actividad= "CARPINTERIA METALICA";
$codigo->Convenio= "SIDEROMETAL 2019";
$codigo->Localidad_id= 3;
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "ANOL S.A.";
$codigo->Domicilio= "PZ DE LAS FLORES 12";
$codigo->Actividad= "PROMOCION DE EDIFICACIONES";
$codigo->Convenio= "CONSTRUCCION 2021";
$codigo->Localidad_id= 1;
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "APA INST.NAL.DE BACHILLERATO LA ASUNCION";
$codigo->Domicilio= "CL TEULADA Nº 2";
$codigo->Actividad= "ASOCIACION SIN ANIMO DE LUCRO";
$codigo->Convenio= "OCIO EDUCATIVO Y ANIMACION SOCIO CULTURAL";
$codigo->Localidad_id= 1;
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "APARADOS CALLOSA SL";
$codigo->Domicilio= "CL. VICENTE MOLINS, 3";
$codigo->Actividad= "TALLER DE APARADOS PARA CALZADO";
$codigo->Convenio= "PIEL ( IND. CALZADO )";
$codigo->Localidad_id= 7;
$codigo->Centro= "";
$codigo->save();



$codigo = new Empresa();
$codigo->Empresa= "APARADOS KATI S.L.";
$codigo->Domicilio= "CL JOSE GOMEZ MOMPEAN, 62";
$codigo->Actividad= "TALLER CORT.-APARADO";
$codigo->Convenio= "PIEL(IND.CALZADO)AÑO 2021";
$codigo->Localidad_id= 1;
$codigo->Centro= "";
$codigo->save();


    }
}
