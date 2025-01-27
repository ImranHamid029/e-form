@extends('layout\user\app')
@section('content')
<!-- <link rel="stylesheet" href="{{ asset('style.css') }}"> -->
    <section class="features-area">
        <div class="popup-area">
            <div class="popup-container d-block">
                    <div class="top-area-popup">
                        <h2 class="h2-bold">Terima Kasih</h2>
                    </div>
                    
                
                <div class="popup-content">
                    <div>
                        <h4 class="h4-medium">Berkas <strong>Tarik Tunai</strong> Berhasil Dibuat!</h4> <!-- Sesuaikan dengan database -->
                    </div>

                    <div class="d-flex">
                        <p class="body-md-medium">
                            Nomor Antrian: <span class="h5-bold">A1</span>
                        </p>
                    </div>

                    <div>
                        <ul class="caption-regular info-transaction" style="padding-left:20px;">
                            <li><span>Kantor Oprasional</span>: Kantor Pusat</li>
                            <li><span>No. Rekening</span>: 2323112</li>
                            <li><span>Jenis Rekening</span>: Tabungan </li>
                            <li><span>Jumlah: </span>: 200.000</li>
                        </ul>
                    </div>
                    <div>
                        <p>Catatan : </p>
                        <ol>
                            <li class="caption-regular">Silakan tunjukkan pop-up ini atau file yang telah diunduh ke perangkat Anda kepada petugas teller.</li>
                            <li class="caption-regular">Silakan bawa <strong>KTP</strong> serta <strong>berkas yang dibutuhkan</strong> (buku tabungan dll) ke teller Bank Lampung sebelum pukul 15.00 WIB pada hari ini.</li>
                            <li class="caption-regular">Pastikan nomor antrian Anda sesuai dengan teller yang anda tuju saat dipanggil.</li>
                        </ol>
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
    </section>
@endsection

