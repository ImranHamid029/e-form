@extends('layout\v_layout')
@section('content')
<style>
    .card-header.bg-primary {
        background-color:rgb(4, 58, 116) !important; 
        color: white; 
    }
</style>

<!-- <div class="logo-container d-flex justify-content-end mt-4" style="display: flex; justify-content: flex-end; align-items: center; width: 100%;">
    <div class="logo" style="padding: 10px; text-align: right;">
        <a href="/"><img src="img/Bank_Lampung_Logo.svg" width="240px" alt="Logo Bank Lampung" style="max-width: 100%; justify-content:center ; "></a>
        <h5 class="card-header bg-primary text-white text-center mt-2" style="width: 100%; padding: 10px;">FORMULIR PENYETORAN</h5>
    </div>
</div> -->




      <form action="{{ route('test.store') }}" method="POST" enctype="multipart/form-data" id="regForm">
        @csrf
        <div class="form-group mb-3 d-flex justify-content-center">
          <div class="card mt-4" style="width:80%">
            <!-- Tab 1 -->
        <div class="tab">
          <h5 class="card-header bg-primary text-white text-center" style="width:100%;">HARAP ISI DENGAN HURUF CETAK</h5>
          <div class="col-12 pl-4">

         
          <div class="mb-3 mt-3 d-flex flex-wrap justify-content-between" style="font-size: 20px;">
            <!-- Pilih Jenis Setoran -->
            <div class="d-flex flex-wrap align-items-center mb-3" >
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="tabungan" id="tabungan" value="tabungan" required>
                <label class="form-check-label" for="tabungan">Tabungan</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="tabungan" id="giro" value="giro" required>
                <label class="form-check-label" for="giro">Giro</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="tabungan" id="deposito" value="deposito" required>
                <label class="form-check-label" for="deposito">Deposito</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="tabungan" id="pinjaman" value="pinjaman" required>
                <label class="form-check-label" for="pinjaman">Pinjaman</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="tabungan" id="lainnya" value="lainnya" required>
                <label class="form-check-label" for="lainnya">Lainnya</label>
              </div>
            </div>

            <!-- Tanggal -->
            <div class="form-group ">
              <label for="tanggal">Tanggal</label>
              <input class="form-control" type="date" name="tanggal" id="tanggal" style="width: 300px;" required>
            </div>
          </div>




            <!-- Box untuk PENERIMA -->
            <div  class="card mt-4 border mb-4 shadow-sm mx-0">
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

                <div class="mb-3">
                  <label for="cabangBank" class="form-label">Kantor Operasional</label>
                  <select name="cabang_bank" class="form-control" id="cabangBank" required>
                    <option value="" disabled selected>Pilih kantor</option>
                    <option value="#">KANTOR PUSAT</option>
                    <option value="#">KANTOR CABANG JAKARTA</option>
                    <option value="#">KANTOR CABANG KALIANDA</option>
                    <option value="#">KANTOR CABANG METRO</option>
                    <option value="#">KANTOR CABANG BANDAR JAYA</option>
                    <option value="#">KANTOR CABANG KOTABUMI</option>
                  </select>
                </div>
              </div>
            </div>

            <!-- Box untuk PENYETOR -->
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Penyetor</h5>
                <div class="mb-3">
                  <label for="namaLengkap" class="form-label">Nama Lengkap</label>
                  <input name="nama_lengkap" type="text" class="form-control" id="namaLengkap" placeholder="Nama Lengkap" required>
                </div>

                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input name="email" type="text" class="form-control" id="email" placeholder="Email"  required>
                </div>

                <div class="mb-3">
                  <label for="noTlp" class="form-label">Nomor Telepon</label>
                  <input name="no_tlp" type="number" class="form-control" id="noTlp" placeholder="Nomor Telepon" required>
                </div>

                <div class="mb-3">
                  <label for="alamat" class="form-label">Alamat</label>
                  <textarea name="alamat" class="form-control" id="alamat" rows="3" placeholder="Alamat"></textarea>
                </div>

                <div class="row">
                  <div class="col-md-4 mb-3">
                    <select name="provinsi_tinggal" class="form-control" id="provinsi" required>
                      <option disabled selected>Pilih Provinsi</option>
                      <option value="lampung">Lampung</option>
                    </select>
                  </div>

                  <div class="col-md-4 mb-3">
                    <select name="kabupaten_tinggal" class="form-control" id="kabupaten" required>
                      <option disabled selected>Pilih Kabupaten/Kota</option>
                    </select>
                  </div>

                  <div class="col-md-4 mb-3">
                    <select name="kecamatan_tinggal" class="form-control" id="kecamatan" required>
                      <option disabled selected>Pilih Kecamatan</option>
                    </select>
                  </div>
                </div>

                <div class="mb3">
                  <label for="nama_perusahaan" class="form-label">Nama perusahaan</label>
                  <input name="namaperusahaan" type="text" class="form-control" id="nama_perusahaan" placeholder="Nama Perusahaan">
                </div>

              </div>
            </div>

          </div>
        </div>
  

        <!-- Tab 2 -->
      <div class="tab">
        <h5 class="card-header bg-primary text-white text-center" style="width:100%;background-color: #007bff">HARAP ISI DENGAN HURUF CETAK</h5>
        <div class="col-12 pl-4">
          <!-- Warkat -->
          <div  class="card mt-4 border mb-4 shadow-sm mx-0">
            <div class="card-body">
              
              <div class="mb-3 mt-3 d-flex justify-content-center"  style="font-size: 20px;">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="warkat-sendiri" id="warkat-sendiri" value="warkat-sendiri">
                  <label class="form-check-label" for="tabungan">Warkat Sendiri</label>
                </div>

                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="warkat-bank-lain" id="warkat-bank-lain" value="warkat-bank-lain">
                  <label class="form-check-label" for="giro">Warkat Bank Lain</label>
                </div>
              </div>

                <div class="mb-3">
                  <label for="nama-bank-tertarik" class="form-label">Nama Bank Tertarik</label>
                  <input name="nama-bank-tertarik" type="number" class="form-control" id="nama-bank-tertarik" placeholder="Nama Bank Tertarik">
                </div>

                <div class="mb-3">
                  <label for="no_cek" class="form-label">No Cek/BG</label>
                  <input name="no_cek" type="number" class="form-control" id="no_cek" placeholder="Nomor Cek/BG">
                </div>
                
            </div>
          </div>

          <!-- Jumlah -->
          <div  class="card mt-4 border mb-4 shadow-sm mx-0">
            <div class="card-body">

                <div class="mb-3">
                  <label for="jumlah" class="form-label">Jumlah</label>
                  <input name="jumlah" type="number" class="form-control" id="jumlah" placeholder="Jumah" required>
                </div>

                <div class="mb-3">
                  <label for="Terbilang" class="form-label">Terbilang</label>
                  <textarea name="terbilang" class="form-control" id="terbilang" rows="3" placeholder="Terbilang" required></textarea>
                </div>
                
            </div>
          </div>

        </div>
      </div>

      <!-- Tab 3: Konfirmasi -->
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

      <!-- Indikator langkah -->
      <div style="text-align:center;margin-top:40px;">
        <span class="step"></span>
        <span class="step"></span>
      </div>
    </div>
  </div>
