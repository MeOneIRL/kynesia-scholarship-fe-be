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
        'announeStepOne',
        'startStepTwo',
        'endStepTwo',
        'announeStepTwo',
        'onlineTest',
        'status',
    ];
}
