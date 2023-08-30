<?php

namespace App\Http\Controllers;

use App\Models\ZakatSekarang;
use Illuminate\Http\Request;

class ZakatSekarangController extends Controller
{
    public function index()
    {
        $zakat_sekarang = ZakatSekarang::all();
        $data = [
            'zakat_sekarang' => $zakat_sekarang
        ];
        return view('user.zakat-sekarang.index', $data);
    }

    public function show()
    {
        $zakat = ZakatSekarang::first();
        $data = [
            'zakat' => $zakat
        ];
        return view('user.zakat-sekarang.show', $data);
    }
}
