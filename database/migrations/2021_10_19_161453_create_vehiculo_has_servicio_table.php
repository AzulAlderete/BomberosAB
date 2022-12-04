<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiculoHasServicioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculo_has_servicio', function (Blueprint $table) {
            $table->foreignId('servicio_id')->constrained('servicio')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('vehiculo_id')->constrained('vehiculo')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('vehiculo_has_servicio');
    }
}
