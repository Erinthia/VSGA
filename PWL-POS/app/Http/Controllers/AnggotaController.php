<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;
use App\Http\Controllers\Controller;



class AnggotaController extends Controller
{
    //
    public function cekObject(){
        $anggota = new Anggota;

        dump($anggota);
    }
    public function insert(){
        $anggota = new Anggota;
        $anggota->nip = "22317408";
        $anggota->nama = "halim";
        $anggota->tanggal_lahir = "2002-06-13";
        $anggota->nilai = "3.5";
        $anggota->save();
        echo"Data berhasil disimpan";
    }

    public function update(){
        $anggota = Anggota::find(1);
        $anggota->nama = "Dono";
        $anggota->nilai= "3.5";
        $anggota->save();
        echo"Data berhasil diupdate";
    }  
    public function delete(){
        $anggota = Anggota::find(1);
        $anggota->delete();
        echo"Data berhasil dihapus";
    }
    public function all(){
        $result = Anggota::all();
        return view ('tampilkan_anggota',['anggotas'=>$result]);
    }
    public function find(){
        $result = Anggota::find(3);
        return view ('tampilkan_anggota',['anggota'=>[$result]]);
    }

    public function getWhere(){
        $result = Anggota::where('nilai','>','3.3')
        ->orderBy('nilai','desc')
        ->get();
        return view ('tampilkan_anggota',['anggota'=>$result]);

    }
}
