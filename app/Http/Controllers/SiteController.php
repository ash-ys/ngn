<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function getHome(){
        return view('template');
    }

    
    public function getAboutUs(){
        return view('templatetwo');
    }
}
