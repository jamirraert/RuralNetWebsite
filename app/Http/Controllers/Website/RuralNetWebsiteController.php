<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RuralNetWebsiteController extends Controller
{
    public function home()
    {
        return view('website.pages.home');
    }

    public function insuranceSolution()
    {
        return view('website.pages.insurancesolution');
    }

    public function contact()
    {
        return view('website.pages.contact');
    }

    public function privacyPolicy()
    {
        return view('website.pages.privacypolicy');
    }
    
}
