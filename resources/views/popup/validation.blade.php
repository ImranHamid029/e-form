<link rel="stylesheet" href="{{ asset('style.css') }}">

<!-- Popup Konfirmasi -->
<div id="logoutPopup" class="popup-area-confirm" style="z-index: 99999;">
    <div class="popup-container-confirm">
        <p class="body-lg-semibold text-center">Apakah Anda yakin data sudah benar?</p>
        <div class="btn-area d-flex align-items-center mt-3">
            <form action="{{ $storeRoute }}" method="POST" id="confirmForm">
                @csrf
                @foreach ($formData ?? [] as $key => $value)
                    <input type="hidden" name="{{ $key }}" value="{{ $value }}">
                @endforeach
                <button type="submit" class="btn-confirm" id="confirmButton">Ya</button>
            </form>
            <button type="button" class="btn-rejected" onclick="closePopup()">Tidak</button>
        </div>
    </div>
</div>

