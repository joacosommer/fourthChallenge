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
        Schema::create('aerolinea_ciudads', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ciudad_id')->references('id')->on('ciudads');
            $table->foreignId('aerolinea_id')->references('id')->on('aerolineas');
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
        Schema::dropIfExists('aerolinea_ciudads');
    }
};
