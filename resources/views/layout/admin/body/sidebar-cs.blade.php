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
                <a class="body-sm-bold">Name Admin</a><br>
                <a class="caption-regular">Role Admin</a>
            </div>
        </div>
        
        
        <ul>            
            <li >
                <img src="/img/icon/ic8.svg" class="icon">
                <a href="/data-pengajuan-kredit" class="body-sm-bold">Dashbaord</a>
            </li>
           

            <li >
                <img src="/img/icon/ic5.svg" class="icon">
                <a href="/history-kredit" class="body-sm-bold">History</a>
            </li>
            


        </ul>
        <div class="logout">
            <ul>
                <li><img src="/img/icon/ic7.svg" ><a href="#keluar" class="body-sm-bold">Keluar</a></li>
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
