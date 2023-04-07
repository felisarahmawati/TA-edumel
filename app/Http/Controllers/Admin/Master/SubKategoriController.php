<?php

namespace App\Http\Controllers\Admin\Master;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Admin\Kategori;
use App\Models\Admin\SubKategori;
use App\Http\Controllers\Controller;

class SubKategoriController extends Controller
{
    public function index()
    {
        $data = [
            "sub_kategori" => SubKategori::get(),
            "kategori" => Kategori::all()
        ];

        return view('admin.sub-kategori.index', $data);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            "kategori_id" => '',
            "subkategori" => '',
        ]);

        SubKategori::create([
            "kategori_id" => $request->kategori_id,
            "subkategori" => $request->subkategori,
            "slug" => Str::slug($request->subkategori)
        ]);

        return back()->with('berhasil', 'Sub Kategori  telah ditambahkan');

    }

    public function edit(Request $request)
    {
        $data = [
            "edit" => SubKategori::where("id", $request->id)->first(),
            "kategori" => Kategori::all()
        ];

        return view("admin.sub-kategori.edit", $data);
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            "kategori_id" => '',
            "subkategori" => '',
        ]);

        SubKategori::where("id", $request->id)->update([
            "kategori_id" => $request->kategori_id,
            "subkategori" => $request->subkategori,
            "slug" => Str::slug($request->subkategori)
        ]);

        return back();
    }

    public function destroy(SubKategori $subkategori)
    {
        $subkategori->delete();
        return back()->with('berhasil');
    }
}
