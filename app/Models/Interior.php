<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class interior extends Model
{
    use HasFactory;

    protected $table = 'interior';

    protected $primaryKey = 'id_interior'; // Tambahkan ini
    public $incrementing = true; // Pastikan ini diatur jika kolom primary key adalah auto-increment

    protected $fillable = [
        'type',
        'img_interior1',
        'img_interior2',
        'img_interior3',
        'img_interior4',
        'img_interior5',
        'img_interior6',
    ];
}
