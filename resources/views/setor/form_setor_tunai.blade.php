@extends('layout\user\app')
@section('content')
<section class="features-area ">
<form action="#" method="POST" enctype="multipart/form-data" id="regForm">
  @csrf
  <div class=" d-block justify-content-center">
    <div class="form-area">
      <h1 class="h1-bold text-center" style="width:100%;">FORM SETOR TUNAI</h1>
      <div class="col-12">
        <div class="card  border  shadow-sm mx-0">
          <div class="card-body">

            <div class="form-container">
              <label for="pilihlayanan" class="caption-regular">Pilih Layanan <span class="required">*</span></label>
              <select id="pilihlayanan" class="form-input" required>
                <option value="" disabled selected>Pilih Layanan</option>
                <option value="tabungan">Tabungan</option>
                <option value="giro">Giro</option>
                <option value="">Deposito</option>
                <option value="">Pinjaman</option>
                <option value="lainnya">Lainnya...</option>
              </select>
            </div>

            <!-- Penerima dan Penyetor -->
            <div class="d-flex justify-content-between">
              <!-- Penerima -->
              <div class="form-container" style="flex: 1; padding-right: 24px;">
                <h4 class="body-sm-medium">Penerima</h4>

                <div class="form-container">
                  <label for="">No. Rek <span class="required">*</span></label>
                  <div class="input-area">
                    <input type="number" style="border: 1px solid #A6A6A6; height:34px; display: block; width: 100%;" placeholder="No. Rek" required>
                    <span class="invalid-icon" style="display: none;">&#x2716;</span>
                  </div>
                </div>

                <div class="form-container">
                  <label for="">Kantor Oprasional <span class="required">*</span></label>
                  <select name="" id="" required class="form-input" style="display: block; width: 100%;" required>
                    <option value="" disabled selected>Kantor Oprasional</option>
                    <option value="">Kantor Pusat</option>
                    <option value="">Kantor Cabang</option>
                  </select>
                </div>

                <div class="form-container">
                  <label for="">Nama Pemilik <span class="required">*</span></label>
                  <div class="input-area">
                    <input type="text" style="border: 1px solid #A6A6A6; height:34px; display: block; width: 100%;" placeholder="Nama Pemilik" required>
                    <span class="invalid-icon" style="display: none;">&#x2716;</span>
                  </div>
                </div>
              </div>

              <!-- Penyetor -->
              <div class="form-container" style="flex: 1;">
                <h4 class="body-sm-medium">Penyetor</h4>

                <div class="form-container">
                  <label for="">Nama <span class="required">*</span></label>
                  <div class="input-area">
                    <input type="text" style="border: 1px solid #A6A6A6; height:34px; display: block; width: 100%;" placeholder="Nama" required>
                    <span class="invalid-icon" style="display: none;">&#x2716;</span>
                  </div>
                </div>

                <div class="form-container">
                  <label for="">Alamat dan No. Telp <span class="required">*</span></label>
                  <div class="input-area">
                    <input type="text" style="border: 1px solid #A6A6A6; height:34px; display: block; width: 100%;" placeholder="Alamat dan No. Telp" required>
                    <span class="invalid-icon" style="display: none;">&#x2716;</span>
                  </div>
                </div>

                <div class="form-container">
                  <label for="">Pekerjaan <span class="required">*</span></label>
                  <div class="input-area">
                    <input type="text" style="border: 1px solid #A6A6A6; height:34px; display: block; width: 100%;" placeholder="Pekerjaan" required>
                    <span class="invalid-icon" style="display: none;">&#x2716;</span>
                  </div>
                </div>

                <div class="form-container">
                  <label for="">Nama Perusahaan</label>
                  <input type="text" style="border: 1px solid #A6A6A6; height:34px; display: block; width: 100%;" placeholder="Nama Perusahaan">
                </div>
              </div>
            </div>

            <div class="form-container">
              <label for="">Jumlah Penyetoran <span class="required">*</span></label>
              <div class="input-area">
                <input type="number" style="border: 1px solid #A6A6A6; height:34px; display: block; width: 100%;" placeholder="Jumlah Penyetoran" required>
                <span class="invalid-icon" style="display: none;">&#x2716;</span>
              </div>
            </div>

            <div class="form-container">
              <label for="">Terbilang <span class="required">*</span></label>
              <div class="input-area">
                <input type="text" style="border: 1px solid #A6A6A6; height:34px; display: block; width: 100%;" placeholder="Terbilang" required>
                <span class="invalid-icon" style="display: none;">&#x2716;</span>
              </div>
            </div>
          </div>
        </div>
      </div>
        <div class="col-12 text-center btn-area">
          <button type="submit" class="btn-custom" id="submitButton">Kirim</button>
        </div>
    </div>
  </div>

</form>
</section>
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

<main></main>
@endsection
