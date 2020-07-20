<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class Post extends Model
{
    protected $connection='mongodb';
    protected $collection='posts';
    protected $fillable=['content'];
    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
