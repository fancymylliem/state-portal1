<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\User;
use App\Models\Category;

use App\Models\District;
use App\Models\Language;
use App\Models\Organisationname;

use App\Models\Govorder;
use App\Models\Act;
use App\Models\Document;

use App\Models\Tender;
use App\Models\Notification;
use App\Models\Spotlight;
use App\Models\Publisher;
use App\Models\Profileform;
use App\Models\Mapcategory;
use App\Models\Map;

use Auth;
use DB;
use Session;

class ContentCreatorController extends Controller
{
    public function creatorLoginPage(){
        // $depts = Department::select('dept_id','department_name')->get();
        // ,compact('depts'))
        return view('contentcreators/creatorLogin');
    }
    public function creatorLogin(Request $request){
        $request->validate([
            'email' => 'email | required',
            'password' => 'required'
        ]);
        $role = User::where('role','=','2')->first();
        $status = User::where('status','=','1')->first();
        $credentials = $request->only('email', 'password');
        if(!$status){
            echo "Your account status is pending";
        }else{
            if (Auth::attempt($credentials) && $role) {
                // Authentication successful
                return redirect('cdcdashboard');
                
        } else {
            // Authentication failed
            return back()->withError('Invalid credentials');
        }
        }        
    }
    public function ccLogout(){
        Session::flush();
        Auth::logout();
        return redirect('login');
    }
    public function CCIndex(){
        if(Auth::check()){
            $depts = Department::all();
            $pub = DB::table('publish')->get();
            $districts = District::all();
            $language = Language::all();
            $vc = Govorder::all();
            $category = Category::all();
            $act = Act::all();
            $spot = Spotlight::all();
            $doc = Document::all();
            $tender = Tender::all();
            $vspot = Spotlight::all();
            $notification = Notification::all();
            $vprof = Profileform::all();
            $map = Map::all();
            return view('contentcreators/ccDashboard',compact('vc','depts','map','pub','districts','vspot','vprof','spot','language','category','act','doc','tender','notification'));
        }
        else{
            echo "you are not authorised to visit this page";
        }
    }
//===================================================================================
    public function createCategoryContent(){
        $depts = Department::all();
        $orgs = Organisationname::all();
        $districts = District::all();
        $language = Language::all();
        $category = Category::all();
        $pub = DB::table('publish')->get();
        $position = DB::table('master_position')->get();
        // $language = Language::all();
        return view('contentcreators/categories/createCategoryContents',compact('depts','districts','position','language','orgs','pub','category'));
    }
    public function viewContents(){
        $vc = Govorder::all();
        return view('contentcreators/Government_order',compact('vc'));
    }
    public function ccSettings(){
        return view('contentcreators.settings');
    }
//==========================================================================

//for home page contents
public function homePage(){
    $depts = Department::all();
    return view('contentcreators.homecontents.createNavbarContents',compact('depts'));
}
    //======================================================================


// START OF ACTS MODULE

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
    return view('contentcreators.Acts.viewactdetails',compact('act'));
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
    return view('contentcreators.Acts.updateActs',compact('act','depts','districts','language'));
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
// END OF ACTS MODULE


//START OF RULES AND REGULATIONS MODULE

public function addNewRule(Request $request){
    $request->validate([
        'department'=>'required',
        'title'=>'required',
        'category'=>'required',
        'pdf'=>'required|mimes:jpg,pdf,txt,xlx,xls,csv|max:2048'
    ]);

    $uploadRule = new Rule;
    $uploadRule->department=$request->input('department');
    $uploadRule->title=$request->input('title');
    $uploadRule->category=$request->input('category');
    $uploadRule->pdf=$request->input('pdf');

    if($request->hasfile('pdf')){
        $file = $request->file('pdf');
        $extension = $file->getClientOriginalExtension();
        $fileName = time()."_rule.".$extension;
        $file->move('uploads/rules/',$fileName);
        $uploadRule->pdf = $fileName;
    }else{
        return $request;
        $uploadRule->pdf = "blank";
    }
    $uploadRule->save();
    return redirect("viewrule")
    ->with('success','File has been uploaded.')
                ->with('file', $fileName);
}
public function viewRule(){
    $vrule = Rule::all();
    return view('contentcreators.categories.viewCategories.viewRules',compact('vrule'));
}
public function deleteRule($id){
    $drule = Rule::find($id);
    $drule->delete();
    return redirect('viewrule')->with('success','Record Deleted');
}
public function editRule($id){
    $rule = Rule::find($id);
    return view("contentcreators.categories.updateCategories.updateRules",compact('rule'));
}
public function updateRule(Request $request, $id){
    $rule = Rule::find($id);
    $rule->department=$request->input('department');
    $rule->title=$request->input('title');
    $rule->category=$request->input('category');
    $rule->pdf=$request->input('pdf');

    if($request->hasfile('pdf')){
        $file = $request->file('pdf');
        $extension = $file->getClientOriginalExtension();
        $fileName = time()."_rule.".$extension;
        $file->move('uploads/rules/',$fileName);
        $rule->pdf = $fileName;
    }else{
        return $request;
        $rule->pdf = "blank";
    }
    $rule->update();
    return redirect("viewrule")
    ->with('success','File updated successfully.')
                ->with('file', $fileName);
}

//END OF RULES AND REGULATIONS MODULE


//START OF SPOTLIGHT MODULE

public function addNewSpotlight(Request $request){
    $spot = new Spotlight; 
    //$spot->content_id=$request->input('content_id');
    $spot->title=$request->input('title');
    $spot->description=$request->input('description');
    $spot->availability_name=$request->input('availability_name');
    $spot->lang_id=$request->input('language');
    $spot->publish=$request->input('publish');
    $spot->url_path=$request->input('url');
    $spot->pdf=$request->input('pdf');
    $spot->keywords=$request->input('keywords');
   // $spot->filesize=$request->file('pdf')->getSize();


  /*  if($request->hasfile('pdf')){
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
    ->with('file', $fileName);*/

    // Check if a PDF file is uploaded
if ($request->hasfile('pdf')) {
    $file = $request->file('pdf');
    if($file!==null){
    $extension = $file->getClientOriginalExtension();
    $fileName = time() . "_spot." . $extension;
    $file->move('uploads/spotlights/', $fileName);
    $spot->pdf = $fileName;
    $spot->url_path = '';
    }
} elseif ($request->filled('url')) {
    $spot->url_path = $request->input('url');
    $spot->pdf = '';
} else {
    $spot->url_path = $request->input('url');
}
// Save the spot
$spot->save();
return redirect("viewspot")
    ->with('success', 'Spotlight has been added successfully.');        
}
public function viewSpotlight(){
    $vspot = Spotlight::all();
    return view('contentcreators.Spotlight.viewSpotlights',compact('vspot'));
}
public function viewSpotlightDetails($id){
    $spot = DB::table('spotlights')
            ->join('publish','publish.publish_id','=','spotlights.publish_id')
            ->join('languages','languages.lang_id','=','spotlights.lang_id')
            ->where('spotlights.content_id',$id)
            ->first();
    return view('contentcreators.Spotlight.viewspotdetails',compact('spot'));
}
public function downloadSpotlight(Request $request,$file){
    return response()->download(public_path('/uploads/spotlights/'.$file));
}
public function deleteSpotlight($id){
    $dspot = Spotlight::find($id);
    $dspot->delete();
    return redirect('viewspot')->with('success','Record deleted');
}
public function editSpotlight($id){
    $spot=Spotlight::find($id);
    $language = Language::all();
    $pub = Publisher::all();
    return view('contentcreators.Spotlight.updateSpotlights',compact('spot','language','pub'));
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
    $spot = Spotlight::find($id);
   /* if(isset($request->pdf)){
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
    $spot->publish_id=$request->input('publish');
    $spot->lang_id=$request->input('language');
    $spot->url_path=$request->input('url');
    $spot->keywords=$request->input('keywords');

    $spot->update();
    return back()
    ->with('success','File updated successful.');*/
 
if ($request->hasfile('pdf')) {
    $file = $request->file('pdf');
    if($file!==null){
    $extension = $file->getClientOriginalExtension();
    $fileName = time() . "_spot." . $extension;
    $file->move('uploads/spotlights/', $fileName);
    $spot->pdf = $fileName;
    $spot->url_path = '';
    }
} elseif ($request->filled('url')) {
    $spot->url_path = $request->input('url');
    $spot->pdf = '';
} else {
    $spot->url_path = $request->input('url');
}
// Save the spot
$spot->update();
return back()
    ->with('success', 'Spotlight has been upadted successfully.');

}
public function sendToPub(Request $request, $id)
{
    $spot= Spotlight::find($id);
    if($spot->publish_id=='1' || $spot->publish_id=='2'){
        $spot->update(['publish_id' => '1']);
        return back()->with('success', 'Sent to publisher!');
    }else{
        echo "Not Found";
    }  
}
public function publicViewSpot(){
    $viewSpotlight = DB::table('spotlights')->orderBy('content_id','desc')->get();
    return view('home.category.spotlights.spotlights',compact('viewSpotlight'));
}
public function aboutSpotlight($id){
    // $viewSpot = Spotlight::find($id);
    $viewSpotlight = DB::table('spotlights')
                ->join('publish','publish.publish_id','=','spotlights.publish')
                ->join('languages','languages.lang_id','=','spotlights.language')
                ->where('spotlights.content_id',$id)
                ->first();
    return view('home.category.spotlights.viewspotlights',compact('viewSpotlight'));
}
//END OF SPOTLIGHT MODULE

//START OF PROFILE FORM
public function addNewProfile(Request $request){
    $request->validate([
        'img_path' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);
    $prof = new Profileform;
    $prof->name=$request->input('name');
    $prof->designation=$request->input('designation');
    $prof->assume_office=$request->input('assume_office');
    $prof->img_path=$request->input('image');
    $prof->dob=$request->input('date_of_birth');
    $prof->birth_place=$request->input('birth_place');
    $prof->education=$request->input('education');
    $prof->father_name=$request->input('father_name');
    $prof->mother_name=$request->input('mother_name');
    $prof->marital_status=$request->input('marital_status');
    $prof->children=$request->input('children');
    $prof->profession=$request->input('profession');
    $prof->pol_career=$request->input('pol_career');
    $prof->soc_activities=$request->input('soc_activities');
    $prof->publications=$request->input('publications');
    $prof->awards=$request->input('awards');
    $prof->foreign_travels=$request->input('foreign_travels');
    $prof->hobbies=$request->input('hobbies');
    $prof->add_info=$request->input('add_info');
    $prof->address=$request->input('address'); 
    $prof->phone_no=$request->input('phone_no');
    $prof->fax_no=$request->input('fax_number');
    $prof->mobile_no=$request->input('mobile_no');
    $prof->email_id=$request->input('email_id');
    $prof->website=$request->input('website');
    $prof->keywords=$request->input('keywords');
    $prof->language=$request->input('language');
    $prof->publish=$request->input('publish');
    $prof->position_id=$request->input('position');

    if($request->hasfile('image')){
        $image = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $imageName = time()."_profileform.".$extension;
        $file->move('uploads/profileform/',$imageName);
        $prof->image = $imageName;
    }else{
        return $request;
        $prof->image = "blank";
    }
}
public function viewProfileform(){
    $vprof = Profileform::all();
    return view('contentcreators.Profile.viewprofileform',compact('vprof'));
}
public function viewProfileformDetails($id){
    $prof = DB::table('profile_gov_cm_cj')
            ->join('publish','publish.publish_id','=','profile_gov_cm_cj.publish_id')
            ->join('languages','languages.lang_id','=','profile_gov_cm_cj.lang_id')
            ->join('master_position','master_position.position_id','=','profile_gov_cm_cj.position_id')
            ->where('profile_gov_cm_cj.content_id',$id)
            ->first();
    return view('contentcreators.Profile.viewprofileformdetails',compact('prof'));
}
public function deleteProfileform($id){
    $dprof = Profileform::find($id);
    $dprof->delete();
    return redirect('viewprofileform')->with('success','Record deleted');
}
public function editProfileform($id){
    $prof=Profileform::find($id);
    $language = Language::all();
    $pub = Publisher::all();
    $position =Position::all();
    return view('contentcreators.Profile.updateProfileform',compact('language','pub','prof','position'));
}
public function updateProfileform(Request $request,$id){
    $prof = Profileform::find($id);
    $prof->update();
    return back()
    ->with('success','Your Profile has been upadted successfully.');
}
public function Publisher(Request $request, $id)
{
    $prof= Profileform::find($id);
    /*
    if($prof->publish_id=='1' || $prof->publish_id=='2'){
        $prof->update(['publish_id' => '1']);
        return back()->with('success', ' To publish!');
    }else{
        echo "Not Found";
    }*/
    if ($map->publish == 'Y' || $map->publish == 'N') {
        // Update publish status
        $map->update(['publish' => 'Y']);

        // Update publish_on if publish status is 'Y'
        if ($map->publish == 'Y') {
            $map->update(['publish_on' => now()]);
        }
        return back()->with('success', 'Published!');
    } else {
        return back()->with('error', 'Invalid publish status!');
    }
}
public function publicViewProfileform(){
    $viewProfileform = DB::table('profile_gov_cm_cj')->orderBy('content_id','desc')->get();
    return view('home.category.Profile.profileform',compact('viewProfileform'));
}
public function aboutProfileform($id){
    // $viewSpot = Spotlight::find($id);
    $viewProfileform = DB::table('profile_gov_cm_cj')
                ->join('publish','publish.publish_id','=','profile_gov_cm_cj.publish')
                ->join('languages','languages.lang_id','=','profile_gov_cm_cj.language')
                ->join('master_position','master_position.position_id','=','profile_gov_cm_cj.position_id')
                ->where('profile_gov_cm_cj.content_id',$id)
                ->first();
    return view('home.category.Profile.viewprofileform',compact('viewProfileform'));
}
//END OF PROFILE FORM


//START OF MAP CATEGORY
public function addNewMapcategory(Request $request){
    // $request->validate([
    //     'publish'=> 'required|in:Y,N',
    // ]);
    $map = new Mapcategory; 
    $map->title=$request->input('title');
    $map->map_id=$request->input('map');
    $map->dist_id=$request->input('district');
    $map->map_description=$request->input('description');
    $map->availability_name=$request->input('availability_name');
    $map->language=$request->input('language');
    $map->publish=$request->input('publish');
    $map->path=$request->input('url');
    $map->pdf=$request->input('pdf');
    $map->keywords=$request->input('keywords');
    $map->created_by=$request->input('created');

if ($request->hasfile('pdf')) {
    $file = $request->file('pdf');
    if($file!==null){
    $extension = $file->getClientOriginalExtension();
    $fileName = time() . "_mapcategory." . $extension;
    $file->move('uploads/mapcategory/', $fileName);
    $map->pdf = $fileName;
    $map->path = '';
    }
} elseif ($request->filled('url')) {
    $map->path = $request->input('url');
    $map->pdf = '';
} else {
    $map->path = $request->input('url');
}
// Save the spot
$map->save();
return redirect("viewmapcat")
    ->with('success', 'Map category has been added successfully.');        
}
public function viewMapcategory(){
    $vmap = Mapcategory::all();
    return view('contentcreators.Mapcategory.viewMapcategory',compact('vmap'));
}
public function viewMapcategoryDetails($id){
    $map = DB::table('mapcategory')
            ->join('publish','publish.publish_id','=','mapcategory.publish_id')
            ->join('languages','languages.lang_id','=','mapcategory.lang_id')
            ->join('master_mapcat','master_mapcat.map_id','=','master_mapcat.map_id')
            ->join('districts','districts.dist_id','=','districts.dist_id')
            ->where('mapcategory.content_id',$id)
            ->first();
    return view('contentcreators.Mapcategory.viewmapcatdetails',compact('map'));
}
public function downloadMapcategory(Request $request,$file){
    return response()->download(public_path('/uploads/mapcategory/'.$file));
}
public function deleteMapcategory($id){
    $dmap = Mapcategory::find($id);
    $dmap->delete();
    return redirect('viewmapcat')->with('success','Record deleted');
}
public function editMapcategory($id){
    $map = Mapcategory::find($id);
    $language = Language::all();
    $pub = Publisher::all();
    $districts = District::all();
    return view('contentcreators.Mapcategory.updateMapcategory',compact('language','pub','districts','map'));
}
public function updateMapcategory(Request $request,$id){
    $request->validate([

        'pdf'=>'nullable|mimes:jpg,pdf,txt,xlx,xls,csv|max:2048'
    ]);
    $map = Mapcategory::find($id);
 
if ($request->hasfile('pdf')) {
    $file = $request->file('pdf');
    if($file!==null){
    $extension = $file->getClientOriginalExtension();
    $fileName = time() . "_mapcategory." . $extension;
    $file->move('uploads/mapcategory/', $fileName);
    $map->pdf = $fileName;
    $map->path = '';
    }
} elseif ($request->filled('url')) {
    $map->path = $request->input('url');
    $map->pdf = '';
} else {
    $map->path = $request->input('url');
}
// Save the spot
$map->update();
return back()
    ->with('success', 'Map category has been upadted successfully.');

}
public function publish(Request $request, $id)
{
    $map= Mapcategory ::find($id);
    
    /*if($map->publish == 'Y' || $map->publish == 'N'){
        $map->update(['publish' => 'Y']);
        return back()->with('success', ' publish!');
    }else{
        echo "Not Found";
    }
    */
    if ($map->publish == 'Y' || $map->publish == 'N') {
        // Update publish status
        $map->update(['publish' => 'Y']);

        // Update publish_on if publish status is 'Y'
        if ($map->publish == 'Y') {
            $map->update(['publish_on' => now()]);
        }
        return back()->with('success', 'Published!');
    } else {
        return back()->with('error', 'Invalid publish status!');
    }
}
public function publicViewMapcategory(){
    $viewMapcategory = DB::table('mapcategory')->orderBy('content_id','desc')->get();
    return view('home.category.mapcategory.mapcategory',compact('viewMapcategory'));
}
public function aboutMapcategory($id){
    $viewMapcategory = DB::table('mapcategory')
                ->join('publish','publish.publish_id','=','spotlights.publish')
                ->join('languages','languages.lang_id','=','spotlights.language')
                ->join('master_mapcat','master_mapcat.map_id','=','master_mapcat.map_id')
                ->join('districts','districts.dist_id','=','districts.dist_id')
                ->where('mapcategory.content_id',$id)
                ->first();
    return view('home.category.mapcategory.viewmapcategory',compact('viewMapcategory'));
}
//END OF MAP CATEGORY
}
