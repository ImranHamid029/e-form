<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class City extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'city';
    protected $fillable = ['name'];
}
