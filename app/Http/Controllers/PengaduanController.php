<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;

class PengaduanController extends Controller
{

    public function __invoke()
    {
        echo view('pengaduan');
    }
    public function store(Request $request)
{
    $validatedData = $request->validate([
        'nama_lengkap' => 'required|string|max:255',
        'no_hp'        => 'required|string|max:20',
        'email'        => 'required|email|max:255',
        'laporan'      => 'required|string',
    ]);

    Pengaduan::create($validatedData);

    return redirect()->back()->with('success', 'Pengaduan berhasil disimpan!');
}
}
