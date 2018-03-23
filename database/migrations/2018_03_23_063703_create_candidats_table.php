<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidats', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('disponibilite')->nullable();
            $table->string('status')->nullable();
            $table->string('apport_personnel')->nullable();
            $table->string('complement_apport')->nullable();
            $table->string('pays')->nullable();
            $table->string('telephone')->nullable();
            $table->string('ville')->nullable();
            $table->string('Adresse')->nullable();
            $table->string('code_postal')->nullable();
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
        Schema::drop('candidats');
    }
}
