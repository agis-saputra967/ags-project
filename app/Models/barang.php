<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class barang extends Model
{
    /** @use HasFactory<\Factories\BarangFactory> */
    use HasFactory;

    protected $table = 'barang';
    protected $fillable = [
        'nama_barang',
        'kode_inventaris',
        'kategori_id',
        'ruangan_id',
        'tahun_pengadaan',
        'sumber_dana',
        'kondisi',
    ];
}
