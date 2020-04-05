<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctors extends Model
{
    protected $table = "doctor";
    protected $guard = ['id'];
}
