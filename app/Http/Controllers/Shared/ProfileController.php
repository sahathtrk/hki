<?php

namespace App\Http\Controllers\Shared;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\User_anak;
use App\User_formal;
use App\User_gerejawi;
use App\User_informal;
use App\User_pasangan;
use App\User_pribadi;

class ProfileController extends Controller
{
    public function profilePribadi()
    {
        $id_user = Auth::id();
        $data = User_pribadi::where('id_user', '=', $id_user)->get();
        // dd($data);
        $isEmpty = true;
        if ($data->isEmpty()) {
            $isEmpty = true;
        } else if ($data->isNotEmpty()) {
            $isEmpty = false;
        } else {
            $isEmpty = true;
        }
        return view('shared.profile-pribadi', compact('isEmpty', 'data'));
    }

    public function addProfilePribadi(Request $request)
    {
        $this->validate(
            $request,
            [
                'nama' => 'required|min:10"',
                'nik' => 'required|min:16',
                'gender' => 'required',
                'nama_ibu' => 'required|min:5',
                'nama_ayah' => 'required|min:5',
                'tinggi' => 'required|min:1',
                'berat' => 'required|min:1',
                'golongan_darah' => 'required',
                'hobby' => 'required|min:5',
                'no_hp' => 'required|min:12',
                'email' => 'required|min:10',
                'sosial_media' => 'required|min:4',
                'img_user' => 'required|image|mimes:jpg,png,jpeg,gif,svg',

            ],
        );

        $id_user = Auth::id();
        $nama = $request->nama;
        $nik = $request->nik;
        $gender = $request->gender;
        $nama_ibu = $request->nama_ibu;
        $nama_ayah = $request->nama_ayah;
        $tinggi = $request->tinggi;
        $berat = $request->berat;
        $golongan_darah = $request->golongan_darah;
        $hobby = $request->hobby;
        $no_hp = $request->no_hp;
        $email = $request->email;
        $sosial_media = $request->sosial_media;


        $file = $request->file('img_user');
        $fname = $file->getClientOriginalName();

        $tujuan_upload = 'img/profile';

        $file->move($tujuan_upload, $fname);

        $addProfilePribadi = DB::table('user_pribadis')->insert([
            'nama' => $nama,
            'id_user' => $id_user,
            'nik' => $nik,
            'gender' => $gender,
            'nama_ibu' => $nama_ibu,
            'nama_ayah' => $nama_ayah,
            'tinggi' => $tinggi,
            'berat' => $berat,
            'golongan_darah' => $golongan_darah,
            'hobby' => $hobby,
            'no_hp' => $no_hp,
            'email' => $email,
            'sosial_media' => $sosial_media,
            'img_user' => $fname,
        ]);

        if ($addProfilePribadi) {
            if (auth()->user()->role == "pelayan") {
                return redirect()->route('pelayan_profile');
            } else if (auth()->user()->role == "pimpinan") {
                return redirect()->route('pimpinan_profile');
            } else if (auth()->user()->role == "kepaladepartemen") {
                return redirect()->route('kepaladepartemen_profile');
            }
        }
    }

