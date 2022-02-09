<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInscricaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscricaos', function (Blueprint $table) {
            $table->id();
            $table->enum('filho_antigo_combatente', ['Sim', 'Não']);
            $table->enum('necessidade_especial', ['Sim', 'Não']);
            $table->foreignId('bloco_id')->constrained('blocos')->cascadOnDelete();
            $table->foreignId('candidato_id')->constrained('candidatos')->cascadOnDelete();
            $table->foreignId('dados_academicos_id')->constrained('dados_academicos')->cascadOnDelete();
            $table->foreignId('pagamento_id')->constrained('pagamentos')->cascadOnDelete();
            $table->foreignId('curso_universidade_id')->constrained('curso_universidades')->cascadOnDelete();
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
        Schema::dropIfExists('inscricaos');
    }
}
