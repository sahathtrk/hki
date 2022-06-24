<?php

namespace App\Http\Controllers\Pelayan;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile(){
        return view('pelayan/profile');
    }
    
    public function profile_edit(){
        return view('pelayan/profile-edit');
    }

    public function profile_formal(){
        return view('pelayan/profile-formal');
    }
    
    public function profile_formal_edit(){
        return view('pelayan/profile-formal-edit');
    }

    public function profile_informal(){
        return view('pelayan/profile-informal');
    }
    
    public function profile_informal_edit(){
        return view('pelayan/profile-informal-edit');
    }

    public function profile_gerejawi(){
        return view('pelayan/profile-gerejawi');
    }
    
    public function profile_gerejawi_edit(){
        return view('pelayan/profile-gerejawi-edit');
    }

    public function profile_pasangan(){
        return view('pelayan/profile-pasangan');
    }
    
    public function profile_pasangan_edit(){
        return view('pelayan/profile-pasangan-edit');
    }

    public function profile_anak(){
        return view('pelayan/profile-anak');
    }
    
    public function profile_anak_edit(){
        return view('pelayan/profile-anak-edit');
    }

}