    public function updateProfilePribadi(Request $request, $id){
        $this->validate(
            $request,
            [
                'nama' => 'required|min:10"',
                'nik' => 'required|min:16',
                'gender' => 'required',
                'nama_ibu' => 'required|min:5',
                'nama_ayah' => 'required|min:5',
                'tinggi' => 'required|min:1',
                'berat' => 'required|min:1',
                'golongan_darah' => 'required',
                'hobby' => 'required|min:5',
                'no_hp' => 'required|min:12',
                'email' => 'required|min:10',
                'sosial_media' => 'required|min:4',
                'img_user' => 'required|image|mimes:jpg,png,jpeg,gif,svg',

            ],
        );

        $id_user = Auth::id();
        $nama = $request->nama;
        $nik = $request->nik;
        $gender = $request->gender;
        $nama_ibu = $request->nama_ibu;
        $nama_ayah = $request->nama_ayah;
        $tinggi = $request->tinggi;
        $berat = $request->berat;
        $golongan_darah = $request->golongan_darah;
        $hobby = $request->hobby;
        $no_hp = $request->no_hp;
        $email = $request->email;
        $sosial_media = $request->sosial_media;


        $file = $request->file('img_user');
        $fname = $file->getClientOriginalName();

        $tujuan_upload = 'img/profile';

        $file->move($tujuan_upload, $fname);

        $updateProfilePribadi = DB::table('user_pribadis')->where('id', '=', $id)->update([
            'nama' => $nama,
            'nik' => $nik,
            'gender' => $gender,
            'nama_ibu' => $nama_ibu,
            'nama_ayah' => $nama_ayah,
            'tinggi' => $tinggi,
            'berat' => $berat,
            'golongan_darah' => $golongan_darah,
            'hobby' => $hobby,
            'no_hp' => $no_hp,
            'email' => $email,
            'sosial_media' => $sosial_media,
            'img_user' => $fname,
        ]);

        if ($updateProfilePribadi) {
            if (auth()->user()->role == "pelayan") {
                return redirect()->route('pelayan_profile');
            } else if (auth()->user()->role == "pimpinan") {
                return redirect()->route('pimpinan_profile');
            } else if (auth()->user()->role == "kepaladepartemen") {
                return redirect()->route('kepaladepartemen_profile');
            }
        }
    }

    public function profileGerejawi()
    {
        $id_user = Auth::id();
        $data = User_gerejawi::where('id_user', '=', $id_user)->get();
        
        $isEmpty = true;
        if ($data->isEmpty()) {
            $isEmpty = true;
        } else if ($data->isNotEmpty()) {
            $isEmpty = false;
        } else {
            $isEmpty = true;
        }
        return view('shared.profile-gerejawi', compact('isEmpty', 'data'));
    }

    public function addProfileGerejawi(Request $request)
    {
        $this->validate(
            $request,
            [
                'tempat_baptis' => 'required',
                'tanggal_baptis' => 'required',
                'tempat_sidhi' => 'required',
                'tanggal_sidhi' => 'required',
                'tempat_menikah' => 'required',
                'tanggal_menikah' => 'required',
                'tempat_tahbisan' => 'required',
                'tanggal_tahbisan' => 'required',
            ],
        );

        $id_user = Auth::id();
        $tempat_baptis = $request->tempat_baptis;
        $tanggal_baptis = $request->tanggal_baptis;
        $tempat_sidhi = $request->tempat_sidhi;
        $tanggal_sidhi = $request->tanggal_sidhi;
        $tempat_menikah = $request->tempat_menikah;
        $tanggal_menikah = $request->tanggal_menikah;
        $tempat_tahbisan = $request->tempat_tahbisan;
        $tanggal_tahbisan = $request->tanggal_tahbisan;

        $addProfileGerejawi = DB::table('user_gerejawis')->insert([
            'id_user' => $id_user,
            'tempat_baptis' => $tempat_baptis,
            'tanggal_baptis' => $tanggal_baptis,
            'tempat_sidhi' => $tempat_sidhi,
            'tanggal_sidhi' => $tanggal_sidhi,
            'tempat_menikah' => $tempat_menikah,
            'tanggal_menikah' => $tanggal_menikah,
            'tempat_tahbisan' => $tempat_tahbisan,
            'tanggal_tahbisan' => $tanggal_tahbisan,
        ]);

        if ($addProfileGerejawi) {
            if (auth()->user()->role == "pelayan") {
                return redirect()->route('pelayan_profilegerejawi');
            } else if (auth()->user()->role == "pimpinan") {
                return redirect()->route('pimpinan_profilegerejawi');
            } else if (auth()->user()->role == "kepaladepartemen") {
                return redirect()->route('kepaladepartemen_profilegerejawi');
            }
        }
    }

