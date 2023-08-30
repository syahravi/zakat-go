<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ZakatProduktifController extends Controller
{
    public function index()
    {
        return view('user.zakat-produktif.index');
    }

    public function show()
    {
        return view('user.zakat-produktif.show');
    }
}
