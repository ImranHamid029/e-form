@extends('layout\v_layout')
@section('content')

<form action="{{ route('test.store') }}" method="POST" enctype="multipart/form-data" id="regForm">
@csrf
  <div class="form-group  mb-3 d-flex justify-content-center">
    <div class="card mt-4" style="width:80%">
      <div class="tab">
        <h5 class="card-header text-center" style="width:100%">
          Data Diri
        </h5>
        <div class="col-12 pl-4">

          <div class="mx`b-3">
            <label for="formGroupExampleInput" class="form-label">NIK:</label>
            <input name="nik" type="text" class="form-control" id="formGroupExampleInput" placeholder="NIK">
          </div>

          <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Nama Lengkap</label>
            <input name="nama_lengkap" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Nama Lengkap">
          </div>

          <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Tempat Lahir</label>
            <input name="tempat_lahir" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Tempat Lahir">
          </div>

          <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Tanggal Lahir</label>
            <input name="tanggal_lahir" type="date" class="form-control" id="formGroupExampleInput2" placeholder="Tanggal Lahir">
          </div>

          <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Nomor Telepon</label>
            <input name="no_tlp" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Nomor Telepon">
          </div>

          <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Enter Your Email</label>
            <input name="email" type="email" class="form-control" id="formGroupExampleInput2" placeholder="Enter Your Email">
          </div>

          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Alamat Tinggal</label>
            <textarea name="alamat_tinggal" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>

          <div class="form-row">
            <div class="col-md-4 mb-3">
              <label for="validationTooltip03">Provinsi</label>
              <div class="form-group">
                <select name="provinsi_tinggal" class="form-control" id="exampleFormControlSelect1" type="text" required>
                  <option></option>
                  <option>Aceh</option>
                  <option>Sumatera Utara</option>
                  <option>Sumatera Barat</option>
                  <option>Riau</option>
                  <option>Lampung</option>
                </select>
              </div>
              <div class="invalid-tooltip">
                Please provide a valid Provinsi.
              </div>
            </div>

            <div class="col-md-4 mb-3">
              <label for="validationTooltip03">Kabupaten/Kota</label>
              <div class="form-group">
                <select name="kabupaten_tinggal" class="form-control" id="exampleFormControlSelect1" type="text" required>
                  <option></option>
                  <option>Bandar Lampung</option>
                  <option>Bandar Jaya</option>
                  <option>Metro</option>
                  <option>Pringsewu</option>
                  <option>Sukadana</option>
                </select>
              </div>
              <div class="invalid-tooltip">
                Please provide a valid Kabupaten/Kota.
              </div>
            </div>

            <div class="col-md-4 mb-3">
              <label for="validationTooltip03">Kecamatan</label>
              <div class="form-group">
                <select name="kecamatan_tinggal" class="form-control" id="exampleFormControlSelect1" type="text" required>
                  <option>Tanjung Senang</option>
                  <option>Tanjung Karang</option>
                  <option>Telung Betung</option>
                  <option>Antasari</option>
                  <option>Rajabasa</option>
                </select>
              </div>
              <div class="invalid-tooltip">
                Please provide a valid Kecamatan.
              </div>
            </div>
          </div>

          <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Nama Perusahaan</label>
            <input name="nama_perusahaan" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Nama Perusahaan">
          </div>

          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Alamat Perusahaan</label>
            <textarea name="alamat_usaha" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>

          <div class="form-row">
            <div class="col-md-4 mb-3">
              <label for="validationTooltip03">Provinsi</label>
              <div class="form-group">
                <select name="provinsi_usaha" class="form-control" id="exampleFormControlSelect1" type="text" required>
                  <option></option>
                  <option>Aceh</option>
                  <option>Sumatera Utara</option>
                  <option>Sumatera Barat</option>
                  <option>Riau</option>
                  <option>Lampung</option>
                </select>
              </div>
              <div class="invalid-tooltip">
                Please provide a valid Provinsi.
              </div>
            </div>

            <div class="col-md-4 mb-3">
              <label for="validationTooltip03">Kabupaten/Kota</label>
              <div class="form-group">
                <select name="kabupaten_usaha" class="form-control" id="exampleFormControlSelect1" type="text" required>
                  <option></option>
                  <option>Bandar Lampung</option>
                  <option>Bandar Jaya</option>
                  <option>Metro</option>
                  <option>Pringsewu</option>
                  <option>Sukadana</option>
                </select>
              </div>
              <div class="invalid-tooltip">
                Please provide a valid Kabupaten/Kota.
              </div>
            </div>

            <div class="col-md-4 mb-3">
              <label for="validationTooltip03">Kecamatan</label>
              <div class="form-group">
                <select name="kecamatan_usaha" class="form-control" id="exampleFormControlSelect1" type="text" required>
                  <option>Tanjung Senang</option>
                  <option>Tanjung Karang</option>
                  <option>Telung Betung</option>
                  <option>Antasari</option>
                  <option>Rajabasa</option>
                </select>
              </div>
              <div class="invalid-tooltip">
                Please provide a valid Kecamatan.
              </div>
            </div>
          </div>

          <div class="form-group">
            <label for="exampleFormControlSelect1">Status Perusahaan</label>
            <select name="status_tempat_usaha" class="form-control" id="exampleFormControlSelect1">
              <option></option>
              <option>Milik Sendiri</option>
              <option>Milik Keluarga</option>
              <option>Sewa</option>
              <option>Dan lain-lain</option>
            </select>
          </div>

          <div class="form-group">
            <label for="exampleFormControlSelect1">Bidang Usaha</label>
            <select name="bidang_usaha" class="form-control" id="exampleFormControlSelect1">
              <option></option>
              <option>Makanan</option>
              <option>Pertambangan atau Penggalian</option>
              <option>Penginapan</option>
              <option>Dan lain-lain</option>
            </select>
          </div>

          <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Jumlah Kredit</label>
            <input name="jumlah_kredit" type="number" class="form-control" id="formGroupExampleInput2" placeholder="Jumlah Kredit">
          </div>

          <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Jangka Waktu</label>
            <input name="jangka_waktu" type="number" class="form-control" id="formGroupExampleInput2" placeholder="Jangka Waktu">
          </div>

          <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Keterangan Penggunaan Kredit:</label>
            <input name="keterangan_pengguna_kredit" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Keterangan">
          </div>

          <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Jaminan</label>
            <input name="jaminan_kredit" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Jaminan">
          </div>
        </div>
      </div>




      <div class="tab">
        <h5 class="card-header text-center" style="width:100%">
          Data Keluarga
        </h5>
        <div class="col-12 pl-4">
          <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Nama Suami/Istri</label>
            <input name="nama_pasangan" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Nama Suami/Istri">
          </div>

          <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Pekerjaan Suami/Istri</label>
            <input name="pekerjaan_pasangan" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Pekerjaan Suami/Istri">
          </div>

          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Alamat Pekerjaan</label>
            <textarea name="alamat_pekerjaan" class="form-control" id="exampleFormControlTextarea1" placeholder="Alamat Pekerjaan" rows="3"></textarea>
          </div>

          <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Jumlah Anak</label>
            <input name="jumlah_anak" type="number" class="form-control" id="formGroupExampleInput2" placeholder="Jumlah Anak">
          </div>

          <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Nama Ibu Kandung</label>
            <input name="nama_ibu_kandung" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Nama Ibu Kandung">
          </div>
        </div>
      </div>


      <div class="tab">
        <h5 class="card-header text-center" style="width:100%">
          Wilayah & Pengajuan
        </h5>
        <div class="col-12 pl-4">
          <div class="form-group">
            <label for="exampleFormControlSelect1">Apakah Anda Memiliki Rekening di Bank Lampung</label>
            <select name="rekening_bank" class="form-control" id="exampleFormControlSelect1">
              <option></option>
              <option>YA</option>
              <option>Tidak</option>
            </select>
          </div>

          <div class="form-group">
            <label for="exampleFormControlSelect1">Apakah Anda Memiliki Pinjaman di Bank Lain?</label>
            <select name="pinjaman_bank_lain" class="form-control" id="exampleFormControlSelect1">
              <option></option>
              <option>YA</option>
              <option>Tidak</option>
            </select>
          </div>

          <label for="exampleFormControlSelect1">Wilayah Pengajuan di Bank Lampung</label>
          <select name="wilayah_pengajuan" class="form-control" id="exampleFormControlSelect1">
            <option></option>
            <option>Bandar Lampung</option>
            <option>Pringsewu</option>
            <option>Sukadana</option>
            <option>Metro</option>
            <option>Panjanga</option>
          </select>
        </div>

      </div>


      <div class="tab">
        <h5 class="card-header text-center" style="width:100%">
          Konfirmasi
        </h5>
        <label class='container'>Saya setuju bahwa data yang saya inputkan adalah benar
          <input id="field_terms" onchange="this.setCustomValidity(validity.valueMissing ? 'Please indicate that you accept the Terms and Conditions' : '');" type="checkbox" required name="terms">
          <span class="checkmark"></span>

        </label>
        <script>
          document.getElementById("field_terms").setCustomValidity("pastikan anda setuju dengan Syarat & Ketentuan");
        </script>
      </div>

      <div style="overflow:auto;">
        <div style="float:right;">
          <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
          <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
        </div>
      </div>
      <!-- Circles which indicates the steps of the form: -->
      <div style="text-align:center;margin-top:40px;">
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
      </div>
    </div>
  </div>
