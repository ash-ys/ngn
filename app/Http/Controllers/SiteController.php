<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function getHome(){
        return view('home');
    }

    
    public function getAboutUs(){
        return view('about');
    }
    public function getProjects(){
        return view('projects');
    }
    public function getNews(){
        return view('news');
    }
}
