<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = "article";
    protected $guard = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'post_id');
    }

    public function save_item()
    {
        return $this->hasMany(Saved::class);
    }



    public function abc()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
