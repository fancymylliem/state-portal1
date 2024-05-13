<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publisher;
use Illuminate\Support\Facades\DB;


class PublisherController extends Controller
{
    //
    public function getPublisher(){
        $pub = Publisher::all();
        return view('admin.Publisher.addPublish',compact('pub'));
    }
    public function postPublisher(Request $request){
        $request->validate([
            'publish' => 'required'
        ]);
        $pub = new Publisher;
        $pub->publish=$request->input('publish');
        $pub->save();
        return redirect('viewPublish')->with('success','added successfully');
    }
    public function viewPublisher(){
        $pub = DB::table('publish')->get();
        return view('admin.Publisher.viewPublish',compact('pub'));
    }
    public function getUpdatePublisher($id){
        $pub = Publisher::find($id);
        return view('admin.Publisher.updatePublish',compact('pub'));
    }
    public function postUpdatePublisher($id,Request $request){
        $request->validate([
            'publish' => 'required'
        ]);
        $pub = Publisher::find($id);
        $pub->publish=$request->input('publish');
        $pub->update();
        return redirect('viewPublish')->with('success','updated successfully');
    }
    public function deletePublisher($id){
        $pub = Publisher::find($id);
        $pub->delete();
        return back()->with('success','Deleted Successfully');
    }

    
}
