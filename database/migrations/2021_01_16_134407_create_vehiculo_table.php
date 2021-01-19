<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiculoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculo', function (Blueprint $table) {
            $table->id();
            $table->string('placa', 50);
            $table->bigInteger('cliente_id')->unsigned();
            $table->foreign('cliente_id')->references('id')->on('cliente');
            $table->bigInteger('registro_id')->unsigned();
            $table->foreign('registro_id')->references('id')->on('registro');
            $table->bigInteger('vehiculo_id')->unsigned();
            $table->foreign('vehiculo_id')->references('id')->on('tarifa');
            $table->string('marca_veh', 50);
            $table->string('color_veh', 30);
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
        Schema::dropIfExists('vehiculo');
    }
}
