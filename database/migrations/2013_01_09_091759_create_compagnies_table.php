<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompagniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compagnies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom', 30);
            $table->string('description', 255);
            $table->string('rccm');
            $table->string('ifu');
            $table->string('telephone', 20);
            $table->string('adresse', 50);
            $table->string('email', 100);
            $table->boolean('wifi')->nullable();
            $table->boolean('climatisation')->nullable();
            $table->string('num_compte_bancaire', 50);
            $table->string('momo', 12);
            $table->string('flooz', 12);
            $table->integer('validiterReserv');
            $table->integer('penaliter');
            $table->integer('durPostPenaliter');
            $table->string('msgAverti');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compagnies');
    }
}
