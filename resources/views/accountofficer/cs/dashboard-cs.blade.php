@extends('layout\cs\app')

@section('content')
<div class="features-area">
    <div class="content2">
        <h1 class="h1-bold text-center">Data Pengajuan Kredit</h1>
    
    </div>

    <div class="container-bar">
    
            <div >
                
            </div>
            <div class="searchbar">
                <label for="">Search</label>
                <input type="text" placeholder="Search...">
            </div>
    </div>

    <div class="cards-container">

        <a href="/detail-data-pengajuan-kredit" class="cards-link">
            <div class="cards">
                <div class="cards-header">
                    <p class="body-lg-bold">Data Nasabah</p>
                </div>
                <div class="cards-content">
                    <p class="caption-regular"><strong>No Resi : </strong> 13414235</p>
                    <p class="caption-regular"><strong>Nama :</strong> Imran Sukron Hamid</p>
                    <p class="caption-regular"><strong>No. Telp :</strong> 081234567890 </p>
                    <p class="caption-regular"><strong>Status :</strong> Menunggu</p>
                </div>
                <div class="cards-footer">
                    <img src="img/logo/logo2.png" alt="">
                </div>
            </div>
        </a>

        <a href="/detail-data-pengajuan-kredit" class="cards-link">
            <div class="cards">
                <div class="cards-header">
                    <p class="body-lg-bold">Data Nasabah</p>
                </div>
                <div class="cards-content">
                    <p class="caption-regular"><strong>No Resi : </strong> 2141431513</p>
                    <p class="caption-regular"><strong>Nama :</strong> Akmal Adnan</p>
                    <p class="caption-regular"><strong>No. Telp :</strong> 081234567890 </p>
                    <p class="caption-regular"><strong>Status :</strong> menunggu</p>
                </div>
                <div class="cards-footer">
                    <img src="img/logo/logo2.png" alt="">
                </div>
            </div>
        </a>

        
        
        
        <div class="show-more">
            <a href="" class="caption-regular">Show More ...</a>
        </div>
    </div>
</div>
@endsection