<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_informal extends Model
{
    protected $fillable = [
        'id_user',
        'jenis_pendidikan',
        'tanggal_pendidikan',
        'tempat'
    ];
}
