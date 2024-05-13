<?php

namespace App\Http\Controllers\category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Form;

class FormController extends Controller
{
    //
    public function addNewForm(Request $request){
        $request->validate([
            'department'=>'required',
            'title'=>'required',
            'pdf'=>'required|mimes:jpg,pdf,txt,xlx,xls,csv|max:2048'
        ]);
        $uploadF = new Form;
        $uploadF->dept_id=$request->input('department');
        $uploadF->org_name_id=$request->input('org_name');
        $uploadF->dist_id=$request->input('district');
        $uploadF->title=$request->input('title');
        $uploadF->form_number=$request->input('form_no');
        $uploadF->classification=$request->input('classification');
        $uploadF->category_id=$request->input('category');
        $uploadF->associate_service=$request->input('associate');
        $uploadF->description=$request->input('desc');
        $uploadF->lang_id=$request->input('language');
        $uploadF->url=$request->input('url');
        $uploadF->pdf=$request->input('pdf');
        $uploadF->keywords=$request->input('keywords');
        $uploadF->filesize=$request->file('pdf')->getSize();

        if($request->hasfile('pdf')){
            $file = $request->file('pdf');
            $extension = $file->getClientOriginalExtension();
            $fileName = time()."_form.".$extension;
            $file->move('uploads/forms/',$fileName);
            $uploadF->pdf = $fileName;
        }else{
            return $request;
            $uploadF->pdf = "blank";
        }
        $uploadF->save();
        return redirect("viewform")
        ->with('success','File has been uploaded.')
                    ->with('file', $fileName);
    }
    public function viewForm(){
        $vform = Form::all();
        return view("contentcreators.categories.viewCategories.viewForms",compact('vform'));
    }
    public function deleteForm($id){
        $dform = Form::find($id);
        $dform->delete();
        return redirect('viewform')->with('success','record deleted');
    }
    public function editForm($id){
        $form = Form::find($id);
        return view("contentcreators.categories.updateCategories.updateForms",compact('form'));
    }
    public function updateForm(Request $request, $id){
        $form = Form::find($id);
        $form->dept_id=$request->input('department');
        $form->org_name_id=$request->input('org_name');
        $form->dist_id=$request->input('district');
        $form->title=$request->input('title');
        $form->form_number=$request->input('form_no');
        $form->classification=$request->input('classification');
        $form->category_id=$request->input('category');
        $form->associate_service=$request->input('associate');
        $form->description=$request->input('desc');
        $form->lang_id=$request->input('language');
        $form->url=$request->input('url');
        $form->pdf=$request->input('pdf');

        if($request->hasfile('pdf')){
            $file = $request->file('pdf');
            $extension = $file->getClientOriginalExtension();
            $fileName = time()."_form.".$extension;
            $file->move('uploads/forms/',$fileName);
            $form->pdf = $fileName;
        }else{
            return $request;
            $form->pdf = "blank";
        }
        $form->update();
        return redirect("viewform")
        ->with('success','File updated successfully.')
                    ->with('file', $fileName);
    }
}
