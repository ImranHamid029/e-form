<!-- Ikon Hamburger -->
<div class="hamburger" id="hamburger">
    <img class="fas fa-bars" src="/img/icon/ic10.svg" alt="">
</div>

<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="profile-area">
        <div class="profile">
            @php
                $user = Auth::user();
                $profileImage = $user->profileImage ? asset($user->profileImage) : asset('/img/default-profile.png');
            @endphp
            <img id="sidebarProfileImage" src="{{ $profileImage }}" alt="Foto Profil">
        </div>
        <div class="name-area">
            <a href="#" class="body-sm-bold" onclick="showProfileModal(event)">{{ $user->username }}</a><br>
            <a class="caption-regular">{{ ucfirst($user->role) }}</a>
        </div>
    </div>

    <ul>
        <li>
            <img src="/img/icon/ic8.svg" class="icon">
            <a href="/helpdesk" class="body-sm-bold">Dashboard</a>
        </li>
        <li>
            <img src="/img/icon/ic5.svg" class="icon">
            <a href="/helpdesk/history" class="body-sm-bold">History</a>
        </li>
    </ul>

    <!-- Tombol Logout -->
    <div class="logout">
        <ul>
            <li>
                <img src="/img/icon/ic7.svg" class="icon">
                <button type="button" class="body-sm-bold logout-btn" onclick="showLogoutPopup()" style="background: none; border: none; color: inherit; cursor: pointer; margin-left:24px;">
                    Keluar
                </button>
            </li>
        </ul>
    </div>
</div>

<!-- Include Popup Logout -->
@include('accountofficer.logout_validation')

<!-- Include Profile Modal -->
@include('accountofficer.profile.profile')

<!-- Form Logout -->
<form id="logoutForm" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>

<!-- Script Sidebar -->
<script>
    const hamburger = document.getElementById('hamburger');
    const sidebar = document.getElementById('sidebar');

    hamburger.addEventListener('click', () => {
        sidebar.classList.toggle('visible');
        hamburger.classList.toggle('in-sidebar');
    });
</script>

<!-- Script Modal Profile -->
<script>
    function showProfileModal(event) {
        event.preventDefault();
        document.getElementById("profileModal").style.display = "block";
    }

    // Tutup modal jika klik di luar area modal
    window.addEventListener("click", (event) => {
        const modal = document.getElementById("profileModal");
        if (event.target === modal) {
            modal.style.display = "none";
        }
    });

    // Tambahkan event listener untuk tombol close
    document.addEventListener("DOMContentLoaded", () => {
        const closeBtn = document.querySelector("#profileModal .close");
        if (closeBtn) {
            closeBtn.addEventListener("click", () => {
                document.getElementById("profileModal").style.display = "none";
            });
        }
    });
</script>

<!-- Script Modal Logout -->
<script>
    function showLogoutPopup() {
        const popup = document.getElementById("logoutPopup");
        popup.style.display = "flex";
        document.body.classList.add("no-scroll"); // Nonaktifkan scroll
    }

    function hidePopup() {
        const popup = document.getElementById("logoutPopup");
        popup.style.display = "none";
        document.body.classList.remove("no-scroll"); 
    }

    document.addEventListener("DOMContentLoaded", () => {
        const confirmBtn = document.querySelector(".btn-confirm");
        if (confirmBtn) {
            confirmBtn.addEventListener("click", () => {
                document.getElementById("logoutForm").submit();
            });
        }
    });

    document.addEventListener("click", (event) => {
        const popup = document.getElementById("logoutPopup");
        if (event.target === popup) {
            hidePopup();
        }
    });
</script>

<script>
        document.addEventListener("DOMContentLoaded", () => {
        const profileImageInput = document.getElementById("profileImageInput");
        const profileImage = document.getElementById("profileImage");
        const sidebarProfileImage = document.getElementById("sidebarProfileImage");

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
                    profileImage.src = data.profileImage; // Perbarui di modal
                    sidebarProfileImage.src = data.profileImage; // Perbarui di sidebar
                } else {
                    alert("Gagal mengunggah foto.");
                }
            })
            .catch(error => console.error("Error:", error));
        });
    });
</script>
