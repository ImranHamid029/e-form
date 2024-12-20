<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setor extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'form_submissions';

    protected $fillable = [
        'no_rekening',
        'nama_pemilik',
    ];
}
