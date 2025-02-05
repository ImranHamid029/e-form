<link rel="stylesheet" href="{{ asset('style.css') }}">

<!-- Popup Konfirmasi Logout -->
<div id="logoutPopup" class="popup-area-confirm" style="display: none; z-index:99999;">
    <div class="popup-container-confirm">
        <p class="body-lg-semibold text-center">Anda yakin ingin keluar?</p>
        <div class="btn-area d-flex align-items-center mt-3">
            <button type="button" id="confirmLogoutBtn" class="btn-confirm">Ya</button>
            <button type="button" class="btn-rejected" onclick="hidePopup()">Tidak</button>
        </div>
    </div>
</div>

<script>
    function showPopup() {
        document.getElementById('logoutPopup').style.display = 'flex';
    }

    function hidePopup() {
        document.getElementById('logoutPopup').style.display = 'none';
    }

    document.getElementById('confirmLogoutBtn').addEventListener('click', function() {
        document.getElementById('logoutForm').submit();
    });
</script>
