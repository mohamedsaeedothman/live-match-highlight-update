<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'match_id','type','content'
    ];

    // create  rules
    public static function  getRules(){
        return [
            'type' => 'required',
            'content' => 'required',
        ];
    }
}
