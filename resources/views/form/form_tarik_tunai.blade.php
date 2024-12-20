@extends('layout\v_layout')
@section('content')

<style>
    .card-header.bg-primary {
        background-color: rgb(4, 58, 116) !important; 
        color: white; 
    }
    .tab {
        display: none; /* Semua tab disembunyikan secara default */
    }
    .step {
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbbbbb;
        border: none;
        border-radius: 50%;
        display: inline-block;
        opacity: 0.5;
    }
    .step.active {
        opacity: 1;
    }
    .invalid {
        border-color: red;
    }
</style>

<form action="{{ route('form.store') }}" method="POST" enctype="multipart/form-data" id="regForm">
    @csrf
    <div class="form-group mb-3 d-flex justify-content-center">
        <div class="card mt-4" style="width:80%">

            <!-- Tab 1: Pengisian Form -->
            <div class="tab">
                <h5 class="card-header bg-primary text-white text-center" style="width:100%;">HARAP ISI DENGAN HURUF CETAK</h5>
                <div class="col-12 pl-4">
                    <div class="card mt-4 border mb-4 shadow-sm mx-0">
                        <div class="card-body">
                            <h5 class="card-title">Penerima</h5>
                            <div class="mb-3">
                                <label for="noRekening" class="form-label">No. Rekening</label>
                                <input name="no_rekening" type="number" class="form-control" id="noRekening" placeholder="No. Rekening" required>
                            </div>
                            <div class="mb-3">
                                <label for="namaPemilik" class="form-label">Nama Pemilik</label>
                                <input name="nama_pemilik" type="text" class="form-control" id="namaPemilik" placeholder="Nama Pemilik" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tab 2: Konfirmasi -->
            <div class="tab">
                <h5 class="card-header text-center" style="width:100%">Konfirmasi</h5>
                <p>Pastikan data yang Anda masukkan sudah benar.</p>
               
                <label class='container'>Saya setuju bahwa data yang saya inputkan adalah benar
                    <input id="field_terms" 
                           onchange="this.setCustomValidity(validity.valueMissing ? 'Please indicate that you accept the Terms and Conditions' : '');" 
                           type="checkbox" required name="terms">
                    <span class="checkmark"></span>
                </label>
            </div>

            <!-- Tombol Navigasi -->
            <div style="overflow:auto;">
                <div style="float:right;">
                    <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                    <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                </div>
            </div>

            <!-- Indikator Langkah -->
            <div style="text-align:center;margin-top:40px;">
                <span class="step"></span>
                <span class="step"></span>
            </div>
        </div>
    </div>
</form>

<script>
    var currentTab = 0; // Tab awal
    showTab(currentTab); // Tampilkan tab pertama

    function showTab(n) {
        var tabs = document.getElementsByClassName("tab");
        for (let i = 0; i < tabs.length; i++) {
            tabs[i].style.display = "none"; // Sembunyikan semua tab
        }
        tabs[n].style.display = "block"; // Tampilkan tab sesuai indeks
        document.getElementById("prevBtn").style.display = (n === 0) ? "none" : "inline"; // Tampilkan tombol Previous hanya jika bukan tab pertama
        document.getElementById("nextBtn").innerHTML = (n === tabs.length - 1) ? "Submit" : "Next"; // Ubah teks tombol Next di tab terakhir
        if (n === 1) updateConfirmation(); // Perbarui data konfirmasi jika di tab ke-2
        fixStepIndicator(n); // Perbarui indikator langkah
    }

    function nextPrev(n) {
        var tabs = document.getElementsByClassName("tab");
        if (n === 1 && !validateForm()) return false; // Validasi sebelum pindah ke tab berikutnya
        currentTab += n; // Perbarui indeks tab
        if (currentTab >= tabs.length) { // Jika tab terakhir, submit form
            document.getElementById("regForm").submit();
            return false; // Pastikan tidak ada tab lain yang muncul
        }
        showTab(currentTab); // Tampilkan tab berikutnya
    }

    function validateForm() {
        var valid = true;
        var tabs = document.getElementsByClassName("tab");
        var inputs = tabs[currentTab].getElementsByTagName("input");
        for (let i = 0; i < inputs.length; i++) {
            if (inputs[i].required && inputs[i].value.trim() === "") {
                inputs[i].classList.add("invalid"); // Tandai input yang tidak valid
                valid = false;
            } else {
                inputs[i].classList.remove("invalid"); // Hapus tanda invalid jika valid
            }
        }
        return valid; // Kembalikan status validasi
    }

    function fixStepIndicator(n) {
        var steps = document.getElementsByClassName("step");
        for (let i = 0; i < steps.length; i++) {
            steps[i].classList.remove("active");
        }
        steps[n].classList.add("active");
    }

    function updateConfirmation() {
        // Ambil data dari form dan tampilkan di tab konfirmasi
        document.getElementById("confirmNoRekening").innerText = document.getElementById("noRekening").value;
        document.getElementById("confirmNamaPemilik").innerText = document.getElementById("namaPemilik").value;
    }
</script>

@endsection
