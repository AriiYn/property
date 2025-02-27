<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blok extends Model
{
    use HasFactory;
    
    protected $table = 'blok';
    protected $primaryKey = 'id_blok'; // Tambahkan ini

    protected $fillable = [
        'blok',
    ];

    public function perumahans()
    {
        return $this->hasMany(Perumahan::class, 'id_blok', 'id_blok');
    }
}

