<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DemandesTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demandes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('prenom');
            $table->string('address');
            $table->string('postal');
            $table->string('ville');
            $table->string('telephone');
            $table->string('email');
            $table->string('secteur');
            $table->string('apport_select');
            $table->string('ev_select');
            $table->string('avance_projet_select');
            $table->string('txt-parcours');
            $table->string('FranchiseID');
            $table->string('franchiseName');
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
        Schema::dropIfExists('demandes');
    }
}
