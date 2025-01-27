@extends('layout\user\app')
@section('content')


<section class="features-area" id="features-area">
    <div class="container-status" id="container-status">
        <h4 class="h4-semibold">Masukan Nomor Resi</h4>
        <input type="text" placeholder="XXX-XXX-XXX" required>
        

        <div class="captcha-container mt-3">
            <p>Masukkan kode berikut:</p>
            <div class="captcah" style="margin-bottom: 10px;">
                <img src="{{ url('/generate-captcha') }}" alt="Captcha Image" id="captcha-image">
                <button type="button" onclick="refreshCaptcha()">Refresh</button>
            </div>
            <input type="text" name="captcha" id="captcha" placeholder="Masukkan kode captcha" required>
        </div>

        
        <div class="d-flex justify-content-center mt-3">
            <a href="javascript:void(0);" class="btn-custom" onclick="showLoading()">Kirim</a>
        </div>
    </div>
</section>

<!-- Loading Spinner -->
<div class="loading-container" id="loading-container">
    <div class="loading-spinner"></div>
    <p style="color: white;">Loading...</p>
</div>

<script>
    function showLoading() {
        document.getElementById("features-area").style.opacity = 0;
        document.getElementById("container-status").style.opacity = 0;

        document.getElementById("loading-container").style.display = "flex";

        setTimeout(function() {
            document.getElementById("loading-container").style.display = "none";
            window.location.href = "{{ url('/view-status') }}";
             
        }, 3000);
    }
    function refreshCaptcha() {
        const captchaImage = document.getElementById("captcha-image");
        captchaImage.src = "{{ url('/generate-captcha') }}?timestamp=" + new Date().getTime();
    }
</script>




@endsection
