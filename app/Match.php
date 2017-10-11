<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    protected $fillable = [
        'first_team','second_team','description','match_date','match_time'
    ];

    // create && update rules
    public static function  getRules(){
        return [
            'first_team' => 'required',
            'second_team' => 'required',
            'description' => 'required',
            'match_date' => 'required',
            'match_time' => 'required',
        ];
    }

    public function firstTeam()
    {
        return $this->belongsTo('App\Team', 'first_team');
    }

    public function secondTeam()
    {
        return $this->belongsTo('App\Team', 'second_team');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment', 'match_id');
    }


}
