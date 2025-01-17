<script>
    
    const menuToggles = document.querySelectorAll('.menu-dropdown');
    menuToggles.forEach(toggle => {
        toggle.addEventListener('click', function (event) {
            event.preventDefault(); 
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