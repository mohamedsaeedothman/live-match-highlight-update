<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ErrorsController extends Controller
{
    // function to get 401 error page
    public function  get401(){
        return view('backend.layouts.errors.unAuthorized');

    }
    // function to get 404 error page

    public function  get404(){
        return view('backend.layouts.errors.404');

    }

}
