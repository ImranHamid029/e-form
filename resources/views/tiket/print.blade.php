<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak Mahasiswa</title>
</head>
<body>
<section class="content-header">
    <div class="container">
        <div class="row">
            <div class="col">

            <div class="container-fluid">
                    <div class="row my-2">
                        <div class="col-sm-6 pl-1">
                            <h1 align='center'>Cetak Form</h1>
                        </div>
                    </div>
                </div>
    @foreach ($applicant as $apl)
        <?php $fin = $apl?>
    @endforeach
    <div>
    
    <table align='center' border='1' class="table table-bordered">
        <thead class="thead-dark">
        <tr>
            <th>Kode Pengajuan</th>
            <th>{{ $fin->_id}}</th>  
	    </tr>
        <tr>
            <th>Nama</th>
            <th>{{ $fin->nama_lengkap }}</th>  
	    </tr>
        <tr>
            <th>NIK</th>  
            <th>{{ $fin->nik }}</th>  
	    </tr>
        <tr>
            <th>No. Telpon</th> 
            <th>{{ $fin->no_tlp }}</th>  
	    </tr>
        <tr>
            <th>Alamat Tinggal</th>  
            <th>{{ $fin->alamat_tinggal }}, {{ $fin->kecamatan_tinggal }}, {{ $fin->kabupaten_tinggal }}, {{ $fin->provinsi_tinggal }}</th>
	    </tr>
        <tr>
            <th>Nama Perusahaan</th>
            <th>{{ $fin->nama_perusahaan }}</th>  
	    </tr>
        <tr>
            <th>Jumlah Kredit</th>  
            <th>Rp. {{ $fin->jumlah_kredit }},-</th>
	    </tr>
        <tr>
            <th>Jangka Waktu</th>  
            <th>{{ $fin->jangka_waktu }} bulan</th>
	    </tr>
        <tr>
            <th>Wilayah Pengajuan</th>  
            <th>{{ $fin->wilayah_pengajuan }}</th>
	    </tr>      
    </table>
    </div>
    <br>
            </div>
        </div>
    </div>
</section>
</body>
</html>