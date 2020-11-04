<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePassagerVehiculesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('passager_vehicules', function (Blueprint $table) {
            $table->bigInteger('passager_id')->unsigned();
            $table->bigInteger('vehicule_id')->unsigned();

            $table->foreign('passager_id')->references('id')->on('passagers')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('vehicule_id')->references('id')->on('vehicules')->onDelete('restrict')->onUpdate('restrict');
            $table->primary(['passager_id', 'vehicule_id']);


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
        Schema::dropIfExists('passager_vehicules');
    }
}
