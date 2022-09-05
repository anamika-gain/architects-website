<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function WhatWedo()
    {
        return view('what_we_do');
    }
    
    public function WhoWeAre()
    {
        return view('who_we_are');

    }
    public function WhatWeSay()
    {
        return view('what_we_say');
    }
    public function WhatTheySay()
    {
        return view('what_they_say');
    }
    public function JoinUs()
    {
        return view('join_us');
    }
    public function Search()
    {
        return view('search');
    }
    public function Privacy()
    {
        return view('privacy');
    }
    public function HowWeDo()
    {
        return view('how_we_do_it');
    }  
    public function Find()
    {
        return view('find-ia');
    }
   
}
