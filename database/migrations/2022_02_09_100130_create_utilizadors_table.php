<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtilizadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utilizadors', function (Blueprint $table) {
            $table->id();
            $table->string('senha');
            $table->string('login');
            $table->enum('nivel_acesso', ['Admin', 'Operador', 'SuperAdmin', 'Supervisor']);
            $table->enum('area_trabalho', ['Fila', 'Inscrição', 'Impressora']);
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
        Schema::dropIfExists('utilizadors');
    }
}
