<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DrugBrand extends Model
{    
    protected $table = "drugs_brand";
    protected $guard = ['id'];
}
