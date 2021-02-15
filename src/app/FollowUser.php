<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FollowUser extends Pivot
{
    protected $fillable = ['following_user_id', 'followed_user_id'];
    protected $table = 'follow_users';

    public function followUsers(){
        return $this->belongToMany('')
    }
}