</form>

<script>
  var currentTab = 0; // Current tab is set to be the first tab (0)
  showTab(currentTab); // Display the current tab -->


  function showTab(n) {
    // This function will display the specified tab of the form...
    var x = document.getElementsByClassName("tab");
    x[n].style.display = "block";
    //... and fix the Previous/Next buttons:
    if (n == 0) {
      document.getElementById("prevBtn").style.display = "none";
    } else {
      document.getElementById("prevBtn").style.display = "inline";
    }
    if (n == (x.length - 1)) {
      document.getElementById("nextBtn").innerHTML = "Submit";
    } else {
      document.getElementById("nextBtn").innerHTML = "Next";
    }
    //... and run a function that will display the correct step indicator:
    fixStepIndicator(n)
  }

  function nextPrev(n) {
    // This function will figure out which tab to display
    var x = document.getElementsByClassName("tab");
    // Exit the function if any field in the current tab is invalid:
    if (n == 1 && !validateForm()) return false;
    // Hide the current tab:
    x[currentTab].style.display = "none";
    // Increase or decrease the current tab by 1:
    currentTab = currentTab + n;
    // if you have reached the end of the form...
    if (currentTab >= x.length) {
      // ... the form gets submitted:
      document.getElementById("regForm").submit();
      return false;
    }
    // Otherwise, display the correct tab:
    showTab(currentTab);
  }

  function validateForm() {
    // This function deals with validation of the form fields
    var x, y, i, valid = true;
    x = document.getElementsByClassName("tab");
    y = x[currentTab].getElementsByTagName("input");
    // A loop that checks every input field in the current tab:
    for (i = 0; i < y.length; i++) {
      // If a field is empty...
      if (y[i].value == "") {
        // add an "invalid" class to the field:
        y[i].className += " invalid";
        // and set the current valid status to false
        valid = false;
      }
    }
    // If the valid status is true, mark the step as finished and valid:
    if (valid) {
      document.getElementsByClassName("step")[currentTab].className += " finish";
    }
    return valid; // return the valid status
  }

  function fixStepIndicator(n) {
    // This function removes the "active" class of all steps...
    var i, x = document.getElementsByClassName("step");
    for (i = 0; i < x.length; i++) {
      x[i].className = x[i].className.replace(" active", "");
    }
    //... and adds the "active" class on the current step:
    x[n].className += " active";
  }
