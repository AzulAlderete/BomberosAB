<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHerramientaHasSiniestroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('herramienta_has_siniestro', function (Blueprint $table) {
            $table->foreignId('herramienta_id')->constrained('herramienta')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('herramienta_has_siniestro');
    }
}
