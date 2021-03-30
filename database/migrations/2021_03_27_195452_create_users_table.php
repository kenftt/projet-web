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
            $table->integer('id', true);
            $table->string('name', 50)->nullable();
            $table->string('prenom', 50)->nullable();
            $table->string('cv', 50)->nullable();
            $table->tinyInteger('delegue')->nullable();
            $table->tinyInteger('pilote')->nullable();
            $table->tinyInteger('admin')->nullable();
            $table->integer('id_centre')->nullable()->index('Utilisateur_Lieu0_FK');
            $table->integer('id_promotion')->nullable()->index('Utilisateur_Annee1_FK');
            $table->integer('id_utilisateur_est_pilote_par')->nullable()->index('Utilisateur_Utilisateur2_FK');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->text('two_factor_secret')->nullable();
            $table->text('two_factor_recovery_codes')->nullable();
            $table->rememberToken();
            $table->unsignedBigInteger('current_team_id')->nullable();
            $table->text('profile_photo_path')->nullable();
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
