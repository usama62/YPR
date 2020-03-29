<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Helper extends Model
{
    public static function getStatus(){
        return [
            'publish'=>'Publish',
            'pending'=>'Pending',
            'draft'=>'Draft'
        ];
    } 
}
