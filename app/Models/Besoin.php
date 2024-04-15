<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Besoin extends Model
{
    use HasFactory;
    protected $fillable = [
        'numero',
        'title_ouvrage', 
        'auteur', 
        'edition_date',
        'quantite', 
         'matricule'
    ];
}
