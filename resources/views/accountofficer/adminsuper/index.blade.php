@extends('layout\admin\app')

@section('content')
<style>
    body {
        display: flex;
        align-items: center;
    }
</style>
<h1 class="text-center h1-bold" style="padding-top:189px;">Grafik Data Transaksi</h1>
    
    
    <div class="canvas-container">
        <canvas id="donateChart"></canvas>
    </div>
    
    
     
        <div class="labels-container">
            <div class="label-box" style="background-color: #1FC21F">
                <h1>615</h1> 
                <h4>Tarik Tunai</h4>
            </div>
            <div class="label-box" style="background-color: #70B0FA">
                <h1>551</h1> 
                <h4>Pengaduan Online</h4>
            </div>
            <div class="label-box" style="background-color: #9370DB">
                <h1>288</h1> 
                <h4>Pengajuan Kredit</h4>
            </div>
            <div class="label-box" style="background-color: #FFAE00">
                <h1>427</h1>
                <h4>Setor Tunai</h4>
            </div>
        </div>
        <script>
       
       const data = {
           labels: ['Tarik Tunai', 'Pengaduan Online', 'Pengajuan Kredit', 'Setor Tunai'], // Kategori donasi
           datasets: [{
               data: [615, 551, 288, 427], 
               backgroundColor: [
                   ' #1FC21F', 
                   ' #70B0FA', 
                   ' #9370DB', 
                   ' #FFAE00'
               ],
               borderColor: [
                   ' #1FC21F',
                   ' #70B0FA',
                   ' #9370DB',
                   ' #FFAE00'
               ],
               borderWidth: 1
           }]
       };

       // Konfigurasi Grafik
       const config = {
           type: 'doughnut', 
           data: data,
           options: {
               responsive: true,
               plugins: {
                   legend: {
                       display: false, 
                   },
                   tooltip: {
                       enabled: true
                   }
               }
           }
       };

       
       const ctx = document.getElementById('donateChart').getContext('2d');
       new Chart(ctx, config);
</script>
@endsection