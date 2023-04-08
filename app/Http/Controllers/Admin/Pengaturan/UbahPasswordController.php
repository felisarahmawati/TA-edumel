<?php

namespace App\Http\Controllers\Admin\Pengaturan;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UbahPasswordController extends Controller
{
    public function index()
    {
        $user = User::findOrFail(Auth::id());

        return view("admin.pengaturan.ubahpassword.index", compact('user'));
    }
}
