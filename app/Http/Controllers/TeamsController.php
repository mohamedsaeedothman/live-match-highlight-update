<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class TeamsController extends Controller
{
    protected $paginationValue;

    public function __construct()
    {
        $this->paginationValue = 6;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // retrieve teams with pagination
        $teams = Team::paginate($this->paginationValue);
        return view('layouts.team.index')->with('teams',$teams);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // render create page
        return view('layouts.team.create');
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
        $validator = Validator::make($request->all(), Team::getCreateRules());
        if($validator->fails()){
            return redirect()->back()->withErrors( $validator->messages())->withInput();
        }
        // if validation pass insert data to my db
        $team = new Team($request->all());
        $team->save();
        // return back to my view  with success message
        Session::flash('message', 'Team Added Successfully.');
        return redirect()->to('dashboard/teams');
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        return view('layouts.team.edit')->with('team',$team);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        // form validation
        $validator = Validator::make($request->all(), Team::getUpdateRules($team));
        if($validator->fails()){
            return redirect()->back()->withErrors( $validator->messages())->withInput();
        }
        // if validation pass insert data to my db
        $team->name=$request->name;
        $team->save();
        Session::flash('message', 'Team Updated Successfully.');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        $team->delete();
        Session::flash('message', 'Team Deleted Successfully.');
        return redirect()->back();
    }
}
