<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use app\Models\tanah;

class tanah extends Model
{
    /** @use HasFactory<\Factories\TanahFactory> */
    use HasFactory;
    
    protected $table = 'tanah';
    protected $fillable = [
        'nama_tanah',
        'kode_tanah',
        'luas',
        'no_sertifikat',
    ];
}    