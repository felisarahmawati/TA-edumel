<?php

namespace App\Http\Controllers\Admin\Master;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Admin\Kategori;
use App\Http\Controllers\Controller;

class KategoriController extends Controller
{
    public function index()
    {
        $data = [
            "kategori" => Kategori::get()
        ];
        return view('admin.kategori.v_index', $data);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_kategori' => '',
        ]);

        Kategori::create([
            'nama_kategori' => $request->nama_kategori,
            'slug' => Str::slug($request->nama_kategori),
        ]);

        return back()->with('berhasil', 'Kategori baru telah ditambahkan');
    }

    public function edit(Request $request)
    {
        $data = [
            "edit" => Kategori::where("id", $request->id)->first(),
        ];

        return view("admin.kategori.edit", $data);
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'nama_kategori' => '',
        ]);

        Kategori::where("id", $request->id)->update([
            'nama_kategori' => $request->nama_kategori,
            'slug' => Str::slug($request->nama_kategori),
        ]);

        return back();
    }

    public function destroy(Kategori $kategori)
    {
        $kategori->delete();
        return back()->with('berhasil');
    }
}
