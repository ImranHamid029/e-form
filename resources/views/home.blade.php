@extends('layout\v_layout')
@section('content')
<head>
    <title>Halaman Utama</title>
</head>

<body>
   
    <!-- ##### Features Area Start ###### -->
    <section class="features-area section-padding-100-0">
        <div class="container">

            <div class="row align-items-center d-flex justify-content-between">
                <!-- Teks Selamat Datang 1 di Kiri -->
                <div class="col-12 col-sm-6 col-lg-6">
                    <div class="single-features-area mb-100 wow fadeInUp" data-wow-delay="100ms">
                        <!-- Section Heading -->
                        <div class="section-heading">
                            <div class="line"></div>
                            <h2>Selamat Datang!!!</h2>
                            <p>e-Form Bank Lampung</p>     
                        </div>

                        <h6>Kami hadir untuk memberikan kemudahan dan kenyamanan dalam memenuhi kebutuhan finansial Anda. Jelajahi layanan digital kami, mulai dari pengajuan kredit, pengaduan, hingga transaksi perbankan lainnya secara cepat, aman, dan praktis.</h6>
                        <br>
                        <h6>Bank Lampung bahagia melayani dari hati.</h6>
                    </div>
                </div>

                
                <div class="col-12 col-sm-6 col-lg-6 d-flex justify-content-end">
                    <div class="logo mt-n5"> 
                        <a href="/"><img src="img/homee 1.png" width="300px" alt=""></a>
                    </div>
                </div>    
            </div>     
        </div>
    </section>

    <div class="container">
    <h4>Menu Layanan Kami</h4>

    <div class="row justify-content-start pb-8" style=" padding-bottom: 80px;">
        <!-- Kredit Aneka Usaha -->
        <div class="col-12 col-sm-6 col-lg-3 d-flex justify-content-center mb-4">
            <div class="single-features-area wow fadeInUp text-center" data-wow-delay="300ms">
                <img src="img/img9.png" alt="Kredit Aneka Usaha" class="img-fluid mb-3">
                <a href="/kredit" class="btn-custom">
                    Kredit Aneka Usaha
                </a>
            </div>
        </div>

        <!-- Setor Tunai -->
        <div class="col-12 col-sm-6 col-lg-3 d-flex justify-content-center mb-4">
            <div class="single-features-area wow fadeInUp text-center" data-wow-delay="300ms">
                <img src="img/img10.png" alt="Setor Tunai" class="img-fluid mb-3">
                <a href="/kredit" class="btn-custom">
                    Setor Tunai
                </a>
            </div>
        </div>

        <!-- Tarik Tunai -->
        <div class="col-12 col-sm-6 col-lg-3 d-flex justify-content-center mb-4">
            <div class="single-features-area wow fadeInUp text-center" data-wow-delay="300ms">
                <img src="img/img11.png" alt="Tarik Tunai" class="img-fluid mb-3">
                <a href="/kredit" class="btn-custom">
                    Tarik Tunai
                </a>
            </div>
        </div>

        <!-- Pengaduan Online -->
        <div class="col-12 col-sm-6 col-lg-3 d-flex justify-content-center mb-4">
            <div class="single-features-area wow fadeInUp text-center" data-wow-delay="300ms">
                <img src="img/img12.png" alt="Pengaduan Online" class="img-fluid mb-3">
                <a href="/kredit" class="btn-custom">
                    Pengaduan Online
                </a>
            </div>
        </div>


    </div>
</div>

</body> 
@endsection
