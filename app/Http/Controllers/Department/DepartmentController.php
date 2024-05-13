<?php

namespace App\Http\Controllers\Department;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
     //function for add new department
     
    public function publicViewDept(){
        $viewdept = Department::all();
        return view('home.government.departments.depts',compact('viewdept'));
    }
    public function aboutDept($id){
        $viewdept = Department::find($id);
        return view('home.government.departments.viewdept',compact('viewdept'));
    }
}
