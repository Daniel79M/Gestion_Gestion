<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    protected $table = 'vehicules';
    protected $primaryKey = 'id';
    protected $fillable =[
        'marque',
        'modele',
        'immatriculation',
        'annee',
        'couleur',
        'kilometrage',
        'carosserie',
        'energie',
        'boite'
    ];
}
