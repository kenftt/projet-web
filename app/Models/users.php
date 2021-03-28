<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\BinaryOp\NotEqual;

class users extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable = [
        'name','prenom','password', 'email', 'delegue', 'pilote', 'id_centre', 'id_promotion',
    ];
}
