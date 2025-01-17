@extends('layout\user\app')
@section('content')
        <div class="popup-area">
            <div class="popup-container d-block">
                    <div class="top-area-popup">
                        <h2 class="h2-bold">Terima Kasih</h2>
                    </div>
                    
                
                <div class="popup-content">
                    <div>
                        <h4 class="h4-semibold">Data Pengajuan Kredit Berhasil Dikirim!</h4> <!-- Sesuaikan dengan database -->
                    </div>

                    <div>
                        <p class="caption-regular">
                            Untuk informasi lebih lanjut, tim kami akan menghubungi 
                            Anda melalui email atau nomor telepon yang telah Anda berikan.
                        </p>
                        
                        <p class="caption-regular">Terima kasih atas kepercayaan Anda kepada Bank Lampung!</p>
                    </div>
                    <div>
                        <div class="logo-popup">
                            <img src="/img/logo.png" alt="">
                        </div>
                        <div class="date-area" >
                            <p class="caption-regular" style="opacity: 0.5;">09.39 WIB, Selasa, 7 Januari 2025</p>
                        </div>
                    </div>
                    
                </div>

                <div class="btn-area">
                    <div>
                        <button class="btn-custom">Download</button> <!-- Tambahkan aksi pada tombol -->
                    </div>
                    <div>
                        <button class="btn-custom">Kembali</button> <!-- Tambahkan aksi pada tombol -->
                    </div>
                </div>
            </div>
        </div>
@endsection
