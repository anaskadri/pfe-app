<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absences', function (Blueprint $table) {
            $table->id();
            //clé étrangère venant de la table users
            $table->unsignedBigInteger('user_id')->unique()->nullable();
            $table->foreign('user_id')->references('id')->on('users');

            //clé étrangère venant de la table horaires
            $table->unsignedBigInteger('horaire_id')->unique()->nullable();
            $table->foreign('horaire_id')->references('id')->on('horaires');

            //clé étrangère venant de la table modules
            $table->unsignedBigInteger('module_id')->unique()->nullable();
            $table->foreign('module_id')->references('id')->on('modules');
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
        Schema::dropIfExists('absences');
    }
}
