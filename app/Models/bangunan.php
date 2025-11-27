<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class bangunan extends Model
{
    /** @use HasFactory<\Factories\Bangunanfactory */
    use HasFactory;

    protected $table = 'bangunan';
    protected $fillable = [
        'nama_bangunan',
        'kode_bangunan',
        'luas',
        'no_sertifikat',
    ];
}
