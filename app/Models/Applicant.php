<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Applicant extends Model
{
    protected $connection = 'mongodb';
    protected $table = 'applicant';

    protected $fillable = [
        'nik',
        'nama_lengkap',
        'tempat_lahir',
        'tanggal_lahir',
        'no_tlp',
        'email',
        'alamat_tinggal',
        'provinsi_tinggal',
        'kabupaten_tinggal',
        'kecamatan_tinggal',
        'nama_perusahaan',
        'alamat_usaha',
        'provinsi_usaha',
        'kabupaten_usaha',
        'kecamatan_usaha',
        'status_tempat_usaha',
        'bidang_usaha',
        'jumlah_kredit',
        'jangka_waktu',
        'keterangan_pengguna_kredit',
        'jaminan_kredit',
        'nama_pasangan',
        'pekerjaan_pasangan',
        'alamat_pekerjaan',
        'jumlah_anak',
        'nama_ibu_kandung',
        'rekening_bank',
        'pinjaman_bank_lain',
        'wilayah_pengajuan',
        'jenis_kredit',
        'status'
    ];

}
