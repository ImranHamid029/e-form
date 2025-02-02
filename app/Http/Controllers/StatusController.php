<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deposit;
use App\Models\Withdraw;
use App\Models\Applicant;
use Illuminate\Support\Facades\Validator;

class StatusController extends Controller
{
    public function showCheckForm()
    {
        return view('status.check_status');
    }

    public function check(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'captcha' => 'required|captcha',
            'queueNumber' => 'required|string'
        ]);
    
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Kode CAPTCHA salah, silakan coba lagi.'
            ]);
        }
    
        $identifier = strtoupper(trim($request->input('queueNumber')));
    
        $deposit = Deposit::where('queueNumber', $identifier)->first();
        if ($deposit) {
            return response()->json([
                'success' => true,
                'redirect_url' => route('status.view', ['type' => 'Deposit', 'id' => $deposit->id])
            ]);
        }
    
        $withdraw = Withdraw::where('queueNumber', $identifier)->first();
        if ($withdraw) {
            return response()->json([
                'success' => true,
                'redirect_url' => route('status.view', ['type' => 'Withdraw', 'id' => $withdraw->id])
            ]);
        }
    
        $applicant = Applicant::where('resiNumber', $identifier)->first();
        if ($applicant) {
            return response()->json([
                'success' => true,
                'redirect_url' => route('status.view', ['type' => 'Applicant', 'id' => $applicant->id])
            ]);
        }
    
        return response()->json([
            'success' => false,
            'message' => 'Nomor antrean atau resi tidak ditemukan.'
        ]);
    }    

    public function viewStatus($type, $id)
    {
        if ($type === 'Deposit') {
            $data = Deposit::find($id);
            $feature = 'Setor Tunai';
        } elseif ($type === 'Withdraw') {
            $data = Withdraw::find($id);
            $feature = 'Tarik Tunai';
        } elseif ($type === 'Applicant') {
            $data = Applicant::find($id);
            $feature = 'Pengajuan Kredit';
        } else {
            $data = null;
            $feature = null;
        }

        return view('status.view_status', compact('type', 'data', 'feature'));
    }

    public function refreshCaptcha()
    {
        return response()->json(['captcha' => captcha_src()]);
    }
}
