<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class OperationalOffice extends Model
{

    protected $connection = 'mongodb';
    protected $collection = 'oprational_office';
    protected $fillable =['office_name'];

}
