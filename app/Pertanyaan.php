<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    protected $fillable = [
        'idLaporan', 'idEvaluasi', 'jawabanText', 'pilihanBerganda', 'kotakCentang', 'uploadFile'
    ];
}
