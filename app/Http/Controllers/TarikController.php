<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarik;
class TarikController extends Controller
{
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'no_rekening' => 'required|numeric',
            'nama_pemilik' => 'required|string',
        ]);

        // Simpan data ke MongoDB
        Tarik::create([
            'no_rekening' => $request->no_rekening,
            'nama_pemilik' => $request->nama_pemilik,
        ]);

        // Redirect ke halaman sukses
        return redirect()->back()->with('success', 'Data berhasil disimpan!');
    }
    public function __invoke(){
        echo view('form.form_tarik_tunai');
    }
}
