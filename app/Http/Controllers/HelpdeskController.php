<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HistoryComplaint;
use App\Models\Complaint;

class HelpdeskController extends Controller
{
    public function index()
    {
        $complaints = Complaint::where('status', 'Menunggu')->latest()->take(3)->get();
        return view('accountofficer.helpdesk.dashboard_helpdesk', compact('complaints'));
    }

    public function showMoreComplaint()
    {
        $complaints = Complaint::where('status', 'Menunggu')->latest()->get();
        return view('accountofficer.helpdesk.dashboard_helpdesk', compact('complaints'));
    }

    public function show($id)
    {
        $complaint = Complaint::find($id);
        if (!$complaint) {
            return abort(404, 'Data tidak ditemukan');
        }
        return view('accountofficer.helpdesk.detail_complaint', compact('complaint'));
    }

    public function showResponseForm($id)
    {
        $complaint = Complaint::find($id);
        if (!$complaint) {
            return response()->json(['error' => 'Data tidak ditemukan'], 404);
        }
        return view('accountofficer.helpdesk.respons', compact('complaint'));
    }

    public function respond(Request $request, $id)
    {
        $request->validate([
            'response' => 'required|string',
        ]);
    
        $complaint = Complaint::find($id);
        if (!$complaint) {
            return redirect()->route('helpdesk.dashboard')->with('error', 'Data tidak ditemukan');
        }
    
        // Simpan data ke koleksi history_complaint
        HistoryComplaint::create([
            'fullName' => $complaint->fullName,
            'phoneNumber' => $complaint->phoneNumber,
            'email' => $complaint->email,
            'complaint' => $complaint->complaint,
            'response' => $request->response,
            'status' => 'Selesai',
            'created_at' => $complaint->created_at,
            'updated_at' => now(),
        ]);
    
        // Hapus data dari complaint
        $complaint->delete();
    
        return redirect()->route('helpdesk.dashboard')->with('success', 'Tanggapan berhasil dikirim dan dipindahkan ke riwayat');
    }    

    public function history()
    {
        $history = HistoryComplaint::where('status', 'Selesai')->latest()->take(3)->get();
        return view('accountofficer.history.history_complaint', compact('history'));
    }

    public function showMoreHistory()
    {
        $history = HistoryComplaint::where('status', 'Selesai')->latest()->get();
        return view('accountofficer.history.history_complaint', compact('history'));
    }

    public function showHistoryDetail($id)
    {
        $complaint = HistoryComplaint::find($id);
        if (!$complaint) {
            return abort(404, 'Data tidak ditemukan');
        }
        $complaint->admin_name = $complaint->admin_name ?? 'Admin Helpdesk';
        return view('accountofficer.helpdesk.detail_history_complaint', compact('complaint'));
    }
}
