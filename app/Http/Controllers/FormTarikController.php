<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MongoDB\Client as MongoDBClient;
use Barryvdh\DomPDF\Facade as PDF;
use App\Models\OperationalOffice;
use App\Models\Withdraw;

class FormTarikController extends Controller
{
    public function create()
    {
        $offices = OperationalOffice::all();

        return view('tarik.form_tarik_tunai', compact ('offices'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'bankBranch'        => 'required|string',
            'ownerName'         => 'required|string',
            'accountNumber'     => 'required|numeric',
            'accountType'       => 'required|string',
            'currency'          => 'required|string',
            'amount'            => 'required|numeric',
            'amountInWords'     => 'required|string',
        ]);
    
        // Gunakan count() daripada orderBy()
        $lastQueueNumber = Withdraw::count();
        $nextQueueNumber = 'TA' . ($lastQueueNumber + 1);
    
        $validatedData['queueNumber'] = $nextQueueNumber;
    
        $validatedData['status'] = 'Menunggu';

        Withdraw::create($validatedData);

        session()->forget('selectService');
    
        session([
            'queueNumber'    => $nextQueueNumber,
            'bankBranch'     => $request->bankBranch,
            'accountNumber'  => $request->accountNumber,
            'accountType'    => $request->accountType,
            'amount'         => $request->amount,
        ]);
    
        \Log::info('Queue Created:', ['queueNumber' => $nextQueueNumber]);
    
        return view('popup.popup2');
    }    

    public function validation(Request $request)
    {
        $validatedData = $request->validate([
            'bankBranch'    => 'required|string',
            'ownerName'     => 'required|string',
            'accountNumber' => 'required|numeric',
            'accountType'   => 'required|string',
            'currency'      => 'required|string',
            'amount'        => 'required|numeric',
            'amountInWords' => 'required|string',
        ]);
    
        session(['formData' => $validatedData]);

        $storeRoute = route('tarik.store');
    
        return view('popup.validation', ['formData' => $validatedData, 'storeRoute' => route('tarik.store')]);
    }

    public function downloadPDF($queueNumber)
    {
        $withdraw = Withdraw::where('queueNumber', $queueNumber)->firstOrFail(); 
            
        $pdf = PDF::loadView('tiket.tarik.tarik_tunai_tiket', compact('withdraw'));

        return $pdf->stream('Bukti_Tarik_Nasabah.pdf');
    }
}
