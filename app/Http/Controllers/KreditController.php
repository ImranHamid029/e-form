<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KreditController extends Controller
{
    public function index()
    {
        return view('kredit.kredit');
        
    }
    public function __invoke()
    {
        echo view('kredit.form_kredit');
    }
}
