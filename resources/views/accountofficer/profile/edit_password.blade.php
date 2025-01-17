@include('layout/admin/head/head')

<div class="features-area">
    <div class="profile-section">
        <form action="#" method="POST" enctype="multipart/form-data" id="regForm">
            @csrf
            <div class="form-group2 d-block justify-content-center">
                <div class="form-area" style="width:600px;">
                    <div class="col-12 pl-4">
                        <h4 class="h4-bold" style="text-align:center">Ubah Kata Sandi</h4>
                        <div class="card mt-4 border mb-4 shadow-sm mx-0" style="padding:24px;">
                            <div class="card-body">

                                <!-- Form Inputs -->
                                <div class="form-container" style="position: relative;">
                                    <label for="old-password">Password Lama <span class="required">*</span></label>
                                    <div class="input-area">
                                        <input type="text" id="old-password" name="old-password" placeholder="Masukkan Password Lama" required>
                                        <span class="invalid-icon" style="display: none;">&#x2716;</span>
                                    </div>
                                </div>

                                <div class="form-container" style="position: relative;">
                                    <label for="new-password">Password Baru <span class="required">*</span></label>
                                    <div class="input-area">
                                        <input type="text" id="new-password" name="new-password" placeholder="Masukkan Password Baru" required>
                                        <span class="invalid-icon" style="display: none;">&#x2716;</span>
                                    </div>
                                </div>

                                <div class="form-container" style="position: relative;">
                                    <label for="confirm-password">Konfirmasi Password Baru <span class="required">*</span></label>
                                    <div class="input-area">
                                        <input type="text" id="confirm-password" name="confirm-password" placeholder="Konfirmasi Password Baru" required>
                                        <span class="invalid-icon" style="display: none;">&#x2716;</span>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Button Area -->
                        <div class="btn-area d-flex justify-between align-items-center mt-3">
                            <a href="javascript:void(0);" class="btn-custom" onclick="goBack()">Kembali</a>
                            <button type="button" class="btn-custom" id="validateButton">Kirim</button>
                        </div>

                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Popup Konfirmasi -->
<div id="confirmationPopup" class="popup-area" style="display: none; z-index:99999;">
    <div class="popup-container">
        <p class="body-lg-semibold text-center">Apakah anda yakin ingin <span style="color:#EE202E">mengubah Password?</span></p>
        <div class="btn-area d-flex justify-between align-items-center mt-3">
            <button type="button" class="btn-confirm">Ya</button>
            <button type="button" class="btn-rejected" onclick="hidePopup()">Tidak</button>
        </div>
    </div>
</div>

<script>
    // Validasi Form
    document.getElementById("validateButton").addEventListener("click", function () {
        const form = document.getElementById("regForm");
        const inputs = form.querySelectorAll("input[required]");
        let isValid = true;

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

        if (isValid) {
            showPopup(); // Tampilkan popup jika valid
        }
    });

    // Tampilkan Popup
    function showPopup() {
        const popup = document.getElementById("confirmationPopup");
        popup.style.display = "flex";
    }

    // Sembunyikan Popup
    function hidePopup() {
        const popup = document.getElementById("confirmationPopup");
        popup.style.display = "none";
    }

    // Kirim Form
    document.querySelector(".btn-confirm").addEventListener("click", function () {
        const form = document.getElementById("regForm");
        form.submit(); // Kirim form setelah konfirmasi
    });

    // Kembali ke halaman sebelumnya
    function goBack() {
        window.history.back();
    }
</script>