    public function updateProfileGerejawi(Request $request, $id)
    {
        $this->validate(
            $request,
            [
                'tempat_baptis' => 'required',
                'tanggal_baptis' => 'required',
                'tempat_sidhi' => 'required',
                'tanggal_sidhi' => 'required',
                'tempat_menikah' => 'required',
                'tanggal_menikah' => 'required',
                'tempat_tahbisan' => 'required',
                'tanggal_tahbisan' => 'required',
            ],
        );

        $id_user = Auth::id();
        $tempat_baptis = $request->tempat_baptis;
        $tanggal_baptis = $request->tanggal_baptis;
        $tempat_sidhi = $request->tempat_sidhi;
        $tanggal_sidhi = $request->tanggal_sidhi;
        $tempat_menikah = $request->tempat_menikah;
        $tanggal_menikah = $request->tanggal_menikah;
        $tempat_tahbisan = $request->tempat_tahbisan;
        $tanggal_tahbisan = $request->tanggal_tahbisan;

        $updateProfileGerejawi = DB::table('user_gerejawis')->where('id', '=', $id)->update([
            'tempat_baptis' => $tempat_baptis,
            'tanggal_baptis' => $tanggal_baptis,
            'tempat_sidhi' => $tempat_sidhi,
            'tanggal_sidhi' => $tanggal_sidhi,
            'tempat_menikah' => $tempat_menikah,
            'tanggal_menikah' => $tanggal_menikah,
            'tempat_tahbisan' => $tempat_tahbisan,
            'tanggal_tahbisan' => $tanggal_tahbisan,
        ]);

        if ($updateProfileGerejawi) {
            if (auth()->user()->role == "pelayan") {
                return redirect()->route('pelayan_profilegerejawi');
            } else if (auth()->user()->role == "pimpinan") {
                return redirect()->route('pimpinan_profilegerejawi');
            } else if (auth()->user()->role == "kepaladepartemen") {
                return redirect()->route('kepaladepartemen_profilegerejawi');
            }
        }
    }

    public function profileFormal()
    {
        $id_user = Auth::id();
        $data = User_formal::where('id_user', '=', $id_user)->get();
        // dd($data);
        $isEmpty = true;
        if ($data->isEmpty()) {
            $isEmpty = true;
        } else if ($data->isNotEmpty()) {
            $isEmpty = false;
        } else {
            $isEmpty = true;
        }
        return view('shared.profile-formal', compact('isEmpty', 'data'));
    }

    public function addProfileFormal(Request $request)
    {
        $this->validate(
            $request,
            [
                'nama_sd' => 'required',
                'masuk_sd' => 'required',
                'selesai_sd' => 'required',
                'nama_smp' => 'required',
                'masuk_smp' => 'required',
                'selesai_smp' => 'required',
                'nama_sma' => 'required',
                'masuk_sma' => 'required',
                'selesai_sma' => 'required',
            ],
        );

        $id_user = Auth::id();
        $nama_sd = $request->nama_sd;
        $masuk_sd = $request->masuk_sd;
        $selesai_sd = $request->selesai_sd;
        $nama_smp = $request->nama_smp;
        $masuk_smp = $request->masuk_smp;
        $selesai_smp = $request->selesai_smp;
        $nama_sma = $request->nama_sma;
        $masuk_sma = $request->masuk_sma;
        $selesai_sma = $request->selesai_sma;

        $addProfileFormal = DB::table('user_formals')->insert([
            'id_user' => $id_user,
            'nama_sd' => $nama_sd,
            'masuk_sd' => $masuk_sd,
            'selesai_sd' => $selesai_sd,
            'nama_smp' => $nama_smp,
            'masuk_smp' => $masuk_smp,
            'selesai_smp' => $selesai_smp,
            'nama_sma' => $nama_sma,
            'masuk_sma' => $masuk_sma,
            'selesai_sma' => $selesai_sma,
        ]);

        if ($addProfileFormal) {
            if (auth()->user()->role == "pelayan") {
                return redirect()->route('pelayan_profileformal');
            } else if (auth()->user()->role == "pimpinan") {
                return redirect()->route('pimpinan_profileformal');
            } else if (auth()->user()->role == "kepaladepartemen") {
                return redirect()->route('kepaladepartemen_profileformal');
            }
        }
    }
    public function updateProfileFormal(Request $request, $id)
    {
        $this->validate(
            $request,
            [
                'nama_sd' => 'required',
                'masuk_sd' => 'required',
                'selesai_sd' => 'required',
                'nama_smp' => 'required',
                'masuk_smp' => 'required',
                'selesai_smp' => 'required',
                'nama_sma' => 'required',
                'masuk_sma' => 'required',
                'selesai_sma' => 'required',
            ],
        );

        $id_user = Auth::id();
        $nama_sd = $request->nama_sd;
        $masuk_sd = $request->masuk_sd;
        $selesai_sd = $request->selesai_sd;
        $nama_smp = $request->nama_smp;
        $masuk_smp = $request->masuk_smp;
        $selesai_smp = $request->selesai_smp;
        $nama_sma = $request->nama_sma;
        $masuk_sma = $request->masuk_sma;
        $selesai_sma = $request->selesai_sma;

        $updateProfileFormal = DB::table('user_formals')->where('id', '=', $id)->update([
            'nama_sd' => $nama_sd,
            'masuk_sd' => $masuk_sd,
            'selesai_sd' => $selesai_sd,
            'nama_smp' => $nama_smp,
            'masuk_smp' => $masuk_smp,
            'selesai_smp' => $selesai_smp,
            'nama_sma' => $nama_sma,
            'masuk_sma' => $masuk_sma,
            'selesai_sma' => $selesai_sma,
        ]);

        if ($updateProfileFormal) {
            if (auth()->user()->role == "pelayan") {
                return redirect()->route('pelayan_profileformal');
            } else if (auth()->user()->role == "pimpinan") {
                return redirect()->route('pimpinan_profileformal');
            } else if (auth()->user()->role == "kepaladepartemen") {
                return redirect()->route('kepaladepartemen_profileformal');
            }
        }
    }

