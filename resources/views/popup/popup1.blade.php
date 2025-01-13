
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Popup Pengaduan</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"> <!-- Tambahkan jika ada file CSS -->
</head>
<link rel="stylesheet" href="style.css">
<body>
    
        <div class="popup-area">
            <div class="popup-container d-block">
                    <div class="top-area-popup">
                        <h2 class="h2-bold">Terima Kasih</h2>
                    </div>
                    
                
                <div class="popup-content">
                    <div>
                        <h4 class="h4-semibold">Pengaduan Online Berhasil Dikirim!</h4> <!-- Sesuaikan dengan database -->
                    </div>

                    <div class="d-flex">
                        <p class="body-md-medium">
                            Nomor Resi: <span class="h5-bold">AB123456789YZ</span>
                        </p>
                    </div>

                    <div>
                        <ul class="caption-regular" style="padding-left:20px;">
                            <li>Simpan nomor resi ini untuk memantau status pengaduan Anda.</li>
                            <li>Status pengaduan dapat dipantau melalui halaman Cek Status di website kami.</li>
                        </ul>
                    </div>

                    <div>
                        <p class="caption-regular">
                            Untuk informasi lebih lanjut, tim kami akan menghubungi 
                            Anda melalui email atau nomor telepon yang telah Anda berikan.
                        </p>
                        
                        <p class="caption-regular">Terima kasih atas kepercayaan Anda kepada Bank Lampung!</p>
                    </div>

                    <div class="date-area" >
                        <p class="caption-regular" style="opacity: 0.5;">09.39 WIB, Selasa, 7 Januari 2025</p>
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
    
</body>
</html>

