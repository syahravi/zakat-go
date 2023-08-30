<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\File;
use App\Models\ZakatSekarang;
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
    public function create()
    {
        return view('admin.zakat-sekarang.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'amount' => 'required|numeric',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        
        $thumbnailPath = $request->file('thumbnail')->store('thumbnails', 'public');
        $thumbnailFile = File::create([
            'name' => now()->format('Ymd'),
            'filename' => $request->file('thumbnail')->getClientOriginalName(),
            'path' => $thumbnailPath,
            'extension' => $request->file('thumbnail')->getClientMimeType(),
        ]);

        // Simpan data ZakatSekarang ke dalam database
        ZakatSekarang::create([
            'name' => $request->name,
            'description' => $request->description,
            'amount' => $request->amount,
            'thumbnail_id' => $thumbnailFile->id,
            'type_id' => 1,
            'mustahik_id' => auth()->user()->id,
            'amil_id' => auth()->user()->id,
            'admin_id' => auth()->user()->id,
        ]);

        return redirect()->route('admin.dashboard.zakat-sekarang.index');
    }
}
