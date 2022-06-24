<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_pribadi extends Model
{
    protected $fillable = [
        'nama',
        'nik',
        'gender',
        'nama_ibu',
        'nama_ayah',
        'tinggi',
        'berat',
        'golongan_darah',
        'hobby',
        'no_hp',
        'email',
        'sosial_media',
        'img_user',
        'id_user'
    ];
}
