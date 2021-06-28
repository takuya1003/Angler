<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Port extends Model
{
    protected $fillable = [
        'port_name',
        'latitude',
        'longitude'
    ];

    protected $table = 'port';


    /**
     * 漁港のデータを取得
     */
    public function scopeGet_Port_Name()
    {
        return Port::where('id', 1)->get();
    }
}
