<?php

namespace App\Http\Controllers\Shared;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Dokumen;
// use Illuminate\Support\Facades\Auth;
use Auth;

class DokumenController extends Controller
{
    public function dokumen()
    {
        $data = Dokumen::all();
        return view('shared.dokumen', compact('data'));
    }

    public function getDokumenById($id)
    {
        $data = Dokumen::where('id', '=', $id)->first();
        return view('shared.dokumen-detail', compact('data'));
    }

    public function deleteDokumen($id){
        DB::table('dokumens')->where('id', '=', $id)->delete();
        return redirect()->route('admin_dokumen')->with('message', 'Berhasil menghapus dokumen');
    }

    public function addDokumen(Request $request)
    {
        $this->validate(
            $request,
            [
                'judul' => 'required|min:10"',
                'deskripsi' => 'required|min:10',
                'dokumen' => 'required|mimetypes:application/pdf|max:10000',
            ],
            [
                'judul.required' => 'Silahkan isi judul dokumen',
                'judul.min' => 'Judul minimal 10 karakter',
                'deskripsi.required' => 'Silahkan isi deskripsi dokumen',
                'deskripsi.min' => 'Judul minimal 10 karakter',
                'dokumen.required' => 'Silahkan mengisi dokumen',
                'dokumen.mimetypes' => 'Format dokumen harus PDF'
            ]
        );

        $judul = $request->judul;
        $deskripsi = $request->deskripsi;

        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('dokumen');
        $fname = $file->getClientOriginalName();

        //         // nama file
        // echo 'File Name: '.$file->getClientOriginalName();
        // echo '<br>';

        //         // ekstensi file
        // echo 'File Extension: '.$file->getClientOriginalExtension();
        // echo '<br>';

        //         // real path
        // echo 'File Real Path: '.$file->getRealPath();
        // echo '<br>';

        //         // ukuran file
        // echo 'File Size: '.$file->getSize();
        // echo '<br>';

        //         // tipe mime
        // echo 'File Mime Type: '.$file->getMimeType();

        //         // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'dokumen';

        //     // upload file
        $file->move($tujuan_upload, $fname);

        $addDokumen = DB::table('dokumens')->insert([
            'judul' => $judul,
            'deskripsi' => $deskripsi,
            'dokumen' => $fname
        ]);

        if ($addDokumen) {
            if (auth()->user()->role == "admin") {
                return redirect()->route('admin_dokumen')->with('message', 'Berhasil menambah dokumen');
            } else if (auth()->user()->role == "pimpinan") {
                return redirect()->route('pimpinan_dokumen')->with('message', 'Berhasil menambah dokumen');;
            } else if (auth()->user()->role == "kepaladepartemen") {
                return redirect()->route('kepaladepartemen_dokumen')->with('message', 'Berhasil menambah dokumen');;
            }
        }
    }
}
