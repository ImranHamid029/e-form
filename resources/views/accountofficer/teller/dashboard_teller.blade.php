@extends('layout\admin\app')
@section('content')
<style>
    body {
        display: flex;
        align-items: center;
    }
</style>
<body>
<h1 class="text-center" style="padding-top:189px;">Grafik Blababla</h1>
    
    
    <div class="canvas-container">
        <canvas id="donateChart"></canvas>
    </div>
    
    
     
        <div class="labels-container-teller-top">
            <div class="label-box" style="background-color: #1FC21F">
                <h1>615</h1> 
                <h4>Tarik Tunai</h4>
            </div>
            
            
        
        
            <div class="label-box" style="background-color: #FFAE00">
                <h1>427</h1>
                <h4>Setor Tunai</h4>
            </div>
        </div>
     
    

    <script>
       
        const data = {
            labels: ['Tarik Tunai', 'Pengajuan Kredit', 'Setor Tunai'], // Kategori donasi
            datasets: [{
                data: [615, 427], 
                backgroundColor: [
                    ' #1FC21F', 
                     
                    
                    ' #FFAE00'
                ],
                borderColor: [
                    ' #1FC21F',
                    
                   
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
