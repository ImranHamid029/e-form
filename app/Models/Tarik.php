<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Tarik extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'tarik_tunai';

    protected $fillable = [
        'no_rekening',
        'nama_pemilik',
    ];
}
