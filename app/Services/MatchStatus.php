<?php
/**
 * Created by PhpStorm.
 * User: saeed
 * Date: 11/10/17
 * Time: 05:41 ص
 */

namespace App\Services;



class MatchStatus
{
    public static $NoStart =0;
    public static $ongoing =1;
    public static $ended =2;

    public static function getCurrentStatus($number){
        switch ($number) {
            case 0:
                return "Have not yet begun";

                break;
            case 1:
                return "On Going";
                 break;
            case 2:
                return "Ended";
                 break;

        }


    }
}