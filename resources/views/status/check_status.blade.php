@extends('layout.user.app')
@section('content')

<section class="features-area" id="features-area">
    <!-- STEP 1: INPUT NOMOR ANTRIAN/RESI -->
    <div class="container-status" id="step-1">
        <h4 class="h4-semibold">Masukkan Nomor Queue / Resi</h4>
        <form id="queueForm">
            @csrf
            <input type="text" name="queueNumber" id="queueNumber" 
                   value="{{ session('queueNumber') ?? '' }}"
                   style="border: 1px solid #A6A6A6; height:52px; width: 600px;" 
                   placeholder="Masukkan Nomor Queue atau Resi" required>
            <div class="d-flex justify-content-center mt-3">
                <button type="button" class="btn-custom" id="submitQueue">Kirim</button>
            </div>
        </form>
    </div>

    <!-- STEP 2: CAPTCHA INPUT -->
    <div class="container-status" id="step-2" style="display: none;">
        <h4 class="h4-semibold">Masukkan Kode Captcha</h4>
        <form id="captchaForm">
            @csrf
            <input type="hidden" name="queueNumber" id="queueNumberHidden">
            
            <div class="captcha-container mt-3">
                <p>Masukkan kode berikut:</p>
                <div class="captcha" style="margin-bottom: 10px;">
                    <img src="{{ captcha_src() }}" alt="Captcha Image" id="captcha-image">
                    <button type="button" onclick="refreshCaptcha()">Refresh</button>
                </div>
                <input type="text" name="captcha" id="captcha" 
                       placeholder="Masukkan kode captcha" 
                       style="border: 1px solid #A6A6A6; height: 40px; width: 300px;" required>
            </div>

            <div class="d-flex justify-content-center mt-3">
                <button type="submit" class="btn-custom">Kirim</button>
            </div>
        </form>
    </div>
</section>

<!-- LOADING SPINNER -->
<div class="loading-container" id="loading-container" style="display: none;">
    <div class="loading-spinner"></div>
    <p style="color: white;">Loading...</p>
</div>

<script>
document.getElementById('submitQueue').addEventListener('click', function () {
    let queueNumber = document.getElementById('queueNumber').value.trim();
    
    if (!queueNumber) {
        alert("Nomor antrean tidak boleh kosong!");
        return;
    }

    document.getElementById('queueNumberHidden').value = queueNumber;
    document.getElementById('step-1').style.display = 'none';
    document.getElementById('step-2').style.display = 'block';
});

document.getElementById('captchaForm').addEventListener('submit', function (event) {
    event.preventDefault();

    let queueNumber = document.getElementById('queueNumberHidden').value;
    let captcha = document.getElementById('captcha').value.trim();

    if (!captcha) {
        alert("Kode CAPTCHA tidak boleh kosong!");
        return;
    }

    // Munculkan loading
    document.getElementById('loading-container').style.display = 'block';

    let formData = new FormData();
    formData.append('_token', '{{ csrf_token() }}');
    formData.append('queueNumber', queueNumber);
    formData.append('captcha', captcha);

    fetch("{{ route('status.check') }}", {
        method: "POST",
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        // Sembunyikan loading setelah selesai
        document.getElementById('loading-container').style.display = 'none';

        if (data.success) {
            window.location.href = data.redirect_url; // Redirect ke view_status
        } else {
            alert(data.message);
            refreshCaptcha(); // Refresh CAPTCHA jika salah
        }
    })
    .catch(error => {
        console.error('Error:', error);
        document.getElementById('loading-container').style.display = 'none';
    });
});

function refreshCaptcha() {
    fetch("{{ route('refresh.captcha') }}")
        .then(response => response.json())
        .then(data => {
            document.getElementById('captcha-image').src = data.captcha;
        })
        .catch(error => console.error('Error:', error));
}
</script>

@endsection
