@extends('layout\user\app')
@section('content')

<section class="features-area ">

  <form action="#" method="POST" enctype="multipart/form-data" id="regForm">
    @csrf
    <div class=" d-block justify-content-center">
      <div class="form-area">
        <h1 class="h1-bold text-center" style="width:100%;">FORM PENGAJUAN KREDIT</h1>
        <div class="col-12" >
          <div class="card border shadow-sm mx-0">
            <div class="card-body">

            <h5 class="h5-semibold">Data Nasabah</h5>

              <div class="form-container">
                <label for="nama_lengkap">Nama Lengkap Sesuai KTP<span class="required">*</span></label>
                <div class="input-area">
                  <input id="nama_lengkap" type="text" style="border: 1px solid #A6A6A6; height:34px; display: block; width: 100%;" placeholder="Nama Lengkap" required>
                  <span class="invalid-icon" style="display: none;">&#x2716;</span>
                </div>
              </div>

              <div class="form-container2 d-flex justify-content-between">
                <div class="form-container" style="flex: 1;  width:50%;">

                  <div class="form-container">
                    <label for="tempat_lahir">Tempat Lahir<span class="required">*</span></label>
                    <div class="input-area">
                      <input id="tempat_lahir" type="text" style="border: 1px solid #A6A6A6; height:34px; display: block; width: 100%;" placeholder="Tempat Lahir" required>
                      <span class="invalid-icon" style="display: none;">&#x2716;</span>
                    </div>
                  </div>

                  <div class="form-container">
                    <label for="tanggal_lahir">Tanggal Lahir <span class="required">*</span></label>
                    <div class="input-area">
                      <input id="tanggal_lahir" type="date" style="border: 1px solid #A6A6A6; height:34px; display: block; width: 100%;" required>
                      <span class="invalid-icon" style="display: none;">&#x2716;</span>
                    </div>
                  </div>

                  <div class="form-container">
                    <label for="jenis_kelamin">Jenis Kelamin <span class="required">*</span></label>
                    <select id="jenis_kelamin" class="form-input" required>
                      <option value="" disabled selected>Pilih Jenis Kelamin</option>
                      <option value="laki-laki">Laki-Laki</option>
                      <option value="perempuan">Perempuan</option>
                    </select>
                  </div>
                </div>

                <div class="form-container " style="flex: 1;width:50%; ">
                  
                  <div class="form-container">
                    <label for="nik">NIK <span class="required">*</span></label>
                    <div class="input-area">
                      <input id="nik" type="number" style="border: 1px solid #A6A6A6; height:34px; display: block; width: 100%;" placeholder="NIK" required>
                      <span class="invalid-icon" style="display: none;">&#x2716;</span>
                    </div>
                  </div>

                  <div class="form-container">
                    <label for="no_telp">No. Telp <span class="required">*</span></label>
                    <div class="input-area">
                      <input id="no_telp" type="text" style="border: 1px solid #A6A6A6; height:34px; display: block; width: 100%;" placeholder="No. Telp" required>
                      <span class="invalid-icon" style="display: none;">&#x2716;</span>
                    </div>
                  </div>

                  <div class="form-container">
                    <label for="email">Email <span class="required">*</span></label>
                    <div class="input-area">
                      <input id="email" type="email" style="border: 1px solid #A6A6A6; height:34px; display: block; width: 100%;" placeholder="Email" required>
                      <span class="invalid-icon" style="display: none;">&#x2716;</span>
                    </div>
                  </div>

                </div>
              </div>

              <div class="form-container">
                <label for="alamat_rumah">Alamat Rumah <span class="required">*</span></label>
                <div class="input-area">
                  <input id="alamat_rumah" type="text" style="border: 1px solid #A6A6A6; height:34px; display: block; width: 100%;" placeholder="Alamat Rumah" required>
                  <span class="invalid-icon" style="display: none;">&#x2716;</span>
                </div>
              </div>

              <div class="form-container2 d-flex justify-content-between">
                <div class="form-container" style="flex: 1; width:50%;">
                  <div class="form-container">
                    <label for="provinsi">Provinsi <span class="required">*</span></label>
                    <select id="provinsi" class="form-input" required>
                      <option value="" disabled selected>Pilih Provinsi</option>
                      <option value="lampung">Lampung</option>
                      <option value="jakarta">Jakarta</option>
                    </select>
                  </div>

                  <div class="form-container">
                    <label for="kabupaten">Kabupaten/Kota <span class="required">*</span></label>
                    <select id="kabupaten" class="form-input" required>
                      <option value="" disabled selected>Pilih Kabupaten/Kota</option>
                      <option value="bandar_lampung">Bandar Lampung</option>
                      <option value="lampung_timur">Lampung Timur</option>
                    </select>
                  </div>
                </div>

                <div class="form-container" style="flex: 1;width:50%;">
                  <div class="form-container">
                    <label for="kecamatan">Kecamatan<span class="required">*</span></label>
                    <select id="kecamatan" class="form-input" required>
                      <option value="" disabled selected>Pilih Kecamatan</option>
                      <option value="natar">Natar</option>
                      <option value="rajabasa">Rajabasa</option>
                    </select>
                  </div>

                  <div class="form-container">
                    <label for="kode_pos">Kode Pos <span class="required">*</span></label>
                    <div class="input-area">
                      <input id="kode_pos" type="number" style="border: 1px solid #A6A6A6; height:34px; display: block; width: 100%;" placeholder="Kode Pos" required>
                      <span class="invalid-icon" style="display: none;">&#x2716;</span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-container">
                <label for="keterangan_kredit">Keterangan Pengajuan Kredit <span class="required">*</span></label>
                <div class="input-area">
                  <textarea id="keterangan_kredit" style="border: 1px solid #A6A6A6; height:100px; display: block; width: 100%;" placeholder="Tuliskan keterangan pengajuan kredit" required></textarea>
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
                <label for="nama_lengkap">Nama Perusahaan<span class="required">*</span></label>
                <div class="input-area">
                  <input id="nama_lengkap" type="text" style="border: 1px solid #A6A6A6; height:34px; display: block; width: 100%;" placeholder="Nama Lengkap" required>
                  <span class="invalid-icon" style="display: none;">&#x2716;</span>
                </div>
              </div>

              <div class="form-container">
                <label for="alamat_rumah">Alamat Perusahaan <span class="required">*</span></label>
                <div class="input-area">
                  <input id="alamat_rumah" type="text" style="border: 1px solid #A6A6A6; height:34px; display: block; width: 100%;" placeholder="Alamat Rumah" required>
                  <span class="invalid-icon" style="display: none;">&#x2716;</span>
                </div>
              </div>

              <div class="form-container2 d-flex justify-content-between">
                <div class="form-container" style="flex: 1; width:50%;">
                  <div class="form-container">
                    <label for="provinsi">Provinsi <span class="required">*</span></label>
                    <select id="provinsi" class="form-input" required>
                      <option value="" disabled selected>Pilih Provinsi</option>
                      <option value="lampung">Lampung</option>
                      <option value="jakarta">Jakarta</option>
                    </select>
                  </div>

                  <div class="form-container">
                    <label for="kabupaten">Kabupaten/Kota <span class="required">*</span></label>
                    <select id="kabupaten" class="form-input" required>
                      <option value="" disabled selected>Pilih Kabupaten/Kota</option>
                      <option value="bandar_lampung">Bandar Lampung</option>
                      <option value="lampung_timur">Lampung Timur</option>
                    </select>
                  </div>
                </div>

                <div class="form-container" style="flex: 1; width:50%;">
                  <div class="form-container">
                    <label for="kecamatan">Kecamatan<span class="required">*</span></label>
                    <select id="kecamatan" class="form-input" required>
                      <option value="" disabled selected>Pilih Kecamatan</option>
                      <option value="natar">Natar</option>
                      <option value="rajabasa">Rajabasa</option>
                    </select>
                  </div>

                  <div class="form-container">
                    <label for="kode_pos">Kode Pos <span class="required">*</span></label>
                    <div class="input-area">
                      <input id="kode_pos" type="number" style="border: 1px solid #A6A6A6; height:34px; display: block; width: 100%;" placeholder="Kode Pos" required>
                      <span class="invalid-icon" style="display: none;">&#x2716;</span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-container2 d-flex justify-content-between">
                <div class="form-container" style="flex: 1; width:50%;">
                  <div class="form-container">
                    <label for="status_perusahaan">Status Perusahaan <span class="required">*</span></label>
                    <select id="status_perusahaan" class="form-input" required>
                      <option value="" disabled selected>Pilih Status Perusahaan</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                    </select>
                  </div>

                  <div class="form-container">
                    <label for="bidang_usaha">Bidang Usaha <span class="required">*</span></label>
                    <select id="bidang_usaha" class="form-input" required>
                      <option value="" disabled selected>Pilih Bidang Usaha</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                    </select>
                  </div>
                </div>

                <div class="form-container" style="flex: 1; width:50%;">
                  <div class="form-container">
                    <label for="jangka_waktu">Tenor <span class="required">*</span></label>
                    <select id="jangka_waktu" class="form-input" required>
                      <option value="" disabled selected>Pilih Jangka Waktu</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                    </select>
                  </div>

                  <div class="form-container">
                    <label for="jaminan">Jaminan <span class="required">*</span></label>
                    <div class="input-area">
                      <input id="jaminan" type="text" style="border: 1px solid #A6A6A6; height:34px; display: block; width: 100%;" placeholder="Masukkan Jaminan" required>
                      <span class="invalid-icon" style="display: none;">&#x2716;</span>
                    </div>
                  </div>

                </div>
                
              </div>

            </div>
          </div>
        </div>
        <div class="btn-area col-12 text-center" >
          <button type="submit" class="btn-custom" id="submitButton">Kirim</button>
        </div>
      </div>
    </div>
  </form>
</section>
<script>
  document.getElementById("submitButton").addEventListener("click", function () {
    const form = document.getElementById("regForm");
    const inputs = form.querySelectorAll("input[required],select[required],textarea[required]"); // Target semua input dan textarea
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
