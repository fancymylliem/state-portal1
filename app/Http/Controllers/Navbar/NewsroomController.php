<?php

namespace App\Http\Controllers\Navbar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsroomController extends Controller
{
    //
    public function getNewsRoom(){
        return view('home.navbar.newsroom.newsroom');
    }
}
