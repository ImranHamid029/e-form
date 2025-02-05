@extends('layout\user\footer\v_footer')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>e-Form Bank Lampung</title>
    <link rel="icon" href="/img/logo/logo1.png" type="image/png">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
  
</head>
<body style="background-image: url('/img/bg1.png'), linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5));">
<section class="features-area-login ">
    <div class="container3">
        <!-- Bagian Gambar -->
        <div class="image-side">
            <img src="/img/img27.png" alt="Gambar">
        </div>

        <!-- Bagian Form -->
        <div class="form-side">
            <div class="logo">
                <img src="/img/logo.png" alt="Logo">
                <h5>Silahkan Login</h5>
            </div>

            <form action="{{ route('login.submit') }}" method="POST">
                @csrf
                <div class="form-login" >
                    <label for="username" style="display: block; margin-bottom: 5px;">Username</label>
                    <input type="text" id="username" name="username" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 5px;" required>
                </div>
                <div class="form-login" >
                    <label for="password" style="display: block; margin-bottom: 5px;">Password</label>
                    <input type="password" id="password" name="password" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 5px;" required>
                </div>

                <div class="d-flex justify-content-center mt-3">
                    <button type="submit" class="btn-custom">Login</button>
                </div>
            </form>

            @if ($errors->has('login_error'))
                <div class="alert alert-danger mt-3">
                    {{ $errors->first('login_error') }}
                </div>
            @endif
            
        </div>
    </div>
</section>
    <main></main>
</body>
</html>
