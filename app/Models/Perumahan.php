<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perumahan extends Model
{
    use HasFactory;

    protected $table = 'perumahan'; // Nama tabel

    protected $primaryKey = 'id_perumahan'; // Ganti dengan nama kolom primary key yang sesuai
    public $incrementing = true; // Pastikan ini diatur jika kolom primary key adalah auto-increment

    // Tambahkan kolom yang boleh diisi secara massal
    protected $fillable = [
        'id_unit',
        'id_blok',
        'harga_rumah',
        'img_rumah',
        'img_denah',
        'id_interior',
        'status',
    ];

    public function detailunit()
    {
        return $this->belongsTo(Detailunit::class, 'id_unit', 'id_unit');
    }

    public function blok()
    {
        return $this->belongsTo(Blok::class, 'id_blok', 'id_blok');
    }

    public function interior()
    {
        return $this->belongsTo(Interior::class, 'id_interior', 'id_interior');
    }
}