    public function profileInformal()
    {
        $id_user = Auth::id();
        $data = User_informal::where('id_user', '=', $id_user)->get();
        // dd($data);
        $isEmpty = true;
        if ($data->isEmpty()) {
            $isEmpty = true;
        } else if ($data->isNotEmpty()) {
            $isEmpty = false;
        } else {
            $isEmpty = true;
        }
        return view('shared.profile-informal', compact('isEmpty', 'data'));
    }

    public function addProfileInformal(Request $request)
    {
        $this->validate(
            $request,
            [
                'jenis_pendidikan' => 'required',
                'tanggal_pendidikan' => 'required',
                'tempat' => 'required',
            ],
        );

        $id_user = Auth::id();
        $jenis_pendidikan = $request->jenis_pendidikan;
        $tanggal_pendidikan = $request->tanggal_pendidikan;
        $tempat = $request->tempat;
        

        $addProfileInformal = DB::table('user_informals')->insert([
            'id_user' => $id_user,
            'jenis_pendidikan' => $jenis_pendidikan,
            'tanggal_pendidikan' => $tanggal_pendidikan,
            'tempat' => $tempat
        ]);

        if ($addProfileInformal) {
            if (auth()->user()->role == "pelayan") {
                return redirect()->route('pelayan_profileinformal');
            } else if (auth()->user()->role == "pimpinan") {
                return redirect()->route('pimpinan_profileinformal');
            } else if (auth()->user()->role == "kepaladepartemen") {
                return redirect()->route('kepaladepartemen_profileinformal');
            }
        }
    }

    public function updateProfileInformal(Request $request, $id)
    {
        $this->validate(
            $request,
            [
                'jenis_pendidikan' => 'required',
                'tanggal_pendidikan' => 'required',
                'tempat' => 'required',
            ],
        );

        $id_user = Auth::id();
        $jenis_pendidikan = $request->jenis_pendidikan;
        $tanggal_pendidikan = $request->tanggal_pendidikan;
        $tempat = $request->tempat;
        

        $updateProfileInformal = DB::table('user_informals')->where('id', '=', $id)->update([
            'jenis_pendidikan' => $jenis_pendidikan,
            'tanggal_pendidikan' => $tanggal_pendidikan,
            'tempat' => $tempat
        ]);

        if ($updateProfileInformal) {
            if (auth()->user()->role == "pelayan") {
                return redirect()->route('pelayan_profileinformal');
            } else if (auth()->user()->role == "pimpinan") {
                return redirect()->route('pimpinan_profileinformal');
            } else if (auth()->user()->role == "kepaladepartemen") {
                return redirect()->route('kepaladepartemen_profileinformal');
            }
        }
    }

