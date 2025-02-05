<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class HistoryWithdraw extends Model
{
    protected $connection = 'mongodb'; // Gunakan MongoDB
    protected $collection = 'history_withdraw'; // Nama koleksi di MongoDB

    protected $fillable = [
        'bankBranch',
        'ownerName',
        'accountNumber',
        'accountType',
        'currency',
        'amount',
        'amountInWords',
        'status',
        'created_at',
        'updated_at'
    ];
}
