<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drugs extends Model
{
    protected $table = "drugs";
    protected $guard = ['id'];
}
