<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administrateur', function (Blueprint $table) {
            $table->id();
            $table->string('nom', 20);
            $table->string('prenom', 80);
            $table->string('cni', 14);
            $table->string('sexe',8);
            $table->date('dateNaissance');
            $table->string('lieuNaissance', 60);
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
        Schema::dropIfExists('administrateur');
    }
};
