<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vuelos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('aerolinea_id')->references('id')->on('aerolineas')->cascadeOnDelete();;
            $table->foreignId('origen_id')->references('id')->on('ciudads')->cascadeOnDelete();
            $table->foreignId('destino_id')->references('id')->on('ciudads')->cascadeOnDelete();
            $table->time('horaDespegue');
            $table->time('horaLlegada');
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
        Schema::dropIfExists('vuelos');
    }
};
