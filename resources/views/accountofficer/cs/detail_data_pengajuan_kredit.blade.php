@extends('layout\cs\app')
@section('content')

<div class="features-area">
    <div class="content2">
        <h4 class="h4-bold text-center">Data Pengajuan Kredit</h4>
    </div>
        <div class="detail-data-container">
            <div class="detail-data-content">
                
                    <div class="detail-data-text-area">
                    <p class="body-lg-bold"><strong>Penerima </strong></p>
                        <div class="detail-info d-flex justify-between" >
                            <div style=" width: 50%;">
                                <p class="body-lg-bold"><strong>Informasi Data Pribadi</strong></p>
                                <ul style="padding-left:24px;">
                                    <li>NIK: 1702170911030001</li>
                                    <li>Nama Sesuai KTP: Rizqi Ahmad Ghozali</li>
                                    <li>Tempat Lahir: Curup</li>
                                    <li>Tanggal Lahir: 1-1-2025</li>
                                    <li>Jenis Kelamin: Laki-laki</li>
                                </ul>
                                <p class="body-lg-bold"><strong>Kontak</strong></p>
                                <ul style="padding-left:24px;">
                                    <li>No. Telp: 0812-345-678</li>
                                    <li>Email: rizqigh@gmail.com</li>
                                </ul>
                            </div>

                            <div style=" width: 50%;"> 
                                <p class="body-lg-bold"><strong>Alamat</strong></p>
                                <ul style="padding-left:24px;">
                                    <li>Alamat Rumah: Curup</li>
                                    <li>Provinsi: Bengkulu</li>   
                                    <li>Kabupaten/Kota: Rejang Lebong</li>
                                    <li>Kecamatan: Curup Timur</li>
                                    <li>Kode Pos: 12345</li>
                                    
                                </ul>
                                <p class="body-lg-bold"><strong>Kontak</strong></p>
                                <ul style="padding-left:24px;">
                                    <li>No. Telp:</li>
                                    <li>Email:</li>
                                </ul>
                            </div>
                            
                        </div>
                    </div>

                    <div class="detail-data-text-area">
                    <p class="body-lg-bold"><strong>Data Usaha Nasabah</strong></p>
                        <div class="detail-info  d-flex justify-between align-item-start">
                            <div style=" width: 50%;">
                                <p class="body-lg-bold"><strong>Informasi Usaha</strong></p>
                                <ul style="padding-left:24px;">
                                    <li>Nama Usaha: Bengkel Tastawi</li>
                                    <li>Provinsi: Lampung</li>
                                    <li>Kabupaten/Kota: Bandar Lampung</li>
                                    <li>Kecamatan:  Rajabasa</li>
                                    <li>Kode Pos: 54321</li>
                                </ul>
                            </div>
                            <div style=" width: 50%;">
                            <p class="body-lg-bold"><strong>Keterangan Usaha</strong></p>
                                <ul style="padding-left:24px;">
                                    <li>Status Perusahaan : Perorangan</li>
                                    <li>Bidang Usaha : Otomotif</li>
                                    <li>Jangka Waktu : 3 Bulan</li>
                                    <li>Jaminan STNK Mobil</li>
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                    
                    <div class="btn-area3" >
                        <div>
                            <a href="javascript:void(0);" id="tanggapiBtn" class="btn-blue" onclick="goBack();">Kembali</a>
                        </div>
                        
                        <div style="display: flex; gap: 10px;">
                            <a href="" id="tanggapiBtn" class="btn-accepted">Setujui</a>
                            <a href="" id="tanggapiBtn" class="btn-rejected">Tolak</a>
                        </div>
                    </div>

                    
                </div>
            
                
            </div>    
        </div>
</div>
<script>

    function goBack() {
        window.history.back();}
</script>   

@endsection