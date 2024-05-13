<?php

namespace App\Http\Controllers\category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Scheme;


class SchemeController extends Controller
{
    //
    public function addNewScheme(Request $request){
        $request->validate([
            'department'=>'required',
            'title'=>'required',
            'desc'=>'required',
            'sbenifici'=>'required',
            'sbenifit'=>'required',
            'htavail'=>'required',
            'sponsors'=>'required',
            'agefrom' =>'nullable',
            'to' =>'nullable',
            'introduce'=>'required',
            'pdf'=>'required|mimes:jpg,pdf,txt,xlx,xls,csv|max:2048'
        ]);
        $uploadS = new Scheme;
        $uploadS->department = $request->input('department');
        $uploadS->title = $request->input('title');
        $uploadS->desc = $request->input('desc');
        $uploadS->sbenifici = $request->input('sbenifici');
        $uploadS->sbenifit = $request->input('sbenifit');
        $uploadS->htavail = $request->input('htavail');
        $uploadS->sponsors = $request->input('sponsors');
        $uploadS->agefrom = $request->input('agefrom');
        $uploadS->to = $request->input('to');
        $uploadS->introduce = $request->input('introduce');
        $uploadS->pdf = $request->input('pdf');

        if($request->hasfile('pdf')){
            $file = $request->file('pdf');
            $extension = $file->getClientOriginalExtension();
            $fileName = time()."_scheme.".$extension;
            $file->move('uploads/schemes/',$fileName);
            $uploadS->pdf = $fileName;
        }
        else{
            return $request;
            $uploadS->pdf = "blank";
        }
        $uploadS->save();
        return redirect("viewscheme")
        ->with('success','File has been uploaded.')
                    ->with('file', $fileName);
    }
    public function viewSchemes(){
        $vscheme = Scheme::all();
        return view("contentcreators.categories.viewCategories.viewSchemes",compact('vscheme'));
    }
    public function deleteScheme($id){
        $dscheme = Scheme::find($id);
        $dscheme->delete();
        return redirect('viewscheme')->with('success','record deleted');
    }
    public function editScheme($id){
        $scheme = Scheme::find($id);
        return view('contentcreators.categories.updateCategories.updateScheme',compact('scheme'));

    }
    public function updateScheme(Request $request, $id){
        $scheme = Scheme::find($id);
        $scheme->department = $request->input('department');
        $scheme->title = $request->input('title');
        $scheme->desc = $request->input('desc');
        $scheme->sbenifici = $request->input('sbenifici');
        $scheme->sbenifit = $request->input('sbenifit');
        $scheme->htavail = $request->input('htavail');
        $scheme->sponsors = $request->input('sponsors');
        $scheme->agefrom = $request->input('agefrom');
        $scheme->to = $request->input('to');
        $scheme->introduce = $request->input('introduce');
        $scheme->pdf = $request->input('pdf');

        if($request->hasfile('pdf')){
            $file = $request->file('pdf');
            $extension = $file->getClientOriginalExtension();
            $fileName = time()."_scheme.".$extension;
            $file->move('uploads/schemes/',$fileName);
            $scheme->pdf = $fileName;
        }
        else{
            return $request;
            $scheme->pdf = "blank";
        }
        $scheme->update();
        return redirect("viewscheme")
        ->with('success','File has been updated.')
                    ->with('file', $fileName);

    }
}
