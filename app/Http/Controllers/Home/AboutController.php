<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function aboutMeg(){
        return view('home.navbar.aboutMeghalaya.aboutMeghalaya');
    }
}
