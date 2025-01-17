@extends('layout\user\app')
@section('content')

<section class="features-area" >
    <div class="status-container-area">

        <div class="container-status">
            <div class="top-area-status">
                <h2 class="h2-bold">STATUS PENGAJUAN KREDIT</h2> 
            </div>
            <div class="status-area">

                <div class="content-status">
                    <h3 class="h3-bold">Hi Rizqi Ahmad Ghozali,</h3>
                    <p class="caption-regular">Terima kasih,  berkas pengajuan kredit Anda <span class="caption-semibold">Sedang Dalam Proses.</span> </p>
                </div>

                <div class="content-status">
                    <h5 class="h5-bold">Detail</h5>
                    <p class="body-md-regular">No Resi: <span class="h5-bold"> AG123456789XY</span></p>
                    <p class="caption-regular">
                        Saat ini berkas Anda <span class="body-sm-semibold">Sedang Dalam Proses. </span>
                        Untuk informasi lebih lanjut, tim kami akan menghubungi Anda melalui email atau 
                        nomor telepon yang telah Anda berikan.</p>
                </div>

                <div class="content-status">
                    <div class="status-process">
                        <h5 class="body-lg-bold">Sedang Dalam Proses</h5>
                    </div>
                </div>

                <div class="content-status">
                    <h5 class="h5-bold">Butuh Bantuan?</h5>
                    <ul style="padding-left:20px;">
                        <li class="caption-regular">Hubungi Layanan Pelanggan: (0721) 484261</li>
                        <li class="caption-regular">Hubungi Email: info@banklampung.co.id</li>
                        <li class="caption-regular">Kunjungi Website Resmi: www.banklampung.co.id</li>
                    </ul>
                    <p class="caption-regular">Kami menghargai kesabaran Anda selama proses ini berlangsung.</p>
                </div>

                <div class="content-status">
                    <p class="caption-bold">Salam hangat,<br>Tim Bank Lampung</p>
                    <p class="caption-regular">Jl. Wolter Monginsidi No.182, Bandar Lampung 35116, Indonesia <br>
                    Telepon: (0721) 484261 <br>
                    Email: info@banklampung.co.id <br>
                    Website: www.banklampung.co.id <br><br>
                    Bank Lampung, bahagia melayani dari hati.</p>
                </div>

            </div>
            
        </div>
            <div class="btn-area">
                <div style="padding-right:24px;">
                    <button class="btn-custom">Download</button> <!-- Tambahkan aksi pada tombol -->
                </div>
                <div>
                    <button class="btn-custom">Kembali</button> <!-- Tambahkan aksi pada tombol -->
                </div>
            </div>
    </div>   
</section>
</body>
</html>
@endsection