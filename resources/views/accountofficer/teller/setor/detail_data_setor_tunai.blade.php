@extends('layout\teller\app')
@section('content')

<div class="features-area">
    <div class="content2">
        <h4 class="h4-bold text-center">Data Setor Tunai</h4>
    </div>
        <div class="detail-data-container">
            <div class="detail-data-content">
                <div class="detail-data-area">

                    <div class="detail-data-text-area">
                        <div class="detail-info">
                            <p class="body-lg-bold"><strong>layanan : </strong></p>
                            <p class="body-lg-bold"><strong>Kantor Oprasional : </strong></p>
                            
                        </div>
                    </div>
                    <div class="detail-data-text-area">
                        <div class="detail-info">
                            <p class="body-lg-bold"><strong>Penerima </strong></p>
                            <p >No. Rekening        : </p>
                            <p >Nama Pemilik Rekening : </p>
                        </div>
                    </div>

                    <div class="detail-data-text-area">
                        <div class="detail-info">
                            <p class="body-lg-bold"><strong>Penyetor</strong></p>
                            <p>Nama : </p>
                            <p>Alamat dan No. Telp : </p>
                            <p>Nama Perusahaan : </p>
                        </div>
                    </div>
                    <div class="detail-data-text-area">
                        <div class="detail-info">
                            <p class="body-lg-bold"><strong>Transaksi</strong></p>
                            <p>Jumlah : </p>
                            <p>Terbilang : </p>
                            
                        </div>
                    </div>
                    <div class="btn-area3" >
                        <div>
                            <a href="javascript:void(0);" class="btn-blue" onclick="goBack();">Kembali</a>
                        </div>
                        
                        <div style="display: flex; gap: 10px;">
                            <a href="" class="btn-accepted">Setujui</a>
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