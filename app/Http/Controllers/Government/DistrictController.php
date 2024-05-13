<?php

namespace App\Http\Controllers\Government;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\District;
use DB;

class DistrictController extends Controller
{
    //
   
    public function publicViewDist(){
        $viewdist = District::all();
        return view('home.government.districts.districts',compact('viewdist'));
    }
    public function aboutDist($id){
        $viewdist = District::find($id);
        return view('home.government.districts.districts',compact('viewdist'));
    }
}
