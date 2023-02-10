<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fechas', function (Blueprint $table) {
            $table->id();
            $table->integer('Fechanum');
            $table->date('fecha');
            $table->integer('dia');
            $table->integer('mes');
            $table->integer('ano');
        });

        // Crea un objeto DateTime para el primer día de 2023
        $date = new DateTime('2023-01-01');

        // Crea un bucle para insertar un registro por día hasta el último día de 2023
        while ($date->format('Y') == 2023) {
            DB::table('fechas')->insert([
                'Fechanum'  => strtotime($date->format('Y-m-d'))/86400,
                'fecha' => $date->format('Y-m-d'),
                'dia' => $date->format('d'),
                'mes' => $date->format('m'),
                'ano' => $date->format('Y'),

            ]);
            $date->modify('+1 day');
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fechas');
    }
};
