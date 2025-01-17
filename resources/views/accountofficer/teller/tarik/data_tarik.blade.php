@extends('layout\teller\app')

@section('content')
<div class="features-area">
    <div class="content2">
        <h1 class="h1-bold text-center">Data Tarik Tunai</h1>
    
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

        <a href="/detail-data-tarik-tunai" class="cards-link">
            <div class="cards">
                <div class="cards-header">
                    <p class="body-lg-bold">Data Nasabah</p>
                </div>
                <div class="cards-content">
                    <p class="caption-regular"><strong>No Antrian :</strong> 1</p>
                    <p class="caption-regular"><strong>No. Rekening :</strong> 08123456789</p>
                    <p class="caption-regular"><strong>Nama :</strong> Imran Sukron Hamid</p>
                    <p class="caption-regular"><strong>Status :</strong> Menunggu</p>

                    
                </div>
                <div class="cards-footer">
                    <img src="img/logo/logo2.png" alt="">
                </div>
            </div>
        </a>

        <a href="/" class="cards-link">
            <div class="cards">
                <div class="cards-header">
                    <p class="body-lg-bold">Data Nasabah</p>
                </div>
                <div class="cards-content">
                    <p class="caption-regular"><strong>No Antrian :</strong> 2</p>
                    <p class="caption-regular"><strong>No. Rekening :</strong> 08234567890</p>
                    <p class="caption-regular"><strong>Nama :</strong> Akmal Adnan Djayasinga</p>
                    <p class="caption-regular"><strong>Status :</strong> Menunggu</p>

                </div>
                <div class="cards-footer">
                    <img src="img/logo/logo2.png" alt="">
                </div>
            </div>
        </a>

        <a href="/" class="cards-link">
            <div class="cards">
                <div class="cards-header">
                    <p class="body-lg-bold">Data Nasabah</p>
                </div>
                <div class="cards-content">
                    <p class="caption-regular"><strong>No. Antrian :</strong> 3</p>
                    <p class="caption-regular"><strong>No. Rekening :</strong> 08345678901</p>
                    <p class="caption-regular"><strong>Nama :</strong> Rizky Ahmad Gzozali</p>
                    <p class="caption-regular"><strong>Status :</strong> Menunggu</p>

                </div>
                <div class="cards-footer">
                    <img src="img/logo/logo2.png" alt="">
                </div>
            </div>
        </a>

        <a href="/" class="cards-link">
            <div class="cards">
                <div class="cards-header">
                    <p class="body-lg-bold">Data Nasabah</p>
                </div>
                <div class="cards-content">
                    <p class="caption-regular"><strong>No. Antrian :</strong> 4</p>                    
                    <p class="caption-regular"><strong>No. Rekening :</strong> 08345678901</p>
                    <p class="caption-regular"><strong>Nama :</strong> David Mel Gibson</p>
                    <p class="caption-regular"><strong>Status :</strong> Menunggu</p>

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