    public function profilePasangan()
    {
        {
            $id_user = Auth::id();
            $data = User_pasangan::where('id_user', '=', $id_user)->get();
            // dd($data);
            $isEmpty = true;
            if ($data->isEmpty()) {
                $isEmpty = true;
            } else if ($data->isNotEmpty()) {
                $isEmpty = false;
            } else {
                $isEmpty = true;
            }
            return view('shared.profile-pasangan', compact('isEmpty', 'data'));
        }
    }

    public function addProfilePasangan(Request $request)
    {
        $this->validate(
            $request,
            [
                'nama_pasangan' => 'required|min:10"',
                'nik_pasangan' => 'required|min:16',
                'gender_pasangan' => 'required',
                'nama_ibu_pasangan' => 'required|min:5',
                'nama_ayah_pasangan' => 'required|min:5',
                'tinggi_pasangan' => 'required|min:1',
                'berat_pasangan' => 'required|min:1',
                'golongan_darah_pasangan' => 'required',
                'hobby_pasangan' => 'required|min:5',
                'no_hp_pasangan' => 'required|min:12',
                'email_pasangan' => 'required|min:10',
                'sosial_media_pasangan' => 'required|min:4',
                'img_user' => 'required|image|mimes:jpg,png,jpeg,gif,svg',

            ],
        );

        $id_user = Auth::id();
        $nama_pasangan = $request->nama_pasangan;
        $nik_pasangan = $request->nik_pasangan;
        $gender_pasangan = $request->gender_pasangan;
        $nama_ibu_pasangan = $request->nama_ibu_pasangan;
        $nama_ayah_pasangan = $request->nama_ayah_pasangan;
        $tinggi_pasangan = $request->tinggi_pasangan;
        $berat_pasangan = $request->berat_pasangan;
        $golongan_darah_pasangan = $request->golongan_darah_pasangan;
        $hobby_pasangan = $request->hobby_pasangan;
        $no_hp_pasangan = $request->no_hp_pasangan;
        $email_pasangan = $request->email_pasangan;
        $sosial_media_pasangan = $request->sosial_media_pasangan;


        $file = $request->file('img_user');
        $fname = $file->getClientOriginalName();

        $tujuan_upload = 'img/profile';

        $file->move($tujuan_upload, $fname);

        $addProfilePasangan = DB::table('user_pasangans')->insert([
            'id_user' => $id_user,
            'nama_pasangan' => $nama_pasangan,
            'nik_pasangan' => $nik_pasangan,
            'gender_pasangan' => $gender_pasangan,
            'nama_ibu_pasangan' => $nama_ibu_pasangan,
            'nama_ayah_pasangan' => $nama_ayah_pasangan,
            'tinggi_pasangan' => $tinggi_pasangan,
            'berat_pasangan' => $berat_pasangan,
            'golongan_darah_pasangan' => $golongan_darah_pasangan,
            'hobby_pasangan' => $hobby_pasangan,
            'no_hp_pasangan' => $no_hp_pasangan,
            'email_pasangan' => $email_pasangan,
            'sosial_media_pasangan' => $sosial_media_pasangan,
            'img_user' => $fname,
        ]);

        if ($addProfilePasangan) {
            if (auth()->user()->role == "pelayan") {
                return redirect()->route('pelayan_profilepasangan');
            } else if (auth()->user()->role == "pimpinan") {
                return redirect()->route('pimpinan_profilepasangan');
            } else if (auth()->user()->role == "kepaladepartemen") {
                return redirect()->route('kepaladepartemen_pasangan');
            } 
        } else{
            echo "error";
        }
    }

