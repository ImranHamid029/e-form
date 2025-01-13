@extends('layout\v_layout')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>

<section class="features-area" id="features-area">
    <div class="container-status" id="container-status">
        <h4 class="h4-semibold">Masukan Nomor Resi</h4>
        <input type="text" style="border: 1px solid #A6A6A6; height:52px; width: 600px;" placeholder="XXX-XXX-XXX" required>
        

        <div class="captcha-container mt-3">
            <p>Masukkan kode berikut:</p>
            <div class="captcah" style="margin-bottom: 10px;">
                <img src="{{ url('/generate-captcha') }}" alt="Captcha Image" id="captcha-image">
                <button type="button" onclick="refreshCaptcha()">Refresh</button>
            </div>
            <input type="text" name="captcha" id="captcha" placeholder="Masukkan kode captcha" style="border: 1px solid #A6A6A6; height: 40px; width: 300px;" required>
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

<main></main>
</body>
</html>

@endsection
