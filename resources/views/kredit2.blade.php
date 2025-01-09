@extends('layout\v_layout')
@section('content')


<h2 class="mt-4 mb-5 text-center">Kredit Aneka Usaha</h2>


<div class="form-group">

    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-1">
                <div class="image-container">
                    <img class="img-fluid" src="simulasi.svg" alt="alternative">
                </div>
            </div>
            <div class="col-lg-6 mt-4">
                <div class="text-container">
                    <h2>Apa itu Kredit Aneka Usaha?</h2>
                    <p>Kredit yang diberikan kepada pengusaha perorangan maupun kelompok untuk membiayai kebutuhan usaha produktif baik investasi maupun kebutuhan modal kerja.</p>
                </div>
            </div>
        </div> <!-- end of row -->
    </div> <!-- end of container -->
    <hr>
    <div class="form-group mt-5">
        <div class="form-group d-flex justify-content-center pl-2">
            <div style="width:60%">

                <div class="section-heading">
                    <p>
                        Kalkulator
                    </p>
                    <h4>Simulasi Kredit</h4>
                </div>
                <div class="form-group d-flex justify-content-left">
                    <div class="col-8 col-md-8 content">
                        <div class="calculator">
                            <div class="form-group row">
                                <label for="" class="col-sm-4 col-form-label">Model</label>
                                <div class="col-sm-8">
                                    <div class="form-check">
                                        <input class="form-check-input" name="model" type="radio" value="loan" id="loan" checked="">
                                        <label class="form-check-label" for="loan">Pinjaman Yang Di Ajukan</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group form-loan row d-flex justify-content-center">
                                <label for="" class="col-sm-4 col-form-label">Pengajuan Kredit</label>
                                <div class="col-sm-8">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">Rp</div>
                                        </div>
                                        <input type="text" name="pengajuan" class="form-control duit" placeholder="0" maxlength="33">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group form-salary row" style="display: none;">
                                <label for="" class="col-sm-4 col-form-label">Gaji/Penghasilan</label>
                                <div class="col-sm-8">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">Rp</div>
                                        </div>
                                        <input type="text" name="gaji" class="form-control duit" id="inlineFormInputGroup" placeholder="0" maxlength="33">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group form-salary row" style="display: none;">
                                <label for="" class="col-sm-4 col-form-label">% Angsuran (RPC)</label>
                                <div class="col-sm-4">
                                    <div class="input-group mb-2">
                                        <input type="number" name="angsuranpersen" class="form-control text-right" id="inlineFormInputGroup" placeholder="0">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">Rp</div>
                                        </div>
                                        <input type="text" name="angsuranrupiah" class="form-control duit" id="inlineFormInputGroup" placeholder="0" maxlength="33">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-4 col-form-label">Suku Bunga</label>
                                <div class="col-sm-8">
                                    <div class="input-group mb-2" style="margin-bottom: 0 !important;">
                                        <input type="number" name="sukubunga" class="form-control text-right" id="inlineFormInputGroup" placeholder="0">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-4 col-form-label">Jangka Waktu</label>
                                <div class="col-sm-8">
                                    <div class="input-group mb-2">
                                        <input type="number" name="jangkawaktu" class="form-control text-right" id="inlineFormInputGroup" placeholder="0">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">Bulan</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="f" class="col-sm-4 col-form-label">Metode</label>
                                <div class="col-sm-8">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="metode" id="anuitas" value="anuitas" checked="">
                                        <label class="form-check-label" for="anuitas">Anuitas</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="metode" id="flat" value="flat">
                                        <label class="form-check-label" for="flat">Flat</label>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-simulation" id="process">Proses</button>
                        </div>
                        <div class="result-simulation"></div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-3">
                <div class="section-heading">
                    <div class="line"></div>
                    <p>Ayok Coba Simulasi</p>
                    <h4>Simulasi Kredit</h4>
                </div>
                <div class="about-thumbnail mb-100">
                    <img src="simulasi2.svg" alt="" style="width:300px">
                </div>
            </div>
        </div>
    </div>
