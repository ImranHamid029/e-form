<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class HistoryDeposit extends Model
{
    protected $connection = 'mongodb'; // Gunakan MongoDB
    protected $collection = 'history_deposit'; // Nama koleksi di MongoDB

    protected $fillable = [
        'selectService',
        'accountNumber',
        'bankBranch',
        'accountOwner',
        'fullName',
        'phoneNumber',
        'job',
        'companyName',
        'amount',
        'amountInWords',
        'status',
        'created_at',
        'updated_at'
    ];
}
