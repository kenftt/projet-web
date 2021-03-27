<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'nom_ent','secteur_ent','adresse_ent','stagiaire_pris','note_stagiaire_ent','note_pilote_ent'
    ];
}
