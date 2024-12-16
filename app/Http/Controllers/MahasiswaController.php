<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class MahasiswaController extends Controller
{
    public function index(){
        $mahasiswa = [
                        "Didik Prabowo",
                        "Prabowo Didik",
                        "Mas Didik Prabowo",
                        "Didik Prabowo Mas"
                    ];
        $pdf = PDF::loadView('mahasiswa', compact('mahasiswa'));
        return $pdf->stream('mahasiswa.pdf');
    }
}
