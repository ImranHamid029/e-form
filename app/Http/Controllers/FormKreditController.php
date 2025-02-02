<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use App\Models\Applicant;
use App\Models\Province;
use App\Models\District;
use App\Models\City;

class FormKreditController extends Controller
{
    public function create()
    {
        $provinces = Province::all();
        $cities = City::all();
        $districts = District::all();

        return view('kredit.form_kredit', compact('provinces', 'cities', 'districts'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nik'                    => 'required|string',
            'fullName'               => 'required|string',
            'placeOfBirth'           => 'required|string',
            'dateOfBirth'            => 'required|date',
            'gender'                 => 'required|string',
            'phoneNumber'            => 'required|string',
            'email'                  => 'required|email',
            'residentialAddress'     => 'required|string',
            'residentialProvince'    => 'required|string',
            'residentialCity'        => 'required|string',
            'residentialDistrict'    => 'required|string',
            'posCode'                => 'required|numeric',
            'companyName'            => 'required|string',
            'businessAddress'        => 'required|string',
            'businessProvince'       => 'required|string',
            'businessCity'           => 'required|string',
            'businessDistrict'       => 'required|string',
            'businessPosCode'        => 'required|numeric',
            'businessPlaceStatus'    => 'required|string',
            'businessSector'         => 'required|string',
            'loanTerm'               => 'required|numeric',
            'loanUsageDescription'   => 'required|string',
            'loanCollateral'         => 'required|string',
        ]);

        // Generate nomor resi unik
        $uniqueResi = 'BL' . strtoupper(uniqid());

        $validatedData['resiNumber'] = $uniqueResi;

        Applicant::create($validatedData);

        session(['resiNumber' => $uniqueResi]);

        // Mengembalikan JSON agar AJAX bisa menangkap uniqueResi
        return response()->json([
            'uniqueResi' => $uniqueResi,
            'html' => view('popup.popup1', compact('uniqueResi'))->render()
        ]);
    }

    public function validation(Request $request)
    {
        $validatedData = $request->validate([
            'nik'                    => 'required|string',
            'fullName'               => 'required|string',
            'placeOfBirth'           => 'required|string',
            'dateOfBirth'            => 'required|date',
            'gender'                 => 'required|string',
            'phoneNumber'            => 'required|string',
            'email'                  => 'required|email',
            'residentialAddress'     => 'required|string',
            'residentialProvince'    => 'required|string',
            'residentialCity'        => 'required|string',
            'residentialDistrict'    => 'required|string',
            'posCode'                => 'required|numeric',
            'companyName'            => 'required|string',
            'businessAddress'        => 'required|string',
            'businessProvince'       => 'required|string',
            'businessCity'           => 'required|string',
            'businessDistrict'       => 'required|string',
            'businessPosCode'        => 'required|numeric',
            'businessPlaceStatus'    => 'required|string',
            'businessSector'         => 'required|string',
            'loanTerm'               => 'required|numeric',
            'loanUsageDescription'   => 'required|string',
            'loanCollateral'         => 'required|string',
        ]);

        session(['formData' => $validatedData]);

        $storeRoute = route('kredit.store');

        return view('popup.validation', ['formData' => $validatedData, 'storeRoute' => route('kredit.store')]);
    }

    public function downloadPDF($uniqueResi)
    {
        $applicant = Applicant::where('resiNumber', $uniqueResi)->firstOrFail();
    
        $pdf = PDF::loadView('tiket.kredit.kredit_tiket', compact('applicant'));
    
        return $pdf->stream('Bukti_Kredit.pdf');
    }
}
