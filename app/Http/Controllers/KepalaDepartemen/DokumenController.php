<?php

namespace App\Http\Controllers\KepalaDepartemen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DokumenController extends Controller
{
    public function dokumen(){
        return view('shared.dokumen');
    }
}
