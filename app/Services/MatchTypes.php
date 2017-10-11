<?php
/**
 * Created by PhpStorm.
 * User: saeed
 * Date: 11/10/17
 * Time: 01:42 م
 */

namespace App\Services;


use App\Comment;

class MatchTypes
{
    public static $matchBeginning =0;
    public static $goal =1;
    public static $foul =2;
    public static $penalty =3;
    public static $offside =4;
    public static $yellowCard =5;
    public static $redCard =6;
    public static $matchEnded =7;

 // function to retrieve type of comment readable
    public static function getType($number){
        switch ($number) {
            case self::$matchBeginning:
                return "Match Beginning";

                break;
            case self::$goal:
                return "Goal";
                break;
            case self::$foul:
                return "Foul";
                break;
            case self::$penalty:
                return "Penalty";
                break;
            case self::$offside:
                return "Offside";
                break;
            case self::$yellowCard:
                return "yellow Card";
                break;
            case self::$redCard:
                return "red Card ";
                break;
            case self::$matchEnded:
                return "Match Ended";
                break;

        }


    }
    // function to check if match had started or not
    public static function checkIfMatchBegan($matchId){
        $startMatchComment=Comment::where('type',static::$matchBeginning)->where('match_id',$matchId)->first();
        if($startMatchComment){
            return true;
        }
        else{
            return false;

        }
    }
}