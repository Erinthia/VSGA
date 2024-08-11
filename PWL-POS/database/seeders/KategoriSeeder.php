<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     */
    public function run():void
    {
        $data =[
            ['kategori_id' => 1, 'kategori_kode' => 'MKN', 'kategori_nama' => 'Makanan'],
            ['kategori_id' => 2, 'kategori_kode' => 'MNM', 'kategori_nama' => 'Minuman'],
            ['kategori_id' => 3, 'kategori_kode' => 'DSRT', 'kategori_nama' => 'Desert'],
            ['kategori_id' => 4, 'kategori_kode' => 'ESC', 'kategori_nama' => 'Es Cream'],
            ['kategori_id' => 5, 'kategori_kode' => 'ESB', 'kategori_nama' => 'Es Buah'],
        ];
        DB::table('m_kategori')->insert($data);
    }
}
