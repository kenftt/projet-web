<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->integer('id_ent', true);
            $table->string('nom_ent', 50);
            $table->string('secteur_ent', 50);
            $table->string('adresse_ent', 50);
            $table->integer('stagiaire_pris');
            $table->integer('note_stagiaire_ent');
            $table->integer('note_pilote_ent');
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
        Schema::dropIfExists('companies');
    }
}
