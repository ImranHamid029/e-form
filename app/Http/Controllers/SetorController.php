<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SetorController extends Controller
{
    public function index(){
        return view('setor.setortunai');
    }
    public function __invoke(){
        echo view('setor.form_setor_tunai');
    }
    
}
