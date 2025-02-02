<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setor Tunai PDF</title>
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
    </style>
</head>
<body>
    <div class="container-ticket">
        <div class="header-ticket">
            <div class="img-area">
                <img src="{{ public_path('img/logo.png') }}" alt="Bank Lampung">
            </div>
            
            <h3 class="h3-bold">Bukti Setor Tunai</h3>
        </div>
        <div class="resi-ticket">
            <h2 class="h2-bold">Nomor Antrian: {{ $deposit->queueNumber }}</h2>
        </div>

        <h4 class="h4-bold">Data Setor Tunai</h4>

        <h5 class="h5-medium"><span>Layanan</span>: {{ $deposit->selectService }}</h5>
        <h5 class="h5-medium"><span>Kantor Oprasional</span>: {{ $deposit->bankBranch }}</h5>

        <h5 class="h5-medium">Penyetor</h5>
        <ul>
            <li><span>Pemilik Rekening </span>: {{ $deposit->fullName }}</li>
            <li><span>No. Telp </span>: {{ $deposit->phoneNumber }}</li>
            <li><span>Pekerjaan</span>: {{ $deposit->job }}</li>
            <li><span>Nama Perusahaan</span>: {{ $deposit->companyName }}</li>
        </ul>
        <h5 class="h5-medium">Penerima</h5>

        <ul>
            <li><span>No. Rek </span>: {{ $deposit->accountNumber }}</li>
            <li><span>Nama Pemilik </span>: {{ $deposit->accountOwner }}</li>
        </ul>
        <h5 class="h5-medium">Transaksi</h5>
        <ul>
            <li><span>Jumlah Penyetoran</span>: Rp.{{ number_format($deposit->amount, 2) }}</li>
            <li><span>Terbilang</span>: {{ $deposit->amountInWords }}</li>
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
