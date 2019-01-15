<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('numero')->unique();
            $table->date('dateReserv');
            $table->date('dateDpt');
            $table->string('nomReserv', 30);
            $table->integer('nbrPlace');
            $table->boolean('payer');
            $table->integer('idTrjt')->unsigned();
            $table->foreign('idTrjt')->references('id')->on('trajets');
            $table->integer('idHeureDpt')->unsigned();
            $table->foreign('idHeureDpt')->references('id')->on('heure_departs');
            $table->integer('idLieuEmbarq')->unsigned();
            $table->foreign('idLieuEmbarq')->references('id')->on('lieu_embarqs');
            $table->integer('idUser')->unsigned();
            $table->foreign('idUser')->references('id')->on('users');
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
        Schema::dropIfExists('reservations');
    }
}
