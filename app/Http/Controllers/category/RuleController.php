<?php

namespace App\Http\Controllers\category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rule;


class RuleController extends Controller
{
    //
    public function addNewRule(Request $request){
        $request->validate([
            'department'=>'required',
            'title'=>'required',
            'category'=>'required',
            'pdf'=>'required|mimes:jpg,pdf,txt,xlx,xls,csv|max:2048'
        ]);

        $uploadRule = new Rule;
        $uploadRule->department=$request->input('department');
        $uploadRule->title=$request->input('title');
        $uploadRule->category=$request->input('category');
        $uploadRule->pdf=$request->input('pdf');

        if($request->hasfile('pdf')){
            $file = $request->file('pdf');
            $extension = $file->getClientOriginalExtension();
            $fileName = time()."_rule.".$extension;
            $file->move('uploads/rules/',$fileName);
            $uploadRule->pdf = $fileName;
        }else{
            return $request;
            $uploadRule->pdf = "blank";
        }
        $uploadRule->save();
        return redirect("viewrule")
        ->with('success','File has been uploaded.')
                    ->with('file', $fileName);
    }
    public function viewRule(){
        $vrule = Rule::all();
        return view('contentcreators.categories.viewCategories.viewRules',compact('vrule'));
    }
    public function deleteRule($id){
        $drule = Rule::find($id);
        $drule->delete();
        return redirect('viewrule')->with('success','Record Deleted');
    }
    public function editRule($id){
        $rule = Rule::find($id);
        return view("contentcreators.categories.updateCategories.updateRules",compact('rule'));
    }
    public function updateRule(Request $request, $id){
        $rule = Rule::find($id);
        $rule->department=$request->input('department');
        $rule->title=$request->input('title');
        $rule->category=$request->input('category');
        $rule->pdf=$request->input('pdf');

        if($request->hasfile('pdf')){
            $file = $request->file('pdf');
            $extension = $file->getClientOriginalExtension();
            $fileName = time()."_rule.".$extension;
            $file->move('uploads/rules/',$fileName);
            $rule->pdf = $fileName;
        }else{
            return $request;
            $rule->pdf = "blank";
        }
        $rule->update();
        return redirect("viewrule")
        ->with('success','File updated successfully.')
                    ->with('file', $fileName);
    }
}
