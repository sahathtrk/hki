<?php

namespace App\Http\Controllers\Pelayan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DokumenController extends Controller
{
    public function dokumen(){
        return view('pelayan.dokumen');
    }
}
