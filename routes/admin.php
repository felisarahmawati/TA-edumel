<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\Admin\Akun\PetugasController;
use App\Http\Controllers\Admin\Master\EbookController;
use App\Http\Controllers\Admin\Master\LoginController;
use App\Http\Controllers\Admin\Master\MadingController;
use App\Http\Controllers\Admin\Master\KategoriController;
use App\Http\Controllers\Admin\Master\SubKategoriController;

Route::group(['middleware' => ['guest']], function() {
    Route::controller(LoginController::class)->group(function(){
        Route::get('admin/login', 'index')->name('login');
        Route::post('admin/login/proses', 'proses');
    });
});

Route::group(['middleware' => ['cekUserLogin']], function() {
    Route::resource('dashboard', BerandaController::class);
    Route::get('logout', [LoginController::class, 'logout']);

    Route::prefix("admin")->group(function() {
        Route::prefix("kategori")->group(function() {
            Route::get("/edit", [KategoriController::class, "edit"]);
            Route::put("/simpan", [KategoriController::class, "update"]);
            Route::resource("/", KategoriController::class);
        });

        Route::prefix("autentikasi")->group(function() {
            Route::prefix("petugas")->group(function() {
                Route::get("/edit", [PetugasController::class, "edit"]);
                Route::get("/simpan", [PetugasController::class, "update"]);
                Route::resource("/", PetugasController::class);
            });
        });

        Route::prefix("sub-kategori")->group(function() {
            Route::get("/edit", [SubKategoriController::class, "edit"]);
            Route::put("/simpan", [SubKategoriController::class, "update"]);
            Route::resource("/", SubKategoriController::class);
        });

        Route::prefix("majding")->group(function() {
            Route::get("/edit", [MadingController::class, "edit"]);
            Route::put("/simpan", [MadingController::class, "update"]);
            Route::resource("/", MadingController::class);
        });

        Route::prefix("buku")->group(function() {
            Route::get("/edit", [EbookController::class, "edit"]);
            Route::put("/simpan", [EbookController::class, "update"]);
            Route::resource("/", EbookController::class);
        });
    });
});

Route::get("/laporanindex", function () {
    return view('/admin/laporan/dataanggota/laporanindex');
});

Route::get("/dm_index", function () {
    return view('/admin/laporan/datamading/dm_index');
});

Route::get("/de_index", function () {
    return view('/admin/laporan/dataebook/de_index');
});


Route::get("/laporanindex", function () {
    return view('/admin/laporan/dataanggota/laporanindex');
});

Route::get("/index", function () {
    return view('/admin/autentikasi/anggota/index');
});

// Route::get("/p_index", function () {
//     return view('/admin/autentikasi/petugas/p_index');
// });

