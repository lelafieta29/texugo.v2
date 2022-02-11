<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtenteNaFilasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utente_na_filas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('utente_id')->constrained('utentes')->cascadOnDelete();
            $table->foreignId('posto_id')->constrained('postos')->cascadOnDelete();
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
        Schema::dropIfExists('utente_na_filas');
    }
}
