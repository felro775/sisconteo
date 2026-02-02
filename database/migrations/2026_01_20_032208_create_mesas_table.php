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
        Schema::create('mesas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('recinto_id')->constrained('recintos')->onDelete('cascade');
            $table->integer('numero');
            $table->integer('totalvotantes');
            $table->boolean('estado')->default(false);
            $table->integer('candidato1')->default(0);
            $table->integer('candidato2')->default(0);
            $table->integer('candidato3')->default(0);
            $table->integer('candidato4')->default(0);
            $table->integer('candidato5')->default(0);
            $table->foreignId('usuario_id')->constrained('users')->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mesas');
    }
};
