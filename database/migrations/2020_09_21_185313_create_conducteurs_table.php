<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConducteursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conducteurs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('vehicule_id')->unsigned();
            $table->bigInteger('proprietaire_id')->unsigned();
            $table->string('nom');
            $table->string('prenom');
            $table->integer('telephone')->unique();;
            $table->string('numpiece')->unique();
            $table->string('email')->unique();
            $table->string('adresse');
            $table->string('photo');

            $table->foreign('vehicule_id')->references('id')->on('vehicules')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign('proprietaire_id')->references('id')->on('proprietaires')->onUpdate('restrict')->onDelete('restrict');
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
        Schema::dropIfExists('conducteurs');
    }
}
