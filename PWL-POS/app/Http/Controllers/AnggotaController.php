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
}
