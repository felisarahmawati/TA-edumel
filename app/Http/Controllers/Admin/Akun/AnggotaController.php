<?php

namespace App\Http\Controllers\Admin\Akun;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AnggotaController extends Controller
{
    public function index()
    {

        $anggota = User::where("level", 2)->get();
        $user = User::findOrFail(Auth::id());

        return view('admin.autentikasi.anggota.index', compact("anggota", "user"));
    }

    public function store(Request $request)
    {
        if($request->password != $request->password) {
            return back();
        } else {
            User::create([
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
                'alamat' => $request->alamat,
                'keterangan' => $request->keterangan,
                'password' => bcrypt($request->password),
                'level' => 2
            ]);
            return redirect('/admin/autentikasi/anggota');
        }
    }

    public function update(Request $request, $id)
    {
        if($request->password != $request->password) {
            return back();
        } else {
            User::where("id", $id)->update([
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
                'alamat' => $request->alamat,
                'keterangan' => $request->keterangan,
                'password' => bcrypt($request->password),
            ]);
            return redirect('/admin/autentikasi/anggota');
        }
    }
}
