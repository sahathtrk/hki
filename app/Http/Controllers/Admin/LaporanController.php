<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Laporan;
use App\Pertanyaan;
use Illuminate\Support\Facades\Auth;

class LaporanController extends Controller
{
    public function addLaporan(Request $request)
    {
        // dd($request);
        $this->validate(
            $request,
            [
                'judul' => 'required|min:10',
                'jenis' => 'required',
                'tanggal_berakhir' => 'required',
            ],
            [
                'judul.required' => 'Silahkan isi judul laporan',
                'judul.min' => 'Judul minimal 10 karakter',
                'jenis.required' => 'Silahkan pilih jenis laporan',
                'tanggal_berakhir.required' => 'Silahkan pilih tanggal berakhir laporan ini'
            ]
        );

        $judul = $request->judul;
        $jenis = $request->jenis;
        $tanggal_berakhir = $request->tanggal_berakhir;

        $addLaporan = DB::table('laporans')->insert([
            'judul' => $judul,
            'jenis' => $jenis,
            'tanggal_berakhir' => $tanggal_berakhir,
            'aksi' => "terbuka",
        ]);

        $LatestData = Laporan::orderBy('id', 'desc')->first();
        $idTerakhir = $LatestData->id;

        if ($addLaporan) {
            if (auth()->user()->role == "admin") {
                // return redirect()->route('admin_laporan')->with('message', 'Berhasil menambah laporan');
                return redirect('/admin/laporan/{id}' . $idTerakhir)->with('message', 'Berhasil menambah laporan');
            }
        }
    }

    public function getAllLaporan()
    {
        $data = DB::table('laporans')->orderBy('id', 'desc')->paginate(8);
        return view('admin.laporan', compact('data'));
    }

    public function getLaporanById($id)
    {
        $data = DB::table('laporans')->where('id', '=', $id)->first();
        // dd($data);
        return view('admin.laporan-detail', compact('data'));
    }



    public function deleteLaporan($id)
    {
        DB::table('laporans')->where('id', '=', $id)->delete();
        return redirect()->back();
    }

    public function updateAction($id)
    {
        DB::table('laporans')->where('id_laporan', '=', $id)->update([
                'status' => 'aktif'
            ]);
        return redirect()->route('admin/laporan');
    }

    public function addFormulir()
    {
    }
}
