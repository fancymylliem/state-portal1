<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slide;

class IndexController extends Controller
{
    //
    public function Index(){
        $slides = Slide::all();
        return view('home.index',compact('slides'));
    }
}
