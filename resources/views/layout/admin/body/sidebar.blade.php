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
            <img src="/img/bg-img/16.jpg" alt="Logo">
        </div>
        <div class="name-area">
        <a href="#" class="body-sm-bold" onclick="showProfileModal(event)">{{ $user->username }}</a><br>
        <a class="caption-regular">{{ ucfirst($user->role) }}</a>
        </div>
    </div>

    <ul>
        <li>
            <img src="/img/icon/ic8.svg" class="icon">
            <a href="/admin" class="body-sm-bold">Dashboard</a>
        </li>
        <li>
            <img src="/img/icon/ic4.svg" class="icon">
            <a href="/cs" class="body-sm-bold">Pengajuan Kredit</a>
        </li>
        <li>
            <img src="/img/icon/ic3.svg" class="icon">
            <a href="/helpdesk" class="body-sm-bold">Pengaduan Online</a>
        </li>
        <li>
            <img src="/img/icon/ic6.svg" class="icon">
            <a href="/teller/deposit" class="body-sm-bold">Setor Tunai</a>
        </li>
        <li>
            <img src="/img/icon/ic2.svg" class="icon">
            <a href="/teller/withdraw" class="body-sm-bold">Tarik Tunai</a>
        </li>
        <li>
            <img src="/img/icon/ic5.svg" class="icon">
            <a href="/history" class="body-sm-bold">History</a>
        </li>
        <li>
            <img src="/img/icon/ic1.svg" class="icon">
            <a href="/manage-account" class="body-sm-bold">Manage Account</a>
        </li>
    </ul>

    <!-- Tombol Logout -->
    <div class="logout">
        <ul>
            <li>
                <img src="/img/icon/ic7.svg">
                <button type="button" class="body-sm-bold logout-btn" onclick="showPopup()" style="background: none; border: none; color: inherit; cursor: pointer;">
                    Keluar
                </button>
            </li>
        </ul>
    </div>
</div>

<!-- Include Popup Logout -->
@include('accountofficer.logout_validation')

<!-- Form Logout -->
<form id="logoutForm" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>

<script>
    const hamburger = document.getElementById('hamburger');
    const sidebar = document.getElementById('sidebar');
    const logoutButton = document.querySelector('.logout-btn');
    const popup = document.getElementById('logoutPopup');

    hamburger.addEventListener('click', () => {
        sidebar.classList.toggle('visible');
        hamburger.classList.toggle('in-sidebar');
    });

    logoutButton.addEventListener('click', () => {
        popup.style.display = 'flex';
    });

    function hidePopup() {
        popup.style.display = 'none';
    }

    function confirmLogout() {
        document.getElementById('logoutForm').submit();
    }
</script>
