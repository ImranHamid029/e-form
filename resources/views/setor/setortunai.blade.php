@extends('layout\user\app')
@section('content')
<!-- Content 1 -->
<section class="features-area">
    <div class="container2">
        <div class="row align-items-center d-flex justify-content-between">
            <!-- Kolom Teks di Kiri -->
            <div class="col-12 col-sm-6 col-lg-6">
                <div data-wow-delay="100ms">
                    <h1 class="h1-bold">Setor Tunai Kini Lebih Praktis dan Cepat!</h1>
                    <p> Tidak perlu lagi repot menulis formulir penyetoran 
                        secara manual. Sekarang, Anda bisa mengisi formulir 
                        penyetoran langsung melalui handphone Anda.
                    </p>
                </div>
            </div>

            <!-- Kolom Gambar di Kanan -->
            <div class="col-12 col-sm-6 col-lg-6 d-flex justify-content-center align-items-center">
                <div class="logo">
                    <a href="/"><img src="img/img26.jpg" alt=""></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Content 2 -->
    <div class="container2">
        <div class="d-flex flex-column align-items-center justify-content-center text-center">
            <div style="width: 800px;">
                <h1 class="text-center h1-semibold">Update diri Jadi lebih maju</h1>
                <p class="text-center">
                    Kini, Segalanya Lebih Maju dan Praktis 
                    Kami hadir di era baru yang menawarkan 
                    solusi modern untuk kebutuhan Anda. Dengan 
                    teknologi terkini, segala proses menjadi lebih 
                    cepat, mudah, dan efisien. Tinggalkan cara lama 
                    dan beralih ke layanan yang lebih cerdas dan inovatif!
                </p>

                <!-- Button -->
                <div class="col-12 text-center mt-3">
                    <a href="/form-setor-tunai" class="btn-custom" id="Form">Ajukan</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Content 3 -->
    <div class="container2">
        <h3 class="h3-semibold">Apa Saja Persyaratan yang Harus Dipenuhi:</h3>
        <div class="row align-items-start">
            <!-- Kolom Kiri -->
            <div class="col-12 col-sm-6 col-lg-6">
                <div data-wow-delay="100ms">
                <ol class="body-lg-regular "style="padding-left:20px;">
                    <li><p class="body-lg-regular">Kartu Identitas (KTP/SIM/Paspor) <br>
                        Wajib untuk verifikasi identitas, 
                        terutama untuk transaksi dalam jumlah besar.
                    </p></li>
                    <li><p class="body-lg-regular">Nomor rekening atau buku Bank Lampung.</p></li>
                    <li><p class="body-lg-regular">Uang Tunai yang Akan Disetor <br>
                        Pastikan uang dalam kondisi rapi 
                        dan tidak rusak agar mudah diproses 
                        oleh mesin atau teller.
                    </p></li>
                    <li><p class="body-lg-regular">Bukti Transaksi, Jika Anda menggunakan layanan setor tunai online, bawa bukti transaksi atau kode unik yang diberikan.</p></li>
                </ol>

                </div>
            </div>

            <!-- Kolom Gambar di Kanan -->
            <div class="col-12 col-sm-6 col-lg-6 d-flex justify-content-center">
                <div class="image">
                    <a href="#"><img src="img/img33.png" alt=""></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Content 4 -->
    <div class="container2">
        <div class="row align-items-center d-flex justify-content-between">
            <!-- Kolom kiri -->
            <div class="col-12 col-sm-6 col-lg-6 d-flex justify-content-center">
                <div class="image">
                    <a href="#"><img src="img/img34.png" width="90%" alt=""></a>
                </div>
            </div>
            <!-- Kolom kanan-->
            <div class="col-12 col-sm-6 col-lg-6">
                <div data-wow-delay="100ms">
                    <h3 class="h3-semibold">Manfaat Setor Tunai Online Melalui Website Bank Lampung</h3>
                    <ol style="padding-top:20px;padding-left:20px;" class="body-lg-regular">
                        <li><p class="body-lg-regular">Proses Lebih Cepat: Detail transaksi diisi lebih dulu secara online, mempersingkat waktu di teller.</p></li>
                        <li><p class="body-lg-regular">Mengurangi Waktu Antri: Data langsung masuk ke sistem, teller tinggal memproses setoran Anda.</p></li>
                        <li><p class="body-lg-regular">Aman dan Akurat: Mengurangi risiko kesalahan manual karena semua data sudah tercatat di sistem.</p></li>
                        <li><p class="body-lg-regular">Mendukung Transaksi Besar: Bank dapat mempersiapkan proses setoran dengan lebih baik sebelumnya.</p></li>
                        <li><p class="body-lg-regular">Praktis Tanpa Formulir Kertas: Transaksi lebih efisien dan ramah lingkungan.</p></li>
                    </ol>


                </div>
            </div>
        </div>
    </div>
</section>
@endsection
