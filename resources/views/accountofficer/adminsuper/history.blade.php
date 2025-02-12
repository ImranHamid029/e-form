@extends('layout.admin.app')

@section('content')
<div class="features-area">
    <div class="container2 mt-5" style="align-items:center;">
        <h2 class="text-center mb-4 h2-bold">Riwayat Transaksi</h2>
        <div class="history-content">
            <div class="history-menu">

                <!-- Pengajuan Kredit -->
                <div class="cards history-card" style="width:400px;">
                    <div class="card-body text-center">
                        <h5 class="card-title">Pengajuan Kredit</h5>
                        <p class="card-text">Pilih status pengajuan kredit yang ingin Anda lihat.</p>
                        <div class="btn-area">
                            <a href="{{ route('history.accepted') }}" class="btn-accepted">Disetujui</a>
                            <a href="{{ route('history.rejected') }}" class="btn-rejected">Ditolak</a>
                        </div>
                    </div>
                </div>

                <!-- Pengaduan Online -->
                <div class="cards history-card" style="width:400px;">
                    <div class="card-body text-center">
                        <h5 class="card-title h5-bold">Pengaduan Online</h5>
                        <p class="card-text">History data Pengaduan Online.</p>
                        <div class="btn-area">
                            <a href="{{ route('history.complaint') }}" class="btn-blue">Lihat Data</a>
                        </div>
                    </div>
                </div>

                <!-- Setor Tunai -->
                <div class="cards history-card" style="width:400px;">
                    <div class="card-body text-center">
                        <h5 class="card-title h5-bold">Setor Tunai</h5>
                        <p class="card-text">History data transaksi Setor Tunai yang telah selesai.</p>
                        <div class="btn-area">
                            <a href="{{ route('history.deposit') }}" class="btn-blue">Lihat Data</a>
                        </div>
                    </div>
                </div>

                <!-- Tarik Tunai -->
                <div class="cards history-card" style="width:400px;">
                    <div class="card-body text-center">
                        <h5 class="card-title h5-bold">Tarik Tunai</h5>
                        <p class="card-text">History data transaksi Tarik Tunai yang telah selesai.</p>
                        <div class="btn-area">
                            <a href="{{ route('history.withdraw') }}" class="btn-blue">Lihat Data</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
@endsection
