<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->integer('id_offre', true);
            $table->integer('duree_stage');
            $table->float('renumeration', 10, 0);
            $table->string('lm', 50);
            $table->string('fiche_valid', 50);
            $table->string('convention_stage', 50);
            $table->integer('nb_place');
            $table->string('competence', 50);
            $table->integer('id_ent')->nullable()->index('Offre_Entreprise0_FK');
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
        Schema::dropIfExists('offers');
    }
}
