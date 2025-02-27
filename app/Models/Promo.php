<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    use HasFactory;
    
    protected $table = 'promo';

    protected $primaryKey = 'id_promo'; // Tambahkan ini
    public $incrementing = true; // Pastikan ini diatur jika kolom primary key adalah auto-increment

    protected $fillable = [
        'banner',
    ];
}
