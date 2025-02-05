<link rel="stylesheet" href="{{ asset('style.css') }}">

<!-- Modal Profile -->
<div id="profileModal" class="modal" style="display: none;">
    <div class="features-area">
        <div class="profile-section">
            <div class="profile-edit-container">
                <span class="close" id="closeProfileModal" style="text-align: end; cursor: pointer;">&times;</span>
                <h4 class="h4-bold" style="text-align: start;">Profil</h4>
                <div class="profile-edit-area">
                    <div class="image-profile-area">
                        <!-- Gambar Profil -->
                        @php
                            $user = Auth::user();
                            $profileImage = $user->profileimage ? asset('storage/' . $user->profileimage) : '/img/default-profile.png';
                        @endphp
                        <img class="profile-image" id="profileImage" src="{{ $profileImage }}" alt="Foto Profil"><br>

                        <!-- Tautan untuk Edit Foto -->
                        <a class="caption-regular" href="javascript:void(0);" id="editPhotoLink">Edit Foto Profil</a>
                        
                        <!-- Input File (Tersembunyi) -->
                        <form id="profileImageForm" action="{{ route('profile.update.photo') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="file" id="profileImageInput" name="profileImage" accept="image/*" style="display: none;">
                            <button type="submit" id="uploadButton" style="display: none;">Upload</button>
                        </form>
                    </div>

                    <div class="profile-info-area">
                        <div class="profil-info">
                            @php
                                $user = Auth::user(); 
                                $officeCode = session('officeCode', '370'); // Default ke Kantor Pusat
                                $officeNames = [
                                    '370' => 'Kantor Pusat',
                                    '401' => 'KC Jakarta',
                                    '405' => 'KCP Teuku Umar',
                                    '383' => 'KC Kalianda',
                                    '381' => 'KC Metro',
                                    '397' => 'KCP Antasari',
                                    '396' => 'KCP Panaragan Jaya',
                                    '400' => 'KCP Gading Rejo',
                                    '407' => 'KCP Gedong Tataan',
                                    '410' => 'KCP Hanura',
                                    '403' => 'KCP Natar',
                                    '416' => 'KCP Pekalongan',
                                    '402' => 'KCP Sidomulyo',
                                    '406' => 'KCP Way Jepara',
                                    '391' => 'KCP Kartini',
                                    '390' => 'KCP Panjang',
                                ];
                                $officeName = $officeNames[$officeCode] ?? 'Kantor Tidak Dikenal';
                            @endphp

                            <p class="body-md-regular">Kode Kantor: {{ $officeCode }}</p>
                            <p class="body-md-regular">Kantor Operasional: {{ $officeName }}</p>
                            <p class="body-md-regular">Username: {{ $user->username }}</p>
                            <p class="body-md-regular">Role: {{ ucfirst($user->role) }}</p>
                        </div>
                        <div class="reset-password">
                            <p class="caption-regular">
                                <a href="javascript:void(0);" id="changePassword">Ubah kata sandi?</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Include Edit Password Modal -->
@include('accountofficer.profile.edit_password')

<script>
document.addEventListener("DOMContentLoaded", () => {
    const profileModal = document.getElementById("profileModal");
    const closeProfile = document.getElementById("closeProfileModal");
    const changePasswordLink = document.getElementById("changePassword");
    const editPasswordModal = document.getElementById("editPasswordModal");
    const closeEditPassword = document.getElementById("closeEditPasswordModal");
    const editPhotoLink = document.getElementById("editPhotoLink");
    const profileImageInput = document.getElementById("profileImageInput");
    const profileImageForm = document.getElementById("profileImageForm");
    const uploadButton = document.getElementById("uploadButton");

    // Tampilkan modal edit password
    changePasswordLink.addEventListener("click", () => {
        editPasswordModal.style.display = "block";
    });

    // Tutup modal edit password
    closeEditPassword.addEventListener("click", () => {
        editPasswordModal.style.display = "none";
    });

    // Klik di luar modal untuk menutup
    window.addEventListener("click", (event) => {
        if (event.target === editPasswordModal) {
            editPasswordModal.style.display = "none";
        }
    });

    // Klik "Edit Foto Profil" untuk membuka file picker
    editPhotoLink.addEventListener("click", () => {
        profileImageInput.click();
    });

    // Ketika pengguna memilih file, upload secara otomatis menggunakan AJAX
    profileImageInput.addEventListener("change", function() {
        let formData = new FormData();
        formData.append("profileImage", this.files[0]);

        fetch("{{ route('profile.update.photo') }}", {
            method: "POST",
            headers: {
                "X-CSRF-TOKEN": "{{ csrf_token() }}"
            },
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                profileImage.src = data.profileImage; // Perbarui gambar profil
                alert("Foto profil berhasil diperbarui!");
            } else {
                alert("Gagal mengunggah foto.");
            }
        })
        .catch(error => console.error("Error:", error));
    });
});
</script>
