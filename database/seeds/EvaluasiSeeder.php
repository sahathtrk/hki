<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class EvaluasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('evaluasis')->insert([
            'judul' => Str::random(10),
            'tanggal_berakhir' => "2022-7-12",
        ]);
        DB::table('evaluasis')->insert([
            'judul' => Str::random(10),
            'tanggal_berakhir' => "2022-7-12",
        ]);
        DB::table('evaluasis')->insert([
            'judul' => Str::random(10),
            'tanggal_berakhir' => "2022-7-12",
        ]);
        DB::table('evaluasis')->insert([
            'judul' => Str::random(10),
            'tanggal_berakhir' => "2022-7-12",
        ]);
        DB::table('evaluasis')->insert([
            'judul' => Str::random(10),
            'tanggal_berakhir' => "2022-7-12",
        ]);
        DB::table('evaluasis')->insert([
            'judul' => Str::random(10),
            'tanggal_berakhir' => "2022-7-12",
        ]);
        DB::table('evaluasis')->insert([
            'judul' => Str::random(10),
            'tanggal_berakhir' => "2022-7-12",
        ]);
        DB::table('evaluasis')->insert([
            'judul' => Str::random(10),
            'tanggal_berakhir' => "2022-7-12",
        ]);
        DB::table('evaluasis')->insert([
            'judul' => Str::random(10),
            'tanggal_berakhir' => "2022-7-12",
        ]);
        DB::table('evaluasis')->insert([
            'judul' => Str::random(10),
            'tanggal_berakhir' => "2022-7-12",
        ]);
        DB::table('evaluasis')->insert([
            'judul' => Str::random(10),
            'tanggal_berakhir' => "2022-7-12",
        ]);
        DB::table('evaluasis')->insert([
            'judul' => Str::random(10),
            'tanggal_berakhir' => "2022-7-12",
        ]);
        DB::table('evaluasis')->insert([
            'judul' => Str::random(10),
            'tanggal_berakhir' => "2022-7-12",
        ]);
    }
}
