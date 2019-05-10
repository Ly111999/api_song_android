<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Baihat extends Model
{
    use SoftDeletes;

    protected $table = 'baihat';
    protected $dates = ['deleted_at'];
}
