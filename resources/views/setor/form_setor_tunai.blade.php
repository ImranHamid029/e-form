@extends('layout/user/app')
@section('content')
<section class="features-area ">
<form action="{{ route('setor.validation') }}" method="POST" enctype="multipart/form-data" id="regForm">
  @csrf
  <div class="d-block justify-content-center">
    <div class="form-area">
      <h1 class="h1-bold text-center" style="width:100%;">FORM SETOR TUNAI</h1>
      <div class="col-12 pl-4">
        <div class="card mt-4 border mb-4 shadow-sm mx-0">
          <div class="card-body">

            <div class="form-container">
              <label for="selectService" class="caption-regular">Pilih Layanan <span class="required">*</span></label>
              <select id="selectService" name="selectService" value="Setor Tunai" class="form-input" required>
                <option value="" disabled selected>Pilih Layanan</option>
                <option value="tabungan">Tabungan</option>
                <option value="giro">Giro</option>
                <option value="deposito">Deposito</option>
                <option value="pinjaman">Pinjaman</option>
                <option value="lainnya">Lainnya...</option>
              </select>
            </div>

            <!-- Penerima dan Penyetor -->
            <div class="d-flex justify-content-between">
              <!-- Penerima -->
              <div class="form-container" style="flex: 1; padding-right: 24px;">
                <h4 class="body-sm-medium">Penerima</h4>

                <div class="form-container">
                  <label for="accountNumber">No. Rek <span class="required">*</span></label>
                  <div class="input-area">
                    <input id="accountNumber" name="accountNumber"type="number" style="border: 1px solid #A6A6A6; height:34px; display: block; width: 100%;" placeholder="No. Rek" required>
                    <span class="invalid-icon" style="display: none;">&#x2716;</span>
                  </div>
                </div>

                <div class="form-container">
                  <label for="bankBranch">Kantor Oprasional <span class="required">*</span></label>
                  <select name="bankBranch" id="bankBranch" required class="form-input" style="display: block; width: 100%;">
                      <option value="" disabled selected>Kantor Oprasional</option>
                      @foreach ($offices as $item)
                          <option value="{{ $item->office_name }}">{{ $item->office_name }}</option>
                      @endforeach
                  </select>
                </div>

                <div class="form-container">
                  <label for="accountOwner">Nama Pemilik <span class="required">*</span></label>
                  <div class="input-area">
                    <input id="accountOwner" name="accountOwner" type="text" style="border: 1px solid #A6A6A6; height:34px; display: block; width: 100%;" placeholder="Nama Pemilik" required>
                    <span class="invalid-icon" style="display: none;">&#x2716;</span>
                  </div>
                </div>
              </div>

              <!-- Penyetor -->
              <div class="form-container" style="flex: 1;">
                <h4 class="body-sm-medium">Penyetor</h4>

                <div class="form-container">
                  <label for="fullName">Nama <span class="required">*</span></label>
                  <div class="input-area">
                    <input id="fullName" name="fullName" type="text" style="border: 1px solid #A6A6A6; height:34px; display: block; width: 100%;" placeholder="Nama" required>
                    <span class="invalid-icon" style="display: none;">&#x2716;</span>
                  </div>
                </div>

                <div class="form-container">
                  <label for="phoneNumber">No. Telp <span class="required">*</span></label>
                  <div class="input-area">
                    <input id="phoneNumber" name="phoneNumber" type="text" style="border: 1px solid #A6A6A6; height:34px; display: block; width: 100%;" placeholder="No. Telp" required>
                    <span class="invalid-icon" style="display: none;">&#x2716;</span>
                  </div>
                </div>

                <div class="form-container">
                  <label for="job">Pekerjaan <span class="required">*</span></label>
                  <div class="input-area">
                    <input id="job" name="job" type="text" style="border: 1px solid #A6A6A6; height:34px; display: block; width: 100%;" placeholder="Pekerjaan" required>
                    <span class="invalid-icon" style="display: none;">&#x2716;</span>
                  </div>
                </div>

                <div class="form-container">
                  <label for="companyName">Nama Perusahaan</label>
                  <input id="companyName" name="companyName" type="text" style="border: 1px solid #A6A6A6; height:34px; display: block; width: 100%;" placeholder="Nama Perusahaan" required>
                </div>
              </div>
            </div>

            <div class="form-container">
              <label for="amount">Jumlah Penyetoran <span class="required">*</span></label>
              <div class="input-area">
                <input id="amount" name="amount" type="number" style="border: 1px solid #A6A6A6; height:34px; display: block; width: 100%;" placeholder="Jumlah Penyetoran" required>
                <span class="invalid-icon" style="display: none;">&#x2716;</span>
              </div>
            </div>

            <div class="form-container">
              <label for="amountInWords">Terbilang <span class="required">*</span></label>
              <div class="input-area">
                <input id="amountInWords" name="amountInWords" type="text" style="border: 1px solid #A6A6A6; height:34px; display: block; width: 100%;" placeholder="Terbilang" required>
                <span class="invalid-icon" style="display: none;">&#x2716;</span>
              </div>
            </div>
          </div>
        </div>
      </div>
        <div class="col-12 text-center mt-3">
          <button type="submit" class="btn-custom" id="submitButton">Kirim</button>
        </div>
    </div>
  </div>
</form>

<div id="validationModal" class="modal">

    <div id="validationContent">

    </div>

</div>

<div id="popup2Modal" class="modal">

    <div id="popup2Content">
        
    </div>

</div>

<main></main>
</section>
<script>
    document.addEventListener("DOMContentLoaded", () => {
    const submitButton = document.getElementById("submitButton");
    const validationModal = document.getElementById("validationModal");
    const validationContent = document.getElementById("validationContent");
    const popup2Modal = document.getElementById("popup2Modal");
    const popup2Content = document.getElementById("popup2Content");

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
            fetch("{{ route('setor.validation') }}", {
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
            fetch("{{ route('setor.store') }}", {
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

                // Tampilkan popup2
                popup2Content.innerHTML = html; // Isi konten popup2
                popup2Modal.style.display = "block"; // Tampilkan modal popup2

                // Event untuk tombol "Kembali" pada popup2
                const backButton = popup2Modal.querySelector("#backButton");
                backButton.addEventListener("click", () => {
                    // Hapus modal popup2
                    popup2Modal.style.display = "none";
                    
                    // Kosongkan semua input pada form tarik tunai
                    const form = document.getElementById("regForm");
                    if (form) {
                        form.reset();
                    }
                });
            })
            .catch((error) => console.error("Error loading popup2:", error));
        }
    });

    // Tutup modal jika klik di luar area modal
    window.addEventListener("click", (e) => {
        if (e.target === validationModal) {
            validationModal.style.display = "none";
        } else if (e.target === popup2Modal) {
            popup2Modal.style.display = "none";
        }
    });
});

</script>

@endsection
