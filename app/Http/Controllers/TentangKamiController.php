<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TentangKamiController extends Controller
{
    public function __invoke(){
        echo view('tentangkami.tentangkami');
    }
}
