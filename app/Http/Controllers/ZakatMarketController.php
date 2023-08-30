<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ZakatMarketController extends Controller
{
    public function index()
    {
        return view('user.zakat-market.index');
    }

    public function show()
    {
        return view('user.zakat-market.show');
    }
}
