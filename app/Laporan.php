<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    protected $fillable = [
        'judul', 'jenis', 'tanggal_berakhir', 'aksi', 
    ];
}