</div>

<hr>

<div class="container">
    <div class="row">
        <div class="col-lg-4 mt-3">
            <div class="image-container">
                <img class="img-fluid" src="manfaat.svg" alt="alternative">
            </div>
        </div>
        <div class="col-lg-8 mt-4">
            <div class="text-container">
                <h3>Apa Saja Manfaat Dari Melakukan Peminjaman Kredit Aneka Usaha?</h3>
                <p>1. Proses kredit cepat <br>
                    2. Persyaratan kredit ringan <br>
                    3. Memenuhi kebutuhan modal kerja atau investasi usaha anda <br>
                    4. Angsuran kredit per bulan yang ringan & suku bunga bersaing <br>
                    5. Diberikan pembekalan mengenai kiat usaha yang bisa mendatangkan profit<br>
                    6. Diberikan pendampingan pengelolaan manajemen keuangan bagi usaha mikro<br>
                    7. Biaya administrasi yang murah
                </p>
            </div>
        </div>
    </div> <!-- end of row -->
</div>
<hr>
<div class="container">
    <div class="row">
        <div class="col-lg-8  mt-3">
            <div class="text-container">
                <h3>Apa Saja Persyaratan Yang Harus Dipenuhi?</h3>
                <h5>1. Perseorangan</h5>
                <p>
                    - &emsp; Fotokopi KTP <br>
                    - &emsp; Fotokopi KK <br>
                    - &emsp;Buku nikah/Surat Keterangan Status (Sudah Menikah/ Cerai) <br>
                    - &emsp; Surat Keterangan Usaha (SKU) <br>
                    - &emsp; SPT PBB tahun terakhir dari jaminan <br>
                    - &emsp; Kredit mulai Rp. 100.000.000,- dipersyaratkan : <br>
                    &emsp; &nbsp a.&emsp; NPWP <br>
                    &emsp; &nbsp b.&emsp; Legalitas Usaha seperti : SIUP, TDP, SITU, atau lainnya sesuai dengan bidang usaha <br>
                    - &emsp; Fotokopi Jaminan yang akan diagunkan <br>
                </p>
                <h5> 2. Kelompok </h5>
                <p>
                    - &emsp;Anggota melakukan kegiatan produktif <br>
                    - &emsp;Kelompok telah terdaftar pada Dinas Teknis setempat <br>
                    - &emsp;Kelompok memiliki organisasi dengan pengurus yang aktif <br>
                    - &emsp;mempunyai aturan kelompok yang disepakati oleh seluruh anggota kelompok <br>
                    - &emsp;Surat Keterangan Usaha (SKU) <br>
                    - &emsp;Identitas diri pengurus dan anggota berupa : <br>
                    &emsp; &emsp;a. &emsp;Fotokopi KTP <br>
                    &emsp;&emsp; b. &emsp;Fotokopi KK <br>
                    &emsp;&emsp; c. &emsp;Fotokopi buku nikah/Surat keterangan status<br>
                    - &emsp;Melampirkan RAB (rencana anggaran belanja)<br>
                    - &emsp;Daftar susunan pengurus kelompok <br>
                    - &emsp;Fotokopi NPWP untuk pinjaman diatas Rp. 100.000.000,-<br>
                    - &emsp;Diwajibkan membuka rekening tabungan/giro Bank Lampung atas nama Kelompok usaha<br>
                    - &emsp;Fotokopi bukti kepemilikan agunan yang akan diserahkan <br>
            </div>
        </div>
        <div class="col-lg-4 mt-4">
            <div class="image-container">
                <img class="img-fluid" src="syarat.svg" alt="alternative">
            </div>
        </div>

    </div> <!-- end of row -->
</div>

<div class="contrainer">
    <div class="row">
        <div class="col d-flex justify-content-center mb-3">
            <a href="/form" type="button" class="btn btn-primary" id="Form">Isi Formulir</a>
        </div>
    </div>
</div>


</div>

@endsection