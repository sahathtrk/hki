<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_pasangan extends Model
{
    protected $fillable = [
        'id_user',
        'nama_pasangan',         
        'nik_pasangan', 
        'gender_pasangan',
        'nama_ibu_pasangan', 
        'nama_ayah_pasangan', 
        'tinggi_pasangan', 
        'berat_pasangan', 
        'golongan_darah_pasangan',
        'hobby_pasangan', 
        'no_hp_pasangan', 
        'email_pasangan', 
        'sosial_media_pasangan', 
        'img_anak'
    ];
}
