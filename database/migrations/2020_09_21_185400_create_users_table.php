<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('role_id')->unsigned();
            $table->bigInteger('proprietaire_id')->unsigned()->nullable();
            $table->bigInteger('passager_id')->unsigned()->nullable();
            $table->bigInteger('conducteur_id')->unsigned()->nullable();            
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
           
            $table->foreign('role_id')->references('id')->on('roles')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign('proprietaire_id')->references('id')->on('proprietaires')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign('passager_id')->references('id')->on('passagers')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign('conducteur_id')->references('id')->on('conducteurs')->onUpdate('restrict')->onDelete('restrict');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
