<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Saved extends Model
{
    protected $table = "saved_items";
    protected $guard = ['id'];
}
