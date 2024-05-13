<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slide;
use App\Models\Honourable;

class HomeController extends Controller
{
    //
    public function editHomePage(){
        $hon = Honourable::all();
        $slides = Slide::all();
        return view('superadmin.HomePageContents.createHomeContents',compact('hon','slides'));
    }
    public function addSlides(Request $request){
        $request->validate([
            'slide_name' => 'required',
            'about' => 'required',
            'image1' => 'required|mimes:jpg,jpeg,png,bmp,tiff |max:4096'
        ]);
        $slide = new Slide;
        $slide->slide_name=$request->input('slide_name');
        $slide->about=$request->input('about');
        $slide->image1=$request->input('image1');
        
        if($request->hasfile('image1')){
            $file1 = $request->file('image1');
            $extension1 = $file1->getClientOriginalExtension();
            $fileName1 = time()."_slide_image.".$extension1;
            $file1->move('uploads/assets/slides/images',$fileName1);
            $slide->image1 = $fileName1;
        }
        else{
            return $request;
            $slide->image1 = "blank";
        }

        $slide->save();
        return redirect('viewslide')->with('success','Slide created successfully.');

    }
    public function viewSlides(){
        $slides = Slide::all();
        return view("superadmin.HomePageContents.slides.viewSlides",compact('slides'));

    }
    public function editSlide($id){
        $slide = Slide::find($id);
        return view('superadmin.HomePageContents.slides.updateSlideShow',compact('slide'));
    }

    public function updateSlide($id ,Request $request){
        $slide = Slide::find($id);
        $slide->slide_name=$request->input('slide_name');
        $slide->about=$request->input('about');
        $slide->image1=$request->input('image1');
        
        if($request->hasfile('image1')){
            $file1 = $request->file('image1');
            $extension1 = $file1->getClientOriginalExtension();
            $fileName1 = time()."_slide_image.".$extension1;
            $file1->move('uploads/assets/slides/images',$fileName1);
            $slide->image1 = $fileName1;
        }
        else{
            return $request;
            $slide->image1 = "blank";
        }
        $slide->update();
        return redirect('viewslide')->with('success','Slide updated successfully.');

    }
    public function deleteSlide($id){
        $dSlide = Slide::find($id);
        $dSlide->delete();
        return redirect('viewslide')->with('success','Record Deleted');
    }
}
