<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('Evento',1);
            $table->string('Tipo',40)->nullable();
            $table->unsignedBigInteger('localidad_id')->nullable();
            $table->unsignedBigInteger('comunidad_id')->nullable();
            $table->foreign('comunidad_id')->references('id')->on('cal_comunidads')->onDelete('set null');
            $table->foreign('localidad_id')->references('id')->on('cal_localidads')->onDelete('set null');
            $table->string('descripcion')->nullable();
            $table->string('ano')->nullable();
            $table->string('mes')->nullable();
            $table->string('dia')->nullable();
            $table->date('fecha');
            $table->enum('columna', [1, 2, 3]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eventos');
    }
}
