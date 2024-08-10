<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageControllerSatu extends Controller
{
    //
    public function index(){
        return view('welcome');
    }
    public function satu(){
        // return 'data pertama';
        $arrBuah = ["Mangga", "Jeruk", "Apel", "Anggur", "Pisang"];
        return view ('pasarBuah')->with('pasarBuah', $arrBuah);
    }
}
