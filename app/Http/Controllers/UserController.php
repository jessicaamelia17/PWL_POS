<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $data = [
            // 'username' => 'customer-1',
            'nama' => 'Manager',
            // 'password' => Hash::make('12345'),
            // 'level_id' => 4
        ];
        UserModel::where('username', 'Manager')->update($data);

        $user = UserModel::all();
        return view('user', ['data' => $user]);
    }
}
