<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detailunit extends Model
{
    use HasFactory;

    protected $table = 'detailunit';
    protected $primaryKey = 'id_unit';

    protected $fillable = [
        'kamar_tidur',
        'kamar_mandi',
        'ruang_tamu',
        'balkon',
        'carport',
        'dapur',
        'luas_tanah',
        'luas_bangunan',
        'description',
    ];
}
