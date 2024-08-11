<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['penjualan_id' => 1, 'user_id' => 1, 'pembeli' => 'Budi', 'penjualan_kode' => 'PENJ-2021-01', 'penjualan_tanggal' => '2021-01-01 08:00:00'],
            ['penjualan_id' => 2, 'user_id' => 1, 'pembeli' => 'Ani', 'penjualan_kode' => 'PENJ-2021-02', 'penjualan_tanggal' => '2021-02-10 08:00:00'],
            ['penjualan_id' => 3, 'user_id' => 1, 'pembeli' => 'Citra', 'penjualan_kode' => 'PENJ-2021-03', 'penjualan_tanggal' => '2021-03-20 08:00:00'],
            ['penjualan_id' => 4, 'user_id' => 2, 'pembeli' => 'Dewi', 'penjualan_kode' => 'PENJ-2021-04', 'penjualan_tanggal' => '2021-04-5 08:00:00'],
            ['penjualan_id' => 5, 'user_id' => 2, 'pembeli' => 'Eka', 'penjualan_kode' => 'PENJ-2021-05', 'penjualan_tanggal' => '2021-05-15 08:00:00'],
            ['penjualan_id' => 6, 'user_id' => 2, 'pembeli' => 'Fajar', 'penjualan_kode' => 'PENJ-2021-06', 'penjualan_tanggal' => '2021-06-25 08:00:00'],
            ['penjualan_id' => 7, 'user_id' => 3, 'pembeli' => 'Gita', 'penjualan_kode' => 'PENJ-2021-07', 'penjualan_tanggal' => '2021-07-01 08:00:00'],            
            ['penjualan_id' => 8, 'user_id' => 3, 'pembeli' => 'Erin', 'penjualan_kode' => 'PENJ-2021-08', 'penjualan_tanggal' => '2021-07-01 08:00:00'],            
            ['penjualan_id' => 9, 'user_id' => 3, 'pembeli' => 'Dinda', 'penjualan_kode' => 'PENJ-2021-09', 'penjualan_tanggal' => '2021-07-01 08:00:00'],            
            ['penjualan_id' => 10, 'user_id' => 3, 'pembeli' => 'Tiwi', 'penjualan_kode' => 'PENJ-2021-010', 'penjualan_tanggal' => '2021-07-01 08:00:00'],            

        ];
        DB::table('t_penjualan')->insert($data);
    }
}
