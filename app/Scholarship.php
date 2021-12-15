<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scholarship extends Model
{
    //
    protected $fillable = [
        'name',
        'startStepOne',
        'endStepOne',
        'announceStepOne',
        'startStepTwo',
        'endStepTwo',
        'announceStepTwo',
        'onlineTest',
        'status',
    ];
}
