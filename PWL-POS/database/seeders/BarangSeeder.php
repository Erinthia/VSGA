<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     */
    public function run(): void
    {
        $data = [
                ['barang_id' => 1, 'kategori_id' => 1, 'barang_kode' => 'MKN01', 'nama_barang' => 'Ayam Bakar', 'harga_beli' => 25000, 'harga_jual' => 30000],
                ['barang_id' => 2, 'kategori_id' => 1, 'barang_kode' => 'MKN02', 'nama_barang' => 'Ayam Goreng', 'harga_beli' => 20000, 'harga_jual' => 25000],
                ['barang_id' => 3, 'kategori_id' => 2, 'barang_kode' => 'MNM01', 'nama_barang' => 'Es Jeruk', 'harga_beli' => 2000, 'harga_jual' => 3000],
                ['barang_id' => 4, 'kategori_id' => 2, 'barang_kode' => 'MNM02', 'nama_barang' => 'Es Teh', 'harga_beli' => 2000, 'harga_jual' => 3000],
                ['barang_id' => 5, 'kategori_id' => 3, 'barang_kode' => 'DSRT01', 'nama_barang' => 'Klepon', 'harga_beli' => 10000, 'harga_jual' => 15000],
                ['barang_id' => 6, 'kategori_id' => 3, 'barang_kode' => 'DSRT02', 'nama_barang' => 'Brownies', 'harga_beli' => 15000, 'harga_jual' => 20000],
                ['barang_id' => 7, 'kategori_id' => 4, 'barang_kode' => 'ESC01', 'nama_barang' => 'Es Cream Durian', 'harga_beli' => 15000, 'harga_jual' => 20000],
                ['barang_id' => 8, 'kategori_id' => 4, 'barang_kode' => 'ESC02', 'nama_barang' => 'Es Cream Coklat', 'harga_beli' => 10000, 'harga_jual' => 15000],
                ['barang_id' => 9, 'kategori_id' => 5, 'barang_kode' => 'ESB01', 'nama_barang' => 'Es Buto Ijo', 'harga_beli' => 10000, 'harga_jual' => 15000],
                ['barang_id' =>10, 'kategori_id' => 5, 'barang_kode' => 'ESB02', 'nama_barang' => 'Es Campur', 'harga_beli' => 10000, 'harga_jual' => 15000],
        ];
        DB::table('m_barang')->insert($data);
    }
}
