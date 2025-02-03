<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class District extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'district';
    protected $fillable = ['name'];
}
