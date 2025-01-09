<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Applicant;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class AccountOfficerController extends Controller
{

    public function index()
    {
        
        return view('accountofficer.index');
    }

    
}
