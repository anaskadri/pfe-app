<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreinscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preinscriptions', function (Blueprint $table) {
            $table->id();
            $table->string('prenom');
            $table->string('nom');
            $table->string('civilite');
            $table->string('email');
            $table->string('cne');
            $table->string('cin');
            $table->unsignedBigInteger('telephone')->nullable();
            $table->string('ville');
            $table->string('file_cv');
            $table->string('file_cin');
            $table->string('file_bac');
            $table->string('file_diplome');
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
        Schema::dropIfExists('preinscriptions');
    }
}
