<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Applicant extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'applicant';

    protected $fillable = [
        'resiNumber',
        'nik',             
        'fullName',
        'placeOfBirth',
        'dateOfBirth',
        'gender',
        'phoneNumber',
        'email',
        'residentialAddress',
        'residentialProvince',
        'residentialCity',
        'residentialDistrict',
        'posCode',
        'companyName',      
        'businessAddress',
        'businessProvince',
        'businessCity',
        'businessDistrict',
        'businessPosCode',
        'businessPlaceStatus',
        'businessSector',
        'loanUsageDescription',
        'loanTerm',         
        'loanCollateral',
        'status',
    ];
    
    protected $primaryKey = '_id';

}
