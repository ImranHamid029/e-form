<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deposit;
use App\Models\Withdraw;
use App\Models\Applicant;
use Illuminate\Support\Facades\Validator;

class StatusController extends Controller
{
    // Menampilkan form pengecekan status
    public function showCheckForm()
    {
        return view('status.check_status');
    }

    // Mengecek status berdasarkan nomor antrean/resi dan captcha
    public function check(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'captcha' => 'required|captcha',  // Pastikan CAPTCHA valid
            'queueNumber' => 'required|string'
        ]);
    
        if ($validator->fails()) {
            // Jika validasi gagal, beri respons kesalahan
            return response()->json([
                'success' => false,
                'message' => 'Kode CAPTCHA salah, silakan coba lagi.'
            ]);
        }

        // Ambil nomor antrean/resi dan ubah ke format huruf kapital
        $identifier = strtoupper(trim($request->input('queueNumber')));

        // Cari data deposit
        $deposit = Deposit::where('queueNumber', $identifier)->first();
        if ($deposit) {
            return response()->json([
                'success' => true,
                'redirect_url' => route('status.view', ['type' => 'Deposit', 'id' => $deposit->id])
            ]);
        }

        // Cari data withdraw
        $withdraw = Withdraw::where('queueNumber', $identifier)->first();
        if ($withdraw) {
            return response()->json([
                'success' => true,
                'redirect_url' => route('status.view', ['type' => 'Withdraw', 'id' => $withdraw->id])
            ]);
        }

        // Cari data applicant
        $applicant = Applicant::where('resiNumber', $identifier)->first();
        if ($applicant) {
            return response()->json([
                'success' => true,
                'redirect_url' => route('status.view', ['type' => 'Applicant', 'id' => $applicant->id])
            ]);
        }
    
        // Jika tidak ditemukan, beri pesan error
        return response()->json([
            'success' => false,
            'message' => 'Nomor antrean atau resi tidak ditemukan.'
        ]);
    }    

    // Menampilkan status berdasarkan jenis dan ID
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

    // Untuk menyegarkan CAPTCHA
    public function refreshCaptcha()
    {
        return response()->json(['captcha' => captcha_src()]);
    }
}
