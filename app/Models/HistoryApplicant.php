<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class HistoryApplicant extends Model
{
    protected $connection = 'mongodb'; 
    protected $collection = 'history_applicant'; 

    protected $fillable = [
        'nik', 
        'resiNumber' ,           
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
        'created_at',
        'updated_at'
    ];
}
