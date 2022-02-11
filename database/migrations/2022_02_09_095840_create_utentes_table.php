<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utentes', function (Blueprint $table) {
            $table->id();
            $table->string('prioridade');
            $table->enum('genero', ['Masculino', 'Feminino']);
            $table->foreignId('area_medio_id')->constrained('curso_medios')->cascadOnDelete();
            $table->foreignId('pessoa_id')->constrained('pessoas')->cascadOnDelete();
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
        Schema::dropIfExists('utentes');
    }
}
