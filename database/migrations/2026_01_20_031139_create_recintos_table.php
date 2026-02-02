<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('recintos', function (Blueprint $table) {
            $table->id();
            $table->string('departamento');
            $table->string('provincia');
            $table->string('municipio');
            $table->integer('circunscripcion');
            $table->string('asiento');
            $table->string('zona');
            $table->string('nombre');
            $table->string('direccion');
            $table->integer('nummesas');
            $table->integer('numhabilitados');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recintos');
    }
};
