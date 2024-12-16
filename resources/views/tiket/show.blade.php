@extends('layout\v_layout')
@section('content')
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
            <th>{{ $request->nama_lengkap }}</th>  
	    </tr>
        <tr>
            <th>NIK</th>  
            <th>{{ $request->nik }}</th>  
	    </tr>
        <tr>
            <th>Tempat, Tanggal Lahir</th>
            <th>{{ $request->tempat_lahir }}, {{ $request->tanggal_lahir }}</th>
	    </tr>
        <tr>
            <th>No. Telpon</th> 
            <th>{{ $request->no_tlp }}</th>  
	    </tr>
        <tr>
            <th>Email</th>  
            <th>{{ $request->email }}</th>
	    </tr>
        <tr>
            <th>Alamat Tinggal</th>  
            <th>{{ $request->alamat_tinggal }}, {{ $request->kecamatan_tinggal }}, {{ $request->kabupaten_tinggal }}, {{ $request->provinsi_tinggal }}</th>
	    </tr>
        <tr>
            <th>Nama Perusahaan</th>
            <th>{{ $request->nama_perusahaan }}</th>  
	    </tr>
        <tr>
        <th>Alamat Perusahaan</th>  
            <th>{{ $request->alamat_usaha }}, {{ $request->kecamatan_usaha }}, {{ $request->kabupaten_usaha }}, {{ $request->provinsi_usaha }}</th> 
	    </tr>
        <tr>
            <th>Status Tempat Usaha</th> 
            <th>{{ $request->status_tempat_usaha }}</th> 
	    </tr>
        <tr>
            <th>Bidang Usaha</th>  
            <th>{{ $request->bidang_usaha }}</th>
	    </tr>
        <tr>
            <th>Jumlah Kredit</th>  
            <th>Rp. {{ $request->jumlah_kredit }},-</th>
	    </tr>
        <tr>
            <th>Jangka Waktu</th>  
            <th>{{ $request->jangka_waktu }} bulan</th>
	    </tr>
        <tr>
            <th>Keterangan Pengguna Kredit</th>  
            <th>{{ $request->keterangan_pengguna_kredit }}</th>
	    </tr>
        <tr>
            <th>Jaminan Kredit</th>  
            <th>{{ $request->jaminan_kredit }}</th>
	    </tr>
        <tr>
            <th>Rekening Bank</th>  
            <th>{{ $request->rekening_bank }}</th>
	    </tr>
        <tr>
            <th>Pinjaman Bank Lain</th>  
            <th>{{ $request->pinjaman_bank_lain }}</th>
	    </tr>
        <tr>
            <th>Wilayah Pengajuan</th>  
            <th>{{ $request->wilayah_pengajuan }}</th>
	    </tr>

        
    </table>
    </div>
    <a class="btn btn-info" href="{{ route('test.show', 'request') }}">Cetak Tiket</a>
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
@endsection