<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Chude extends Model
{
    use SoftDeletes;

    protected $table = 'chude';
    protected $dates = ['deletes_at'];

}
