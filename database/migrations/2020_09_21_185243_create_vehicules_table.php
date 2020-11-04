<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiculesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicules', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('proprietaire_id')->unsigned();
            $table->bigInteger('categorie_id')->unsigned();
            $table->string('immatriculation')->unique();;
            $table->string('cartegrise')->unique();;
            $table->string('marque');
            $table->string('couleur');
            
            $table->foreign('proprietaire_id')->references('id')->on('proprietaires')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign('categorie_id')->references('id')->on('categories')->onUpdate('restrict')->onDelete('restrict');            
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
        Schema::dropIfExists('categories');
    }
}
