<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDadosAcademicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dados_academicos', function (Blueprint $table) {
            $table->id();
            $table->enum('periodo', ['Regular', 'Pos-Laboral']);
            $table->enum('ano_conclusao', ['12', '13']);
            $table->foreignId('curso_medio_id')->constrained('curso_medios')->cascadOnDelete();
            $table->foreignId('instituicao_medio_id')->constrained('instituicao_medios')->cascadOnDelete();
            $table->foreignId('curso_universidade_id')->constrained('curso_universidades')->cascadOnDelete();
            $table->foreignId('faculdade_id')->constrained('faculdades')->cascadOnDelete();
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
        Schema::dropIfExists('dados_academicos');
    }
}
