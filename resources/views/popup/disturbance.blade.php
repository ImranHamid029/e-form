@extends('layout\user\app')
@section('content')
    <section class="features-area">
        <div class="popup-error">
            <div class="popup-area-error">
                <div class="popup-container">
                    <div class="top-area-popup"style="background-color:#fff;" >
                        <h5 class="h5-bold" style="color:black;">Mohon Maaf,Permintaan Anda <br> <span class="h5-bold" style="color:red">Tidak Dapat Diproses</span></h2>
                    </div>

                    <div class="popup-content">
                        <p class="caption-regular">Kami tidak dapat memproses data Anda saat ini. 
                            Silakan periksa kembali data yang Anda masukkan 
                            atau coba beberapa saat lagi. Jika masalah berlanjut, 
                            <span class="caption-semibold" style="color:black;">hubungi layanan pelanggan kami</span> melalui kontak resmi Bank Lampung.</p>
                    </div>
                    <div style="width:100%;display: flex; justify-content: space-between; ">
                        <div class="logo-popup">
                            <img src="/img/logo.png" alt="" >
                        </div>
                        <div class="popup-content" style="text-align: right;">
                            <p class="caption-bold">
                                Telepon: (0721) 484261 <br>Email: info@banklampung.co.id
                            </p>
                        </div>
                    </div>

                    
                </div>
                <div class="single-btn-area">
                    <div>
                        <button class="btn-custom">Oke</button> <!-- Tambahkan aksi pada tombol -->
                    </div>
                </div>
            </div>
        </div>   
           
    </section>
@endsection

