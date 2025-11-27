<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ruangan extends Model
{
    /** @use HasFactory<\Factories\RuanganFactory */
    use HasFactory;

    protected $table = 'ruangan';
    protected $fillable = [
        'nama_ruangan',
        'kode_ruangan',
        'luas',
        'no_sertifikat',
    ];
}
