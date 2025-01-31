<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Setor extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'setor_tunai';

    protected $fillable = [
        'no_rekening',
        'nama_pemilik',
    ];
}
