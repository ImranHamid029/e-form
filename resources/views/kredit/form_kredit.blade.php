@extends('layout/user/app')
@section('content')

<section class="features-area ">

  <form action="{{ route('kredit.validation') }}" method="POST" enctype="multipart/form-data" id="regForm">
    @csrf
    <div class=" d-block justify-content-center">
      <div class="form-area">
        <h1 class="h1-bold text-center" style="width:100%;">FORM PENGAJUAN KREDIT</h1>
        <div class="col-12" >
          <div class="card border shadow-sm mx-0">
            <div class="card-body">

            <h5 class="h5-semibold">Data Nasabah</h5>

              <div class="form-container">
                <label for="fullName">Nama Lengkap Sesuai KTP<span class="required">*</span></label>
                <div class="input-area">
                  <input id="fullName" name="fullName" type="text" style="border: 1px solid #A6A6A6; height:34px; display: block; width: 100%;" placeholder="Nama Lengkap" required>
                  <span class="invalid-icon" style="display: none;">&#x2716;</span>
                </div>
              </div>

              <div class="form-container2 d-flex justify-content-between">
                <div class="form-container" style="flex: 1;  width:50%;">

                <div class="form-container">
                  <label for="placeOfBirth">Tempat Lahir<span class="required">*</span></label>
                  <div class="input-area">
                    <input id="placeOfBirth" name="placeOfBirth" type="text" style="border: 1px solid #A6A6A6; height:34px; display: block; width: 100%;" placeholder="Tempat Lahir" required>
                    <span class="invalid-icon" style="display: none;">&#x2716;</span>
                  </div>
                </div>

                <div class="form-container">
                  <label for="dateOfBirth">Tanggal Lahir <span class="required">*</span></label>
                  <div class="input-area">
                    <input id="dateOfBirth" name="dateOfBirth" type="date" style="border: 1px solid #A6A6A6; height:34px; display: block; width: 100%;" required>
                    <span class="invalid-icon" style="display: none;">&#x2716;</span>
                  </div>
                </div>

                <div class="form-container">
                  <label for="gender">Jenis Kelamin <span class="required">*</span></label>
                  <select id="gender" name="gender" class="form-input" required>
                    <option value="" disabled selected>Pilih Jenis Kelamin</option>
                    <option value="Man">Laki-Laki</option>
                    <option value="Woman">Perempuan</option>
                  </select>
                </div>
              </div>

              <div class="form-container " style="flex: 1;width:50%; ">
                
                <div class="form-container">
                  <label for="nik">NIK <span class="required">*</span></label>
                  <div class="input-area">
                    <input id="nik" name="nik" type="number" style="border: 1px solid #A6A6A6; height:34px; display: block; width: 100%;" placeholder="NIK" required>
                    <span class="invalid-icon" style="display: none;">&#x2716;</span>
                  </div>
                </div>

                <div class="form-container">
                  <label for="phoneNumber">No. Telp <span class="required">*</span></label>
                  <div class="input-area">
                    <input id="phoneNumber" name="phoneNumber" type="text" style="border: 1px solid #A6A6A6; height:34px; display: block; width: 100%;" placeholder="No. Telepon" required>
                    <span class="invalid-icon" style="display: none;">&#x2716;</span>
                  </div>
                </div>

                <div class="form-container">
                  <label for="email">Email <span class="required">*</span></label>
                  <div class="input-area">
                    <input id="email" name="email" type="email" style="border: 1px solid #A6A6A6; height:34px; display: block; width: 100%;" placeholder="Email" required>
                    <span class="invalid-icon" style="display: none;">&#x2716;</span>
                  </div>
                </div>

              </div>
            </div>

            <div class="form-container">
              <label for="residentialAddress">Alamat Rumah <span class="required">*</span></label>
              <div class="input-area">
                <input id="residentialAddress" name="residentialAddress" type="text" style="border: 1px solid #A6A6A6; height:34px; display: block; width: 100%;" placeholder="Alamat Rumah" required>
                <span class="invalid-icon" style="display: none;">&#x2716;</span>
              </div>
            </div>

            <div class="form-container2 d-flex justify-content-between">
              <div class="form-container" style="flex: 1; width:50%;">
                <div class="form-container">
                  <label for="residentialProvince">Provinsi <span class="required">*</span></label>
                  <select id="residentialProvince" name="residentialProvince" class="form-input" required>
                    <option value="" disabled selected>Pilih Provinsi</option>
                    @foreach ($provinces as $item)
                      <option value="{{ $item->name }}">{{ $item->name }}</option>
                    @endforeach
                  </select>
                </div>

                <div class="form-container">
                  <label for="residentialCity">Kabupaten/Kota <span class="required">*</span></label>
                  <select id="residentialCity" name="residentialCity" class="form-input" required>
                    <option value="" disabled selected>Pilih Kabupaten/Kota</option>
                    @foreach ($cities as $item)
                      <option value="{{ $item->name }}">{{ $item->name }}</option>
                    @endforeach
                  </select>
                </div>
              </div>

              <div class="form-container" style="flex: 1;width:50%;">
                <div class="form-container">
                  <label for="residentialDistrict">Kecamatan<span class="required">*</span></label>
                  <select id="residentialDistrict" name="residentialDistrict" class="form-input" required>
                    <option value="" disabled selected>Pilih Kecamatan</option>
                    @foreach ($districts as $item)
                      <option value="{{ $item->name }}">{{ $item->name }}</option>
                    @endforeach
                  </select>
                </div>

                <div class="form-container">
                  <label for="posCode">Kode Pos <span class="required">*</span></label>
                  <div class="input-area">
                    <input id="posCode" name="posCode" type="number" style="border: 1px solid #A6A6A6; height:34px; display: block; width: 100%;" placeholder="Kode Pos" required>
                    <span class="invalid-icon" style="display: none;">&#x2716;</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="form-container">
              <label for="loasUsageDescription">Keterangan Pengajuan Kredit <span class="required">*</span></label>
              <div class="input-area">
                <textarea id="loanUsageDescription" name="loanUsageDescription" style="border: 1px solid #A6A6A6; height:100px; display: block; width: 100%;" placeholder="Tuliskan keterangan pengajuan kredit" required></textarea>
                <span class="invalid-icon" style="display: none;">&#x2716;</span>
              </div>
            </div>

          </div>
        </div>
      </div>
      <div class="col-12 pl-4" >
        <div class="card mt-4 border mb-4 shadow-sm mx-0">
          <div class="card-body">

          <h5 class="h5-semibold">Data Usaha Nasabah</h5>

            <div class="form-container">
              <label for="companyName">Nama Perusahaan<span class="required">*</span></label>
              <div class="input-area">
                <input id="companyName" name="companyName" type="text" style="border: 1px solid #A6A6A6; height:34px; display: block; width: 100%;" placeholder="Nama Lengkap" required>
                <span class="invalid-icon" style="display: none;">&#x2716;</span>
              </div>
            </div>

            <div class="form-container">
              <label for="businessAddress">Alamat Perusahaan <span class="required">*</span></label>
              <div class="input-area">
                <input id="businessAddress" name="businessAddress" type="text" style="border: 1px solid #A6A6A6; height:34px; display: block; width: 100%;" placeholder="Alamat Rumah" required>
                <span class="invalid-icon" style="display: none;">&#x2716;</span>
              </div>
            </div>

            <div class="form-container2 d-flex justify-content-between">
              <div class="form-container" style="flex: 1; width:50%;">
                <div class="form-container">
                  <label for="businessProvince">Provinsi <span class="required">*</span></label>
                  <select id="businessProvince" name="businessProvince" class="form-input" required>
                    <option value="" disabled selected>Pilih Provinsi</option>
                    @foreach ($provinces as $item)
                      <option value="{{ $item->name }}">{{ $item->name }}</option>
                    @endforeach
                  </select>
                </div>

                <div class="form-container">
                  <label for="businessCity">Kabupaten/Kota <span class="required">*</span></label>
                  <select id="businessCity" name="businessCity" class="form-input" required>
                    <option value="" disabled selected>Pilih Kabupaten/Kota</option>
                    @foreach ($cities as $item)
                      <option value="{{ $item->name }}">{{ $item->name }}</option>
                    @endforeach
                  </select>
                </div>
              </div>

              <div class="form-container" style="flex: 1; width:50%;">
                <div class="form-container">
                  <label for="businessDistrict">Kecamatan<span class="required">*</span></label>
                  <select id="businessDistrict" name="businessDistrict" class="form-input" required>
                    <option value="" disabled selected>Pilih Kecamatan</option>
                    @foreach ($districts as $item)
                      <option value="{{ $item->name }}">{{ $item->name }}</option>
                    @endforeach
                  </select>
                </div>

                <div class="form-container">
                  <label for="businessPosCode">Kode Pos <span class="required">*</span></label>
                  <div class="input-area">
                    <input id="businessPosCode" name="businessPosCode" type="number" style="border: 1px solid #A6A6A6; height:34px; display: block; width: 100%;" placeholder="Kode Pos" required>
                    <span class="invalid-icon" style="display: none;">&#x2716;</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="form-container2 d-flex justify-content-between">
              <div class="form-container" style="flex: 1; width:50%;">
                <div class="form-container">
                  <label for="businessPlaceStatus">Status Perusahaan <span class="required">*</span></label>
                  <select id="businessPlaceStatus" name="businessPlaceStatus" class="form-input" required>
                    <option value="" disabled selected>Pilih Status Perusahaan</option>
                    <option value="sendiri">Milik Sendiri</option>
                    <option value="keluarga">Milik Keluarga</option>
                    <option value="sewa">Sewa</option>
                    <option value="lainnya">Lainnya</option>
                  </select>
                </div>

                <div class="form-container">
                  <label for="businessSector">Bidang Usaha <span class="required">*</span></label>
                  <select id="businessSector" name="businessSector" class="form-input" required>
                    <option value="" disabled selected>Pilih Bidang Usaha</option>
                    <option value="f&b">F&B</option>
                    <option value="penambangan">Penambangan atau Penggalian</option>
                    <option value="penginapan">Penginapan</option>
                    <option value="lainnya">Lainnya</option>
                  </select>
                </div>
              </div>

              <div class="form-container" style="flex: 1; width:50%;">
                <div class="form-container">
                  <label for="loanTerm">Jangka Waktu <span class="required">*</span></label>
                  <select id="loanTerm" name="loanTerm" class="form-input" required>
                    <option value="" disabled selected>Pilih Jangka Waktu</option>
                    <option value="6">6 Months</option>
                    <option value="9">9 Months</option>
                    <option value="12">12 Months</option>
                  </select>
                </div>

                <div class="form-container">
                  <label for="loanCollateral">Jaminan <span class="required">*</span></label>
                  <div class="input-area">
                    <input id="loanCollateral" name="loanCollateral" type="text" style="border: 1px solid #A6A6A6; height:34px; display: block; width: 100%;" placeholder="Masukkan Jaminan" required>
                    <span class="invalid-icon" style="display: none;">&#x2716;</span>
                  </div>
                </div>

              </div>
              
            </div>

          </div>
        </div>
      </div>
      <div class="col-12 text-center mt-3" >
        <button type="submit" class="btn-custom" id="submitButton">Kirim</button>
      </div>
    </div>
  </div>
