<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        //menambahkan data menggunakan ORM
        // $data =[
        //     'username'=> 'erin',
        //     'nama'=> 'eirn',
        //     'password'=> Hash::make('12345'),
        //     'user_id'=> 4,
        //     'level_id'=> 1
        // ];
        // UserModel::insert($data);

        $data=[
            'nama'=>'dinda',
        ];
        UserModel::where('username', 'erin')->update($data);

        //akses model usermodel
        $user=UserModel::all();
        return view('user', ['data'=>$user]);
        
    }
}
