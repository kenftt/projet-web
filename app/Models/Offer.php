<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\BinaryOp\NotEqual;

class Offer extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_offre';
    protected $fillable = [
        'duree_stage', 'renumeration', 'date_offre', 'lm', 'fiche_valid', 'convention_stage', 'nb_place', 'competence', 'id_ent',
    ];

}
