<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ZakatSekarangController extends Controller
{
    public function index()
    {
        return view('user.zakat-sekarang.index');
    }

    public function show()
    {
        return view('user.zakat-sekarang.show');
    }
}
