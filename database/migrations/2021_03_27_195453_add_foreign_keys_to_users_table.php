<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->foreign('id_promotion', 'Utilisateur_Annee1_FK')->references('id_promotion')->on('annee')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('id_centre', 'Utilisateur_Lieu0_FK')->references('id_centre')->on('lieu')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('id_utilisateur_est_pilote_par', 'Utilisateur_Utilisateur2_FK')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('Utilisateur_Annee1_FK');
            $table->dropForeign('Utilisateur_Lieu0_FK');
            $table->dropForeign('Utilisateur_Utilisateur2_FK');
        });
    }
}
