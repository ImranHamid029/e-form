<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class FormSubmission extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'form_submissions';

    protected $fillable = [
        'no_rekening',
        'nama_pemilik',
    ];
}
