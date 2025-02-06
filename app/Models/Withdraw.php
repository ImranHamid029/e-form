<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Withdraw extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'withdraw';

    protected $fillable = [
        'formtype',
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
    protected $attributes = [
        'formtype' => 'Tarik Tunai',
    ];
    
    protected $primaryKey = '_id';
}