    public function updateProfilePasangan(Request $request, $id)
    {
        $this->validate(
            $request,
            [
                'nama_pasangan' => 'required|min:10"',
                'nik_pasangan' => 'required|min:16',
                'gender_pasangan' => 'required',
                'nama_ibu_pasangan' => 'required|min:5',
                'nama_ayah_pasangan' => 'required|min:5',
                'tinggi_pasangan' => 'required|min:1',
                'berat_pasangan' => 'required|min:1',
                'golongan_darah_pasangan' => 'required',
                'hobby_pasangan' => 'required|min:5',
                'no_hp_pasangan' => 'required|min:12',
                'email_pasangan' => 'required|min:10',
                'sosial_media_pasangan' => 'required|min:4',
                'img_user' => 'required|image|mimes:jpg,png,jpeg,gif,svg',

            ],
        );

        $id_user = Auth::id();
        $nama_pasangan = $request->nama_pasangan;
        $nik_pasangan = $request->nik_pasangan;
        $gender_pasangan = $request->gender_pasangan;
        $nama_ibu_pasangan = $request->nama_ibu_pasangan;
        $nama_ayah_pasangan = $request->nama_ayah_pasangan;
        $tinggi_pasangan = $request->tinggi_pasangan;
        $berat_pasangan = $request->berat_pasangan;
        $golongan_darah_pasangan = $request->golongan_darah_pasangan;
        $hobby_pasangan = $request->hobby_pasangan;
        $no_hp_pasangan = $request->no_hp_pasangan;
        $email_pasangan = $request->email_pasangan;
        $sosial_media_pasangan = $request->sosial_media_pasangan;


        $file = $request->file('img_user');
        $fname = $file->getClientOriginalName();

        $tujuan_upload = 'img/profile';

        $file->move($tujuan_upload, $fname);

        $updateProfilePasangan = DB::table('user_pasangans')->where('id', '=', $id)->update([
            'nama_pasangan' => $nama_pasangan,
            'nik_pasangan' => $nik_pasangan,
            'gender_pasangan' => $gender_pasangan,
            'nama_ibu_pasangan' => $nama_ibu_pasangan,
            'nama_ayah_pasangan' => $nama_ayah_pasangan,
            'tinggi_pasangan' => $tinggi_pasangan,
            'berat_pasangan' => $berat_pasangan,
            'golongan_darah_pasangan' => $golongan_darah_pasangan,
            'hobby_pasangan' => $hobby_pasangan,
            'no_hp_pasangan' => $no_hp_pasangan,
            'email_pasangan' => $email_pasangan,
            'sosial_media_pasangan' => $sosial_media_pasangan,
            'img_user' => $fname,
        ]);

        if ($updateProfilePasangan) {
            if (auth()->user()->role == "pelayan") {
                return redirect()->route('pelayan_profilepasangan');
            } else if (auth()->user()->role == "pimpinan") {
                return redirect()->route('pimpinan_profilepasangan');
            } else if (auth()->user()->role == "kepaladepartemen") {
                return redirect()->route('kepaladepartemen_pasangan');
            } 
        } else{
            echo "error";
        }
    }

    public function profileAnak()
    {
        {
            $id_user = Auth::id();
            $data = User_anak::where('id_user', '=', $id_user)->get();
            // dd($data);
            $isEmpty = true;
            if ($data->isEmpty()) {
                $isEmpty = true;
            } else if ($data->isNotEmpty()) {
                $isEmpty = false;
            } else {
                $isEmpty = true;
            }
            return view('shared.profile-anak', compact('isEmpty', 'data'));
        }
    }

