<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormPengaduanController extends Controller
{
    public function __invoke()
    {
        echo view('form.form_pengaduan');
    }
}
