<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiniestrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siniestros', function (Blueprint $table) {
            $table->id();
            $table->mediumText('descripcion');
            $table->string('direccion');
            $table->string('telefono');
            $table->decimal('latitud', 10, 2)->nullable();
            $table->decimal('longitud', 10, 2)->nullable();
            $table->integer('numero');
            $table->dateTime('fecha')->default(Carbon::now());
            $table->enum('estado_emergencia', ['Uno', 'Dos', 'Tres']);
            $table->foreignId('tipo_siniestro_id')->constrained();
            $table->foreignId('solicitante_id')->constrained();
            $table->foreignId('vehiculo_id')->constrained();
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
        Schema::dropIfExists('siniestros');
    }
}
