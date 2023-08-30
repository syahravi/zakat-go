<?php

namespace App\Http\Controllers;

use App\Models\ZakatProduktif;
use Illuminate\Http\Request;

class ZakatProduktifController extends Controller
{
    public function index()
    {
        $zakat_produktif = ZakatProduktif::all();
        $data = [
            'zakat_produktif' => $zakat_produktif
        ];
        return view('user.zakat-produktif.index', $data);
    }

    public function show()
    {
        $zakat = ZakatProduktif::first();
        $data = [
            'zakat' => $zakat
        ];
        return view('user.zakat-produktif.show', $data);
    }
}
