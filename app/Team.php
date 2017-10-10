<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'name',
    ];

    // create  rules
    public static function  getCreateRules(){
        return [
            'name' => 'required|unique:teams|min:2',

        ];
    }
    // update  rules

    public static function  getUpdateRules(Team $team){
        return [

            'name' => 'required|unique:teams,name,'.$team->id,

        ];
    }
}
