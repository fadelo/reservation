<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLieuEmbarqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lieu_embarqs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idTrjt')->unsigned();
            $table->foreign('idTrjt')->references('id')->on('trajets');
            $table->string('lieuEmbarq', 20);
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
        Schema::dropIfExists('lieu_embarqs');
    }
}
