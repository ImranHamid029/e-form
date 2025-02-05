<!-- Ikon Hamburger -->
<div class="hamburger" id="hamburger">
    <img class="fas fa-bars"src="/img/icon/ic10.svg" alt="">
</div>


<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="profile-area">
        <div class="profile">
            <img src="/img/bg-img/16.jpg" alt="Logo">
        </div>
        <div class="name-area">
            <a href="/profile" class="body-sm-bold">Name Admin</a><br>
            <a class="caption-regular">Role Admin</a>
        </div>
    </div>
    
    
    <ul>            
        <li >
            <img src="/img/icon/ic8.svg" class="icon">
            <a href="/cs    " class="body-sm-bold">Dashbaord</a>
        </li>
        

        <li >
            <img src="/img/icon/ic5.svg" class="icon">
            <a href="/history-kredit" class="body-sm-bold">History</a>
        </li>
        


    </ul>
    <!-- Tombol Logout -->
    <div class="logout">
        <ul>
            <li>
                <img src="/img/icon/ic7.svg">
                <button type="button" class="body-sm-bold logout-btn" onclick="showLogoutPopup()" style="background: none; border: none; color: inherit; cursor: pointer;">
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
