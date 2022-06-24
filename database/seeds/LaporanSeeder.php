<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class LaporanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('laporans')->insert([
            'judul' => Str::random(60),
            'jenis' => Str::random(10),
            'tanggal_berakhir' => "2022-7-12",
            'aksi' => 'Aktif'
        ]);
        DB::table('laporans')->insert([
            'judul' => Str::random(60),
            'jenis' => Str::random(10),
            'tanggal_berakhir' => "2022-7-12",
            'aksi' => 'Aktif'
        ]);
        DB::table('laporans')->insert([
            'judul' => Str::random(10),
            'jenis' => Str::random(10),
            'tanggal_berakhir' => "2022-7-12",
            'aksi' => 'Aktif'
        ]);
        DB::table('laporans')->insert([
            'judul' => Str::random(10),
            'jenis' => Str::random(10),
            'tanggal_berakhir' => "2022-7-12",
            'aksi' => 'Aktif'
        ]);
        DB::table('laporans')->insert([
            'judul' => Str::random(10),
            'jenis' => Str::random(10),
            'tanggal_berakhir' => "2022-7-12",
            'aksi' => 'Aktif'
        ]);
        DB::table('laporans')->insert([
            'judul' => Str::random(10),
            'jenis' => Str::random(10),
            'tanggal_berakhir' => "2022-7-12",
            'aksi' => 'Aktif'
        ]);
        DB::table('laporans')->insert([
            'judul' => Str::random(10),
            'jenis' => Str::random(10),
            'tanggal_berakhir' => "2022-7-12",
            'aksi' => 'Aktif'
        ]);
        DB::table('laporans')->insert([
            'judul' => Str::random(10),
            'jenis' => Str::random(10),
            'tanggal_berakhir' => "2022-7-12",
            'aksi' => 'Tidak Aktif'
        ]);
        DB::table('laporans')->insert([
            'judul' => Str::random(10),
            'jenis' => Str::random(10),
            'tanggal_berakhir' => "2022-7-12",
            'aksi' => 'Tidak Aktif'
        ]);
        DB::table('laporans')->insert([
            'judul' => Str::random(10),
            'jenis' => Str::random(10),
            'tanggal_berakhir' => "2022-7-12",
            'aksi' => 'Tidak Aktif'
        ]);
        DB::table('laporans')->insert([
            'judul' => Str::random(10),
            'jenis' => Str::random(10),
            'tanggal_berakhir' => "2022-7-12",
            'aksi' => 'Tidak Aktif'
        ]);
    }
}
