<?php

namespace App\Http\Controllers\Navbar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Keycontact;

class KeycontactController extends Controller
{
    //
    //for Key Contacts
function addNewContact(Request $req){
    $req->validate([
    
    ]);
    $fileModel = new Keycontact;
    $fileModel->name = $req->input('name');
    $fileModel->department = $req->input('department');
    $fileModel->designation = $req->input('designation');
    $fileModel->contact_no = $req->input('contact_no');
    $fileModel->email = $req->input('email');

    $fileModel->save();
    return back()
    ->with('success','New Contact has been uploaded.');
}
public function viewContact(){
    $contact = Keycontact::all();
    return view('contentcreators.homecontents.viewhomecontents.viewKeyContacts',compact('contact'));
}
public function deleteContact($id){
    $dcontact = Keycontact::find($id);
    $dcontact->delete();
    return redirect('viewcontact')->with('success','Record Deleted');

}
public function publicViewKeyContact(){
    $viewcontact =Keycontact::all();
    return view('home.navbar.keycontact.keyContacts',compact('viewcontact'));
}
public function aboutKeyContact($id){
    $viewcontact =Keycontact::find($id);
    return view('home.navbar.keycontact.keyContactDetails',compact('viewcontact'));
}
}
