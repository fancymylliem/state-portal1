<?php

namespace App\Http\Controllers\Navbar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Citizen;


class CitizenCharterController extends Controller
{
    //
    //for Citizen Charter
function addNewCitizenCharter(Request $req){
    $req->validate([
        'cc_pdf'=>'required|mimes:jpg,pdf,txt,xlx,xls,csv|max:2048'
    ]);
    $fileModel = new Citizen;
    $fileModel->title = $req->input('title');
    $fileModel->cc_pdf = $req->input('cc_pdf');

    if($req->hasfile('cc_pdf')){
        $file = $req->file('cc_pdf');
        $extension = $file->getClientOriginalExtension();
        $fileName = time()."_cc.".$extension;
        $file->move('uploads/citizen charter/',$fileName);
        $fileModel->cc_pdf = $fileName;
    }
    else{
        return $req;
        $fileModel->cc_pdf = "blank";
    }
    $fileModel->save();
    return back()
    ->with('success','File has been uploaded.')
                ->with('cc_pdf', $fileName);

}
public function viewCitizenCharter(){
    $citizen = Citizen::all();
    return view('contentcreators.homecontents.viewhomecontents.viewCitizenC',compact('citizen'));
}
public function deleteCitizenCharter($id){
    $deletecc = Citizen::find($id);
    $deletecc->delete();
    return redirect('viewcitizencharter')->with('success','Record Deleted');

}
public function publicViewCitizenCharter(){
    $viewcitizen =Citizen::all();
    return view('home.navbar.citizencharter.citizenCharters',compact('viewcitizen'));
}
public function aboutCitizenCharter($id){
    $viewcitizen =Citizen::find($id);
    return view('home.navbar.citizencharter.citizenCharterDetails',compact('viewcitizen'));
}
}
