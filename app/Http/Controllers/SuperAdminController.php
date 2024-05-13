<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\User;
use App\Models\Category;
use App\Models\Superadmin;
use App\Models\Councilofminister;
use App\Models\Iaslist;
use App\Models\Mcslist;
use App\Models\District;
use App\Models\Block;
use App\Models\Aboutm;

use DB;
use Hash;
use Auth;
use Illuminate\Support\Facades\Session;
// use Illuminate\Support\Facades\Auth;
class SuperAdminController extends Controller
{
    //

    public function index(){
        return view('superadmin/superAdminLogin');
    }
    public function superAdminRegister(){
        return view('superadmin/superAdminRegister');
    }
    //super admin register
    public function newSuperAdminRegister(Request $request){
            $request->validate(
                [
                    'first_name'=>'required',
                    'last_name'=>'required',
                    'email'=>'required',
                    'password'=>'required|confirmed',
                    'password_confirmation'=>'required'
                ]);
                $admin = new Superadmin;
                $admin->fname=$request['first_name'];
                $admin->lname=$request['last_name'];
                $admin->email=$request['email'];
                $admin->password=Hash::make($request['password']);
                $admin->save();
                return back()->with('success','Your Account has been created successfully');
    }

    //super admin login
    public function newSuperAdminLogin(Request $request){

       $request->validate([
            'email' => 'email|required',
            'password' => 'required'
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::guard('superadmin')->attempt($credentials)) {   
            // Authentication successful
            return redirect("superadmindashboard");
        } else {
            // Authentication failed
            return back()->withError('Invalid credentials');
        }
    }
    //super admin dashboard
    public function SuperAdminDash()
    {
        $departments = Department::orderBy('dept_id','asc')->get();
        $details = DB::table('users')
                    ->join('departments','users.dept_id','=','departments.dept_id')
                    ->get();
        $details4 = DB::table('districts')->get();

        $countDept = Department::count();
        $countPublisher = User::where('role','=','1')->get()->count();
        $countDistrict = District::count();
        if(Auth::guard('superadmin')->check()){
            return view('superadmin/superAdminDashboard',compact('departments','details','details4','countDept','countPublisher','countDistrict'));
        }
        else{
            echo "you are not authorised to visit this page";
        }

    }
    public function superAdminSettings(){
        return view('superadmin.settings');
    }
    // =============================================================================
    //government contents like council of ministers, IAS list, MCS list, Districts
    // =============================================================================
    public function governmentContents(){
        $com = Councilofminister::all();
        $ias = Iaslist::all();
        $mcs = Mcslist::all();
        $cat = Category::all();
        $depts = Department::select('dept_id','department_name')->get();
        return view('admin.GovernmentContents.createGovernmentContents',compact('depts','ias','mcs','com','cat'));
    }
    //======================================================================================
    public function editAbout(){
        $dists = DB::table('districts')->get();
        return view('superadmin/superadmincontents/editAboutMeghalaya',compact('dists'));
    }
   
    public function editB(){
        $dists = DB::table('districts')->get();
        //  dd($details);
        $data = compact('dists');
        return view('superadmin/superadmincontents/editBlocks')->with($data);
    }

    public function editAboutM(Request $request){
        $request->validate([
            'area' => 'required',
            'population' => 'required',
            'capital' => 'required',
            'language' => 'required',
            'density' => 'required',
            'literacy' => 'required',
            'about' => 'required'
        ]);
        $aMeg = new Aboutm;
        $aMeg->area=$request->input('area');
        $aMeg->population=$request->input('population');
        $aMeg->capital=$request->input('capital');
        $aMeg->language=$request->input('language');
        $aMeg->density=$request->input('density');
        $aMeg->literacy=$request->input('literacy');
        $aMeg->about=$request->input('about');
        $aMeg->save();
        return back()->with('success','About created successfully.');

    }
    public function editBlock(Request $request){
        $request->validate([
            'dist_name' => 'required',
            'addMoreInputFields.*.block' => 'required'
        ]);
        $bl = new Block;
        $bl->dist_id=$request->input('dist_name');
        foreach ($request->addMoreInputFields as $key => $value) {
           Block::create($value);
        }
        $bl->save(); 
        return back()->with('success', 'New block has been added.');
    }
//=================================================================
    public function getContentCategory(){
        $details = Category::all();
        return view('contentcreators.categories.category.createCategory',compact('details'));
    }
    public function postContentCategory(Request $request){
        $request->validate([
            'category_name' => 'required'
        ]);
        $addCategory = new Category;
        $addCategory->category_name=$request->input('category_name');
        $addCategory->save();
        return back()->with('success','New Category is created.');
    }
    // public function viewCategory(){
    //     $details = Category::all();
    //     return view('contentcreators.categories.category.createCategory',compact('details'));
    // }
    public function editCategory($id){
        $details = Category::find($id);
        return view('contentcreators.categories.category.updateCategory',compact('details'));
    }
    public function updateCategory(Request $request, $id){
        $request->validate([
            'category_name' => 'required'
        ]);
        $addCategory = Category::find($id);
        $addCategory->category_name=$request->input('category_name');
        $addCategory->update();
        return redirect('createcategory')->with('success','Category Update successful.');

    }
    public function deleteCategory($id){
        $delCategory = Category::find($id);
        $delCategory->delete();
        return redirect('createcategory')->with('success','Category deleted successful.');
    }
    // ==============================================================
    //functions for honourables
    //========================================================================================
    public function navBar(){
        return view('superadmin.navigation.viewNavBar');
    }
    public function addNavBar(){
        return view('superadmin.navigation.navBarContents');
    }
}


