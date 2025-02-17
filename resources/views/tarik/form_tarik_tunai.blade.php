@extends('layout/user/app')
@section('content')
<section class="features-area ">
<form action="{{ route('tarik.validation') }}" method="POST" enctype="multipart/form-data" id="regForm">
  @csrf
  <div class="d-block justify-content-center">
    <div class="form-area">
      <h1 class="h1-bold text-center" style="width:100%;">FORM TARIK TUNAI</h1>
      <div class="col-12 pl-4">
          <div class="card mt-4 border mb-4 shadow-sm mx-0">
              <div class="card-body">

                  <div class="form-container">
                      <label for="bankBranch">Kantor Oprasional <span class="required">*</span></label>
                      <div class="select-container">
                        <select name="bankBranch" id="bankBranch" required class="form-input" style="display: block; width: 100%;" required>
                            <option value="" disabled selected>Kantor Oprasional</option>
                            @foreach ($offices as $item)
                                <option value="{{ $item->office_name }}">{{ $item->office_name }}</option>
                            @endforeach
                        </select>
                        <span class="invalid-select" style="display: none;">!</span> 
                    </div>
                  </div>

                  <div class="form-container">
                      <label for="ownerName">Pemilik Rekening <span class="required">*</span></label>
                      <div class="input-area">
                        <input id="ownerName" name="ownerName" type="text" style="border: 1px solid #A6A6A6; height:34px; display: block; width: 100%;" placeholder="Nama" required>
                        <span class="invalid-icon" style="display: none;">&#x2716;</span>
                      </div>
                  </div>

                  <div class="form-container">
                      <label for="accountNumber">No. Rek <span class="required">*</span></label>
                      <div class="input-area">
                        <input id="accountNumber" name="accountNumber" type="number" style="border: 1px solid #A6A6A6; height:34px; display: block; width: 100%;" placeholder="Rekening" required>
                        <span class="invalid-icon" style="display: none;">&#x2716;</span>
                      </div>
                  </div>

          
                  <div class="d-flex justify-content-between">
                      <div class="form-container" style="flex: 1; padding-right: 24px;">                            
                          <label for="accountType" class="caption-regular">Jenis Rekening<span class="required">*</span></label>
                          <div class="select-container">
                            <select id="accountType" name="accountType" value="Tarik Tunai" class="form-input" required>
                                <option value="" disabled selected>Jenis Rekening</option>
                                <option value="tabungan">Tabungan</option>
                                <option value="giro">Giro</option>
                                <option value="pinjaman">Pinjaman</option>
                                <option value="lainnya">Lainnya...</option>
                            </select>
                            <span class="invalid-select" style="display: none;">!</span> 
                        </div>
                      </div>

                  
                      <div class="form-container" style="flex: 1;">   
                        <label for="currency" class="caption-regular">Mata Uang<span class="required">*</span></label>

                        <div class="select-container">
                            <select id="currency" name="currency" class="form-input" required>
                                <option value="" disabled selected>Mata Uang</option>
                                <option value="rupiah">Rupiah</option>
                                <option value="valutaAsing">Valuta Asing</option>
                                <option value="lainnya">Lainnya...</option>
                            </select>
                            <span class="invalid-select" style="display: none;">!</span> 
                        </div> 
                    </div>

                  </div>


                  <div class="form-container">
                      <label for="amount">Jumlah Penarikan <span class="required">*</span></label>
                      <div class="input-area">
                          <input id="amount" name="amount" type="number" style="border: 1px solid #A6A6A6; height:34px; display: block; width: 100%;" placeholder="Jumlah Penarikan" required>
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
        <div class="col-12 text-center" >
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
            fetch("{{ route('tarik.validation') }}", {
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
            fetch("{{ route('tarik.store') }}", {
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
<script>
  document.addEventListener("DOMContentLoaded", function() {
    const selects = document.querySelectorAll("select");

    selects.forEach(select => {
      select.style.color = "gray"; // Warna awal

      select.addEventListener("change", function() {
        if (this.value) {
          this.style.color = "black";
        } else {
          this.style.color = "gray";
        }
      });
    });
  });
</script>

<script>
    function closePopup() {
        document.getElementById("logoutPopup").style.display = "none";
    }
</script>
@endsection
