<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ZakatSekarangController extends Controller
{
    public function index()
    {
        return view('admin.zakat-sekarang.index');
    }

    public function show()
    {
        // return view('admin.zakat-sekarang.show');
    }
}
