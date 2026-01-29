<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Home page
    public function homePage()
    {
        return view('welcome');
    }

    // About page
    public function test()
    {
        return view('pages.test');
    }

    // Packages page
    public function packages()
    {
        return view('pages.packages');
    }

    // login
    public function login()
    {
        return view('pages.login');
    }
}
