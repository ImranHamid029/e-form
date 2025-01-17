@extends('layout\user\app')
@section('content')

<form action="#" method="POST" enctype="multipart/form-data" id="regForm">
  @csrf
  <div class="form-group d-block justify-content-center">
    <div class="form-area">
      <h1 class="h1-bold text-center" style="width:100%;">FORM TARIK TUNAI</h1>
      <div class="col-12 pl-4">
          <div class="card mt-4 border mb-4 shadow-sm mx-0">
              <div class="card-body">

                  <div class="form-container">
                      <label for="">Kantor Oprasional <span class="required">*</span></label>
                      <select name="" id="" required class="form-input" style="display: block; width: 100%;" required>
                          <option value="" disabled selected>Kantor Oprasional</option>
                          <option value="">Kantor Pusat</option>
                          <option value="">Kantor Cabang</option>
                      </select>
                  </div>

                  <div class="form-container">
                      <label for="">Pemilik Rekening <span class="required">*</span></label>
                      <div class="input-area">
                      <input type="text" style="border: 1px solid #A6A6A6; height:34px; display: block; width: 100%;" placeholder="Nama" required>
                      <span class="invalid-icon" style="display: none;">&#x2716;</span>
                      </div>
                  </div>

                  <div class="form-container">
                      <label for="">No. Rek <span class="required">*</span></label>
                      <div class="input-area">
                      <input type="number" style="border: 1px solid #A6A6A6; height:34px; display: block; width: 100%;" placeholder="Rekening" required>
                      <span class="invalid-icon" style="display: none;">&#x2716;</span>
                      </div>
                  </div>

          
                  <div class="d-flex justify-content-between">
                      <div class="form-container" style="flex: 1; padding-right: 24px;">                            <label for="jenisrekening" class="caption-regular">Jenis Rekening<span class="required">*</span></label>
                          <select id="jenisrekening" class="form-input" required>
                          <option value="" disabled selected>Jenis Rekening</option>
                          <option value="tabungan">Tabungan</option>
                          <option value="giro">Giro</option>
                          <option value="lainnya">Lainnya...</option>
                          </select>
                      </div>

                  
                      <div class="form-container" style="flex: 1;">    
                          <label for="jenisrekening" class="caption-regular">Mata Uang<span class="required">*</span></label>
                          <select id="jenisrekening" class="form-input" required>
                          <option value="" disabled selected>Mata Uang</option>
                          <option value="tabungan">Rupiah</option>
                          <option value="giro">Valuta Asing</option>
                          <option value="lainnya">Lainnya...</option>
                          </select> 
                      </div>
                  </div>

                  <div class="form-container">
                      <label for="">Tujuan Transaksi <span class="required">*</span></label>
                      <div class="input-area">
                          <textarea id="tujuantransaksi" name="tujuantransaksi" placeholder="Tujuan Transaksi Anda" required style="height:100px;"></textarea>
                          <span class="invalid-icon" style="display: none;">&#x2716;</span>
                      </div>
                  </div>

                  <div class="form-container">
                      <label for="">Jumlah Penarikan <span class="required">*</span></label>
                      <div class="input-area">
                          <input type="number" style="border: 1px solid #A6A6A6; height:34px; display: block; width: 100%;" placeholder="Jumlah Penarikan" required>
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
        <div class="col-12 text-center mt-3" >
          <button type="submit" class="btn-custom" id="submitButton">Kirim</button>
        </div>
    </div>
  </div>

</form>


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
