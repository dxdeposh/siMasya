<?php

namespace App\Http\Controllers\Admin;

use App\Models\Testimoni;
use Illuminate\Http\Request;

class AdminTestimoniController extends Controller
{
    public function index()
    {
        $testimonis = Testimoni::all();
        return view('admin.pengaduan.index', compact('testimonis'));
    }

    public function create()
    {
        return view('admin.testimoni.create');  // Halaman untuk form tambah testimoni
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'testimoni' => 'required|string',
        ]);

        Testimoni::create([
            'nama' => $request->nama,
            'testimoni' => $request->testimoni,
        ]);

        return redirect()->route('admin.pengaduan.index')->with('success', 'Testimoni berhasil ditambahkan');
    }
}
