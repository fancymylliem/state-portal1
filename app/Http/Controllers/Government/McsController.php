<?php

namespace App\Http\Controllers\Government;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mcslist;
use DB;

class McsController extends Controller
{
    //
    public function newmcs(Request $request){
        $request->validate([
            'mcs_name' => 'required',
            'position' => 'required',
            'present_post' => 'required',
            'joining' => 'required',
            'assets' => 'required|mimes:pdf'
        ]);
        $mcs = new Mcslist;
        $mcs->mcs_name=$request->input('mcs_name');
        $mcs->position=$request->input('position');
        $mcs->present_post=$request->input('present_post');
        $mcs->joining=$request->input('joining');
        $mcs->assets=$request->input('assets');

        if($request->hasfile('assets')){
            $file = $request->file('assets');
            $extension = $file->getClientOriginalExtension();
            $fileName = time()."_asset.".$extension;
            $file->move('uploads/assets/',$fileName);
            $mcs->assets = $fileName;
        }
        else{
            return $request;
            $mcs->assets = "blank";
        }

        $mcs->save();
        return redirect('viewmcs')->with('success','MCS created successfully.');

    }
    public function viewmcs(){
        $details3 = Mcslist::all();
        //  dd($details);
        $data = compact('details3');
        return view('superadmin/GovernmentContents/ViewContents/viewMcs')->with($data);
    }
    public function editmcs($id){
        $mcs = Mcslist::find($id);
        return view('superadmin.GovernmentContents.UpdateContents.updatemcs',compact('mcs'));
    }
    public function updatemcs($id, Request $request){
        $mcs = Mcslist::find($id);
        $mcs->mcs_name=$request->input('mcs_name');
        $mcs->position=$request->input('position');
        $mcs->present_post=$request->input('present_post');
        $mcs->joining=$request->input('joining');
        $mcs->assets=$request->input('assets');

        if($request->hasfile('assets')){
            $file = $request->file('assets');
            $extension = $file->getClientOriginalExtension();
            $fileName = time()."_asset.".$extension;
            $file->move('uploads/assets/',$fileName);
            $mcs->assets = $fileName;
        }
        else{
            return $request;
            $mcs->assets = "blank";
        }

        $mcs->update();
        return redirect('viewmcs')->with('success','MCS updated successfully.');
    }
    public function deletemcs($id){
        $delmcs = Mcslist::find($id);
        $delmcs->delete();
        return redirect('viewmcs')->with('success','MCS record deleted successfully');
    }
    public function publicViewMCS(){
        $viewmcs = Mcslist::all();
        return view('home.government.mcs.viewmcs',compact('viewmcs'));
    }
}
