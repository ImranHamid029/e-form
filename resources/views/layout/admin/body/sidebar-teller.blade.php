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
                <a class="caption-regular" style="font-size:12px;">Role Admin</a>
            </div>
        </div>
        
        
        <ul>            
            <li >
                <img src="/img/icon/ic8.svg" class="icon">
                <a href="/teller" class="body-sm-bold">Dashbaord</a>
            </li>
            <li >
                <img src="/img/icon/ic4.svg" class="icon">
                <a href="/data-pengajuan-kredit" class="body-sm-bold">Pengajuan Kredit</a>
            </li>
            <li >
                <img src="/img/icon/ic6.svg" class="icon">
                <a href="/data-setor-tunai" class="body-sm-bold">Setor Tunai</a>
            </li>
            <li >
                <img src="/img/icon/ic2.svg" class="icon">
                <a href="/data-tarik-tunai" class="body-sm-bold">Tarik Tunai</a>
            </li>
            <li >
                <img src="/img/icon/ic5.svg" class="icon">
                <a href="/history-teller" class="body-sm-bold">History</a>
            </li>
            


        </ul>
        <div class="logout">
            <ul>
                <li><img src="/img/icon/ic7.svg" ><a href="#keluar" class="body-sm-bold">Keluar</a></li>
            </ul>
        </div>
    </div>
<!-- Modal -->
<div id="profileModal" class="modal">

       <div id="profileContent">
           <!-- Konten dari /profile akan dimuat di sini -->
       </div>
       
</div>

<!-- JavaScript -->
<script>
document.addEventListener("DOMContentLoaded", () => {
    const modal = document.getElementById("profileModal");

    // Klik link untuk membuka modal
    document.querySelector("a[href='/profile']").addEventListener("click", function (e) {
        e.preventDefault();
        fetch('/profile') // Ambil konten dari route
            .then(response => response.text())
            .then(data => {
                document.getElementById("profileContent").innerHTML = data;
                modal.style.display = "block"; // Tampilkan modal

                // Pasang ulang event listener untuk tombol close
                const close = document.querySelector(".close");
                close.addEventListener("click", () => {
                    modal.style.display = "none";
                });
            })
            .catch(error => console.error('Error loading profile:', error));
    });

    // Tutup modal jika klik di luar 
    window.addEventListener("click", (e) => {
        if (e.target === modal) {
            modal.style.display = "none";
        }
    });
});

</script>
    <script>
        
        const hamburger = document.getElementById('hamburger');
        const sidebar = document.getElementById('sidebar');

        
        hamburger.addEventListener('click', () => {
            sidebar.classList.toggle('visible');
            hamburger.classList.toggle('in-sidebar');
        });
    </script>
