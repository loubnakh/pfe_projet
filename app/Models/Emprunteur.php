<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emprunteur extends Model
{
    use HasFactory;
    
    protected $fillable=[
        'matricule',
        'nom',
        'prenom',
        'code_filiere',
        'type_Employe' ,
        'mot_passe',
        'telephone',
        'Email'

    ];
}
