<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_formal extends Model
{
    protected $fillable = [
        'id_user',
        'nama_sd',
        'masuk_sd',
        'selesai_sd',
        'nama_smp',
        'masuk_smp',
        'selesai_smp',
        'nama_sma',
        'masuk_sma',
        'selesai_sma',
    ];
}
