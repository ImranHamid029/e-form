@extends('layout.header')
@extends('layout.style')
<section class="content-header">
    <div class="container">
        <div class="row">
            <div class="col">

            <div class="container-fluid">
                    <div class="row my-2">
                        <div class="col-sm-6 pl-1">
                            <h1>Ringkasan Form</h1>
                        </div>
                    </div>
                </div>

    <div>
    <table class="table table-bordered">
        <thead class="thead-dark">
        <tr>
            <th>Nama</th>
            <th>{{ $tes->nama_lengkap }}</th>  
	    </tr>
        <tr>
            <th>NIK</th>  
            <th>{{ $tes->nik }}</th>  
	    </tr>
        <tr>
            <th>Tempat, Tanggal Lahir</th>
            <th>{{ $tes->tempat_lahir }}, {{ $tes->tanggal_lahir }}</th>
	    </tr>
        <tr>
            <th>No. Telpon</th> 
            <th>{{ $tes->no_tlp }}</th>  
	    </tr>
        <tr>
            <th>Email</th>  
            <th>{{ $tes->email }}</th>
	    </tr>
        <tr>
            <th>Alamat Tinggal</th>  
            <th>{{ $tes->alamat_tinggal }}, {{ $tes->kecamatan_tinggal }}, {{ $tes->kabupaten_tinggal }}, {{ $tes->provinsi_tinggal }}</th>
	    </tr>
        <tr>
            <th>Nama Perusahaan</th>
            <th>{{ $tes->nama_perusahaan }}</th>  
	    </tr>
        <tr>
        <th>Alamat Perusahaan</th>  
            <th>{{ $tes->alamat_usaha }}, {{ $tes->kecamatan_usaha }}, {{ $tes->kabupaten_usaha }}, {{ $tes->provinsi_usaha }}</th> 
	    </tr>
        <tr>
            <th>Status Tempat Usaha</th> 
            <th>{{ $tes->status_tempat_usaha }}</th> 
	    </tr>
        <tr>
            <th>Bidang Usaha</th>  
            <th>{{ $tes->bidang_usaha }}</th>
	    </tr>
        <tr>
            <th>Jumlah Kredit</th>  
            <th>Rp. {{ $tes->jumlah_kredit }},-</th>
	    </tr>
        <tr>
            <th>Jangka Waktu</th>  
            <th>{{ $tes->jangka_waktu }} bulan</th>
	    </tr>
        <tr>
            <th>Keterangan Pengguna Kredit</th>  
            <th>{{ $tes->keterangan_pengguna_kredit }}</th>
	    </tr>
        <tr>
            <th>Jaminan Kredit</th>  
            <th>{{ $tes->jaminan_kredit }}</th>
	    </tr>
        <tr>
            <th>Rekening Bank</th>  
            <th>{{ $tes->rekening_bank }}</th>
	    </tr>
        <tr>
            <th>Pinjaman Bank Lain</th>  
            <th>{{ $tes->pinjaman_bank_lain }}</th>
	    </tr>
        <tr>
            <th>Wilayah Pengajuan</th>  
            <th>{{ $tes->wilayah_pengajuan }}</th>
	    </tr>

        
    </table>
    </div>
    <br>
    
  
    


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
            </div>
        </div>
    </div>
</section>
@extends('layout.footer')