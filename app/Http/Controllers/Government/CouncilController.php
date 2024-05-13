<?php

namespace App\Http\Controllers\Government;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Councilofminister;
use App\Models\Department;

class CouncilController extends Controller
{
    //
    public function newcom(Request $request){
        $request->validate([
            'minister_name' => 'required',
            'designation' => 'required',
            'party' => 'required',
            'constituency' => 'required',
            'district' => 'required',
            'assembly' => 'required',
            'nativeplace' => 'required',
            'education' => 'required',
            'occupation' => 'required',
            'political' => 'required',
            'marital' => 'required',
            'additional' => 'required',
            'communication' => 'required',
            'permanent' => 'required',
            'email' => 'email|required',
            'contactno'=>'required'
        ]);
        $com = new Councilofminister;
        $com->minister_name=$request->input('minister_name');
        $com->designation=$request->input('designation');
        $com->party=$request->input('party');
        $com->constituency=$request->input('constituency');
        $com->district=$request->input('district');
        $com->assembly=$request->input('assembly');
        $com->nativeplace=$request->input('nativeplace');
        $com->education=$request->input('education');
        $com->occupation=$request->input('occupation');
        $com->political=$request->input('political');
        $com->marital=$request->input('marital');
        $com->additional=$request->input('additional');
        $com->email=$request->input('email');
        $com->communication=$request->input('communication');
        $com->permanent=$request->input('permanent');
        $com->contact_number=$request->input('contactno');
        $com->photo=$request->input('photo');
        if($request->hasfile('photo')){
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $fileName = time()."_profile.".$extension;
            $file->move('uploads/ministers/',$fileName);
            $com->photo = $fileName;
        }
        else{
            return $request;
            $com->photo = "blank";
        }
        $com->save();
        return redirect('viewcom')->with('success','Minister details created successfully.');

    }
    public function viewcom(){
        $details1 = Councilofminister::orderBy('minister_id','asc')->get();
        //  dd($details);
        $data = compact('details1');
        return view('superadmin.GovernmentContents.ViewContents.viewCouncilOfMinisters')->with($data);
    }
    public function editCom($id){
        $depts = Department::select('dept_id','department_name')->get();
        $com = Councilofminister::find($id);
        if(is_null($com)){
            //not null;
            return redirect('viewcom');
        }else{
            $data = compact('depts','com');
            return view('/superadmin/GovernmentContents/UpdateContents/updateCouncil')->with($data);
        }
    }
    public function updateCom($id,Request $request){
        $uCom = Councilofminister::find($id);
        // $updateDept->department_name=$req['department_name'];

        $uCom->minister_name=$request->input('minister_name');
        $uCom->designation=$request->input('designation');
        $uCom->party=$request->input('party');
        $uCom->constituency=$request->input('constituency');
        $uCom->district=$request->input('district');
        $uCom->assembly=$request->input('assembly');
        $uCom->nativeplace=$request->input('nativeplace');
        $uCom->education=$request->input('education');
        $uCom->occupation=$request->input('occupation');
        $uCom->political=$request->input('political');
        $uCom->marital=$request->input('marital');
        $uCom->additional=$request->input('additional');
        $uCom->email=$request->input('email');
        $uCom->communication=$request->input('communication');
        $uCom->permanent=$request->input('permanent');
        $uCom->contact_number=$request->input('contactno');
        $uCom->photo=$request->input('photo');
        $uCom->update();
        return redirect('viewcom');

    }
    public function deleteCom($id){
        $dCom = Councilofminister::find($id);
        $dCom->delete();
        return redirect('viewcom')->with('success,Record Deleted');

    }
    public function viewMinisterDetails($id){
        $viewDetails = Councilofminister::find($id);
        return view('superadmin.GovernmentContents.ViewContents.viewMinisterDetails',compact('viewDetails'));
    }
    public function publicViewMinister(){
        $minister = Councilofminister::all();
        return view('home.government.councilofministers.viewministers',compact('minister'));
    }
}
