<?php

namespace App\Http\Controllers\Pelayan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EvaluasiController extends Controller
{

    public function evaluasi(){
        return view('user/evaluasi');
    }

    public function tambahEvaluasi(){
        $isi = $_REQUEST['isi'];
        $judul = $_REQUEST['judul'];


         DB::table('evaluasis')->insert([
             'judul'=> $judul,
             'isi' => $isi,
         ]
        );
         
        return redirect()->route('awaltahun')->with('berhasil');
    }
}
