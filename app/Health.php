<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Health extends Model
{
    protected $table = "health";
    protected $guard = ['id'];
}
