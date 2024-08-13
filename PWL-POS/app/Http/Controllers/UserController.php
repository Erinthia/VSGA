<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;

class UserController extends Controller
{
    public function index(){
        //coba akses model usermodel
        $users = UserModel::all();
        return view("user",['data'=>$users]);
    }
}
