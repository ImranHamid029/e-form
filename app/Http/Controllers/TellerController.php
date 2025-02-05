<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Withdraw;
use App\Models\Deposit;
use App\Models\HistoryWithdraw;
use App\Models\HistoryDeposit;

class TellerController extends Controller
{
    public function index()
    {
        return view('accountofficer.teller.dashboard_teller');
    }

    public function withdraw()
    {
        $withdraws = Withdraw::orderBy('created_at', 'asc')->get();
        return view('accountofficer.teller.tarik.data_tarik', compact('withdraws'));
    }

    public function show($id, $from_history = null)
    {
        $withdraw = HistoryWithdraw::find($id) ?? Withdraw::findOrFail($id);
        return view('accountofficer.teller.tarik.detail_data_tarik_tunai', compact('withdraw', 'from_history'));
    }

    public function updateStatus(Request $request, $id)
    {
        $withdraw = Withdraw::findOrFail($id);
        
        $status = 'Selesai';
        
        // Simpan ke koleksi HistoryWithdraw (MongoDB)
        HistoryWithdraw::create([
            'bankBranch' => $withdraw->bankBranch,
            'ownerName' => $withdraw->ownerName,
            'accountNumber' => $withdraw->accountNumber,
            'accountType' => $withdraw->accountType,
            'currency' => $withdraw->currency,
            'amount' => $withdraw->amount,
            'amountInWords' => $withdraw->amountInWords,
            'status' => $status,
            'created_at' => $withdraw->created_at,
            'updated_at' => now(),
        ]);
    
        // Hapus dari tabel withdraw setelah dipindahkan
        $withdraw->delete();
        
        return response()->json(['success' => true, 'message' => 'Status berhasil diperbarui dan dipindahkan ke riwayat!']);
    }    

    public function deposit()
    {
        $deposits = Deposit::orderBy('created_at', 'asc')->get();
        return view('accountofficer.teller.setor.data_setor_tunai', compact('deposits'));
    }

    public function showDeposit($id, $from_history = null)
    {
        $deposit = HistoryDeposit::find($id) ?? Deposit::findOrFail($id);
        return view('accountofficer.teller.setor.detail_data_setor_tunai', compact('deposit', 'from_history'));
    }

    public function updateStatusDeposit(Request $request, $id)
    {
        $deposit = Deposit::findOrFail($id);

        $status = 'Selesai';

        // Simpan ke koleksi HistoryDeposit (MongoDB)
        HistoryDeposit::create([
            'bankBranch' => $deposit->bankBranch,
            'accountOwner' => $deposit->accountOwner,
            'accountNumber' => $deposit->accountNumber,
            'selectService' => $deposit->selectService,
            'fullName' => $deposit->fullName,
            'phoneNumber' => $deposit->phoneNumber,
            'job' => $deposit->job,
            'companyName' => $deposit->companyName,
            'amount' => $deposit->amount,
            'amountInWords' => $deposit->amountInWords,
            'status' => $status,
            'created_at' => $deposit->created_at,
            'updated_at' => now(),
        ]);

        // Hapus dari tabel deposit setelah dipindahkan
        $deposit->delete();
        
        return response()->json(['success' => true, 'message' => 'Status berhasil diperbarui dan dipindahkan ke riwayat!']);
    }

    public function history()
    {
        return view('accountofficer.teller.history.history_teller');
    }

    public function historyWithdraw()
    {
        $doneWithdraws = HistoryWithdraw::where('status', 'Selesai')->get();
        return view('accountofficer.history.history_tarik_tunai', compact('doneWithdraws'));
    }

    public function historyDeposit()
    {
        $doneDeposits = HistoryDeposit::where('status', 'Selesai')->get();
        return view('accountofficer.history.history_setor_tunai', compact('doneDeposits'));
    }
}
