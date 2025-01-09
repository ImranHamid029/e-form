<!DOCTYPE html>
<html lang="en">

<head>
    <title>e-Form Bank Lampung</title>
    <link rel="icon" href="img/logo/logo1.png" type="image/png">


    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
</head>

<body>

    <!-- ##### Header Area Start ##### -->
    <header id="fixedheader" class="header-area">
        <!-- Navbar Area -->
        <div class="credit-main-menu" id="sticker">
            <div class="classy-nav-container breakpoint-off">
                <div class="top-header-area">
                    <div class="container-header">
                        <div class="row h-100 align-items-center">
                            <div class="col-12 d-flex justify-content-between">
                                <!-- Logo Area -->
                                <div class="logo-e-form ">
                                    <a href="/"><img src="img/logo.png" width="232px" height="113" alt=""></a>
                                </div>

                                <!-- Menu -->
                                <div class="classy-menu d-flex justify-content-between">

                                    <!-- Nav Start -->
                                    <div class="classynav">
                                        <ul>
                                            <li><a href="/" class="body-lg-semibold">Beranda</a></li>
                                            <li><a href="#" class="menu-dropdown body-lg-semibold">Menu Layanan <i class="fa fa-chevron-down" style="padding:0 24px"></i></a>
                                                <ul class="dropdown">
                                                    <li><a href="/kredit" data-full-text="Kredit Aneka Usaha" class="body-lg-semibold">Kredit Aneka Usaha</a></li>
                                                    <li><a href="/pengaduan" data-full-text="Pengaduan Online" class="body-lg-semibold">Pengaduan Online</a></li>
                                                    <li><a href="/cek-status" class="body-lg-semibold">Cek Status</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#" class="menu-dropdown body-lg-semibold">Menu e-Formulir<i class="fa fa-chevron-down"style="padding-left:24px"></i></a>
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
                                    <i class="fas fa-bars"></i>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <script>
    // Pilih semua elemen dengan kelas "menu-dropdown"
    const menuToggles = document.querySelectorAll('.menu-dropdown');
    menuToggles.forEach(toggle => {
        toggle.addEventListener('click', function (event) {
            event.preventDefault(); // Mencegah halaman refresh
            const dropdown = this.nextElementSibling;
            if (dropdown.style.display === 'block') {
                dropdown.style.display = 'none';
            } else {
                document.querySelectorAll('.dropdown').forEach(function (drop) {
                    drop.style.display = 'none';
                });
                dropdown.style.display = 'block';
            }
        });
    });

     // Toggle Hamburger Menu
  const hamburger = document.querySelector('.hamburger-menu');
  const navMenu = document.querySelector('.classynav');

  hamburger.addEventListener('click', () => {
    navMenu.classList.toggle('active');
  });
</script>

</body>
</html>
