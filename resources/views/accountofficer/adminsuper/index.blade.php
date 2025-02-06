@extends('layout\admin\app')

@section('content')
<style>
    body {
        display: flex;
        align-items: center;
    }
</style>
<section class="features-area d-grid justify-content-center align-items-center">
    <div class="feature-area-area">
        <h1 class="text-center h1-bold">Data Keseluruhan</h1>
        <div class="canvas-area">
            <div class="canvas-container">
                <canvas id="donateChart"></canvas>
            </div>
            <div class="label-area">
                <div class="labels-container">
                    <div class="label-box" style="background-color: #1FC21F">
                        <h1>{{ $tarikTunai }}</h1> 
                        <h4>Tarik Tunai</h4>
                    </div>
                    <div class="label-box" style="background-color: #70B0FA">
                        <h1>{{ $pengaduanOnline }}</h1> 
                        <h4>Pengaduan Online</h4>
                    </div>
                    <div class="label-box" style="background-color: #9370DB">
                        <h1>{{ $pengajuanKredit }}</h1> 
                        <h4>Pengajuan Kredit</h4>
                    </div>
                    <div class="label-box" style="background-color: #FFAE00">
                        <h1>{{ $setorTunai }}</h1>
                        <h4>Setor Tunai</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    const data = {
        labels: ['Tarik Tunai', 'Pengaduan Online', 'Pengajuan Kredit', 'Setor Tunai'],
        datasets: [{
            data: [{{ $tarikTunai }}, {{ $pengaduanOnline }}, {{ $pengajuanKredit }}, {{ $setorTunai }}],
            backgroundColor: ['#1FC21F', '#70B0FA', '#9370DB', '#FFAE00'],
            borderColor: ['#1FC21F', '#70B0FA', '#9370DB', '#FFAE00'],
            borderWidth: 1
        }]
    };

    const config = {
        type: 'doughnut',
        data: data,
        options: {
            responsive: true,
            plugins: {
                legend: { display: false },
                tooltip: { enabled: true }
            }
        }
    };

    const ctx = document.getElementById('donateChart').getContext('2d');
    new Chart(ctx, config);
</script>
@endsection
