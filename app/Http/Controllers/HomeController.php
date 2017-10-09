<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function showLogin()
    {
        // show the form
        return View('layouts.login');
    }

    public function doLogin()
    {
        // process the form
    }
}
