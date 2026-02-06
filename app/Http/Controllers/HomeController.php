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

    // test page
    public function test()
    {
        return view('pages.test');
    }
    // Memberships page
    public function memberships()
    {
        return view('pages.memberships');
    }
    // Packages page
    public function packages()
    {
        return view('pages.packages');
    }

    // business
    public function businessopportunities()
    {
        return view('pages.businessopportunities');
    }

    // opd
    public function opd()
    {
        return view('pages.opd');
    }
    // pharmacy
    public function pharmacy()
    {
        return view('pages.pharmacy');
    }
    // hospital
    public function hospital()
    {
        return view('pages.hospital');
    }

    // about
    public function about()
    {
        return view('pages.about');
    }

    // contact
    public function contact()
    {
        return view('pages.contact');
    }

    // form
    public function forms()
    {
        return view('pages.forms');
    }



    // Download Reports page
    public function downloadReports()
    {
        return view('pages.downloadreports');
    }

    // terms
    public function terms()
    {
        return view('pages.termsandcondition');
    }

    // privacy policy
    public function privacyPolicy()
    {
        return view('pages.privacypolicy');
    }

    // login
    public function login()
    {
        return view('pages.login');
    }
}
