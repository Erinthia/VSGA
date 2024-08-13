<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;

    protected $table = "m_user"; // Ganti dari $tab ke $table
    protected $primaryKey = "user_id";

}
