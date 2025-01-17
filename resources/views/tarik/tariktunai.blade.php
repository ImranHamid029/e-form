@extends('layout\user\app')
@section('content')
<section class="features-area ">

    <!-- Content 1 -->
    <div class="container2">
        <div class="row align-items-center d-flex justify-content-between">
            <!-- Kolom Teks di Kiri -->
            <div class="col-12 col-sm-6 col-lg-6">
                <div  data-wow-delay="100ms">
                    <h1>Tarik Tunai Jadi Lebih Mudah!</h1>
                    <p>Dengan Tarik Tunai menggunakan e-Form, 
                        Anda bisa menikmati transaksi cepat tanpa 
                        ribet isi formulir. Cukup lewat aplikasi, 
                        semuanya selesai dalam hitungan menit! </p>
                </div>
            </div>
            
            <!-- Kolom Gambar di Kanan -->
            <div class="col-12 col-sm-6 col-lg-6 d-flex justify-content-center ">
                <div class="logo">
                    <a href="#"><img src="img/img21.png" width="100%" alt="" ></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Content 2 -->
    <div class="container2 d-flex flex-column align-items-center justify-content-center text-center" >
        <div class="row " style="max-width:800px;">
            <h1 class="text-center" >Tingkatkan Diri Anda Jadi Lebih Maju</h1>
            <p class="text-center">Kini, Segalanya Lebih Maju dan Praktis
            Kami hadir di era baru yang menawarkan solusi 
            modern untuk kebutuhan Anda. Dengan teknologi 
            terkini, segala proses menjadi lebih cepat, mudah, 
            dan efisien. Tinggalkan cara lama dan beralih ke layanan 
            yang lebih cerdas dan inovatif!</p>
            <div class="col-12 text-center mt-3">
                <a href="/form-tarik-tunai" class="btn-custom" id="Form">Ayo Tarik Tunai</a>
            </div>
        </div>
    </div>

    <!-- Content 3 -->
    <div class="container2" >
        <div class="d-flex flex-column align-items-center justify-content-center text-center">
            <h3>Apa Saja Persyaratan yang Harus <br> Dipenuhi?</h3>
        </div>

    <div class="row align-items-start" >
            <!-- Kolom Kiri -->
            <div class="col-12 col-sm-6 col-lg-6">
                <div data-wow-delay="100ms">
                    <p>
                        <strong>1. Membawa Buku Tabungan</strong><br>
                        Buku tabungan diperlukan untuk verifikasi data dan pencatatan transaksi. <br><br>

                        <strong>2. Kartu Identitas (KTP/SIM/Paspor)</strong><br>
                        Kartu identitas digunakan untuk memastikan bahwa pemilik rekening adalah orang yang melakukan transaksi. <br><br>

                        <strong>3. Kartu Debit (Jika Diperlukan)</strong><br>
                        Kartu debit juga diperlukan sebagai alat verifikasi tambahan. <br><br>

                        <strong>4. Nomor Rekening</strong><br>
                        Pastikan Anda mengetahui nomor rekening tujuan, terutama jika tarik tunai dilakukan melalui teller. <br><br>
                    </p>
                </div>
            </div>
            
            <!-- Kolom Kanan -->
            <div class="col-12 col-sm-6 col-lg-6">
                <div data-wow-delay="100ms">
                    <p> 
                        <strong>5. Scan e-Formulir Penarikan (Jika Lewat Teller)</strong><br>
                        Isi formulir penarikan yang ada di website e-form. <br><br>
                        <strong>6. Saldo Mencukupi</strong><br>
                        Pastikan saldo di rekening mencukupi untuk jumlah yang ingin ditarik, termasuk potensi biaya administrasi. <br><br>
                        <strong>7. Mematuhi Limit Penarikan</strong><br>
                        Limit penarikan ditetapkan batas penarikan tunai yang lebih tinggi melalui teller dibandingkan dengan ATM. Untuk penarikan dalam jumlah besar, disarankan untuk menghubungi cabang Bank Lampung terdekat atau layanan pelanggan untuk mendapatkan informasi yang akurat dan memastikan ketersediaan dana.
                    </p>
                </div>
            </div>
        </div>
    </div>


    <!-- Content 4 -->
    <div class="container2">
        <div class="row align-items-center d-flex justify-content-between">
            <!-- Kolom Gambar di Kanan -->
            <div class="col-12 col-sm-6 col-lg-6 d-flex justify-content-center ">
                <div class="logo">
                    <a href="/"><img src="img/img29.png" width="100%" alt="" ></a>
                </div>
            </div>
            <!-- Kolom Teks di Kiri -->
            <div class="col-12 col-sm-6 col-lg-6">
                <div  data-wow-delay="100ms">
                    <h3>Manfaat Tarik Tunai Online Melalui Website Bank Lampung</h3>
                    <p style="padding-top:24px;">
                    <strong>1. Proses Cepat dan Praktis: </strong>Isi detail transaksi sebelumnya, langsung diproses saat di teller. <br>
                    <strong>2. Mengurangi Antri: </strong>Data sudah tersedia di sistem, mempersingkat waktu layanan. <br>
                    <strong>3. Fleksibel: </strong>Transaksi bisa dipesan kapan saja sebelum datang ke bank. <br>
                    <strong>4. Aman: </strong>Mengurangi risiko kesalahan manual dan data tersimpan dalam sistem. <br>
                    <strong>5. Ramah Lingkungan: </strong>Tanpa formulir kertas, lebih hemat dan praktis. <br>
                    <strong>6. Mendukung Transaksi Besar: </strong>Bank dapat mempersiapkan uang sesuai kebutuhan Anda. <br>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection