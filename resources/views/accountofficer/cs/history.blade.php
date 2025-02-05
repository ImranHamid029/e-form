@extends('layout\cs\app')
@section('content')

<div class="features-area">
    <div class="container mt-5">
        <h2 class="text-center mb-4">Riwayat Pengajuan Kredit</h2>
        <div class="justify-content-center d-flex" style="align-items: center;">
            <div class="cards history-card" style="width:500px;">
                <div class="card-body text-center">
                    <h5 class="card-title">Pengajuan Kredit</h5>
                    <p class="card-text">Pilih status pengajuan kredit yang ingin Anda lihat.</p>
                    <a href="{{ route('history.accepted') }}" class="btn-accepted">Disetujui</a>
                    <a href="{{ route('history.rejected') }}" class="btn-rejected">Ditolak</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
