<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function index()
    {
        //menambah data
    //     $data=[
    //         'kategori_kode'=>'SNK',
    //         'kategori_nama'=>'Snack/makanan ringan',
    //         'created_at'=>now(),
    //     ];
    //     DB::table('m_kategori')->insert($data);
    //     return 'Data berhasil ditambah';

    //update data
    $row = DB::table('m_kategori')->where('kategori_kode', 'SNK')->update(['kategori_nama'=>'Cemilan']);
    return 'Data berhasil diupdate, jumlah data yang terupdate' . $row . 'baris';
    }
}
