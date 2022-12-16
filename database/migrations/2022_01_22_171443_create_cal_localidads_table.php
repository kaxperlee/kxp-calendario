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
        Schema::create('cal_localidads', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('comunidad_id')->nullable();

            $table->foreign('comunidad_id')->references('id')->on('cal_comunidads')->onDelete('set null');

            $table->string('Localidad',80);
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
        Schema::dropIfExists('cal_localidads');
    }
};
