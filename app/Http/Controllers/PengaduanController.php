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
    
}
