<!-- Ikon Hamburger -->
<div class="hamburger" id="hamburger">
    <img class="fas fa-bars"src="/img/icon/ic10.svg" alt="">
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
        <li >
            <img src="/img/icon/ic8.svg" class="icon">
            <a href="/teller" class="body-sm-bold">Dashbaord</a>
        </li>
        <li >
            <img src="/img/icon/ic6.svg" class="icon">
            <a href="/teller/deposit" class="body-sm-bold">Setor Tunai</a>
        </li>
        <li >
            <img src="/img/icon/ic2.svg" class="icon">
            <a href="/teller/withdraw" class="body-sm-bold">Tarik Tunai</a>
        </li>
        <li >
            <img src="/img/icon/ic5.svg" class="icon">
            <a href="/teller/history" class="body-sm-bold">History</a>
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
        document.getElementById("logoutPopup").style.display = "flex";
    }

    function hidePopup() {
        document.getElementById("logoutPopup").style.display = "none";
    }

    document.addEventListener("DOMContentLoaded", () => {
        document.querySelector(".btn-confirm").addEventListener("click", () => {
            document.getElementById("logoutForm").submit();
        });
    });

    // Tutup popup logout jika klik di luar area popup
    window.addEventListener("click", (event) => {
        const popup = document.getElementById("logoutPopup");
        if (event.target === popup) {
            popup.style.display = "none";
        }
    });
</script>
