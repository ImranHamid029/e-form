@extends('layout\admin\app')
@section('content')
<div class="features-area">
    <div class="content2">
        <h4 class="h4-bold text-center">Laporan Pengguna</h4>
    </div>
    <div class="detail-data-container">
        <div class="detail-data-content">
            <div class="detail-data-area">
                <div class="detail-data-text-area">
                    <div class="detail-info">
                        <p class="body-md-bold"><strong>Informasi Pelapor</strong></p>
                        <p>Nama Lengkap : {{ $complaint->fullName }}</p>
                        <p>No Hp        : {{ $complaint->phoneNumber }}</p>
                        <p>Email        : {{ $complaint->email }}</p>
                        <br>
                        <p class="body-md-bold"><strong>Laporan Keluhan</strong></p>
                        <p>Laporan : {{ $complaint->complaint }}</p>
                    </div>
                </div>
            </div>
            <div class="btn-area3">
                <div>
                        <a href="javascript:void(0);" onclick="window.history.back(); " class="btn-custom">Kembali</a>
                </div>
                @if(!isset($from_history) && auth()->user()->role !== 'adminsuper')
                <div>
                    <a href="#" class="btn-custom" id="tanggapiBtn">Tanggapi</a>

                </div>
                @endif
            </div>
            
        </div>
    </div>
                    

</div>
<!-- Modal -->
<div id="tanggapiModal" class="modal">
    <div class="modal-content">
        <span class="close-btn">&times;</span>
        @include('accountofficer.helpdesk.respons')
    </div>
</div>
<script>
   document.getElementById("tanggapiBtn").addEventListener("click", function(event) {
    event.preventDefault();
    
    var modal = document.getElementById("tanggapiModal");
    console.log(modal); // Menambahkan log untuk memastikan modal ditemukan
    modal.style.display = "block";

    // Ambil tombol close setelah modal ditampilkan
    var closeBtn = modal.querySelector(".close");
    closeBtn.addEventListener("click", function() {
        modal.style.display = "none";
    });

    // Menutup modal jika pengguna mengklik di luar modal
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    };
});


</script>
@endsection