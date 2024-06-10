<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chambres extends Model
{
    use HasFactory;
    protected $fillable = [
        'Vile_hotel',
        'n_place',
        'numero',
        'N_etape',
        'prix',
        'image1',
        'image2',
        'image3',
        'image4',
        'id_name',
        'id_user',
        'statut'
    ];
}
