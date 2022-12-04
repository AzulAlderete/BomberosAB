<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHerramientaHasServicioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('herramienta_has_servicio', function (Blueprint $table) {
            $table->foreignId('servicio_id')->constrained('servicio')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('herramienta_id')->constrained('herramienta')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('herramienta_has_servicio');
    }
}
