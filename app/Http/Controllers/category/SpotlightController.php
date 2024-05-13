<?php
namespace App\Http\Controllers\categories;
use App\Models\Spotlight;
use App\Models\Language;
use Illuminate\Http\Request;
use DB;

class SpotlightController extends Controller
{
    //
    public function addNewSpotlight(Request $request){
        $spot = new Spotlights;
        //$spot->dept_id=$request->input('department');
        // $spot->dist_id=$request->input('district');
        $spot->title=$request->input('title');
        $spot->lang_id=$request->input('language');
        $spot->id=$request->input('publish');
        $spot->url=$request->input('url');
        $spot->pdf=$request->input('pdf');
        $spot->keywords=$request->input('keywords');
        $spot->filesize=$request->file('pdf')->getSize();


        if($request->hasfile('pdf')){
            $file = $request->file('pdf');
            $extension = $file->getClientOriginalExtension();
            $fileName = time()."_spot.".$extension;
            $file->move('uploads/spotlights/',$fileName);
            $spot->pdf = $fileName;
        }else{
            return $request;
            $spot->pdf = "blank";
        }
        $spot->save();
        return redirect("viewspot")
        ->with('success','File has been uploaded.')
                    ->with('file', $fileName);
    }
    public function viewSpotlight(){
        $vspot = Spotlights::all();
        return view('contentcreators.categories.viewCategories.viewSpotlights',compact('vspot'));
    }
    public function viewSpotlightDetails($id){
        $spot = DB::table('spotlights')
                //->join('departments','departments.dept_id','=','acts.dept_id')
                ->join('publish','publish.id','=','spotlights.content_id')
                ->join('languages','languages.lang_id','=','spotlights.lang_id')
                ->where('spotlights.content_id',$id)
                ->first();
        return view('contentcreators.categories.viewCategories.viewdetails.viewspotdetails',compact('spot'));
    }
    public function downloadSpotlight(Request $request,$file){
        return response()->download(public_path('/uploads/spotlights/'.$file));
    }
    public function deleteSpotlight($id){
        $dspot = Spotlights::find($id);
        $dspot->delete();
        return redirect('viewspot')->with('success','Record deleted');
    }
    
    public function editSpotlight($id){
        $spot=Spotlights::find($id);
        $language = Language::all();
        return view('contentcreators.categories.updateCategories.updateSpotlights',compact('spot','language'));
    }
    public function updateSpotlight(Request $request,$id){
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
        $spot = Spotlights::find($id);
        if(isset($request->pdf)){
            $spot->pdf=$request->input('pdf');
            if($request->hasfile('pdf')){
                $file = $request->file('pdf');
                $extension = $file->getClientOriginalExtension();
                $fileName = time()."_spot.".$extension;
                $file->move('uploads/spotlights/',$fileName);
                $spot->pdf = $fileName;
            }else{
                return $request;
                $spot->pdf = "blank";
            }
        }
        $spot->title=$request->input('title');
        $spot->publish=$request->input('publish');
        $spot->lang_id=$request->input('language');
        $spot->url=$request->input('url');
        $spot->keywords=$request->input('keywords');

        $spot->update();
        return back()
        ->with('success','File updated successful.');

    }
    public function sendToPublisher(Request $request, $id)
    {
        $spot= Spotlights::find($id);
        if($spot->status=='0' || $spot->status=='3'){
            $spot->update(['status' => '1']);
            return back()->with('success', 'Sent to publisher!');
        }else{
            echo "Not Found";
        }
       
    }
    public function publicViewSpot(){
        $viewspot = DB::table('spotlights')->orderBy('content_id','desc')->get();
        return view('home.category.spot.spotlights',compact('viewSpotlight'));
    }
    public function aboutSpotlight($id){
        // $viewSpot = Spotlight::find($id);
        $viewspot = DB::table('spotlights')
                    ->join('departments','departments.dept_id','=','spotlights.dept_id')
                    ->where('spotlights.content_id',$id)
                    ->first();
        return view('home.category.spot.viewSpotlights',compact('viewSpotlight'));
    }
  
}
