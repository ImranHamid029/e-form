@extends('layout\helpdesk\app')
@section('content')

<div class="features-area">
    <div class="content2">
        <h4 class="h4-bold text-center">Detail Laporan</h4>
    </div>
        <div class="detail-data-container">
            <div class="detail-data-content">
                <div class="detail-data-area">

                    <div class="detail-data-text-area">
                        <div class="detail-info">
                            <p class="body-md-bold"><strong>Informasi Pelapor</strong></p>
                            <p>Nama Lengkap : Rizqi Ahmad Ghozali</p>
                            <p>No Hp        : 0812-345-678</p>
                            <p>Email        : rizqigh@gmail.com</p>
                            <br>
                            <p class="body-md-bold"><strong>Laporan Keluhan</strong></p>
                            <p>Laporan : Proses Setor Tunai selalu 
                            tertunda ketika saya ingin melakukannya 
                            karena website yang selalu down.</p>
                        </div>
                    </div>

                    

                </div>
            
                <div class="btn-respons-area">
                    <a href="javascript:void(0)" id="tanggapiBtn"  class="btn-custom">Tanggapi</a>
                </div>
            </div>    
        </div>
</div>

<!-- Modal -->
<div id="responsModal" class="modal">

       <div id="responsContent">
           <!-- Konten dari /profile akan dimuat di sini -->
       </div>
       
</div>
<script>
    document.addEventListener("DOMContentLoaded", () => {
    const modal = document.getElementById("responsModal");
    const tanggapiBtn = document.getElementById("tanggapiBtn");

    // Klik tombol Tanggapi untuk membuka modal dan memuat konten
    tanggapiBtn.addEventListener("click", function (e) {
        e.preventDefault();
        
        fetch('/respons') // Ambil konten dari route /respons
            .then(response => response.text())
            .then(data => {
                document.getElementById("responsContent").innerHTML = data;
                modal.style.display = "flex"; // Tampilkan modal

                // Pasang ulang event listener untuk tombol close
                const close = document.querySelector(".close");
                if (close) {
                    close.addEventListener("click", () => {
                        modal.style.display = "none";
                    });
                }
            })
            .catch(error => console.error('Error loading:', error));
    });

    // Tutup modal jika klik di luar modal
    window.addEventListener("click", (e) => {
        if (e.target === modal) {
            modal.style.display = "none";
        }
    });
});

</script>

@endsection