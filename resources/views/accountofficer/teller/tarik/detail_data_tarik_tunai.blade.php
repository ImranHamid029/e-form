@extends('layout\teller\app')
@section('content')

<div class="features-area">
    <div class="content2">
        <h4 class="h4-bold text-center">Data Tarik Tunai</h4>
    </div>
        <div class="detail-data-container">
            <div class="detail-data-content">
                <div class="detail-data-area">

                    <div class="detail-data-text-area">
                        <div class="detail-info">
                            <p class="body-lg-bold"><strong>Kantor Oprasional : </strong></p>
                            <p class="body-lg-bold"><strong>No. Rekening        : </strong></p>
                            <p class="body-lg-bold"><strong>Nama Pemilik Rekening :</strong> </p>
                        </div>
                    </div>

                    <div class="detail-data-text-area">
                        <div class="detail-info">
                            <p class="body-lg-bold"><strong>Laporan Keluhan</strong></p>
                            <p>Jenis Rekening : </p>
                            <p>Jumlah : </p>
                            <p>Terbilang : </p>
                        </div>
                    </div>
                    <div class="btn-area3" >
                        <div>
                            <a href="javascript:void(0);"  class="btn-blue" onclick="goBack()">Kembali</a>
                        </div>
                        
                        <div style="display: flex; gap: 10px;">
                            <a href=""  class="btn-accepted">Setujui</a>
                            <a href=""  class="btn-rejected">Tolak</a>
                        </div>
                    </div>

                    
                </div>
            
                
            </div>    
        </div>
</div>
<script>

    function goBack() {
        window.history.back();}
</script>                            

@endsection