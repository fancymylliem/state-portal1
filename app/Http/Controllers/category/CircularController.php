<?php

namespace App\Http\Controllers\category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Circularom;

class CircularController extends Controller
{
    //
    public function addNewCircularoms(Request $request){
        $request->validate([
            'department'=>'required',
            'title'=>'required',
            'noticeno'=>'required',
            'releasedate'=>'required',
            'pdf'=>'required|mimes:jpg,pdf,txt,xlx,xls,csv|max:2048'
        ]);
        $circularU = new Circularom;
        $circularU->department=$request->input('department');
        $circularU->title=$request->input('title');
        $circularU->noticeno=$request->input('noticeno');
        $circularU->releasedate=$request->input('releasedate');
        $circularU->pdf=$request->input('pdf');

        if($request->hasfile('pdf')){
            $file = $request->file('pdf');
            $extension = $file->getClientOriginalExtension();
            $fileName = time()."_circularom.".$extension;
            $file->move('uploads/circularoms/',$fileName);
            $circularU->pdf = $fileName;
        }else{
            return $request;
            $circularU->pdf = "blank";
        }
        $circularU->save();
        return redirect("viewcircularoms")
        ->with('success','File has been uploaded.')
                    ->with('file', $fileName);
    }
    public function viewCircularoms(){
        $vcircular = Circularom::all();
        return view('contentcreators.categories.viewCategories.viewCircularOMs',compact('vcircular'));
    }
    public function deleteCircularoms($id){
        $dcircular = Circularom::find($id);
        $dcircular->delete();
        return redirect('viewcircularoms')->with('success','Record Deleted');
    }
    public function editCircular($id){
        $circular= Circularom::find($id);
        return view('contentcreators.categories.updateCategories.updateCirculars',compact('circular'));
    }
    public function updateCircular(Request $request, $id){
        $circular = Circularom::find($id);
        $circular->department=$request->input('department');
        $circular->title=$request->input('title');
        $circular->noticeno=$request->input('noticeno');
        $circular->releasedate=$request->input('releasedate');
        $circular->pdf=$request->input('pdf');

        if($request->hasfile('pdf')){
            $file = $request->file('pdf');
            $extension = $file->getClientOriginalExtension();
            $fileName = time()."_circularom.".$extension;
            $file->move('uploads/circularoms/',$fileName);
            $circular->pdf = $fileName;
        }else{
            return $request;
            $circular->pdf = "blank";
        }
        $circular->update();
        return redirect("viewcircularoms")
        ->with('success','File updated successfully.')
                    ->with('file', $fileName);
    }
}
