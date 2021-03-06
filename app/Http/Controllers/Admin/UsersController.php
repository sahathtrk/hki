<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function getAllUsers(){
        $data = DB::table('users')->orderBy('id', 'desc')->paginate(8);
        return view ('admin.users', compact('data'));
    }

    public function getUsersById($id){
        $data = DB::table('users')->where('id', '=', $id)->first();
        return view ('admin.users.details', compact('data'));
    }

    public function deleteUsers($id){
        DB::table('users')->where('id_user', '=', $id)->delete();
        return redirect()-> route('admin.users');
    }
}