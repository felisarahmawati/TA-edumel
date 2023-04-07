<?php

namespace App\Http\Controllers\Admin\Akun;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    public function index()
    {
        return view('admin.akun.anggota.index');
    }
}
