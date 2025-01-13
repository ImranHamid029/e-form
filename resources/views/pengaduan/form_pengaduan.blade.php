@extends('layout\v_layout')
@section('content')

<form action="#" method="POST" enctype="multipart/form-data" id="regForm">
  @csrf
  <div class="form-group d-block justify-content-center">
    <div class="form-area">
    <h4 class="h4-semibold text-center" style="width:100%;">HARAP ISI DENGAN HURUF CETAK</h4>
    <div class="col-12 pl-4">
      <div class="card mt-4 border mb-4 shadow-sm mx-0">
        <div class="card-body">

          <!-- Input Nama -->
          <div class="form-container" style="position: relative;">
            <label for="nama">Nama <span class="required">*</span></label>
            <div class="input-area">
                <input type="text" id="nama" name="nama" placeholder="Nama Anda" required>
                <span class="invalid-icon" style="display: none;">&#x2716;</span>
            </div>
          </div>

          <!-- Input Alamat -->
          <div class="form-container" style="position: relative;">
            <label for="alamat">Alamat <span class="required">*</span></label>
            <div class="input-area">
              <input type="text" id="alamat" name="alamat" placeholder="Alamat Anda" required>
              <span class="invalid-icon" style="display: none;">&#x2716;</span>
            </div>
            
          </div>

          <!-- Input Email -->
          <div class="form-container" style="position: relative;">
            <label for="email">Email <span class="required">*</span></label>
            <div class="input-area">
              <input type="email" id="email" name="email" placeholder="Email Anda" required>
              <span class="invalid-icon" style="display: none;">&#x2716;</span>
            </div>
          </div>

          <!-- Textarea Keluhan -->
          <div class="form-container" style="position: relative;">
            <label for="keluhan">Keluhan Anda <span class="required">*</span></label>
            <div class="input-area">
              <textarea id="keluhan" name="keluhan" placeholder="Keluhan Anda" required style="height:100px;"></textarea>
              <span class="invalid-icon" style="display: none;">&#x2716;</span>
            </div>
          </div>

            <!-- Tombol Kirim -->
            <div class="col-12 text-center mt-3">
              <button type="submit" class="btn-custom" id="submitButton">Kirim</button>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</form>


<script>
  document.getElementById("submitButton").addEventListener("click", function (event) {
    event.preventDefault(); // Mencegah pengiriman form sebelum validasi selesai
    const form = document.getElementById("regForm");
    const requiredInputs = form.querySelectorAll("input[required], textarea[required], select[required]"); // Hanya elemen yang required
    let isValid = true;

    requiredInputs.forEach(input => {
      const invalidIcon = input.nextElementSibling; // Icon invalid jika ada

      if (!input.value.trim()) {
        input.classList.add("invalid");
        if (invalidIcon) invalidIcon.style.display = "inline-block";
        isValid = false;
      } else {
        input.classList.remove("invalid");
        if (invalidIcon) invalidIcon.style.display = "none";
      }
    });

    // Kirim form jika semua elemen required valid
    if (isValid) {
      alert("Form berhasil dikirim!");
      form.submit();
    }
  });
</script>


<main></main>
@endsection
