<?php

namespace App\Http\Controllers\Government;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Iaslist;

class IasController extends Controller
{
    //
    public function newias(Request $request){
        $request->validate([
            'ias_name' => 'required',
            'position' => 'required',
            'present_post' => 'required',
            'joining' => 'required'
        ]);
        $ias = new Iaslist;
        $ias->ias_name=$request->input('ias_name');
        $ias->position=$request->input('position');
        $ias->present_post=$request->input('present_post');
        $ias->joining=$request->input('joining');
        $ias->save();
        return redirect('viewias')->with('success','IAS created successfully.');

    }
    public function viewias(){
        $details2 = Iaslist::all();
        //  dd($details);
        $data = compact('details2');
        return view('superadmin/GovernmentContents/ViewContents/viewIas')->with($data);
    }
    public function editias($id){
        $ias = Iaslist::find($id);
        return view('superadmin.GovernmentContents.UpdateContents.updateias',compact('ias'));
    }
    public function updateias($id, Request $request){
        $ias = Iaslist::find($id);
        $ias->ias_name=$request->input('ias_name');
        $ias->position=$request->input('position');
        $ias->present_post=$request->input('present_post');
        $ias->joining=$request->input('joining');
        $ias->update();
        return redirect('viewias')->with('success','IAS updated successfully.');
    }
    public function deleteias($id){
        $delias = Iaslist::find($id);
        $delias->delete();
        return redirect('viewias')->with('success','IAS record successfully deleted');
    }
    public function publicViewIAS(){
        $viewias = Iaslist::all();
        return view('home.government.ias.viewIas',compact('viewias'));
    }
}
