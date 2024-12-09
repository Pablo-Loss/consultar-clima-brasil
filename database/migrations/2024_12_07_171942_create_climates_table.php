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
        Schema::create('climates', function (Blueprint $table) {
            $table->id();
            $table->string('cidade');
            $table->timestamp('data_hora_pesquisa');
            $table->integer('temperatura');
            $table->integer('visibilidade');
            $table->string('iconeTempo')->nullable();
            $table->integer('velocidade_vento');
            $table->integer('cobertura_nuvens');
            $table->integer('sensacao');
            $table->float('precipitacao');
            $table->integer('pressao');
            $table->integer('umidade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('climates');
    }
};
