<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TarikTunaiController extends Controller
{
    public function index(){
        return view('tarik.tariktunai');
    }
    public function __invoke(){
        echo view('tarik.form_tarik_tunai');
    }
}
