<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    // Creating Rules for Email and Password
    protected $rules=[
        'email' => 'required|email', // make sure the email is an actual email
        'password' => 'required|alphaNum|min:3' // password has to be greater than 3 characters and can only be alphanumeric and);
    ];

    public function index()
    {
        return view('layouts.index');
    }

    public function showLogin()
    {
            // show the login form
             return View('layouts.login');
    }

    public function doLogin(Request $request)
    {
             // process the login form

			$validator = Validator::make($request->all() , $this->rules);

			// if the validator fails, redirect back to the form

			if ($validator->fails())
            {
                return Redirect::to('login')->withErrors($validator) // send back all errors to the login form
                ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
            }
            else
            {

                // create our user data for the authentication

                $userData = array(
                    'email' => Input::get('email') ,
                    'password' => Input::get('password')
                );

                // attempt to do the login

                if (Auth::attempt($userData))
                {
                    // Redirect to Dashboard
                    return Redirect::to('dashboard');

                }
                else
                {
                    // validation not successful, send back to form with message
                    Session::flash('message', 'Kindly Check Your Email Or Password Again.');

                    return Redirect::to('login');
                }
            }
			}

    public function logout(){

            // logout user
            Auth::logout();
            // redirect to login page
            return Redirect::to('login');


    }


}
