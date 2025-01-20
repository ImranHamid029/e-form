@extends('layout\helpdesk\app')

@section('content')
<div class="features-area">
    <div class="content2">
        <h1 class="h1-bold text-center">Data Pengaduan Online Nasabah</h1>
    
    </div>

    <div class="container-bar">
    
            <div>
                
            </div>
            <div class="searchbar">
                <label for="">Search</label>
                <input type="text" placeholder="Search...">
            </div>
    </div>

    <div class="cards-container">

        <a href="/detail-complaint" class="cards-link">
            <div class="cards">
                <div class="cards-header">
                    <p class="body-lg-bold">Data Nasabah</p>
                </div>
                <div class="cards-content">
                    <p class="caption-regular"><strong>No Resi:</strong> 1234567890</p>
                    <p class="caption-regular"><strong>Nama:</strong> Imran Sukron Hamid</p>
                    <p class="caption-regular"><strong>No Tlp:</strong> 08123456789</p>
                </div>
                <div class="cards-footer">
                    <img src="img/logo/logo2.png" alt="">
                </div>
            </div>
        </a>

        <a href="/detail-complaint" class="cards-link">
            <div class="cards">
                <div class="cards-header">
                    <p class="body-lg-bold">Data Nasabah</p>
                </div>
                <div class="cards-content">
                    <p class="caption-regular"><strong>No Resi:</strong> 0987654321</p>
                    <p class="caption-regular"><strong>Nama:</strong> Akmal Adnan Djayasinga</p>
                    <p class="caption-regular"><strong>No Tlp:</strong> 08234567890</p>
                </div>
                <div class="cards-footer">
                    <img src="img/logo/logo2.png" alt="">
                </div>
            </div>
        </a>

        <a href="/detail-complaint" class="cards-link">
            <div class="cards">
                <div class="cards-header">
                    <p class="body-lg-bold">Data Nasabah</p>
                </div>
                <div class="cards-content">
                    <p class="caption-regular"><strong>No Resi:</strong> 1122334455</p>
                    <p class="caption-regular"><strong>Nama:</strong> Rizky Ahmad Gzozali</p>
                    <p class="caption-regular"><strong>No Tlp:</strong> 08345678901</p>
                </div>
                <div class="cards-footer">
                    <img src="img/logo/logo2.png" alt="">
                </div>
            </div>
        </a>

        <a href="/detail-complaint" class="cards-link">
            <div class="cards">
                <div class="cards-header">
                    <p class="body-lg-bold">Data Nasabah</p>
                </div>
                <div class="cards-content">
                    <p class="caption-regular"><strong>No Resi:</strong> 1122334455</p>
                    <p class="caption-regular"><strong>Nama:</strong> David Mel Gibson</p>
                    <p class="caption-regular"><strong>No Tlp:</strong> 08345678901</p>
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