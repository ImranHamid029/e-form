@extends('layout\user\app')
@section('content')
<!-- <link rel="stylesheet" href="{{ asset('style.css') }}"> -->
    <section class="features-area">
        <div id="successPopup" class="popup-area">
            <div class="popup-container d-block">
                    <div class="top-area-popup">
                        <h2 class="h2-bold">Terima Kasih</h2>
                    </div>
                    
                
                <div class="popup-content">
                    <div>
                        <h4 class="h4-medium">
                            Berkas <strong>{{ session('selectService', session('accountType', 'Setor/Tarik Tunai')) }}</strong> Berhasil Dibuat!
                        </h4>
                    </div>

                    <div class="d-flex">
                        <p class="body-md-medium">
                            Nomor Antrian: <span class="h5-bold">{{ session('queueNumber', 'A1') }}</span>
                        </p>
                    </div>

                    <div>
                        <ul class="caption-regular info-transaction" style="padding-left:20px;">
                            <li><span>Kantor Operasional</span>: {{ session('bankBranch') }}</li>
                            <li><span>No. Rekening</span>: {{ session('accountNumber') }}</li>
                            <li><span>Jenis Rekening</span>: 
                                @if (session('selectService')) 
                                    {{ session('selectService') }} <!-- Menampilkan 'Setor Tunai' -->
                                @else (session('accountType')) 
                                    {{ session('accountType') }} <!-- Menampilkan 'Tarik Tunai' -->
                                @endif
                            </li>
                            <li><span>Jumlah</span>: Rp. {{ number_format(session('amount', 0), 2, ',', '.') }}</li>
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
                            <p class="caption-regular" style="opacity: 0.5;" id="currentDateTime">
                                {{ now()->format('H:i WIB, l, j F Y') }}                                
                            </p>
                        </div>
                    </div>
                    
                </div>

                <div class="btn-area">
                @if (session('selectService'))
                    <a id="downloadButton" href="{{ route('setor.pdf', ['queueNumber' => session('queueNumber')]) }}" class="btn-custom" target="_blank">Download</a>
                @else (session('accountType'))
                    <a id="downloadButton" href="{{ route('tarik.pdf', ['queueNumber' => session('queueNumber')]) }}" class="btn-custom" target="_blank">Download</a>
                @endif
                <button id="backButton" class="btn-custom">Kembali</button>
                </div>
            </div>
        </div>
    </section>
@endsection

