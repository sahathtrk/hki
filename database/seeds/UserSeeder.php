<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        DB::table('users')->insert([
            'nama' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'),
            'alamat' => 'komsta',
            'ttl' => '2001-05-24',
            'hp' => '3213213',
            'role' => 'admin'
        ]);

        DB::table('users')->insert([
            'nama' => 'pimpinan',
            'email' => 'pimpinan@gmail.com',
            'password' => Hash::make('pimpinan123'),
            'alamat' => 'komsto',
            'ttl' => '2001-05-24',
            'hp' => '3213213231',
            'role' => 'pimpinan'
        ]);

        DB::table('users')->insert([
            'nama' => 'kepaladepartemen',
            'email' => 'kepaladepartemen@gmail.com',
            'password' => Hash::make('kepaladepartemen123'),
            'alamat' => 'komsti',
            'ttl' => '2001-05-24',
            'hp' => '3213213',
            'role' => 'kepaladepartemen'
        ]);

        DB::table('users')->insert([
            'nama' => 'pelayan',
            'email' => 'pelayan@gmail.com',
            'password' => Hash::make('pelayan123'),
            'alamat' => 'komste',
            'ttl' => '2001-05-24',
            'hp' => '3213213',
            'role' => 'pelayan'
        ]);
    }
}
