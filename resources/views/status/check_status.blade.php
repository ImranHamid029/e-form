@extends('layout.user.app')
@section('content')

<section class="features-area" id="features-area">
    <div class="container-status">
        <h4 class="h4-semibold">Masukkan Nomor Queue / Resi</h4>
        <form id="queueForm">
            @csrf
            <input type="text" name="queueNumber" id="queueNumber" 
                   
                   style="border: 1px solid #A6A6A6; height:52px; width: 600px;" 
                   placeholder="Masukkan Nomor Queue atau Resi" required>
            
            <!-- Input tersembunyi untuk queueNumberHidden -->
            <input type="hidden" name="queueNumberHidden" id="queueNumberHidden">
        </form>
    </div>

    <div class="container-status mt-3">
        <h4 class="h4-semibold">Masukkan Kode Captcha</h4>
        <form id="captchaForm">
            @csrf
            
            <div class="captcha-container ">
                <div class="captcha" style="margin-bottom: 10px;">
                    <img src="{{ url('/captcha/refresh') }}"  alt="Captcha Image" id="captcha-image">
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

    <div class="loading-container" id="loading-container">
        <div class="loading-spinner"></div>
        <p style="color: white;">Loading...</p>
    </div>
</section>

<script>
document.getElementById('queueNumber').addEventListener('input', function () {
    // Memperbarui nilai queueNumberHidden ketika queueNumber berubah
    document.getElementById('queueNumberHidden').value = this.value;
});

document.getElementById('captchaForm').addEventListener('submit', function (event) {
    event.preventDefault();

    let queueNumber = document.getElementById('queueNumberHidden').value;
    let captcha = document.getElementById('captcha').value.trim();

    if (!queueNumber) {
        alert("Nomor antrean harus diisi terlebih dahulu!");
        return;
    }
    if (!captcha) {
        alert("Kode CAPTCHA tidak boleh kosong!");
        return;
    }

    // Tampilkan loading spinner
    document.getElementById('loading-container').style.display = 'flex';

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
        // Sembunyikan loading spinner setelah selesai
        document.getElementById('loading-container').style.display = 'none';

        if (data.success) {
            window.location.href = data.redirect_url;
        } else {
            alert(data.message);
            refreshCaptcha();
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
