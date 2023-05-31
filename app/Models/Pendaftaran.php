<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'nm_lengkap',
        'gender',
        'tmp_lahir',
        'alamat',
        'agama',
        'penyakit',
        'telepon_ortu'
    ];
}
