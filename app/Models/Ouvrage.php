<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ouvrage extends Model
{
    use HasFactory;
    protected $fillable = [
        'idouvrage',
        'num_l_j',
        'title_ouvrage', 
        'auteur', 
        'edition_date', 
        'support_accomp',
        'quantite', 
        'recu_le',
        'origine',
        'code_secteur', 
        'observations'
    ];
}
