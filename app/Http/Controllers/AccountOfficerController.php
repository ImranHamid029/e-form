<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Applicant;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use App\Models\Transaction; 

use App\Models\Withdraw;   // Model untuk tabel withdraw
use App\Models\Deposit;    // Model untuk tabel deposit
use App\Models\Complaint;  // Model untuk tabel complaint

// AccountOfficerController.php
class AccountOfficerController extends Controller
{
    public function index()
    {
        // Mengambil jumlah transaksi untuk setiap kategori menggunakan model yang sesuai
        $tarikTunai = Withdraw::count();    // Menghitung jumlah data di tabel withdraw
        $setorTunai = Deposit::count();     // Menghitung jumlah data di tabel deposit
        $pengaduanOnline = Complaint::count(); // Menghitung jumlah data di tabel complaint
        $pengajuanKredit = Applicant::count(); // Menghitung jumlah data di tabel applicant

        // Mengirim data ke view
        return view('accountofficer.adminsuper.index', compact('tarikTunai', 'setorTunai', 'pengaduanOnline', 'pengajuanKredit'));
    }
   
}


