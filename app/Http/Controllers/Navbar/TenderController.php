<?php

namespace App\Http\Controllers\Navbar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tender;
use App\Models\Department;

use DB;

class TenderController extends Controller
{
    //for Tenders
    function addNewTender(Request $req){
        $req->validate([
            'title'=>'required',
            'department'=>'required',
            'ref_no'=>'required',
            'release_date'=>'required',
            // 'last_date'=>'required',
            // 'opening_date'=>'required',
            // 'ldate_display'=>'required',
            'pdf'=>'mimes:jpg,pdf,txt,xlx,xls,csv|max:2048'
        ]);
        $fileModel = new Tender;
        $fileModel->title = $req->input('title');
        $fileModel->dept_id = $req->input('department');
        $fileModel->ref_no = $req->input('ref_no');
        $fileModel->release_date = $req->input('release_date');
        $fileModel->last_date = $req->input('last_date');
        $fileModel->opening_date = $req->input('opening_date');
        $fileModel->display_date = $req->input('ldate_display');
        $fileModel->pdf = $req->input('pdf');
        $fileModel->filesize=$req->file('pdf')->getSize();


        if($req->hasfile('pdf')){
            $file = $req->file('pdf');
            $extension = $file->getClientOriginalExtension();
            $fileName = time()."_tender.".$extension;
            $file->move('uploads/tenders/',$fileName);
            $fileModel->pdf = $fileName;
        }
        else{
            return $req;
            $fileModel->pdf = "blank";
        }
        $fileModel->save();
        return redirect('viewtender')->with('success','File uploaded successfully.')
                    ->with('file', $fileName);
    }
    public function viewTender(){
        $tenders = DB::table('tenders')
                    ->join('departments','departments.dept_id','=','tenders.dept_id')->get();
        return view('contentcreators.homecontents.viewhomecontents.viewTenders',compact('tenders'));
    }
    public function deleteTenders($id){
        $dtender=Tender::find($id);
        $dtender->delete();
        return redirect('viewtender')->with('success','Record Deleted');
    }
    public function editTender($id){
        $tender = Tender::find($id);
        $depts = Department::all();
        return view('contentcreators.homecontents.updatehomecontents.updateTenders',compact('tender','depts'));
    }
    public function updateTender($id, Request $req){
        $tender = Tender::find($id);
        if(isset($request->pdf)){
            $tender->pdf = $req->input('pdf');
            if($req->hasfile('pdf')){
                $file = $req->file('pdf');
                $extension = $file->getClientOriginalExtension();
                $fileName = time()."_tender.".$extension;
                $file->move('uploads/tenders/',$fileName);
                $tender->pdf = $fileName;
            }
            else{
                return $req;
                $tender->pdf = "blank";
            }
        }
        $tender->title = $req->input('title');
        $tender->dept_id = $req->input('department');
        $tender->ref_no = $req->input('ref_no');
        $tender->release_date = $req->input('release_date');
        $tender->last_date = $req->input('last_date');
        $tender->opening_date = $req->input('opening_date');
        $tender->display_date = $req->input('ldate_display');
        
        $tender->update();
        return redirect('viewtender')->with('success','File updated successfully');
    }
    public function downloadTender(Request $request,$file){
        return response()->download(public_path('/uploads/tenders/'.$file));
    }
    public function sendToPublisher(Request $request, $id)
    {
        $tender = Tender::find($id);
        if($tender->status=='0' || $tender->status=='3'){
            $tender->update(['status' => '1']);
            return redirect('viewtender')->with('success', 'Sent to publisher!');
        }else{
            echo "Not Found";
        }    
    }
    public function viewTenderDetails($id){
        $tender = DB::table('tenders')
                ->join('departments','tenders.dept_id','=','departments.dept_id')
                ->where('tenders.tender_id',$id)
                ->first();
        return view('contentcreators.homecontents.viewhomecontents.viewDetails.viewTenderDetails',compact('tender'));
    }
    public function publicViewTender(Request $request){
        $date_upto = Tender::select('display_date')->get();
        $viewtender =DB::table('tenders')
                        ->join('departments','departments.dept_id','=','tenders.dept_id')
                        ->orderBy('tender_id','desc')
                        ->get();
        // $filteredData = $viewtender->filter(function ($item) use ($date_upto) {
        // return $item->created_at->greaterThan($date_upto);
        // });
        return view('home.navbar.tenders.tenders',compact('viewtender'));
    }
    public function aboutTender($id){
        // $viewtender =Tender::find($id);
        $viewtender =DB::table('tenders')
                    ->join('departments','tenders.dept_id','=','departments.dept_id')
                    ->where('tenders.tender_id',$id)
                    ->first();
        return view('home.navbar.tenders.tenderDetails',compact('viewtender'));
    }
    // public function searchTender(Request $request){
    //     $searchQuery = $request->input('searchQuery');

    //     // Perform the search query using Laravel's Eloquent
    //     $tenders = Tender::where('dept_id', 'LIKE', '%'.$searchQuery.'%')->get();

    //     return view('home.navbar.tenders.tenders', compact('tenders'));
    // }
}
