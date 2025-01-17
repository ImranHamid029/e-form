<link rel="stylesheet" href="{{ asset('style.css') }}">

<!-- Popup Konfirmasi -->
<div id="confirmationPopup" class="popup-area-confirm" style=" z-index:99999;">
    <div class="popup-container-confirm">
        <p class="body-lg-semibold text-center">Apakah anda yakin ingin <span style="color:#EE202E">mengubah Password?</span></p>
        <div class="btn-area d-flex justify-between align-items-center mt-3">
            <button type="button" class="btn-confirm">Ya</button>
            <button type="button" class="btn-rejected" onclick="hidePopup()">Tidak</button>
        </div>
    </div>
</div>
