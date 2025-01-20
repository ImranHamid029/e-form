@extends('layout\teller\app')
@section('content')
<div class="features-area">
    <div class="container mt-5">
        <h2 class="text-center mb-4">Riwayat Pengajuan</h2>
        <div class="row justify-content-center">
            <!-- Pengajuan Kredit -->
            <!-- <div class="col-md-4 mb-4">
                <div class="card history-card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Pengajuan Kredit</h5>
                        <p class="card-text">Pilih status pengajuan kredit yang ingin Anda lihat.</p>
                        <a href="{{ url('/history/kredit/disetujui') }}" class="btn-accepted">Disetujui</a>
                        <a href="{{ url('/history/kredit/ditolak') }}" class="btn-rejected">Ditolak</a>
                    </div>
                </div>
            </div> -->

            <!-- Setor Tunai -->
            <div class="col-md-4 mb-4">
                <div class="card history-card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Setor Tunai</h5>
                        <p class="card-text">History data transaksi Setor tunai yang telah selesai.</p>
                        <a href="/history-setor-tunai" class="btn-blue">Lihat Data</a>
                    </div>
                </div>
            </div>

            <!-- Tarik Tunai -->
            <div class="col-md-4 mb-4">
                <div class="card history-card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Tarik Tunai</h5>
                        <p class="card-text">History data transaksi Tarik Tunai yang telah selesai.</p>
                        <a href="{{ url('/history/tarik-tunai') }}" class="btn-blue">Lihat Data</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
@endsection
