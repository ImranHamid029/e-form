@extends('layout\user\app')
@section('content')

    <section class="features-area ">
        <div class="container2" >
            <div class="row justify-content-center text-center">
                <!-- Teks Selamat Datang -->
                <div class="col-12 mb-4">
                    <h1 class="h1-bold">Portal Pengaduan Online Nasabah Bank Lampung</h1>
                </div>
                <div class="col-12 mb-4">
                    <p>
                        Kami hadir untuk mempermudah Anda dalam melaporkan dan memantau penyelesaian kendala terkait layanan Bank Lampung. 
                        Dengan sistem ini, laporan Anda akan ditangani lebih cepat, tepat, dan transparan.
                    </p>
                </div>
            </div>
        </div>
      
        <form action="#" method="POST" enctype="multipart/form-data" id="regForm" >
            @csrf
            <div class=" d-block justify-content-center">
                <div class="form-area">
                <h4 class="h4-semibold text-center" style="width:100%;">HARAP ISI DENGAN HURUF CETAK</h4>
                <div class="col-12 ">
                <div class="card border shadow-sm mx-0">
                    <div class="card-body">

                    
                    <div class="form-container" style="position: relative;">
                        <label for="nama">Nama <span class="required">*</span></label>
                        <div class="input-area">
                            <input type="text" id="nama" name="nama" placeholder="Nama Anda" required>
                            <span class="invalid-icon" style="display: none;">&#x2716;</span>
                        </div>
                    </div>

                    
                    <div class="form-container" style="position: relative;">
                        <label for="alamat">Alamat <span class="required">*</span></label>
                        <div class="input-area">
                        <input type="text" id="alamat" name="alamat" placeholder="Alamat Anda" required>
                        <span class="invalid-icon" style="display: none;">&#x2716;</span>
                        </div>
                        
                    </div>

                    
                    <div class="form-container" style="position: relative;">
                        <label for="email">Email <span class="required">*</span></label>
                        <div class="input-area">
                        <input type="email" id="email" name="email" placeholder="Email Anda" required>
                        <span class="invalid-icon" style="display: none;">&#x2716;</span>
                        </div>
                    </div>

                    
                    <div class="form-container" style="position: relative;">
                        <label for="keluhan">Keluhan Anda <span class="required">*</span></label>
                        <div class="input-area">
                        <textarea id="keluhan" name="keluhan" placeholder="Keluhan Anda" required style="height:100px;"></textarea>
                        <span class="invalid-icon" style="display: none;">&#x2716;</span>
                        </div>
                    </div>

                    

                    </div>
                    <div class="col-12 text-center btn-area">
                        <button type="submit" class="btn-custom" id="submitButton">Kirim</button>
                    </div>
                </div>
                </div>
                </div>
            </div>
        </form>
        </section> 
<main></main>


<script>
document.getElementById("submitButton").addEventListener("click", function () {
    const form = document.getElementById("regForm");
    const inputs = form.querySelectorAll("input[required],select[required], textarea[required]"); // Target semua input dan textarea
    let isValid = true;

    inputs.forEach(input => {
    const invalidIcon = input.nextElementSibling; // Icon invalid

    if (!input.value.trim()) {
        input.classList.add("invalid");
        if (invalidIcon) invalidIcon.style.display = "inline-block";
        isValid = false;
    } else {
        input.classList.remove("invalid");
        if (invalidIcon) invalidIcon.style.display = "none";
    }
    });

    // Kirim form jika semua elemen valid
    if (isValid) {
    alert("Form berhasil dikirim!");
    form.submit();
    }
});
</script>
@endsection