<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EvaluasiController extends Controller
{

    public function getAllEvaluasi()
    {
        $data = DB::table('evaluasis')->paginate(8);
        return view('admin.evaluasi', compact('data'));
    }

    public function getEvaluasiById($id)
    {
        $data = DB::table('evaluasis')->where('id_evaluasi', '=', $id)->get();
        return view ('admin/evaluasi/detail', compact('data'));
    }

    public function addEvaluasi()
    {
        ;
    }

    public function deleteEvaluasi($id)
    {
        DB::table('evaluasis')->where('id', '=', $id)->delete();
        return redirect()->back();
    }

    public function updateAction($id)
    {
        DB::table('evaluasis')->where('id_evaluasi', '=', $id)->
        update([
            'status' => 'aktif',
        ]);
        return redirect()->route('admin/evaluasi');
    }

    public function addFormulir()
    {
        ;
    }

    public function pimpinan()
    {
        return view('admin/evaluasi/pimpinan/');
    }
}
