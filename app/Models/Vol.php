<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vol extends Model
{
    use HasFactory;
    protected $fillable = [
        'Nom_vol',
        'Ville_depart',
        'Vile_arrivee',
        'date_depart',
        'date_arrivee',
        'H_depart',
        'H_arrivage',
        'type',
        'N_place',
        'image1',
        'image2',
        'image3',
        'image4',
        'image5',
        'prix',
        'id_name',
        'id_user'
    ];
    protected $table = 'vols';
}
