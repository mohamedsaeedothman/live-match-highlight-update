<?php

namespace App\Http\Controllers;

use App\Match;
use App\Services\MatchStatus;
use Illuminate\Http\Request;
use Carbon\Carbon;


class FrontendController extends Controller
{
    public function index(){

        //get today matches
        $todayMatches=Match::where('match_date', Carbon::today())->get();
        //get tomorrow matches
        $tomorrowMatches=Match::where('match_date', Carbon::tomorrow())->get();
        //get yestarday matches
        $yesterdayMatches=Match::where('match_date', Carbon::yesterday())->get();

        // pass data to view
    return view('frontend.index')->with([
        'todayMatches'=>$todayMatches,
        'tomorrowMatches' =>$tomorrowMatches,
        'yesterdayMatches' =>$yesterdayMatches
    ]);

    }

    // function to show match details

    public function show($matchId){

        $match=Match::with('comments')->where('id',$matchId)->first();
        if(!$match){
            return redirect('errors/404');
        }
        return view('frontend.details')->with('match',$match);

    }
}
