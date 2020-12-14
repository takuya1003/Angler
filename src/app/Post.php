<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'user_id',
        'prefectures_id',
        'content',
        'facility_name',

    ];

    public function prefecture()
    {
        return $this->belongsTo('App\Prefecture', 'prefectures_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
