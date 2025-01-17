<link rel="stylesheet" href="{{ asset('style.css') }}">

<div class="features-area">
    <div class="profile-section">
        <div class="profile-edit-container">
            <span class="close" style="text-align: end; cursor: pointer;">&times;</span>
            <h4 class="h4-bold" style="text-align: start;">Profile</h4>
            <div class="profile-edit-area">

                <div class="image-profile-area">
                    <!-- Gambar Profil -->
                    <img class="profile-image" id="profileImage" src="/img/bg-img/16.jpg" alt="Logo"><br>
                    <!-- Tautan untuk Edit Foto -->
                    <a class="caption-regular" href="javascript:void(0);" id="editPhotoLink">Edit Foto Profil</a>
                    <!-- Input File (Tersembunyi) -->
                    <input type="file" id="profileImageInput" accept="img/*" style="display: none;">
                </div>

                <div class="profile-info-area">
                    <div class="profil-info">
                        <p class="body-md-regular">Kode Kantor: KP</p>
                        <p class="body-md-regular">Kantor Operasional: Kantor Pusat</p>
                        <p class="body-md-regular">Username: Rizqi Ahmad Ghozali</p>
                        <p class="body-md-regular">Role: Teller</p>
                    </div>
                    <div class="reset-password">
                        <p class="caption-regular"><a href="/edit-password">Ubah kata sandi?</a></p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", () => {
    const close = document.querySelector(".close");
    const editPhotoLink = document.getElementById("editPhotoLink");
    const profileImageInput = document.getElementById("profileImageInput");
    const profileImage = document.getElementById("profileImage");

    // Klik tombol close (X)
    if (close) {
        close.addEventListener("click", () => {
            alert("Close button clicked"); 
        });
    }

    // Klik "Edit Foto Profil" untuk memicu file picker
    editPhotoLink.addEventListener("click", () => {
        profileImageInput.click(); // Trigger input file
    });

    // Event listener untuk mengganti gambar
    profileImageInput.addEventListener("change", function () {
        const file = this.files[0];

        if (file) {
            const reader = new FileReader();

            // Setelah file dibaca, ubah src gambar
            reader.onload = function (e) {
                profileImage.src = e.target.result; // Update image preview
            };

            reader.readAsDataURL(file); // Membaca file sebagai URL
        }
    });
});
</script>
