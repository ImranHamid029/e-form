<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class ApplicationRegion extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'application_region';
    protected $fillable = ['regions'];
}