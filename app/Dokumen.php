<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dokumen extends Model
{
    protected $fillable = [
        'judul', 'deskripsi', 'dokumen'
    ];
}
