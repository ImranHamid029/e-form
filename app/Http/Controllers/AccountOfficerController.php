<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Applicant;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class AccountOfficerController extends Controller
{
    //
    public function index()
    {
        // get overall data from database
        return view('accountofficer.index');
    }

    public function incoming()
    {
        $applicants = Applicant::all();
        return view('accountofficer.incoming', compact('applicants'));
    }
}
