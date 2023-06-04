<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'gender',
        'tmp_lahir',
        'tgl_lahir',
        'agama',
        'alamat',
        'penyakit',
        'telepon_ortu',
        'gambar'
    ];

    protected $table = 'pendaftarans';
}