</form>


<script>
// Variabel dan fungsi untuk navigasi antar tab
var currentTab = 0; // Setel tab saat ini ke tab pertama (0)
showTab(currentTab); // Menampilkan tab yang sedang aktif

function showTab(n) {
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block"; // Menampilkan tab yang dipilih

  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none"; // Menyembunyikan tombol Previous di tab pertama
  } else {
    document.getElementById("prevBtn").style.display = "inline"; // Menampilkan tombol Previous
  }

  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit"; // Mengubah teks tombol menjadi "Submit" jika di tab terakhir
  } else {
    document.getElementById("nextBtn").innerHTML = "Next"; // Mengubah teks tombol menjadi "Next"
  }

  fixStepIndicator(n); // Memperbaiki indikator langkah
}

function nextPrev(n) {
  var x = document.getElementsByClassName("tab");

  if (n == 1 && !validateForm()) return false; // Validasi form

  x[currentTab].style.display = "none"; // Menyembunyikan tab yang sedang aktif

  currentTab = currentTab + n; // Menambah/mengurangi indeks tab

  if (currentTab >= x.length) {
    document.getElementById("regForm").submit(); // Submit form jika sudah sampai tab terakhir
    return false;
  }

  showTab(currentTab); // Menampilkan tab baru
}

function validateForm() {
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");

  // Validasi hanya untuk input yang wajib diisi (required)
  for (i = 0; i < y.length; i++) {
    if (y[i].required && y[i].value == "") {  // Hanya validasi field yang required
      y[i].className += " invalid"; // Menandai input yang tidak valid
      valid = false;
    } else {
      y[i].className = y[i].className.replace(" invalid", ""); // Menghapus penandaan invalid jika input diisi
    }
  }

  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish"; // Menandai langkah selesai
  }

  return valid; // Mengembalikan status validasi
}

function fixStepIndicator(n) {
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  x[n].className += " active"; // Menambahkan kelas aktif pada indikator langkah saat ini
}
</script>



<script>
// Data untuk Kabupaten dan Kecamatan di Provinsi Lampung
const dataLampung = {
    "Bandar Lampung": ["Tanjung Karang", "Teluk Betung", "Rajabasa"],
    "Metro": ["Metro Pusat", "Metro Barat", "Metro Timur"],
    "Pringsewu": ["Pringsewu Selatan", "Pringsewu Utara"],
    "Lampung Selatan": ["Natar", "Jati Agung", "Tanjung Bintang"],
    "Pesawaran": ["Gedong Tataan", "Padang Cermin"]
};

const kabupatenSelect = document.getElementById("kabupaten");
const kecamatanSelect = document.getElementById("kecamatan");

document.getElementById("provinsi").addEventListener("change", function () {
    kabupatenSelect.innerHTML = '<option disabled selected>Pilih Kabupaten/Kota</option>';
    kecamatanSelect.innerHTML = '<option disabled selected>Pilih Kecamatan</option>';

    const provinsi = this.value;
    if (provinsi === "lampung") {
        Object.keys(dataLampung).forEach(function (kabupaten) {
            const option = document.createElement("option");
            option.value = kabupaten;
            option.textContent = kabupaten;
            kabupatenSelect.appendChild(option);
        });
    }
});

kabupatenSelect.addEventListener("change", function () {
    kecamatanSelect.innerHTML = '<option disabled selected>Pilih Kecamatan</option>';
    const kabupaten = this.value;

    if (dataLampung[kabupaten]) {
        dataLampung[kabupaten].forEach(function (kecamatan) {
            const option = document.createElement("option");
            option.value = kecamatan;
            option.textContent = kecamatan;
            kecamatanSelect.appendChild(option);
        });
    }
});
</script>

@endsection
