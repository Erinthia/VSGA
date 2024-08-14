<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;

class AnggotaController extends Controller
{
    //
    public function cekObject(){
        $anggota = new Anggota;

        dump($anggota);
    }
    public function insert(){
        $anggota = new Anggota;
        $anggota->nip = "22317406";
        $anggota->nama = "erin";
        $anggota->tanggal_lahir = "2002-07-13";
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
}
