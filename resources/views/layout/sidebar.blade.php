
<!DOCTYPE html>
<html lang="en">
<head>
    <title>e-Form Bank Lampung</title>
    <link rel="icon" href="img/logo/logo1.png" type="image/png">
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Ikon Hamburger -->
    <div class="hamburger" id="hamburger">
        <i class="fas fa-bars"></i>
    </div>

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="logo">
            <img src="img/logo.png" alt="Logo">
        </div>
        <ul>
            <li><i class="fas fa-file-alt"></i><a href="#pengajuan-kredit">Pengajuan Kredit</a></li>
            <li><i class="fas fa-comments"></i><a href="#pengaduan-online">Pengaduan Online</a></li>
            <li><i class="fas fa-wallet"></i><a href="#setor-tunai">Setor Tunai</a></li>
            <li><i class="fas fa-money-bill-wave"></i><a href="#tarik-tunai">Tarik Tunai</a></li>
        </ul>
        <div class="logout">
            <ul>
                <li><i class="fas fa-user"></i><a href="#keluar">Keluar</a></li>
            </ul>
        </div>
    </div>

    <script>
        
        const hamburger = document.getElementById('hamburger');
        const sidebar = document.getElementById('sidebar');

        
        hamburger.addEventListener('click', () => {
            sidebar.classList.toggle('visible');
            hamburger.classList.toggle('in-sidebar');
        });
    </script>
</body>
</html>
