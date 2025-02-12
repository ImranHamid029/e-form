@extends('layout/user/app')
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
      
        <form action="{{ route('pengaduan.validation') }}" method="POST" enctype="multipart/form-data" id="regForm" >
            @csrf
            <div class=" d-block justify-content-center">
                <div class="form-area">
                <h4 class="h4-semibold text-center" style="width:100%;">HARAP ISI DENGAN HURUF CETAK</h4>
                <div class="col-12 ">
                <div class="card border shadow-sm mx-0">
                    <div class="card-body">

                    
                    <div class="form-container" style="position: relative;">
                        <label for="fullName">Nama <span class="required">*</span></label>
                        <div class="input-area">
                            <input type="text" id="fullName" name="fullName" placeholder="Nama Anda" required>
                            <span class="invalid-icon" style="display: none;">&#x2716;</span>
                        </div>
                    </div>

                    
                    <div class="form-container" style="position: relative;">
                        <label for="phoneNumber">No. Hp <span class="required">*</span></label>
                        <div class="input-area">
                            <input type="number" id="phoneNumber" name="phoneNumber" placeholder="No Hp Anda" required>
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
                        <label for="complaint">Keluhan Anda <span class="required">*</span></label>
                        <div class="input-area">
                            <textarea id="complaint" name="complaint" placeholder="Keluhan Anda" style="height:100px;" required></textarea>
                            <span class="invalid-icon" style="display: none;">&#x2716;</span>
                        </div>
                    </div>

                    

                    </div>
                    
                </div>
                <div class="col-12 text-center btn-area">
                        <button type="submit" class="btn-custom" id="submitButton">Kirim</button>
                    </div>
                </div>
                </div>
            </div>
        </form>

<div id="validationModal" class="modal">
    <div id="validationContent">
    </div>
</div>

<div id="popup3Modal" class="modal">
    <div id="popup3Content">
    </div>
</div>

<main></main>
</section> 
<script>
    document.addEventListener("DOMContentLoaded", () => {
    const submitButton = document.getElementById("submitButton");
    const validationModal = document.getElementById("validationModal");
    const validationContent = document.getElementById("validationContent");
    const popup3Modal = document.getElementById("popup3Modal");
    const popup3Content = document.getElementById("popup3Content");

    // Event untuk tombol "Submit"
    submitButton.addEventListener("click", (e) => {
        e.preventDefault(); // Cegah form submit langsung

        const form = document.getElementById("regForm");
        const inputs = form.querySelectorAll("input[required],select[required],textarea[required]"); // Target semua input dan textarea
        let isValid = true;

        // Validasi form
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

        // Jika form valid, lanjutkan dengan fetch untuk validasi
        if (isValid) {
            fetch("{{ route('pengaduan.validation') }}", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": document.querySelector('input[name="_token"]').value,
                },
                body: JSON.stringify(Object.fromEntries(new FormData(form))),
            })
            .then((response) => response.text())
            .then((data) => {
                validationContent.innerHTML = data; // Isi modal validation
                validationModal.style.display = "block"; // Tampilkan modal
            })
            .catch((error) => console.error("Error loading validation popup:", error));
        } 
    });

    // Event untuk tombol "Ya" pada popup validation
    document.addEventListener("click", (e) => {
        if (e.target && e.target.id === "confirmButton") {
            e.preventDefault(); // Cegah submit langsung

            // Kirim data form untuk proses penyimpanan
            const confirmForm = document.getElementById("confirmForm");
            fetch("{{ route('pengaduan.store') }}", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": document.querySelector('input[name="_token"]').value,
                },
                body: JSON.stringify(Object.fromEntries(new FormData(confirmForm))),
            })
            .then((response) => response.text())
            .then((html) => {
                // Tutup popup validation
                validationModal.style.display = "none";

                // Tampilkan popup3
                popup3Content.innerHTML = html; // Isi konten popup3
                popup3Modal.style.display = "block"; // Tampilkan modal popup3

                // Event untuk tombol "Kembali" pada popup3
                const backButton = popup3Modal.querySelector("#backButton");
                backButton.addEventListener("click", () => {
                    // Hapus modal popup3
                    popup3Modal.style.display = "none";
                    
                    // Kosongkan semua input pada form pengaduan tunai
                    const form = document.getElementById("regForm");
                    if (form) {
                        form.reset();
                    }
                });
            })
            .catch((error) => console.error("Error loading popup3:", error));
        }
    });

    // Tutup modal jika klik di luar area modal
    window.addEventListener("click", (e) => {
        if (e.target === validationModal) {
            validationModal.style.display = "none";
        } else if (e.target === popup3Modal) {
            popup3Modal.style.display = "none";
        }
    });
});

</script>

<script>
    function closePopup() {
        document.getElementById("logoutPopup").style.display = "none";
    }
</script>
@endsection