</script>



<!-- <head>
    <title>Isi Form Kredit</title>

<body>
    <form method="POST" id="regForm" action="{{ route('test.store') }}" align='center'>
    @csrf
    <h1>Form Kredit</h1>
 
  <div class="tab"><h3>1. Data Pengaju Kredit</h3>
    NIK:
    <p><input placeholder="" oninput="this.className = ''" name="nik"></p>
    Nama Lengkap:
    <p><input placeholder="" oninput="this.className = ''" name="nama_lengkap"></p>
    Tempat Lahir:
    <p><input placeholder="" oninput="this.className = ''" name="tempat_lahir"></p>
    Tanggal Lahir:
    <p><input type='date' oninput="this.className = ''" name="tanggal_lahir"></p>
    Telp / HP:
    <p><input type='number' placeholder="" oninput="this.className = ''" name="no_tlp"></p>
    <label for="email">Enter your email:</label>
    <p><input type='email' placeholder="" oninput="this.className = ''" name="email"></p>
    Alamat Rumah:
    <p><input placeholder="" oninput="this.className = ''" name="alamat_tinggal"></p>
    <p>Provinsi:<input placeholder="" oninput="this.className = ''" name="provinsi_tinggal">
    Kabupaten/Kota:<input placeholder="" oninput="this.className = ''" name="kabupaten_tinggal">
    Kecamatan:<input placeholder="" oninput="this.className = ''" name="kecamatan_tinggal"></p>
    Nama Perusahaan:
    <p><input placeholder="" oninput="this.className = ''" name="nama_perusahaan"></p>
    Alamat Usaha:
    <p><input placeholder="" oninput="this.className = ''" name="alamat_usaha"></p>
    <p>Provinsi:<input placeholder="" oninput="this.className = ''" name="provinsi_usaha">
    Kabupaten/Kota:<input placeholder="" oninput="this.className = ''" name="kabupaten_usaha">
    Kecamatan:<input placeholder="" oninput="this.className = ''" name="kecamatan_usaha"></p>
    Status Tempat Usaha:
    <p><input placeholder="" oninput="this.className = ''" name="status_tempat_usaha"></p>
    Bidang Usaha:
    <p><input placeholder="" oninput="this.className = ''" name="bidang_usaha"></p>
    Jumlah Kredit:
    <p><input type='number' placeholder="" oninput="this.className = ''" name="jumlah_kredit"></p>
    Jangka Waktu:
    <p><input type='number' placeholder="" oninput="this.className = ''" name="jangka_waktu"></p>
    Keterangan Penggunaan Kredit:
    <p><input placeholder="" oninput="this.className = ''" name="keterangan_pengguna_kredit"></p>
    Jaminan:
    <p><input placeholder="" oninput="this.className = ''" name="jaminan_kredit"></p>
  </div>
  
  <div class="tab"><h3>2. Data Keluarga</h3>
    Nama Suami / Istri:
    <p><input placeholder="" oninput="this.className = ''" name="nama_pasangan"></p>
    Pekerjaan Suami / Istri:
    <p><input placeholder="" oninput="this.className = ''" name="pekerjaan_pasangan"></p>
    Alamat Pekerjaan:
    <p><input placeholder="" oninput="this.className = ''" name="alamat_pekerjaan"></p>
    Jumlah Anak:
    <p><input type='number' placeholder="" oninput="this.className = ''" name="jumlah_anak"></p>
    Nama Ibu Kandung:
    <p><input placeholder="" oninput="this.className = ''" name="nama_ibu_kandung"></p>
  </div>

  <div class="tab"><h3>3. Wilayah & Pengajuan</h3>
    Memiliki Rekening di Bank Lampung?
    <p><input placeholder="dd" oninput="this.className = ''" name="rekening_bank"></p>
    Memiliki Pinjaman di Bank Lain?
    <p><input placeholder="mm" oninput="this.className = ''" name="pinjaman_bank_lain"></p>
    Wilayah Pengajuan di Bank Lampung
    <p><input placeholder="yyyy" oninput="this.className = ''" name="wilayah_pengajuan"></p>
  </div>

  <div class="tab"><h3>4. Konfirmasi</h3>
    <label class='container'>Saya setuju bahwa data yang saya inputkan adalah benar
        <input id="field_terms" onchange="this.setCustomValidity(validity.valueMissing ? 'Please indicate that you accept the Terms and Conditions' : '');" type="checkbox" required name="terms">
        <span class="checkmark"></span>
      
    </label>
    <script>
        document.getElementById("field_terms").setCustomValidity("pastikan anda setuju dengan Syarat & Ketentuan");
    </script>
  </div>
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div> -->
<!-- Circles which indicates the steps of the form: -->
<!-- <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
</form> -->

<!-- <script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab -->

<!-- function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>
</body> -->
@endsection