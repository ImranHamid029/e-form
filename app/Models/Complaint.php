<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Complaint extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'complaint';
    protected $fillable = [
        'fullName',              
        'phoneNumber',    
        'email',                 
        'complaint',             

        'response',
        'status',
    ];
}
