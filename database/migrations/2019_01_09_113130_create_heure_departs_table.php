<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHeureDepartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('heure_departs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idTrjt')->unsigned();
            $table->foreign('idTrjt')->references('id')->on('trajets');
            $table->string('heureDpt');
            $table->string('heureEnreg');
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
        Schema::dropIfExists('heure_departs');
    }
}
