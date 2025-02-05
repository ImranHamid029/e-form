@extends('layout\teller\app')
@section('content')
<div class="features-area">
    <div class="container mt-5">
        <h2 class="text-center mb-4 h2-bold">Riwayat Transaksi</h2>
        <div class="justify-content-center d-flex" style="gap :32px;">
           
            <!-- Setor Tunai -->
            
                <div class="cards history-card" style="width:400px;">
                    <div class="card-body text-center">
                        <h5 class="card-title h5-bold">Setor Tunai</h5>
                        <p class="card-text">History data transaksi Setor tunai yang telah selesai.</p>
                        <a href="{{ route('history.deposit') }}" class="btn-blue">Lihat Data</a>
                    </div>
                </div>
            

            <!-- Tarik Tunai -->
            
                <div class="cards history-card " style="width:400px;">
                    <div class="card-body text-center">
                        <h5 class="card-title h5-bold">Tarik Tunai</h5>
                        <p class="card-text">History data transaksi Tarik Tunai yang telah selesai.</p>
                        <a href="{{ route('history.withdraw') }}" class="btn-blue">Lihat Data</a>
                    </div>
                </div>
           
        </div>
    </div>
</div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
@endsection
