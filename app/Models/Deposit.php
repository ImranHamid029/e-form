<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Deposit extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'deposit';

    protected $fillable = [
        'formtype',
        'queueNumber',
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
    ];
    protected $attributes = [
        'formtype' => 'Setor Tunai',
    ];
    
    protected $primaryKey = '_id';
}
