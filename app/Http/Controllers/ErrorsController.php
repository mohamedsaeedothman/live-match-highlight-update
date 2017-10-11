<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ErrorsController extends Controller
{
    public function  get401(){
        return view('layouts.errors.unAuthorized');

    }

    public function  get404(){
        return view('layouts.errors.404');

    }

}
