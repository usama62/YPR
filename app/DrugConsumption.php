<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DrugConsumption extends Model
{
    protected $table = "drug_consumption";
    protected $guard = ['id'];
}
