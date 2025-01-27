

    <!-- ##### Header Area Start ##### -->
    <header id="fixedheader" class="header-area" >
        <!-- Navbar Area -->
        <div class="credit-main-menu" id="sticker">
            <div class="classy-nav-container breakpoint-off">
                <div class="top-header-area">
                    <div class="container-header">
                        <div class="row ">
                            <div class="col-12 d-flex justify-content-between">
                                <!-- Logo Area -->
                                <div class="logo-e-form">
                                    <img src="/img/logo.png" alt="">
                                </div>

                                            <!-- Menu -->
                                            <div class="classy-menu d-flex justify-content-between">

                                                <!-- Nav Start -->
                                                <div class="classynav">
                                                    <ul>
                                                        <li><a href="/" class="body-lg-semibold">Beranda</a></li>
                                                        <li>
                                                            <a href="#" class="menu-dropdown body-lg-semibold">
                                                                Menu Layanan 
                                                                <i class="fa fa-chevron-down toggle-icon" style="padding:0 24px"></i>
                                                            </a>
                                                            <ul class="dropdown">
                                                                <li><a href="/kredit" data-full-text="Kredit Aneka Usaha" class="body-lg-semibold">Kredit Aneka Usaha</a></li>
                                                                <li><a href="/pengaduan" data-full-text="Pengaduan Online" class="body-lg-semibold">Pengaduan Online</a></li>
                                                                <li><a href="/chack-status" class="body-lg-semibold">Cek Status</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="menu-dropdown body-lg-semibold">
                                                                Menu e-Formulir
                                                                <i class="fa fa-chevron-down toggle-icon"style="padding-left:24px"></i>
                                                            </a>
                                                            <ul class="dropdown">
                                                                <li><a href="/setortunai" data-full-text="Setor Tunai" class="body-lg-semibold">Setor Tunai</a></li>
                                                                <li><a href="/tariktunai" data-full-text="Tarik Tunai" class="body-lg-semibold">Tarik Tunai</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="/tentang-kami" class="body-lg-semibold">Tentang Kami</a></li>
                                                    </ul>
                                                </div>
                                                <!-- Nav End -->
                                            </div>

                                <!-- Hamburger Menu -->
                                <div class="hamburger-menu">
                                    <i><img src="/img/icon/ic10.svg" alt=""></i>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <script>
    document.querySelectorAll('.menu-dropdown').forEach(menu => {
        menu.addEventListener('click', function (e) {
            e.preventDefault(); // Mencegah tindakan default

            // Tutup semua dropdown lainnya
            document.querySelectorAll('.menu-dropdown').forEach(otherMenu => {
                if (otherMenu !== this) {
                    const otherIcon = otherMenu.querySelector('.toggle-icon');
                    const otherDropdown = otherMenu.nextElementSibling;

                    // Pastikan dropdown lain tertutup
                    if (otherIcon.classList.contains('fa-chevron-up')) {
                        otherIcon.classList.remove('fa-chevron-up');
                        otherIcon.classList.add('fa-chevron-down');
                        otherDropdown.style.display = 'none'; // Sembunyikan dropdown
                    }
                }
            });

            // Toggle dropdown saat ini
            const icon = this.querySelector('.toggle-icon');
            const dropdown = this.nextElementSibling; // Ambil elemen dropdown berikutnya
            if (icon.classList.contains('fa-chevron-up')) {
                icon.classList.remove('fa-chevron-up');
                icon.classList.add('fa-chevron-down');
                dropdown.style.display = 'block'; // Tampilkan dropdown
            } else {
                icon.classList.remove('fa-chevron-down');
                icon.classList.add('fa-chevron-up');
                dropdown.style.display = 'none'; // Sembunyikan dropdown
            }
        });
    });
</script>



