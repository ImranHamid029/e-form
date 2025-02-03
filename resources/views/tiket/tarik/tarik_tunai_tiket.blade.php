<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarik Tunai PDF</title>
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
        .img-area{
            width:100%;
        }
        .img-area img {
            left:0;
            height: 100px;
            display:flex;
            justify-content:start;
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
        .caption-regular{
            font-weight:400px ;
            font-size: 12px;
            line-height: 18px;
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
        @media (max-width: 768px){
            .container-ticket {
            width: 580px;
            
            }
        }
        @media (max-width: 480px){
            .container-ticket {
            width: 380px;
            
            }
        }
    </style>
</head>
<body>
    <div class="container-ticket">
        <div class="header-ticket">
            <div class="img-area">
                <img src="{{ public_path('img/logo.png') }}" alt="Bank Lampung">
            </div>
            
            <h3 class="h3-bold">Bukti tarik Tunai</h3>
        </div>
        <div class="resi-ticket">
            <h2 class="h2-bold">Nomor Antrian: {{ $withdraw->queueNumber }}</h2>
        </div>

        <h4 class="h4-bold">Data Tarik Tunai</h4>

        <h5 class="h5-medium">Data Pribadi:</h5>
        <ul>
            <li><span>Nomor Rekening</span>: {{ $withdraw->accountNumber }}</li>
            <li><span>Pemilik Rekening</span>: {{ $withdraw->ownerName }}</li>
            <li><span>Kantor Oprasional</span>: {{ $withdraw->bankBranch }}</li>
        </ul>
        <h5 class="h5-medium">Transaksi</h5>
        <ul>
            <li><span>Jumlah Penyetoran</span>: Rp. {{ number_format($withdraw->amount, 2) }}</li>
            <li><span>Terbilang</span>: {{ $withdraw->amountInWords }}</li>
        </ul>

        <div>
            <p>Catatan : </p>
            <ol>
                <li class="caption-regular">Silakan tunjukkan pop-up ini atau file yang telah diunduh ke perangkat Anda kepada petugas teller.</li>
                <li class="caption-regular">Silakan bawa <strong>KTP</strong> serta <strong>berkas yang dibutuhkan</strong> (buku tabungan dll) ke teller Bank Lampung sebelum pukul 15.00 WIB pada hari ini.</li>
                <li class="caption-regular">Pastikan nomor antrian Anda sesuai dengan teller yang anda tuju saat dipanggil.</li>
            </ol>
        </div>
       

        <div class="footer-date">
            {{ now()->format('H:i WIB, l, j F Y') }}
        </div>
    </div>
</body>
</html>
