<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Job extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'jobs';

    protected $fillable = [
        'queue',          // Nama queue tempat job ini berada
        'payload',        // Data job dalam bentuk JSON
        'attempts',       // Jumlah percobaan job sebelum gagal
        'reserved_at',    // Timestamp saat job sedang diproses
        'available_at',   // Timestamp kapan job tersedia untuk diproses
        'created_at',     // Timestamp saat job dibuat
    ];

    protected $casts = [
        'attempts' => 'integer',
        'reserved_at' => 'integer',
        'available_at' => 'integer',
        'created_at' => 'integer',
    ];
}

