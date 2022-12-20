<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spahamil extends Model
{
    use HasFactory;

    protected $table = 'spahamil';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nama',
        'alamat',
        'telp',
        'beratbadan',
        'usiakehamilan',
        'menggunakan_pen',
        'ada_keluhan',
        'kondisi_plasenta',
        'kram_tubuh',
        'pendarahan',
        'strecthmark',
        'lokasi_perwatan',
        'gerai',
    ];
}
