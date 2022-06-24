<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_gerejawi extends Model
{
    protected $fillable = [
        'id_user',
        'tempat_baptis',
        'tanggal_baptis',
        'tempat_sidhi',
        'tanggal_sidhi',
        'tempat_menikah',
        'tanggal_menikah',
        'tempat_tahbisan',
        'tanggal_tahbisan'
    ];
}
