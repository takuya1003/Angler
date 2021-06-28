<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Post extends Model
{
    protected $fillable = [
        'user_id',
        'prefectures_id',
        'content',
        'port_id',

    ];

    /**
     * 
     */
    public function prefecture()
    {
        return $this->belongsTo('App\Prefecture', 'prefectures_id');
    }
    
    /**
     * 
     */
    public function user()
    {
        return $this->belongsTo(\App\User::class, 'user_id');
    }

    /**
     * 
     */
    public function port()
    {
        return $this->belongsTo('App\Port', 'port_id');
    }

    /**
     * 
     */
    public function comments(){
        return $this->hasMany(\App\Comment::class,'post_id', 'id')
        ->orderBy('id','desc');
    }

    //投稿一覧を取得
    public function scopeGet_Postdata()
    {
        return Post::with(['prefecture','user'])
        ->latest()
        ->get();
    }    

    //都道府県別の一覧を取得
    public function scopeList_By_Prefectures($query, $prefecture_id)
    {
        return Post::with(['prefecture','user'])
        ->where('prefectures_id', $prefecture_id)
        ->latest()
        ->get();
    }

    //漁港別の一覧を取得
    public function scopeList_By_Port($port_id)
    {
        return Post::where('port_id', '{{$port_id}}' )
        ->latest()
        ->get();
    }

    



}
