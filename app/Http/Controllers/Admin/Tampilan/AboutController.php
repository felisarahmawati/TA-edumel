<?php

namespace App\Http\Controllers\Admin\Tampilan;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Tampilan\About;
use Illuminate\Support\Facades\Auth;

class AboutController extends Controller
{
    public function index()
    {
        return view('admin.tampilan.about.index');
    }

    public function store(Request $request)
    {
        //
    }

    public function edit()
    {
        //
    }

    public function update()
    {
        //
    }
}
