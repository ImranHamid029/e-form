<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Province extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'province';
    protected $fillable = ['name'];
}
