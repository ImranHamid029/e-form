@include('layout/admin/head/head')

<div id="editPasswordModal" class="modal" style="display: none;">
    <div class="features-area">
        <div class="profile-section">
            <form action="{{ route('update.password') }}" method="POST" enctype="multipart/form-data" id="regForm">
                @csrf
                <div class="form-group2 d-block justify-content-center">
                    <div class="form-area" style="width:600px;">
                        <div class="col-12 pl-4">
                            <span class="close" id="closeEditPasswordModal" style="text-align: end; cursor: pointer;">&times;</span>
                            <h4 class="h4-bold" style="text-align:center">Ubah Kata Sandi</h4>
                            <div class="card mt-4 border mb-4 shadow-sm mx-0" style="padding:24px;">
                                <div class="card-body">

                                    <!-- Form Inputs -->
                                    <div class="form-container" style="position: relative;">
                                        <label for="oldPassword">Password Lama <span class="required">*</span></label>
                                        <div class="input-area">
                                            <input type="password" id="oldPassword" name="oldPassword" placeholder="Masukkan Password Lama" required>
                                        </div>
                                    </div>

                                    <div class="form-container" style="position: relative;">
                                        <label for="newPassword">Password Baru <span class="required">*</span></label>
                                        <div class="input-area">
                                            <input type="password" id="newPassword" name="newPassword" placeholder="Masukkan Password Baru" required>
                                        </div>
                                    </div>

                                    <div class="form-container" style="position: relative;">
                                        <label for="confirmPassword">Konfirmasi Password Baru <span class="required">*</span></label>
                                        <div class="input-area">
                                            <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Konfirmasi Password Baru" required>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- Button Area -->
                            <div class="btn-area d-flex justify-between align-items-center mt-3">
                                <button type="button" class="btn-custom" onclick="document.getElementById('editPasswordModal').style.display='none'">Kembali</button>
                                <button type="submit" class="btn-custom">Kirim</button>
                            </div>

                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
