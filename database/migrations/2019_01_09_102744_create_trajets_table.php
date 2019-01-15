<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrajetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trajets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idVilleDpt')->unsigned();
            $table->foreign('idVilleDpt')->references('id')->on('villes')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('idVilleArr')->unsigned();
            $table->foreign('idVilleArr')->references('id')->on('villes')->on('villes')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('idComp')->unsigned();
            $table->foreign('idComp')->references('id')->on('compagnies')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('tarif');
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
        Schema::dropIfExists('trajets');
    }
}
