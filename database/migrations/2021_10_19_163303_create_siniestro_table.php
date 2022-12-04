<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiniestroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siniestro', function (Blueprint $table) {
            $table->id();
            $table->integer('numero');
            $table->string('descripcion');
            $table->foreignId('boca_agua_id')->constrained('boca_agua')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('solicitud_id')->constrained('solicitud')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('siniestro');
    }
}
