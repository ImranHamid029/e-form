@extends('layout\v_layout')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaduan Online</title>
</head>
<body>

        <div class="container" style="padding-top: 120px;">
            <div class="row justify-content-center text-center">
                <!-- Teks Selamat Datang -->
                <div class="col-12 mb-4">
                    <h1>Selamat Datang di Portal Pengaduan Online Nasabah <br>Bank Lampung</h1>
                </div>
                <div class="col-12 mb-4">
                    <p>
                        Kami hadir untuk mempermudah Anda dalam melaporkan dan memantau penyelesaian kendala terkait layanan Bank Lampung. 
                        Dengan sistem ini, laporan Anda akan ditangani lebih cepat, tepat, dan transparan.
                    </p>
                </div>
                <div class="col-12">
                    <a href="/form_pengaduan" class="btn btn-custom" id="Form">Sampaikan Laporan Anda</a>
                </div>
                <div class="col-12 col-sm-6 col-lg-6 d-flex justify-content-center" style="padding-top:20px;">
                    <div class="logo mt-n5"> 
                        <a href="/"><img src="img/img3.png" width="300px" alt=""></a>
                    </div>
                </div>   
            </div>
        </div>


</body>
</html>
@endsection