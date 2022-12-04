<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicioHasPersonalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicio_has_personal', function (Blueprint $table) {
            $table->foreignId('personal_id')->constrained('personal')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('servicio_id')->constrained('servicio')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('servicio_has_personal');
    }
}
