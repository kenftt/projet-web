<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\BinaryOp\NotEqual;

class Company extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_ent';
    protected $fillable = [
        'nom_ent', 'secteur_ent', 'adresse_ent', 'stagiaire_pris', 'note_stagiaire_ent', 'note_pilote_ent',
    ];
}
