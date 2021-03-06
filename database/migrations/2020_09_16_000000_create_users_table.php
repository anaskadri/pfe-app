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
            $table->id();
            //clé étrangère venant de la table demande_preinscription
            $table->unsignedBigInteger('preinscription_id')->unique()->nullable();
            $table->foreign('preinscription_id')->references('id')->on('preinscriptions');
            $table->string('prenom');
            $table->string('nom');
            $table->boolean('etat_inscription');
            $table->string('profil')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
