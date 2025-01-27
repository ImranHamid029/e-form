@extends('layout\user\app')
@section('content')
<!-- ##### Features Area Start ###### -->
<section class="features-area ">
    <div class="container2" style="padding-bottom:64px; ">
        <div class="home-container">
            <div class="row align-items-center justify-between">
            <!-- Teks Selamat Datang di Kiri -->
                <div class="col-12 col-md-6 mb-4" >
                    <div class="single-features-area wow fadeInUp" data-wow-delay="100ms" style="color:#fff">
                        <!-- Section Heading -->
                        <div class="section-heading">
                            <h1 class="h1-bold">Selamat datang di e-Form Bank Lampung!</h1>
                        </div>
                        <p class="body-md-regular" style="color:#fff">Kami hadir untuk memberikan kemudahan 
                            dan kenyamanan dalam memenuhi kebutuhan 
                            finansial Anda. Jelajahi layanan digital kami, 
                            mulai dari pengajuan kredit, pengaduan, hingga 
                            transaksi perbankan lainnya secara cepat, aman, 
                            dan praktis.</p>
                        <p class="body-md-regular" style="color:#fff">Bank Lampung bahagia melayani dari hati.</p>
                    </div>
                </div>

                <!-- Gambar di Kanan -->
                <div class="col-12 col-md-6 d-flex justify-content-center">
                    <div >
                        
                    </div>
                </div>

            </div>
        </div>
    </div>

    

    <div class="container2">
        <div>
            <h3 class="h3-bold">Menu Layanan Kami</h3>
        </div>
    
    <div class="row row-menu d-flex pb-8" style="padding-bottom:64px; width:100%;hight:auto;">
        <!-- Kredit Aneka Usaha -->
        <div class="feature-menu d-flex justify-content-center ">
            <div class=" single-features-area wow fadeInUp text-center" data-wow-delay="300ms" >
                <img src="img/img39.png" alt="Kredit Aneka Usaha" class="img-fluid mb-3" >
                <div class="d-flex justify-content-center mt-3">
                    <a href="/kredit" class="btn-custom">
                        Kredit Aneka Usaha
                    </a>
                </div>
                <div class="note">
                    <p>Solusi pembiayaan terbaik, Klik untuk informasi lengkapnya.</p>
                </div>
            </div>
        </div>

        <!-- Setor Tunai -->
        <div class="feature-menu d-flex justify-content-center ">
            <div class="single-features-area wow fadeInUp text-center" data-wow-delay="300ms">
                <img src="img/img40.png" alt="Setor Tunai" class="img-fluid mb-3">
                <div class="col-12 justify-content-center mt-3">
                    <a href="/setortunai" class="btn-custom">
                        Setor Tunai
                    </a>
                </div>
                <div class="note">
                    <p>Setor uang dengan mudah, Klik untuk informasi lengkapnya</p>
                </div>
            </div>
        </div>

        <!-- Tarik Tunai -->
        <div class="feature-menu d-flex justify-content-center ">
            <div class="single-features-area wow fadeInUp text-center" data-wow-delay="300ms">
                <img src="img/img38.png" alt="Tarik Tunai" class="img-fluid mb-3">
                <div class="d-flex justify-content-center mt-3">
                    <a href="/tariktunai" class="btn-custom">
                        Tarik Tunai
                    </a>
                </div>
                <div class="note">
                    <p>Tarik tunai tanpa menulis lagi, Klik untuk informasi lengkapnya</p>
                </div>
            </div>
        </div>

        <!-- Pengaduan Online -->
        <div class="feature-menu d-flex justify-content-center">
            <div class="single-features-area wow fadeInUp text-center" data-wow-delay="300ms">
                <img src="img/img37.png" alt="Pengaduan Online" class="img-fluid mb-3">
                <div class="d-flex justify-content-center mt-3">
                    <a href="/pengaduan" class="btn-custom">
                        Pengaduan Online
                    </a>
                </div>
                <div class="note">
                    <p>Sampaikan keluhan Anda, 
                        Klik untuk informasi lengkapnya</p>
                </div>
            </div>
        </div>
    </div>


</div>
</section>

<!-- <script>
    var images = [
        "img/img1.png",
        "img/img7.png",
        "img/img5.png",
        "img/img14.png"
        
    ];

    var currentIndex = 0;
    var imageElement = document.getElementById("dynamic-image");

    setInterval(function() {
        currentIndex = (currentIndex + 1) % images.length; // Cycle through images
        imageElement.src = images[currentIndex];
    }, 5000); // Change image every 5 seconds
</script> -->
@endsection
