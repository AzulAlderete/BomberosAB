<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHerramientaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('herramienta', function (Blueprint $table) {
            $table->id();
            $table->string('codigo', 45);
            $table->string('nombre', 45);
            $table->foreignId('estado_herramienta_id')->constrained('estado_herramienta')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('tipo_herramienta_id')->constrained('tipo_herramienta')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('herramienta');
    }
}
