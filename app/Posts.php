<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $table = "posts";
    protected $guard = ['id'];

    public function abc()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
