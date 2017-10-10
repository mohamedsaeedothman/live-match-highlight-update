<?php

namespace App\Http\Controllers;

use App\Match;
use App\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class MatchesController extends Controller
{
    protected $paginationValue;
    protected $teams;

    public function __construct()
    {
        $this->paginationValue = 6;
        $this->teams = Team::all();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // retrieve teams with pagination
        $matches = Match::paginate($this->paginationValue);
        return view('layouts.match.index')->with('matches',$matches);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // render create page
        return view('layouts.match.create')->with('teams',$this->teams);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // form validation
        $validator = Validator::make($request->all(), Match::getRules());
        if($validator->fails()){
            return redirect()->back()->withErrors( $validator->messages())->withInput();
        }
        // if validation pass insert data to my db
        $match = new Match($request->all());
        $match->save();
        // return back to my view  with success message
        Session::flash('message', 'Match Added Successfully.');
        return redirect()->to('dashboard/matches');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Match  $match
     * @return \Illuminate\Http\Response
     */
    public function show(Match $match)
    {
        return view('layouts.match.show')->with('match',$match);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Match  $match
     * @return \Illuminate\Http\Response
     */
    public function edit(Match $match)
    {
        return view('layouts.match.edit')->with([
            'match'=>$match,
            'teams' => $this->teams

        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Match  $match
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Match $match)
    {
        // form validation
        $validator = Validator::make($request->all(), $match::getRules($match));
        if($validator->fails()){
            return redirect()->back()->withErrors( $validator->messages())->withInput();
        }
        // if validation pass insert data to my db
        $match->update($request->all());
        $match->first_team_score=$request->first_team_score;
        $match->second_team_score=$request->second_team_score;
        $match->save();
        Session::flash('message', 'Match Updated Successfully.');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Match  $match
     * @return \Illuminate\Http\Response
     */
    public function destroy(Match $match)
    {
        $match->delete();
        Session::flash('message', 'Match Deleted Successfully.');
        return redirect()->back();
    }
}
