<?php

namespace App\Http\Controllers\Gallery;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Galleryimage;
use App\Models\Galleryvideo;
use DB;

class GalleryController extends Controller
{
    //
    public function editGallery(){
        return view('superadmin/superadmincontents/GalleryContents/editGallery');
    }
    public function addImage(Request $request){
        $request->validate([
            'image_name' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png,bmp,tiff |max:4096'
        ]);
        $image = new Galleryimage;
        $image->image_name=$request->input('image_name');
        $image->image=$request->input('image');
        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time()."_gallery_image.".$extension;
            $file->move('uploads/assets/gallery/images',$fileName);
            $image->image = $fileName;
        }
        else{
            return $request;
            $image->image = "blank";
        }

        $image->save();
        return redirect('viewimage')->with('success','Image added successfully.');
    }
    public function viewImages(){
        $images = DB::table('galleryimages')->get();
        //  dd($details);
        $data = compact('images');
        return view('superadmin.HomePageContents.GalleryContents.viewGalleryImages')->with($data);
    }
    public function editImage($id){
        $image=Galleryimage::find($id);
        return view('superadmin.superadmincontents.GalleryContents.updateImage',compact('image'));
    }
    public function updateImage($id, Request $request){
        $image=Galleryimage::find($id);
        $image->image_name=$request->input('image_name');
        $image->image=$request->input('image');
        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time()."_gallery_image.".$extension;
            $file->move('uploads/assets/gallery/images',$fileName);
            $image->image = $fileName;
        }
        else{
            return $request;
            $image->image = "blank";
        }

        $image->update();
        return redirect('viewimage')->with('success','Image updated successfully.');

    }
    public function deleteImage($id){
        $delimage=Galleryimage::find($id);
        $delimage->delete();
        return redirect('viewimage')->with('success','Image deleted successfully.');

    }
    //===================================================================================================
    public function addVideo(Request $request){
        $request->validate([
            'video_name' => 'required',
            'video' => 'mimes:mp4,mov,ogg | max:20000',
            'video_link' => 'required'
        ]);
        $video = new Galleryvideo;
        $video->video_name=$request->input('video_name');
        $video->video=$request->input('video');
        $video->video_link=$request->input('video_link');
        if($request->hasfile('video')){
            $file = $request->file('video');
            $extension = $file->getClientOriginalExtension();
            $fileName = time()."_gallery_video.".$extension;
            $file->move('uploads/assets/gallery/videos',$fileName);
            $video->video = $fileName;
        }
        else{
            return $request;
            $video->video = "blank";
        }
        $video->save();
        return redirect('viewvideo')->with('success','Video added successfully.');
    }
    //mimes:mp4,mov,ogg | max:20000
    public function viewVideos(){
        $videos = DB::table('galleryvideos')->get();
        //  dd($details);
        return view('superadmin.HomePageContents.GalleryContents.viewGalleryVideos',compact('videos'));
    }
    public function editVideo($id){
        $video=Galleryvideo::find($id);
        return view('superadmin.superadmincontents.GalleryContents.updateVideo',compact('video'));
    }
    public function updateVideo($id, Request $request){
        $video = Galleryvideo::find($id);
        $video->video_name=$request->input('video_name');
        $video->video=$request->input('video');
        $video->video_link=$request->input('video_link');
        if($request->hasfile('video')){
            $file = $request->file('video');
            $extension = $file->getClientOriginalExtension();
            $fileName = time()."_gallery_video.".$extension;
            $file->move('uploads/assets/gallery/videos',$fileName);
            $video->video = $fileName;
        }
        else{
            return $request;
            $video->video = "blank";
        }
        $video->update();
        return redirect('viewvideo')->with('success','Video update successfully.');
    }
    public function deleteVideo($id){
        $delvideo = Galleryvideo::find($id);
        $delvideo->delete();
        return redirect('viewvideo')->with('success','Video deleted successfully.');

    }
    
    public function viewGallery(){
        $images = DB::table('galleryimages')->get();
        $videos = DB::table('galleryvideos')->get();
        return view('superadmin/superadmincontents/GalleryContents/viewGalleryContents',compact('images','videos'));
    } 
}
