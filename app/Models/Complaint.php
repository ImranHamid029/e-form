<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;


class Pengaduan extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'pengaduan';
    
    protected $fillable = [
        'nama_lengkap', 
        'no_hp', 'email', 
        'laporan',
    ];

}
