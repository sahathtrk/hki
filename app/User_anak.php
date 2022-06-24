<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_anak extends Model
{
    protected $fillable = [
        'id_user',
        'nama_anak',         
        'nik_anak', 
        'gender_anak',
        'nama_ibu_anak', 
        'nama_ayah_anak', 
        'tinggi_anak', 
        'berat_anak', 
        'golongan_darah_anak',
        'hobby_anak', 
        'no_hp_anak', 
        'email_anak', 
        'sosial_media_anak', 
        'img_user'
    ];
}
