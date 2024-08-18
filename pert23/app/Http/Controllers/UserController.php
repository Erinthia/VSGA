<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Yajra\DataTables\DataTables;

class UserController extends Controller
{
    public function index()
    {
        return view('team');
    }
    public function getUsers()
    {
        $users = User::select(['id', 'name', 'email', 'created_at', 'updated_at']);
        return DataTables::of($users)->make(true);
    }
}
