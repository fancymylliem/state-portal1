<?php

namespace App\Http\Controllers\category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Act;
use App\Models\Department;
use App\Models\District;
use App\Models\Language;

use DB;

class ActController extends Controller
{
    //
    public function addNewAct(Request $request){
        $request->validate([
            // 'department'=>'required',
            // 'district'=>'required',
            // 'title'=>'required',
            // 'number'=>'required',
            // 'year'=>'required',
            // 'extent'=>'required',
            // 'commencement_date'=>'required',
            // 'act_objective'=>'required',
            // 'language'=>'required',
            'pdf'=>'nullable|mimes:jpg,pdf,txt,xlx,xls,csv|max:2048'
        ]);
        $uploadAct = new Act;
        $uploadAct->dept_id=$request->input('department');
        // $uploadAct->dist_id=$request->input('district');
        $uploadAct->title=$request->input('title');
        $uploadAct->number=$request->input('number');
        $uploadAct->year=$request->input('year');
        $uploadAct->short_title=$request->input('short_title');
        $uploadAct->extent=$request->input('extent');
        $uploadAct->commencement_date=$request->input('commencement_date');
        $uploadAct->act_objective=$request->input('act_objective');
        $uploadAct->lang_id=$request->input('language');
        $uploadAct->url=$request->input('url'); 
        $uploadAct->pdf=$request->input('pdf');
        $uploadAct->keywords=$request->input('keywords');
        $uploadAct->filesize=$request->file('pdf')->getSize();


        if($request->hasfile('pdf')){
            $file = $request->file('pdf');
            $extension = $file->getClientOriginalExtension();
            $fileName = time()."_act.".$extension;
            $file->move('uploads/acts/',$fileName);
            $uploadAct->pdf = $fileName;
        }else{
            return $request;
            $uploadAct->pdf = "blank";
        }
        $uploadAct->save();
        return redirect("viewact")
        ->with('success','File has been uploaded.')
                    ->with('file', $fileName);
    }
    public function viewAct(){
        $vact = Act::all();
        return view('contentcreators.Acts.viewActs',compact('vact'));
    }
    public function viewActDetails($id){
        $act = DB::table('acts')
                ->join('departments','departments.dept_id','=','acts.dept_id')
                // ->join('districts','districts.dist_id','=','acts.dist_id')
                ->join('languages','languages.lang_id','=','acts.lang_id')
                ->where('acts.act_id',$id)
                ->first();
        return view('contentcreators.categories.viewCategories.viewdetails.viewactdetails',compact('act'));
    }
    public function downloadAct(Request $request,$file){
        return response()->download(public_path('/uploads/acts/'.$file));
    }
    public function deleteAct($id){
        $dact = Act::find($id);
        $dact->delete();
        return redirect('viewact')->with('success','Record deleted');
    }
    
    public function editAct($id){
        $act=Act::find($id);
        $depts = Department::all();
        $districts = District::all();
        $language = Language::all();
        return view('contentcreators.categories.updateCategories.updateActs',compact('act','depts','districts','language'));
    }
    public function updateAct(Request $request,$id){
        $request->validate([
            // 'department'=>'required',
            // 'district'=>'required',
            // 'title'=>'required',
            // 'number'=>'required',
            // 'year'=>'required',
            // 'extent'=>'required',
            // 'commencement_date'=>'required',
            // 'act_objective'=>'required',
            // 'language'=>'required',
            'pdf'=>'nullable|mimes:jpg,pdf,txt,xlx,xls,csv|max:2048'
        ]);
        $act = Act::find($id);
        if(isset($request->pdf)){
            $act->pdf=$request->input('pdf');
            if($request->hasfile('pdf')){
                $file = $request->file('pdf');
                $extension = $file->getClientOriginalExtension();
                $fileName = time()."_act.".$extension;
                $file->move('uploads/acts/',$fileName);
                $act->pdf = $fileName;
            }else{
                return $request;
                $act->pdf = "blank";
            }
        }
        $act->dept_id=$request->input('department');
        // $act->dist_id=$request->input('district');
        $act->title=$request->input('title');
        $act->number=$request->input('number');
        $act->year=$request->input('year');
        $act->short_title=$request->input('short_title');
        $act->extent=$request->input('extent');
        $act->commencement_date=$request->input('commencement_date');
        $act->act_objective=$request->input('act_objective');
        $act->lang_id=$request->input('language');
        $act->url=$request->input('url');
        $act->keywords=$request->input('keywords');

        
        $act->update();
        return back()
        ->with('success','File updated successful.');

    }
    public function sendToPublisher(Request $request, $id)
    {
        $act = Act::find($id);
        if($act->status=='0' || $act->status=='3'){
            $act->update(['status' => '1']);
            return back()->with('success', 'Sent to publisher!');
        }else{
            echo "Not Found";
        }
       
    }
    public function publicViewAct(){
        $viewAct = DB::table('acts')->orderBy('act_id','desc')->get();
        return view('home.category.act.acts',compact('viewAct'));
    }
    public function aboutAct($id){
        // $viewAct = Act::find($id);
        $viewAct = DB::table('acts')
                    ->join('departments','departments.dept_id','=','acts.dept_id')
                    ->where('acts.act_id',$id)
                    ->first();
        return view('home.category.act.viewact',compact('viewAct'));
    }
   
}
