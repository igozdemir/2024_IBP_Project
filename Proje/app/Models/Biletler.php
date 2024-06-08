<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biletler extends Model
{
    use HasFactory;
    protected $table='biletler';
    protected $fillable=[
        'firma_adi',
        'kalkis_yeri',
        'varis_yeri',
        'kalkis_saati',
        'fiyat',
    ];
}