<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'user_id',
        'prefectures_id',
        'content',
        'port_name',

    ];

    public function prefecture()
    {
        return $this->belongsTo('App\Prefecture', 'prefectures_id');
    }
    
    public function user()
    {
        return $this->belongsTo(\App\User::class, 'user_id');
    }
    
    public function comments(){
        return $this->hasMany(\App\Comment::class,'post_id', 'id');
    }


}
