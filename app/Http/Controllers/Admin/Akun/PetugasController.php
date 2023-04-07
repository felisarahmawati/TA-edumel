<?php

namespace App\Http\Controllers\Admin\Akun;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;
        $data = [
            "petugas" => User::get()
        ];
        return view('admin.autentikasi.petugas.p_index', $data);
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
                'password' => bcrypt($request->password),
                'level' => 1
            ]);
            return redirect('/admin/autentikasi/petugas');
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
                'password' => bcrypt($request->password),
            ]);
            return redirect('/admin/autentikasi/petugas');
        }
    }

    public function show(Request $request)
    {
        $data = [
            "detail" => User::where("id", $request->id)->first()
        ];

        return view("admin.autentikasi.petugas.detail", $data);
    }
}
