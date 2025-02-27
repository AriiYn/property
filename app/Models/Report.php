<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $table = 'report'; // Nama tabel

    protected $primaryKey = 'id_report'; // Ganti dengan nama kolom primary key yang sesuai
    public $incrementing = true; // Pastikan ini diatur jika kolom primary key adalah auto-increment

    // Tambahkan kolom yang boleh diisi secara massal
    protected $fillable = [
        'id_perumahan',
        'id_blok',
        'nama_pembeli',
        'nik',
        'alamat',
        'no_tlp',
        'email',
        'tgl_pesan',
        'tgl_selesai',
        'jumlah_dp',
        'sisa_bayar',
    ];

    public function perumahan()
    {
        return $this->belongsTo(Perumahan::class, 'id_perumahan', 'id_perumahan');
    }

    public function blok()
    {
        return $this->belongsTo(Blok::class, 'id_blok', 'id_blok');
    }
}
