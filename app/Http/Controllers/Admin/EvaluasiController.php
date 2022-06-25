<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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

    public function addEvaluasi(Request $request)
    {
        {
            $this->validate(
                $request,
                [
                    'judul' => 'required',
                    'tanggal_berakhir' => 'required',
                ],
            );
    
            $id_user = Auth::id();
            $judul = $request->judul;
            $tanggal_berakhir = $request->tanggal_berakhir;
    
            $addEvaluasi = DB::table('evaluasis')->insert([
                'judul' => $judul,
                'tanggal_berakhir' => $tanggal_berakhir,
            ]);
    
            if ($addEvaluasi) {
                if (auth()->user()->role == "admin") {
                    return redirect()->route('admin_evaluasi');
                }
            }
        }
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
}
