<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengajuan Kredit PDF</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container-ticket {
            width: 780px;
            margin: 20px auto;
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 24px 48px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .header-ticket {
            text-align: center;
            margin-bottom: 20px;
        }
        .header-ticket img {
            left:0;
            height: 50px;
        }
        .resi-ticket {
            text-align: center;
            background-color: #1F2B7B;
            color: #fff;
            font-weight: bold;
            font-size: 18px;
            padding: 10px;
            border-radius: 10px;
            margin-bottom: 20px;
        }
        .h2-bold {
            font-weight: 700; /* SemiBold */
            font-size: 36px;
            line-height: 44px;
        }
        .h3-bold {
            font-weight: 700; /* SemiBold */
            font-size: 30px;
            line-height: 38px;
        }
        .h4-bold {
            font-weight: 700; /* SemiBold */
            font-size: 24px;
            line-height: 32px;
        }
        .h5-medium {
            font-weight: 500; /* Medium */
            font-size: 20px;
            line-height: 30px;
        }
        .footer-date {
            text-align: right;
            font-size: 12px;
            color: #666;
            margin-top: 20px;
        }
        .img-area{
            display:flex;
            justify-content: flex-start;
        }
    </style>
</head>
<body>
    <div class="container-ticket">
        <div class="header-ticket">
            <div class="img-area">
                <img src="{{ public_path('img/logo.png') }}" alt="Bank Lampung">
            </div>
            
            <h3 class="h3-bold">Bukti Pengajuan Kredit</h3>
        </div>
        <div class="resi-ticket">
            <h2 class="h2-bold">Nomor Resi: {{ $applicant->resiNumber }}</h2>
        </div>

        <h4 class="h4-bold">Informasi Nasabah</h4>
        <h5 class="h5-medium">Data Pribadi</h5>
        <ul>
            <li>NIK: {{ $applicant->nik }}</li>
            <li>Nama Sesuai KTP: {{ $applicant->fullName }}</li>
            <li>Tempat Lahir: {{ $applicant->placeOfBirth }}</li>
            <li>Tanggal Lahir: {{ $applicant->dateOfBirth }}</li>
            <li>Jenis Kelamin: {{ $applicant->gender }}</li>
        </ul>
        <h5 class="h5-medium">Kontak</h5>

        <ul>
            <li>No. Telp: {{ $applicant->phoneNumber }}</li>
            <li>Email: {{ $applicant->email }}</li>
        </ul>
        <h5 class="h5-medium">Alamat</h5>
        <ul>
            <li>Alamat Rumah: {{ $applicant->residentialDistrict }}, {{ $applicant->residentialCity }}, {{ $applicant->residentialProvince }}, {{ $applicant->posCode }}</li>
        </ul>

        <h4 class="h4-bold">Informasi Usaha</h2>
        <h5 class="h5-medium">Usaha</h5>
        <ul>
            <li>Nama Usaha: {{ $applicant->companyName }}</li>
            <li>Lokasi: {{ $applicant->businessAddress }}, {{ $applicant->businessPosCode }}</li>
        </ul> 
        <h5 class="h5-medium">Keterangan Usaha</h5>
        <ul>
            <li>Status Perusahaan: {{ $applicant->businessPlaceStatus }}</li>
            <li>Bidang Usaha: {{ $applicant->businessSector }}</li>
            <li>Jangka Waktu: {{ $applicant->loanTerm }} bulan</li>
            <li>Jaminan: {{ $applicant->loanCollateral }}</li>
        </ul>
        <h5 class="h5-medium">Keterangan</h5>
        <ul>
            <li>{{ $applicant->loanUsageDescription }}</li>
        </ul>

       

        <div class="footer-date">
            {{ now()->format('H:i WIB, l, j F Y') }}
        </div>
    </div>

