
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarik Tunai PDF</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    <div class="container-ticket">
        <div class="header-ticket">
            <div class="img-area">
                <img src="/img/logo.png" alt="Bank Lampung">
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
