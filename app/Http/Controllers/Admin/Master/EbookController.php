<?php

namespace App\Http\Controllers\Admin\Master;

use App\Models\User;
use App\Models\Admin\Ebook;
use Illuminate\Http\Request;
use App\Models\Admin\Kategori;
use App\Models\Admin\SubKategori;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class EbookController extends Controller
{
    public function index()
    {

        $buku = Ebook::get();
        $subkategori = SubKategori::all();
        $kategori = Kategori::all();
        $user = User::findOrFail(Auth::id());

        return view("admin.buku.v_index", compact("buku", "subkategori", "kategori", "user"));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            "kategori_id"   => '',
            "subkategori_id"   => '',
            "id_buku"       => '',
            "cover"         => 'mimes:jpg,jpeg,png',
            "file"          => '',
            "judul_buku"    => '',
            "penulis"       => '',
            "tahun_terbit"  => '',
        ]);

        if($request->file("cover")) {
            $data = $request->file("cover")->store("cover");
        }

        Ebook::create([
            "kategori_id"   => $request->kategori_id,
            "subkategori_id" => $request->subkategori_id,
            "id_buku"       => $request->id_buku,
            "cover"         => $data,
            "file"          => $request->file,
            "judul_buku"    => $request->judul_buku,
            "penulis"       => $request->penulis,
            "tahun_terbit"  => $request->tahun_terbit
        ]);

        return back()->with('berhasil', 'Buku telah ditambahkan');
    }

    public function edit(Request $request)
    {
        $data = [
            "edit" => Ebook::where("id", $request->id)->first()
        ];

        return view("admin.buku.edit", $data);
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            "kategori_id"   => '',
            "subkategori_id"=> '',
            "id_buku"       => '',
            "cover"         => 'mimes:jpg,jpeg,png',
            "file"          => '',
            "judul_buku"    => '',
            "penulis"       => '',
            "tahun_terbit"  => '',
        ]);

        if($request->file("cover_new")) {
            if ($request->gambarLama) {
                Storage::delete($request->gambarLama);
            }

            $data = $request->file("cover_new")->store("ebook");
        }else {
            $data = $request->gambarLama;
        }

        Ebook::where("id", $request->id)->update([
            "kategori_id"   => $request->kategori_id,
            "subkategori_id"   => $request->subkategori_id,
            "id_buku"       => $request->id_buku,
            "cover"         => $data,
            "file"          => $request->file,
            "judul_buku"    => $request->judul_buku,
            "penulis"       => $request->penulis,
            "tahun_terbit"  => $request->tahun_terbit
        ]);

        return back();
    }

    public function destroy(Ebook $ebook)
    {
        $ebook->delete();
        return back()->with('berhasil');
    }
}