</form>

  <div id="validationModal" class="modal">
    <div id="validationContent">

    </div>
  </div>

  <div id="popup1Modal" class="modal">
    <div id="popup1Content">
      
    </div>
  </div>

</section>
<script>
document.addEventListener("DOMContentLoaded", () => {
    const submitButton = document.getElementById("submitButton");
    const validationModal = document.getElementById("validationModal");
    const validationContent = document.getElementById("validationContent");
    const popup1Modal = document.getElementById("popup1Modal");
    const popup1Content = document.getElementById("popup1Content");
    let uniqueResi = null; // Simpan uniqueResi setelah submit sukses

    // Event untuk tombol "Submit"
    submitButton.addEventListener("click", (e) => {
        e.preventDefault(); // Cegah form submit langsung

        const form = document.getElementById("regForm");
        const inputs = form.querySelectorAll("input[required],select[required],textarea[required]"); 
        let isValid = true;

        // Validasi form
        inputs.forEach(input => {
            const invalidIcon = input.nextElementSibling;

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
            fetch("{{ route('kredit.validation') }}", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": document.querySelector('input[name="_token"]').value,
                },
                body: JSON.stringify(Object.fromEntries(new FormData(form))),
            })
            .then(response => response.text())
            .then(data => {
                validationContent.innerHTML = data;
                validationModal.style.display = "block";
            })
            .catch(error => console.error("Error loading validation popup:", error));
        } 
    });

    // Event untuk tombol "Ya" pada popup validation
    document.addEventListener("click", (e) => {
        if (e.target && e.target.id === "confirmButton") {
            e.preventDefault(); // Cegah submit langsung

            const confirmForm = document.getElementById("confirmForm");
            fetch("{{ route('kredit.store') }}", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": document.querySelector('input[name="_token"]').value,
                },
                body: JSON.stringify(Object.fromEntries(new FormData(confirmForm))),
            })
            .then(response => response.json()) // Ubah ke JSON agar bisa ambil uniqueResi
            .then(data => {
                validationModal.style.display = "none";

                uniqueResi = data.uniqueResi; // Simpan uniqueResi untuk PDF

                popup1Content.innerHTML = data.html;
                popup1Modal.style.display = "block";

                const resiNumberElement = document.getElementById("resiNumber");
                if (resiNumberElement && uniqueResi) {
                    resiNumberElement.textContent = uniqueResi;
                }

                // Update link download PDF dengan uniqueResi
                const pdfLink = document.getElementById("pdfDownloadLink");
                if (pdfLink && uniqueResi) {
                    pdfLink.href = `/download-pdf/kredit/${uniqueResi}`;
                }

                // Event untuk tombol "Kembali"
                const backButton = popup1Modal.querySelector("#backButton");
                backButton.addEventListener("click", () => {
                    popup1Modal.style.display = "none";
                    const form = document.getElementById("regForm");
                    if (form) {
                        form.reset();
                    }
                });
            })
            .catch(error => console.error("Error loading popup1:", error));
        }
    });

    // Tutup modal jika klik di luar area modal
    window.addEventListener("click", (e) => {
        if (e.target === validationModal) {
            validationModal.style.display = "none";
        } else if (e.target === popup1Modal) {
            popup1Modal.style.display = "none";
        }
    });
});
</script>


<main></main>
@endsection
