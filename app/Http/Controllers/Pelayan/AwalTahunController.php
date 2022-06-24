<?php

namespace App\Http\Controllers\Pelayan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AwalTahunController extends Controller
{
    public function awaltahun(){
        return view('pelayan/awaltahun');
    }
}
