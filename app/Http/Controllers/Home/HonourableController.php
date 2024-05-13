<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Honourable;

class HonourableController extends Controller
{
    //
    public function addHon(Request $request){
        $request->validate([
            'name' => 'required',
            'post' => 'required',
            'image' => 'required'
        ]);
        $hon = new Honourable;
        $hon->name=$request->input('name');
        $hon->post=$request->input('post');
        $hon->image=$request->input('image');
        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time()."_gallery_image.".$extension;
            $file->move('uploads/assets/gallery/honourable',$fileName);
            $hon->image = $fileName;
        }
        else{
            return $request;
            $hon->image = "blank";
        }

        $hon->save();
        return redirect('viewhonourable')->with('success','Honourable added successfully.');

    }
    public function viewHonourable(){
        $hon = Honourable::all();
        return view('superadmin.HomePageContents.digniteries.viewHonourables',compact('hon'));
    }
    public function editHon($id){
        $hon = Honourable::find($id);
        return view('superadmin.HomePageContents.digniteries.updateHonourable',compact('hon'));
    }
    public function updateHon($id, Request $request){
        $hon = Honourable::find($id);
        $hon->name=$request->input('name');
        $hon->post=$request->input('post');
        $hon->image=$request->input('image');
        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time()."_gallery_image.".$extension;
            $file->move('uploads/assets/gallery/honourable',$fileName);
            $hon->image = $fileName;
        }
        else{
            return $request;
            $hon->image = "blank";
        }

        $hon->update();
        return redirect('viewhonourable')->with('success','Honourable updated successfully.');

    }
    public function deleteHon($id){
        $dSlide = Honourable::find($id);
        $dSlide->delete();
        return redirect('viewhonourable')->with('success,Record Deleted');
    }
}