    public function addProfileAnak(Request $request)
    {
        $this->validate(
            $request,
            [
                'nama_anak' => 'required|min:10"',
                'nik_anak',
                'gender_anak' => 'required',
                'nama_ibu_anak' => 'required|min:5',
                'nama_ayah_anak' => 'required|min:5',
                'tinggi_anak' => 'required|min:1',
                'berat_anak' => 'required|min:1',
                'golongan_darah_anak' => 'required',
                'hobby_anak' => 'required|min:5',
                'no_hp_anak',
                'email_anak',
                'sosial_media_anak',
                'img_user' => 'required|image|mimes:jpg,png,jpeg,gif,svg',

            ],
        );

        $id_user = Auth::id();
        $nama_anak = $request->nama_anak;
        $nik_anak = $request->nik_anak;
        $gender_anak = $request->gender_anak;
        $nama_ibu_anak = $request->nama_ibu_anak;
        $nama_ayah_anak = $request->nama_ayah_anak;
        $tinggi_anak = $request->tinggi_anak;
        $berat_anak = $request->berat_anak;
        $golongan_darah_anak = $request->golongan_darah_anak;
        $hobby_anak = $request->hobby_anak;
        $no_hp_anak = $request->no_hp_anak;
        $email_anak = $request->email_anak;
        $sosial_media_anak = $request->sosial_media_anak;


        $file = $request->file('img_user');
        $fname = $file->getClientOriginalName();

        $tujuan_upload = 'img/profile';

        $file->move($tujuan_upload, $fname);

        $addProfileAnak = DB::table('user_anaks')->insert([
            'id_user' => $id_user,
            'nama_anak' => $nama_anak,
            'nik_anak' => $nik_anak,
            'gender_anak' => $gender_anak,
            'nama_ibu_anak' => $nama_ibu_anak,
            'nama_ayah_anak' => $nama_ayah_anak,
            'tinggi_anak' => $tinggi_anak,
            'berat_anak' => $berat_anak,
            'golongan_darah_anak' => $golongan_darah_anak,
            'hobby_anak' => $hobby_anak,
            'no_hp_anak' => $no_hp_anak,
            'email_anak' => $email_anak,
            'sosial_media_anak' => $sosial_media_anak,
            'img_user' => $fname,
        ]);

        if ($addProfileAnak) {
            if (auth()->user()->role == "pelayan") {
                return redirect()->route('pelayan_profileanak');
            } else if (auth()->user()->role == "pimpinan") {
                return redirect()->route('pimpinan_profileanak');
            } else if (auth()->user()->role == "kepaladepartemen") {
                return redirect()->route('kepaladepartemen_anak');
            } 
        } else{
            echo "error";
        }
    }
    
    public function updateProfileAnak(Request $request, $id)
    {
        $this->validate(
            $request,
            [
                'nama_anak' => 'required|min:10"',
                'nik_anak',
                'gender_anak' => 'required',
                'nama_ibu_anak' => 'required|min:5',
                'nama_ayah_anak' => 'required|min:5',
                'tinggi_anak' => 'required|min:1',
                'berat_anak' => 'required|min:1',
                'golongan_darah_anak' => 'required',
                'hobby_anak' => 'required|min:5',
                'no_hp_anak',
                'email_anak',
                'sosial_media_anak',
                'img_user' => 'required|image|mimes:jpg,png,jpeg,gif,svg',

            ],
        );

        $id_user = Auth::id();
        $nama_anak = $request->nama_anak;
        $nik_anak = $request->nik_anak;
        $gender_anak = $request->gender_anak;
        $nama_ibu_anak = $request->nama_ibu_anak;
        $nama_ayah_anak = $request->nama_ayah_anak;
        $tinggi_anak = $request->tinggi_anak;
        $berat_anak = $request->berat_anak;
        $golongan_darah_anak = $request->golongan_darah_anak;
        $hobby_anak = $request->hobby_anak;
        $no_hp_anak = $request->no_hp_anak;
        $email_anak = $request->email_anak;
        $sosial_media_anak = $request->sosial_media_anak;


        $file = $request->file('img_user');
        $fname = $file->getClientOriginalName();

        $tujuan_upload = 'img/profile';

        $file->move($tujuan_upload, $fname);

        $updateProfileAnak = DB::table('user_anaks')->where('id', '=', $id)->update([
            'nama_anak' => $nama_anak,
            'nik_anak' => $nik_anak,
            'gender_anak' => $gender_anak,
            'nama_ibu_anak' => $nama_ibu_anak,
            'nama_ayah_anak' => $nama_ayah_anak,
            'tinggi_anak' => $tinggi_anak,
            'berat_anak' => $berat_anak,
            'golongan_darah_anak' => $golongan_darah_anak,
            'hobby_anak' => $hobby_anak,
            'no_hp_anak' => $no_hp_anak,
            'email_anak' => $email_anak,
            'sosial_media_anak' => $sosial_media_anak,
            'img_user' => $fname,
        ]);

        if ($updateProfileAnak) {
            if (auth()->user()->role == "pelayan") {
                return redirect()->route('pelayan_profileanak');
            } else if (auth()->user()->role == "pimpinan") {
                return redirect()->route('pimpinan_profileanak');
            } else if (auth()->user()->role == "kepaladepartemen") {
                return redirect()->route('kepaladepartemen_anak');
            } 
        } else{
            echo "error";
        }
    }
}
