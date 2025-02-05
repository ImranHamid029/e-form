<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Applicant;
use App\Models\HistoryApplicant;

class CSController extends Controller
{
    public function index()
    {
        // Hanya menampilkan data yang belum diproses
        $applicants = Applicant::whereNull('status')->orWhereNotIn('status', ['Disetujui', 'Ditolak'])->get();
        return view('accountofficer.cs.dashboard_cs', compact('applicants'));
    }

    public function show($id, $from_history = null)
    {
        $applicant = HistoryApplicant::find($id) ?? Applicant::findOrFail($id);
        return view('accountofficer.cs.detail_data_pengajuan_kredit', compact('applicant', 'from_history'));
    }

    public function updateStatus(Request $request, $id)
    {
        $applicant = Applicant::findOrFail($id);
        $status = $request->status;

        if (!in_array($status, ['Disetujui', 'Ditolak'])) {
            return response()->json(['success' => false, 'message' => 'Status tidak valid!']);
        }

        // Simpan ke koleksi HistoryApplicant (MongoDB)
        HistoryApplicant::create([
            'nik' => $applicant->nik,
            'fullName' => $applicant->fullName,
            'placeOfBirth' => $applicant->placeOfBirth,
            'dateOfBirth' => $applicant->dateOfBirth,
            'gender' => $applicant->gender,
            'phoneNumber' => $applicant->phoneNumber,
            'email' => $applicant->email,
            'residentialAddress' => $applicant->residentialAddress,
            'residentialProvince' => $applicant->residentialProvince,
            'residentialCity' => $applicant->residentialCity,
            'residentialDistrict' => $applicant->residentialDistrict,
            'posCode' => $applicant->posCode,
            'companyName' => $applicant->companyName,
            'businessAddress' => $applicant->businessAddress,
            'businessProvince' => $applicant->businessProvince,
            'businessCity' => $applicant->businessCity,
            'businessDistrict' => $applicant->businessDistrict,
            'businessPosCode' => $applicant->businessPosCode,
            'businessPlaceStatus' => $applicant->businessPlaceStatus,
            'businessSector' => $applicant->businessSector,
            'loanUsageDescription' => $applicant->loanUsageDescription,
            'loanTerm' => $applicant->loanTerm,
            'loanCollateral' => $applicant->loanCollateral,
            'status' => $status,
            'created_at' => $applicant->created_at,
            'updated_at' => now(),
        ]);

        // Hapus dari tabel Applicant setelah dipindahkan
        $applicant->delete();
        
        return response()->json(['success' => true, 'message' => 'Status berhasil diperbarui dan dipindahkan ke riwayat!']);
    }

    public function history()
    {
        return view('accountofficer.cs.history');
    }

    public function historyAccepted()
    {
        $acceptedApplicants = HistoryApplicant::where('status', 'Disetujui')->get();
        return view('accountofficer.history.history_kredit_accepted', compact('acceptedApplicants'));
    }

    public function historyRejected()
    {
        $rejectedApplicants = HistoryApplicant::where('status', 'Ditolak')->get();
        return view('accountofficer.history.history_kredit_rejected', compact('rejectedApplicants'));
    }
}
