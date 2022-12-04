<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitudTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitud', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->string('ubicacion');
            $table->foreignId('estado_emergencia_id')->constrained('estado_emergencia')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('tipo_emergencia_id')->constrained('tipo_emergencia')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('solicitante_id')->constrained('solicitante')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('solicitud');
    }
}
