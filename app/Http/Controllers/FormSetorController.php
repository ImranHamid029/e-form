<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MongoDB\Client as MongoDBClient;
use Barryvdh\DomPDF\Facade as PDF;
use App\Models\OperationalOffice;
use App\Models\Deposit;

class FormSetorController extends Controller
{
    public function create()
    {
        $offices = OperationalOffice::all();

        return view('setor.form_setor_tunai', compact ('offices'));
    }

    public function store(Request $request)
    {
        // Validasi data form
        $validatedData = $request->validate([
            'selectService' => 'required|string',
            'accountNumber' => 'required|numeric',
            'bankBranch'    => 'required|string',
            'accountOwner'  => 'required|string',
            'fullName'      => 'required|string',
            'phoneNumber'   => 'required|string',
            'job'           => 'required|string',
            'companyName'   => 'nullable|string',
            'amount'        => 'required|numeric',
            'amountInWords' => 'required|string',
        ]);
    
        // Gunakan count() daripada orderBy()
        $lastQueueNumber = Deposit::count();
        $nextQueueNumber = 'SA' . ($lastQueueNumber + 1);
    
        $validatedData['queueNumber'] = $nextQueueNumber;
    
        Deposit::create($validatedData);

        session()->forget('accountType');

        session([
            'queueNumber'    => $nextQueueNumber,
            'bankBranch'     => $request->bankBranch,
            'accountNumber'  => $request->accountNumber,
            'selectService'  => $request->selectService, 
            'amount'         => $request->amount,
        ]);
        
        \Log::info('Queue Created:', ['queueNumber' => $nextQueueNumber]);

        // Tampilkan popup2
        return view('popup.popup2');
    }    

    public function validation(Request $request)
    {
        $validatedData = $request->validate([
            'selectService' => 'required|string',
            'accountNumber' => 'required|numeric',
            'bankBranch'    => 'required|string',
            'accountOwner'  => 'required|string',
            'fullName'      => 'required|string',
            'phoneNumber'   => 'required|string',
            'job'           => 'required|string',
            'companyName'   => 'nullable|string',
            'amount'        => 'required|numeric',
            'amountInWords' => 'required|string',
        ]);
    
        // Simpan data form ke session untuk sementara
        session(['formData' => $validatedData]);

        $storeRoute = route('setor.store');
    
        // Kembalikan tampilan popup validation
        return view('popup.validation', ['formData' => $validatedData, 'storeRoute' => $storeRoute]);
    }

    public function downloadPDF($queueNumber)
    {
        $deposit = Deposit::where('queueNumber', $queueNumber)->firstOrFail(); 
            
        $pdf = PDF::loadView('tiket.setor.setor_tunai_tiket', compact('deposit'));
            
        return $pdf->stream('Bukti_Setor_Nasabah.pdf');
    }
}
