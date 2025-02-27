<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $table = 'question'; // Nama tabel

    protected $primaryKey = 'id_question'; // Ganti dengan nama kolom primary key yang sesuai
    public $incrementing = true; // Pastikan ini diatur jika kolom primary key adalah auto-increment

    // Tambahkan kolom yang boleh diisi secara massal
    protected $fillable = [
        'nama',
        'email',
        'no_tlp',
        'text',
    ];

}
