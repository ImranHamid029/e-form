<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class History extends Model
{
    protected $connection = 'mongodb';

    protected $collection = 'histories';

    protected $fillable = [
        // Fields untuk Applicant
        'nik',
        'fullName',
        'placeOfBirth',
        'dateOfBirth',
        'phoneNumber',
        'email',
        'residentialAddress',
        'residentialProvince',
        'residentialCity',
        'residentialDistrict',
        'companyName',
        'businessAddress',
        'businessProvince',
        'businessCity',
        'businessDistrict',
        'businessPlaceStatus',
        'businessSector',
        'loanAmount',
        'loanTerm',
        'loanUsageDescription',
        'loanCollateral',
        'spouseName',
        'spouseJob',
        'spouseJobAddress',
        'numberOfChildren',
        'motherMaidenName',
        'bankAccount',
        'otherBankLoans',
        'applicationRegion',

        // Fields untuk FormSubmission
        'accountNumber',
        'ownerName',

        // Fields untuk Setor (Deposit)
        'savings',
        'date',
        'accountOwner',
        'bankBranch',
        'address',
        'provinceOfResidence',
        'cityOfResidence',
        'districtOfResidence',
        'withdrawnBankName',
        'checkNumber',
        'amount',
        'amountInWords',

        // General fields
        'type',
        'status',
        'is_active',
        'updated_at',
    ];

    public $timestamps = true;
}
