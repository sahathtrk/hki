<?php

namespace App\Http\Controllers\Pelayan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AkhirTahunController extends Controller
{
    public function akhirtahun(){
        return view('pelayan/akhirtahun');
    }
}
