<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Complaint;

class PengaduanController extends Controller
{
    public function index()
    {
        return view('pengaduan.pengaduan');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'fullName'           => 'required|string|max:255',
            'phoneNumber'        => 'required|string|max:255',
            'email'              => 'required|email|max:255',
            'complaint'          => 'required|string',
        ]);

        $validatedData['status'] = 'Menunggu';
        
        Complaint::create($validatedData);

        session([
            'fullName'           => $request->fullName,
            'phoneNumber'        => $request->phoneNumber,
            'email'              => $request->email,
            'complaint'          => $request->complaint,
        ]);

        return view('popup.popup3');
    }
    
    public function validation(Request $request)
    {
        $validatedData = $request->validate([
            'fullName'           => 'required|string|max:255',
            'phoneNumber' => 'required|string|max:255',
            'email'              => 'required|email|max:255',
            'complaint'          => 'required|string',
        ]);

        session(['formData' => $validatedData]);

        $storeRoute = route('pengaduan.store');

        return view('popup.validation', ['formData' => $validatedData, 'storeRoute' => $storeRoute]);
    }
}
