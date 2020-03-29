<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Saved extends Model
{
    protected $table = "saved_items";
    protected $guard = ['id'];

    public function articles()
    {
        return $this->belongsTo(Article::class, 'post_id');
    }

    public function posts()
    {
        return $this->belongsTo(Posts::class,'post_id');
    }
}
