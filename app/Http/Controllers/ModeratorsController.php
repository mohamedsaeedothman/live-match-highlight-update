<?php

namespace App\Http\Controllers;

use App\Services\Roles;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class ModeratorsController extends Controller
{
    protected $role;

    public function __construct()
    {
        $this->role = Roles::$moderator;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // retrieve moderators
        $moderators = User::where('type',$this->role)->paginate(6);
        return view('layouts.moderator.index')->with('moderators',$moderators);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // render create page
        return view('layouts.moderator.create');

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
        $validator = Validator::make($request->all(), User::getCreateModeratorRules());
        if($validator->fails()){
            return redirect()->back()->withErrors( $validator->messages())->withInput();
        }
        // if validation pass insert data to my db
        $user = new User($request->all());
        $user->password = Hash::make($request->password);
        $user->type = Roles::$moderator;
        $user->save();
        // return back to my view  with success message
        Session::flash('message', 'Moderator Added Successfully.');
        return redirect()->to('dashboard/moderators');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('layouts.moderator.show')->with('moderator',$user);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {

        return view('layouts.moderator.edit')->with('moderator',$user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        // form validation
        $validator = Validator::make($request->all(), User::getUpdateModeratorRules($user));
        if($validator->fails()){
            return redirect()->back()->withErrors( $validator->messages())->withInput();
        }
        // if validation pass insert data to my db
        $user->first_name=$request->first_name;
        $user->last_name=$request->last_name;
        $user->email=$request->email;
        // check if password not empty update it
        if(!empty($request->password) )
            $user->password= Hash::make($request->password);
        $user->save();
        Session::flash('message', 'Moderator Updated Successfully.');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {

        $user->delete();
        Session::flash('message', 'Moderator Deleted Successfully.');
        return redirect()->back();
    }
}
