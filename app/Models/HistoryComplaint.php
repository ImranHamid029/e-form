<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class HistoryComplaint extends Model
{
    protected $connection = 'mongodb'; // Gunakan MongoDB
    protected $collection = 'history_complaint'; // Nama koleksi di MongoDB

    protected $fillable = [
        'fullName',
        'phoneNumber',
        'email',
        'complaint',
        'response',
        'status',
        'created_at',
        'updated_at'
    ];
}
