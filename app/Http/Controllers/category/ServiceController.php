<?php

namespace App\Http\Controllers\category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    //
    public function addNewService(Request $request){
        $request->validate([
            'department'=>'required',
            'title'=>'required',
            'desc'=>'required',
            'catagory'=>'required',
            'htavail'=>'required',
            'wtcontact'=>'required',
            'assoservice'=>'required',
            'pdf'=>'required|mimes:jpg,pdf,txt,xlx,xls,csv|max:2048'
        ]);

        $uploadServ = new Service;
        $uploadServ->department=$request->input('department');
        $uploadServ->title=$request->input('title');
        $uploadServ->desc=$request->input('desc');
        $uploadServ->catagory=$request->input('catagory');
        $uploadServ->htavail=$request->input('htavail');
        $uploadServ->wtcontact=$request->input('wtcontact');
        $uploadServ->assoservice=$request->input('assoservice');
        $uploadServ->pdf=$request->input('pdf');

        if($request->hasfile('pdf')){
            $file = $request->file('pdf');
            $extension = $file->getClientOriginalExtension();
            $fileName = time()."_service.".$extension;
            $file->move('uploads/services/',$fileName);
            $uploadServ->pdf = $fileName;
        }else{
            return $request;
            $uploadServ->pdf = "blank";
        }
        $uploadServ->save();
        return redirect("viewservice")
        ->with('success','File has been uploaded.')
                    ->with('file', $fileName);
    }
    public function viewService(){
        $vservice = Service::all();
        return view('contentcreators.categories.viewCategories.viewServices',compact('vservice'));
    }
    public function deleteService($id){
        $dservice = Service::find($id);
        $dservice->delete();
        return redirect('viewservice')->with('success','Record Deleted');
    }
    public function editService($id){
        $service = Service::find($id);
        return view('contentcreators.categories.updateCategories.updateService',compact('service'));
    }
    public function updateService(Request $request, $id){
        $service = Service::find($id);
        $service->department=$request->input('department');
        $service->title=$request->input('title');
        $service->desc=$request->input('desc');
        $service->catagory=$request->input('catagory');
        $service->htavail=$request->input('htavail');
        $service->wtcontact=$request->input('wtcontact');
        $service->assoservice=$request->input('assoservice');
        $service->pdf=$request->input('pdf');

        if($request->hasfile('pdf')){
            $file = $request->file('pdf');
            $extension = $file->getClientOriginalExtension();
            $fileName = time()."_service.".$extension;
            $file->move('uploads/services/',$fileName);
            $service->pdf = $fileName;
        }else{
            return $request;
            $service->pdf = "blank";
        }
        $service->update();
        return redirect("viewservice")
        ->with('success','File updated successfully.')
                    ->with('file', $fileName);
    }
}
