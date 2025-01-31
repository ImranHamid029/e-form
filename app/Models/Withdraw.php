<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Withdraw extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'withdraw';

    protected $fillable = [
        'queueNumber',
        'bankBranch',
        'ownerName',
        'accountNumber',
        'accountType',
        'currency',
        'amount',
        'amountInWords',
        'status',
    ];
    
    protected $primaryKey = '_id';
}
