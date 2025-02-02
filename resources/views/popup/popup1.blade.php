<link rel="stylesheet" href="{{ asset('style.css') }}">
    <section class="features-area">
        <div id="successPopup" class="popup-area">
            <div class="popup-container d-block">
                    <div class="top-area-popup">
                        <h2 class="h2-bold">Terima Kasih</h2>
                    </div>
                    
                
                <div class="popup-content">
                    <div>
                        <h4 class="h4-semibold">Pengajuan Kredit Berhasil Dikirim!</h4> <!-- Sesuaikan dengan database -->
                    </div>

                    <div class="d-flex">
                        <p class="body-md-medium">
                            Nomor Resi: <span class="h5-bold" id="resiNumber"></span>
                        </p>
                    </div>

                    <div>
                        <ul class="caption-regular" style="padding-left:20px;">
                            <li>Simpan nomor resi ini untuk memantau status pengaduan Anda.</li>
                            <li>Status Pengajuan dapat dipantau melalui halaman Cek Status di website kami.</li>
                        </ul>
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
                            <p class="caption-regular" style="opacity: 0.5;" id="currentDateTime">
                                {{ now()->format('H:i WIB, l, j F Y') }}
                            </p>
                        </div>
                    </div>
                    
                </div>

                <div class="btn-area">
                    <a id="downloadButton" 
                        href="{{ route('kredit.pdf', ['uniqueResi' => $uniqueResi ?? 'unknown']) }}" 
                        class="btn-custom" target="_blank">
                        Download
                    </a>
                    <button id="backButton" class="btn-custom">Kembali</button>
                </div>
            </div>
        </div>
    </section>