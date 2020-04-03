<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeDrugs extends Model
{
    protected $table = "types_drugs";
    protected $guard = ['id'];
}
