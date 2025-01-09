<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;

class PengaduanController extends Controller
{
    public function index()
    {
        return view('pengaduan.pengaduan');
    }
    public function __invoke()
    {
        echo view('pengaduan.form_pengaduan');
    }
}
