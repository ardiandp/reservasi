<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pascamelahirkan extends Model
{
    use HasFactory;

    protected $table = 'pascamelahirkan';
    protected $fillable = [
        'nama',
        'no_hp',
        'alamat',
        'rencana_lahiran',
        'hpl',
        'berat_badan',
        'anak_ke',
        'proses_lahiran',
        'rencana_asi',
        'implan',
        'perawatan',
        'slimming',
        'riwayat_penyakit',
        'status',
    ];
}
