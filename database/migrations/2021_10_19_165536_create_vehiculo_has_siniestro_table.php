<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiculoHasSiniestroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculo_has_siniestro', function (Blueprint $table) {
            $table->foreignId('vehiculo_id')->constrained('vehiculo')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('siniestro_id')->constrained('siniestro')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('vehiculo_has_siniestro');
    }
}
