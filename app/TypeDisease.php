<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeDisease extends Model
{
    protected $table = "types_disease";
    protected $guard = ['id'];
}
