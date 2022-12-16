<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
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
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('localidad_id')->nullable();

            $table->foreign('localidad_id')->references('id')->on('cal_localidads')->onDelete('set null');

            $table->string('Empresa',150);
            $table->string('Domicilio',150);
            $table->string('Actividad',150);
            $table->string('Convenio',150);
            $table->string('Centro',50);
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
        Schema::dropIfExists('empresas');
    }
};
