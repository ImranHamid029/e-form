<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SetorController extends Controller
{
    public function __invoke(){
        echo view('form.form_setor_tunai');
    }
    
}
