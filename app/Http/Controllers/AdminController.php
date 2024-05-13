<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\User_role;
use App\Models\User;

use App\Models\Category;
use App\Models\admin;
use App\Models\Councilofminister;
use App\Models\Iaslist;
use App\Models\Mcslist;
use App\Models\District;
use App\Models\Block;
use App\Models\Aboutm;
use App\Models\Position;
use App\Models\Organisationtype;
use App\Models\Organisationname;
use App\Models\Documenttype;
use App\Models\Assembly_Data;
use App\Models\Community_Data;
use App\Models\Constituency_Data;
use App\Models\IasbatchData;
use App\Models\ContacttypeData;
use App\Models\LoksabhaData;
use App\Models\LoksabhaconstituencyData;
use App\Models\NotificationcategoryData;
use App\Models\RulescategoryData;
use App\Models\SchemebeneficiariesData;
use App\Models\SchemebenefitData;
use App\Models\SchemenameData;
use App\Models\SchemesponsorData;
use App\Models\ServicecategoryData;
use App\Models\Map;


use DB;
use Hash;
use Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
//use Illumninate\Validation\Rules\Password;



class AdminController extends Controller
{
	
	 // admin dashboard
    public function AdminDashboard()
    {
        $departments = Department::orderBy('dept_id','asc')->get();
        $details = DB::table('users')
                    ->join('departments','users.dept_id','=','departments.dept_id')
                    ->get();
        $details4 = DB::table('districts')->get();
        $lang = DB::table('languages')->get();
        $pub = DB::table('publish')->get();
        $detailss = DB::table('categories')->get();
        $otype = Organisationtype::all();
        $roles = User_role::select('id','role')->get();
        $assem = Assembly_Data::all();
        $com = Community_Data::all();
        $cons = Constituency_Data::all();
        $ias = IasbatchData::all();
        $contact = ContacttypeData::all();
        $position = Position::all();
        $lok = LoksabhaData::all();
        $lokconst = LoksabhaconstituencyData::all();
        $no = NotificationcategoryData::all();
        $rule = RulescategoryData::all();
        $scheme = SchemebeneficiariesData::all();
        $sche = SchemebenefitData::all();
        $scname = SchemenameData::all();
        $spons = SchemesponsorData::all();
        $serve = ServicecategoryData::all();
        $map = Map::all();

        $countDept = Department::count();
        $countPublisher = User::where('role','=','1')->get()->count();
        $countDistrict = District::count();
        if(Auth::guard('superadmin')->check()){
            return view('admin/AdminDashboard',compact('departments','details','details4','map','lang','otype','com','cons','detailss','assem','roles','ias','lok','serve','contact','lokconst','no','rule','position','countDept','pub','scheme','sche','scname','spons','countPublisher','countDistrict'));
        }
        else{
            echo "you are not authorised to visit this page";
        }

    }
	
	//District  MODULE
	public function getDistrict(){
        return view('admin.districts.addDistricts');
    }
    public function newdist(Request $request){
        $request->validate([
            'dist_name' => 'required',
            'dist_head' => 'required',
            'area' => 'required',
            'population' => 'required'
        ]);
        $dist = new District;
        $dist->district_name=$request->input('dist_name');
        $dist->district_head=$request->input('dist_head');
        $dist->area=$request->input('area');
        $dist->population=$request->input('population');
        $dist->save();
        return redirect('viewdist')->with('success','New District created successfully.');
    }
    public function viewdist(){
        $details4 = DB::table('districts')->get();
        //  dd($details);
        return view('admin.districts.viewDistricts',compact('details4'));
    }
    public function editDist($id){
        $dist = District::find($id);
        return view('admin.districts.updateDistrict',compact('dist'));
    }
    public function updateDist($id, Request $request){
        $dist = District::find($id);
        $dist->district_name=$request->input('dist_name');
        $dist->district_head=$request->input('dist_head');
        $dist->area=$request->input('area');
        $dist->population=$request->input('population');
        $dist->update();
        return redirect('viewdist')->with('success','District updated successfully.');
    }
    public function deleteDist($id){
        $dist = District::find($id);
        $dist->delete();
        return redirect('viewdist')->with('success','District deleted successfully.');
    }
	
	
	//End District  MODULE
	
	// DePARTMENT MODULE
	
	public function addDepartmentIndex(){
        $department = Department::all();
        return view('admin.Department.addDepartment',compact('department'));
    }

    public function addNewDepartment(Request $request){
        $request->validate([
            'department_name' => 'required'
        ]);
        $addDept = new Department;
        $addDept->department_name=$request->input('department_name');
        $addDept->save();
        return redirect('viewdepartment')->with('success','Department is addded.');
    }
     public function viewDepartment(){
        $departments = Department::orderBy('dept_id','asc')->get();
        $data = compact('departments');
        return view('admin.Department.viewDepartments')->with($data);
    }

    public function editDept($id){
        $department = Department::find($id);
        if(is_null($department)){
            //not null;
            return redirect('viewdepartment');
        }else{
            return view('/admin.Department.updateDepartment',compact('department'));
        }
    }
    public function updateDept($id,Request $req){
        $updateDept = Department::find($id);
        $updateDept->department_name=$req['department_name'];
        $updateDept->update();
        return redirect('viewdepartment')->with('success','Department Updated Successfuly');

    }
    public function deleteDept($id){
        $deleteDept = Department::find($id);
        $deleteDept->delete();
        return redirect('viewdepartment')->with('success','Department deleted Successfully');
       
    }
	
	//END DePARTMENT MODULE
	
	//USER MODULE
    public function adduser(){

        $depts = Department::select('dept_id','department_name')->get();
        $roles = User_role::select('id','role')->get();
        // return $depts;
        return view('admin.createuser',compact('depts','roles'));
    }
    public function addNewUser(Request $request){
        $request->validate([
            'dept_name' => 'required',
            //'first_name' => 'required',
            //'last_name' => 'required',
            'name' => 'required',
            'email' => 'email|required',
            // 'user_role' => 'required',
            'mobile_no' => 'validateNumber|required',
            'password'=>'required|strong_password',
            //'password'=>'required','string','confirmed',password::default(),
            'password_confirmation'=>'required'
        ]);


        $deptAdmin = new User;
        $deptAdmin->dept_id=$request->input('dept_name');
        //$deptAdmin->first_name=$request->input('first_name');
        //$deptAdmin->last_name=$request->input('last_name');
        $deptAdmin->name=$request->input('name');
        $deptAdmin->email=$request->input('email');
        $deptAdmin->mobile_no=$request->input('mobile_no');
        $deptAdmin->role=$request->input('user_role');
        $deptAdmin->password=Hash::make($request['password']);
        $deptAdmin->save();
        //return redirect('viewuser')->with('success','Created successfully.');
        return back()->with('success', 'Added successfully.');

    }
     public function viewuser(){
        $details = DB::table('users')
                    ->join('departments','users.dept_id','=','departments.dept_id')
                    // ->where('users.user_role','publisher')
                    ->get();
        // dd($details);
        $data = compact('details');
        return view('admin.viewuser')->with($data);
    }

    public function editDeptAdmin($id){
        $depts = Department::select('dept_id','department_name')->get();
        $details = DB::table('users')
                    ->join('departments','users.dept_id','=','departments.dept_id')
                    ->get();
        $publisher = User::find($id);
        return view('admin.updateuser',compact('depts','details','publisher'));

    }
    public function updateDeptAdmin($id, Request $request){
        $publisher = User::find($id);
        $publisher->dept_id=$request->input('dept_name');
        $publisher->first_name=$request->input('first_name');
        $publisher->last_name=$request->input('last_name');
        $publisher->email=$request->input('email');
        $publisher->password=$request->input('password');
        $publisher->update();
        return redirect('viewuser')->with('success','Publisher updated successfully.');
    }
    public function deleteDeptAdmin($id){
        $delpub = User::find($id);
        $delpub->delete();
        return redirect('viewuser')->with('success','Publisher deleted Successfully');
    }
    public function activePub($id){
        $cc = User::find($id);
        if($cc->status==0){ 
            $cc->update(['status' => 1]);
            return back()->with('success', 'Status Active');
        }else{
            echo "Not Found";
        }
    }
	
	
	//END USER MODULE
	
	// ORGANIZATION TYPE MODULE
	
	  public function getOrganisationType(){
        $depts = Department::all();
        return view("admin.addOrganisationType",compact('depts'));
    }
    public function postOrganisationType(Request $request){
        $org = new Organisationtype;
        $org->org_type_name=$request->input('organisation_type');
        $org->save();
        return redirect('vieworganisationtype')->with('success','New Type Created');
    }
    public function viewOrganisationType(){
        $org = Organisationtype::all();
        return view('admin.viewOrganisationType',compact('org'));
    }
    public function editOrganisationType($id){
        $org = Organisationtype::find($id);
        return view('admin.updateOrganisationType',compact('org'));
    }
    public function updateOrganisationType($id,Request $request){
        $org = Organisationtype::find($id);
        $org->org_type_name=$request->input('organisation_type');
        $org->update();
        return redirect('vieworganisationtype')->with('success','Update Successful');
    }

    public function deleteOrganisationType($id){
        $org = Organisationtype::find($id);
        $org->delete();
        return redirect('vieworganisationtype')->with('success','Deleted Successful.');

    }
	//END ORGANIZATION TYPE MODULE

	// ORGANIZATION NAME MODULE
    public function getOrgName(){
        $depts = Department::all();
        $otype = Organisationtype::all();
        return view('admin.addOrganisationName',compact('depts','otype'));
    }
    public function postOrgName(Request $request){
        $org = new Organisationname;
        $org->dept_id=$request->input('dept_name');
        $org->org_type_id=$request->input('type');
        $org->org_name=$request->input('organisation_name');
        $org->save();
        return redirect('vieworganisations')->with('success','Organisation created successfully');
    }
    public function viewOrgName(){
        $org = DB::table('organisationnames')->join('departments','organisationnames.dept_id','=','departments.dept_id')
                          ->join('organisationtypes','organisationnames.org_type_id','=','organisationtypes.org_type_id')
                          ->get();
        return view('admin.viewOrganisationName',compact('org'));
    }
    public function editOrgName($id){
        $org = Organisationname::find($id);
        $depts = Department::all();
        $otype = Organisationtype::all();
        return view('admin.updateOrganisationName',compact('org','depts','otype'));

    }
    public function getorganisationbydeptid($id){
        return Organisationname::where('dept_id',$id)->get();

    }
    public function updateOrgName($id ,Request $request){
        $org = Organisationname::find($id);
        $org->dept_id=$request->input('dept_name');
        $org->org_type_id=$request->input('type');
        $org->org_name=$request->input('organisation_name');
        $org->update();
        return redirect('vieworganisations')->with('success','Organisation updated successfully');
    }
    public function deleteOrgName($id){
        $org = Organisationname::find($id);
        $org->delete();
        return back()->with('success','Delete successfully');
    }
	
	//END ORGANIZATION NAME MODULE
	// CATEGORY MODULE
	
	 public function getContentCategory(){
        $detailss = Category::all();
        return view('admin.createCategory',compact('detailss'));
    }
    public function postContentCategory(Request $request){
        $request->validate([
            'category_name' => 'required'
        ]);
        $addCategory = new Category;
        $addCategory->category_name=$request->input('category_name');
        $addCategory->save();
        return redirect('viewcategories')->with('success','New Category is created.');
    }
    public function viewCategory(){
        $detailss = DB::table('categories')->get();
        return view('admin.viewCategory',compact('detailss'));
     }

    public function editCategory($id){
        $detailss = Category::find($id);
        return view('admin.updateCategory',compact('detailss'));
    }
    public function updateCategory(Request $request, $id){
        $request->validate([
            'category_name' => 'required'
        ]);
        $addCategory = Category::find($id);
        $addCategory->category_name=$request->input('category_name');
        $addCategory->update();
        return redirect('viewcategories')->with('success','Category Update successful.');

    }
    public function deleteCategory($id){
        $delCategory = Category::find($id);
        $delCategory->delete();
        return redirect('viewcategories')->with('success','Category deleted successful.');
    }
	
	//END CATEGORY
    public function pendingPub($id){
        $cc = User::find($id);
        if($cc->status=='1'){
            $cc->update(['status' => '0']);
            return back()->with('success', 'Status pending');
        }else{
            echo "Not Found";
        }
    }


    // DOCUMENT TYPE MODULE

	  public function getDocument_type(){
        $depts = Department::all();
        return view("admin.addDocumentType",compact('depts'));
    }
    public function postDocument_type(Request $request){
        $org = new Documenttype;
        $org->doc_type_name=$request->input('document_type');
        $org->save();
        return redirect('viewdocumenttype')->with('success','New Type Created');
    }
    public function viewDocument_type(){
        $org = Documenttype::all();
        return view('admin.viewDocumentType',compact('org'));
    }
    public function editDocument_type($doc_type_id){
        $org = Documenttype::find($doc_type_id);
        return view('admin.updateDocumentType',compact('org'));
    }
    public function updateDocument_Type($doc_type_id,Request $request){
        $org = Documenttype::find($doc_type_id);
        $org->doc_type_name=$request->input('document_type');
        $org->update();
        return redirect('viewdocumenttype')->with('success','Update Successful');
    }

    public function deleteDocument_Type($doc_type_id){
        $org = Documenttype::find($doc_type_id);
        $org->delete();
        return redirect('viewdocumenttype')->with('success','Deleted Successful.');
    }
	//END DOCUMENT TYPE MODULE


    // START ASSEMBLY DATA MODULE
    public function getAssembly_Data(){
        $assem = Assembly_Data::all();
        return view("admin.Assembly.addAssembyData",compact('assem'));
    }  
    public function postAssembly_Data(Request $request){
        $assem = new Assembly_Data;
        $assem->assembly_name=$request->input('assembly_data');
        $assem->save();
        return redirect('viewassemblydata')->with('Success','Your New Data has Created');
    }
    public function viewAssembly_Data(){
        $assem = Assembly_Data::all();
        return view("admin.Assembly.viewAssemblyData",compact('assem'));
    }
    public function editAssembly_Data($assembly_id){
        $assem = Assembly_Data::find($assembly_id);
        return view("admin.Assembly.updateAssemblyData",compact('assem'));
    }
    public function updateAssembly_Data($assembly_id,Request $request){
        $assem = Assembly_Data::find($assembly_id);
        $assem->assembly_name=$request->input('assembly_data');
        $assem->update();
        return redirect('viewassemblydata')->with('Success',' updated successfully');
    }
    public function deleteAssembly_Data($assembly_id){
        $assem = Assembly_Data::find($assembly_id);
        $assem->delete();
        return redirect('viewassemblydata')->with('Success','Deleted Successfully ');
    }
    // END ASSEMBLY DATA MODULE


    // START COMMUNITY  DATA MODULE
     public function getCommunity_Data(){
        $com = Community_Data::all();
        return view("admin.Community.addCommunityData",compact('com'));
    }  
    public function postCommunity_Data(Request $request){
        $com = new Community_Data;
        $com->community_name=$request->input('community_data');
        $com->save();
        return redirect('viewcommunitydata')->with('Success','Your New Assembly Data has Created');
    }
    public function viewCommunity_Data(){
        $com = Community_Data::all();
        return view("admin.Community.viewCommunityData",compact('com'));
    }
    public function editCommunity_Data($community_id){
        $com = Community_Data::find($community_id);
        return view("admin.Community.updateCommunityData",compact('com'));
    }
    public function updateCommunity_Data($community_id,Request $request){
        $com = Community_Data::find($community_id);
        $com->community_name=$request->input('community_data');
        $com->update();
        return redirect('viewcommunitydata')->with('Success',' updated successfully');
    }
    public function deleteCommunity_Data($community_id){
        $com = Community_Data::find($community_id);
        $com->delete();
        return redirect('viewcommunitydata')->with('Success','Deleted Successfully ');
    }
    // END COMMUNITY DATA MODULE

    //START CONSTITUENCY MODULE
    public function getConstituency_Data(){
        $cons = Constituency_Data::all();
        return view("admin.Constituency.addConstituencyData",compact('cons'));
    }  
    public function postConstituency_Data(Request $request){
        $cons = new Constituency_Data;
        $cons->constituency_name=$request->input('constituency_data');
        $cons->save();
        return redirect('viewconstituencydata')->with('Success','Your New Constituency Data has Created');
    }
    public function viewConstituency_Data(){
        $cons = Constituency_Data::all();
        return view("admin.Constituency.viewConstituencyData",compact('cons'));
    }
    public function editConstituency_Data($constituency_id){
        $cons = Constituency_Data::find($constituency_id);
        return view("admin.Constituency.updateConstituencyData",compact('cons'));
    }
    public function updateConstituency_Data($constituency_id,Request $request){
        $cons = Constituency_Data::find($constituency_id);
        $cons->constituency_name=$request->input('constituency_data');
        $cons->update();
        return redirect('viewconstituencydata')->with('Success',' updated successfully');
    }
    public function deleteConstituency_Data($constituency_id){
        $cons = Constituency_Data::find($constituency_id);
        $cons->delete();
        return redirect('viewconstituencydata')->with('Success','Deleted Successfully ');
    }
    //END CONSTITUENCY MODULE

    // START OF CONTACT TYPE DATA
    public function getContact_Data(){
        $contact = ContacttypeData::all();
        return view("admin.Contact.addContactData",compact('contact'));
    }  
    public function postContact_Data(Request $request){
        $contact = new ContacttypeData;
        $contact->contact_name=$request->input('contact_data');
        $contact->save();
        return redirect('viewcontactdata')->with('Success','Your New contact Data has Created');
    }
    public function viewContact_Data(){
        $contact = ContacttypeData::all();
        return view("admin.Contact.viewContactData",compact('contact'));
    }
    public function editContact_Data($contact_id){
        $contact = contacttypeData::find($contact_id);
        return view("admin.Contact.updateContactData",compact('contact'));
    }
    public function updateContact_Data($contact_id,Request $request){
        $contact = ContacttypeData::find($contact_id);
        $contact->contact_name=$request->input('contact_data');
        $contact->update();
        return redirect('viewcontactdata')->with('Success',' updated successfully');
    }
    public function deleteContact_Data($contact_id){
        $contact = ContacttypeData::find($contact_id);
        $contact->delete();
        return redirect('viewcontactdata')->with('Success','Deleted Successfully ');
    }
    // END OF CONTACT TYPE DATA MODULE

    //START OF IASBATCH DATA
    public function getIasbatch(){
        $ias = IasbatchData::all();
        return view("admin.IAS.addIASbatchData",compact('ias'));
    }  
    public function postIasbatch(Request $request){
        $ias = new IasbatchData;
        $ias->iasbatch_name=$request->input('iasbatch_data');
        $ias->save();
        return redirect('viewiasbatchdata')->with('Success','Your New IAS batch Data has Created');
    }
    public function viewIasbatch(){
        $ias = IasbatchData::all();
        return view("admin.IAS.viewIASbatchData",compact('ias'));
    }
    public function editIasbatch($iasbatch_id){
        $ias =IasbatchData::find($iasbatch_id);
        return view("admin.IAS.updateIASbatchData",compact('ias'));
    }
    public function updateIasbatch($iasbatch_id,Request $request){
        $ias = IasbatchData::find($iasbatch_id);
        $ias->iasbatch_name=$request->input('iasbatch_data');
        $ias->update();
        return redirect('viewiasbatchdata')->with('Success',' updated successfully');
    }
    public function deleteIasbatch($iasbatch_id){
        $ias = IasbatchData::find($iasbatch_id);
        $ias->delete();
        return redirect('viewiasbatchdata')->with('Success','Deleted Successfully ');
    }
    //END OF IASBATCH DATA


    //START OF LOKSABHA DATA
    public function getLoksabha(){
        $lok = LoksabhaData::all();
        return view("admin.Loksabha.addLoksabhaData",compact('lok'));
    }  
    public function postLoksabha(Request $request){
        $lok = new LoksabhaData;
        $lok->loksabha_name=$request->input('loksabha_data');
        $lok->save();
        return redirect('viewloksabhadata')->with('Success','Your New Data has Created');
    }
    public function viewLoksabha(){
        $lok = LoksabhaData::all();
        return view("admin.Loksabha.viewLoksabhaData",compact('lok'));
    }
    public function editLoksabha($loksabha_id){
        $lok = LoksabhaData::find($loksabha_id);
        return view("admin.Loksabha.updateLoksabhaData",compact('lok'));
    }
    public function updateLoksabha($loksabha_id,Request $request){
        $lok = LoksabhaData::find($loksabha_id);
        $lok->loksabha_name=$request->input('loksabha_data');
        $lok->update();
        return redirect('viewloksabhadata')->with('Success',' updated successfully');
    }
    public function deleteLoksabha($loksabha_id){
        $lok = LoksabhaData::find($loksabha_id);
        $lok->delete();
        return redirect('viewloksabhadata')->with('Success','Deleted Successfully ');
    }
    //END START OF LOKSABHA DATA
 
    //START OF LOKSABHA CONSTITUENCY DATA
    public function getLoksabhaConst(){
        $lokconst = LoksabhaconstituencyData::all();
        return view("admin.Loksabha.addLokConstituencyData",compact('lokconst'));
    }  
    public function postLoksabhaConst(Request $request){
        $lokconst = new LoksabhaconstituencyData;
        $lokconst->loksabhaconst_name=$request->input('lokconst_data');
        $lokconst->save();
        return redirect('viewlokconstituencydata')->with('Success','Your New Data has Created');
    }
    public function viewLoksabhaConst(){
        $lokconst = LoksabhaconstituencyData::all();
        return view("admin.Loksabha.viewLokConstituencyData",compact('lokconst'));
    }
    public function editLoksabhaConst($loksabhaconst_id){
        $lokconst = LoksabhaconstituencyData::find($loksabhaconst_id);
        return view("admin.Loksabha.updateLokConstituencyData",compact('lokconst'));
    }
    public function updateLoksabhaConst($loksabhaconst_id,Request $request){
        $lokconst = LoksabhaconstituencyData::find($loksabhaconst_id);
        $lokconst->loksabhaconst_name=$request->input('lokconst_data');
        $lokconst->update();
        return redirect('viewlokconstituencydata')->with('Success',' updated successfully');
    }
    public function deleteLoksabhaConst($loksabhaconst_id){
        $lokconst = LoksabhaconstituencyData::find($loksabhaconst_id);
        $lokconst->delete();
        return redirect('viewlokconstituencydata')->with('Success','Deleted Successfully ');
    }
    //END  OF LOKSABHA CONSTITUENCY DATA

    
    //START OF NOTIFICATION CATEGORY

    public function getNotificationCategory(){
        $no = NotificationcategoryData::all();
        return view("admin.Notification.addNotificationCategory",compact('no'));
    }  
    public function postNotificationCategory(Request $request){
        $no = new NotificationcategoryData;
        $no->notification_name=$request->input('notified_data');
        $no->save();
        return redirect('viewnotificationcategorydata')->with('Success','Your New Data has Created');
    }
    public function viewNotificationCategory(){
        $no = NotificationcategoryData::all();
        return view("admin.Notification.viewNotificationCategory",compact('no'));
    }
    public function editNotificationCategory($notification_id){
        $no = NotificationcategoryData::find($notification_id);
        return view("admin.Notification.updateNotificationCategory",compact('no'));
    }
    public function updateNotificationCategory($notification_id,Request $request){
        $no = NotificationcategoryData::find($notification_id);
        $no->notification_name=$request->input('notified_data');
        $no->update();
        return redirect('viewnotificationcategorydata')->with('Success',' updated successfully');
    }
    public function deleteNotificationCategory($notification_id){
        $no = NotificationcategoryData::find($notification_id);
        $no->delete();
        return redirect('viewnotificationcategorydata')->with('Success','Deleted Successfully ');
    }
    //END  OF NOTIFICATION CATEGORY


    
    // START OF RULES CATEGORY DATA  MODULE
    public function getRules_Data(){
        $rule = RulescategoryData::all();
        return view("admin.Rulescategory.addRulescategoryData",compact('rule'));
    }  
    public function postRules_Data(Request $request){
        $rule = new RulescategoryData;
        $rule->rules_name=$request->input('rule_data');
        $rule->save();
        return redirect('viewrulescategorydata')->with('Success','Your New Assembly Data has Created');
    }
    public function viewRules_Data(){
        $rule = RulescategoryData::all();
        return view("admin.Rulescategory.viewRulescategoryData",compact('rule'));
    }
    public function editRules_Data($rules_id){
        $rule = RulescategoryData::find($rules_id);
        return view("admin.Rulescategory.updateRulescategoryData",compact('rule'));
    }
    public function updateRules_Data($rules_id,Request $request){
        $rule = RulescategoryData::find($rules_id);
        $rule->rules_name=$request->input('rule_data');
        $rule->update();
        return redirect('viewrulescategorydata')->with('Success',' updated successfully');
    }
    public function deleteRules_Data($rules_id){
        $rule = RulescategoryData::find($rules_id);
        $rule->delete();
        return redirect('viewrulescategorydata')->with('Success','Deleted Successfully ');
    }
    // END OF RULES CATEGORY DATA MODULE

    
    // START SCHEME BENEFICIARIES DATA MODULE
    public function getSchemeBene_Data(){
        $scheme = SchemebeneficiariesData::all();
        return view("admin.Scheme.addSchemebeneficiaryData",compact('scheme'));
    }  
    public function postSchemeBene_Data(Request $request){
        $scheme = new SchemebeneficiariesData;
        $scheme->schben_name=$request->input('scheme_data');
        $scheme->save();
        return redirect('viewschemebeneficiariesdata')->with('Success','Your New Assembly Data has Created');
    }
    public function viewSchemeBene_Data(){
        $scheme = SchemebeneficiariesData::all();
        return view("admin.Scheme.viewSchemebeneficiaryData",compact('scheme'));
    }
    public function editSchemeBene_Data($schben_id){
        $scheme = SchemebeneficiariesData::find($schben_id);
        return view("admin.Scheme.updateSchemebeneficiaryData",compact('scheme'));
    }
    public function updateSchemeBene_Data($schben_id,Request $request){
        $scheme = SchemebeneficiariesData::find($schben_id);
        $scheme->schben_name=$request->input('scheme_data');
        $scheme->update();
        return redirect('viewschemebeneficiariesdata')->with('Success',' updated successfully');
    }
    public function deleteSchemeBene_Data($schben_id){
        $scheme = SchemebeneficiariesData::find($schben_id);
        $scheme->delete();
        return redirect('viewschemebeneficiariesdata')->with('Success','Deleted Successfully ');
    }
    // END  START SCHEME BENEFICIARIES DATA MODULE

    
    // START SCHEME BENEFIT DATA MODULE
    public function getSchemeBenefit_Data(){
        $sche= SchemebenefitData::all();
        return view("admin.Scheme.addSchemebenefitData",compact('sche'));
    }  
    public function postSchemeBenefit_Data(Request $request){
        $sche = new SchemebenefitData;
        $sche->schbenfits_name=$request->input('schemefit_data');
        $sche->save();
        return redirect('viewschemebenefitdata')->with('Success','Your New Assembly Data has Created');
    }
    public function viewSchemeBenefit_Data(){
        $sche = SchemebenefitData::all();
        return view("admin.Scheme.viewSchemebenefitData",compact('sche'));
    }
    public function editSchemeBenefit_Data($schbenfits_id){
        $sche = SchemebenefitData::find($schbenfits_id);
        return view("admin.Scheme.updateSchemebenefitData",compact('sche'));
    }
    public function updateSchemeBenefit_Data($schbenfits_id,Request $request){
        $sche = SchemebenefitData::find($schbenfits_id);
        $sche->schbenfits_name=$request->input('schemefit_data');
        $sche->update();
        return redirect('viewschemebenefitdata')->with('Success',' updated successfully');
    }
    public function deleteSchemeBenefit_Data($schbenfits_id){
        $sche = SchemebenefitData::find($schbenfits_id);
        $sche->delete();
        return redirect('viewschemebenefitdata')->with('Success','Deleted Successfully ');
    }
    // END  START SCHEME BENEFIT DATA MODULE

    
    // START SCHEME NAME  MODULE
    public function getSchemeName_Data(){
        $scname= SchemenameData::all();
        return view("admin.Scheme.addSchemeNameData",compact('scname'));
    }  
    public function postSchemeName_Data(Request $request){
        $scname = new SchemenameData;
        $scname->scheme_name=$request->input('schemename_data');
        $scname->save();
        return redirect('viewschemenamedata')->with('Success','Your New Assembly Data has Created');
    }
    public function viewSchemeName_Data(){
        $scname = SchemenameData::all();
        return view("admin.Scheme.viewSchemeNameData",compact('scname'));
    }
    public function editSchemeName_Data($scheme_id){
        $scname = SchemenameData::find($scheme_id);
        return view("admin.Scheme.updateSchemeNameData",compact('scname'));
    }
    public function updateSchemeName_Data($scheme_id,Request $request){
        $scname = SchemenameData::find($scheme_id);
        $scname->scheme_name=$request->input('schemename_data');
        $scname->update();
        return redirect('viewschemenamedata')->with('Success',' updated successfully');
    }
    public function deleteSchemeName_Data($scheme_id){
        $scname = SchemenameData::find($scheme_id);
        $scname->delete();
        return redirect('viewschemenamedata')->with('Success','Deleted Successfully ');
    }
    // END  START SCHEME NAME MODULE

    
    // START SCHEME SPONSOR MODULE
    public function getSchemesponsor_Data(){
        $spons= SchemesponsorData::all();
        return view("admin.Scheme.addSchemesponsorData",compact('spons'));
    }  
    public function postSchemesponsor_Data(Request $request){
        $spons= new SchemesponsorData;
        $spons->schsponsor_name=$request->input('schemespons_data');
        $spons->save();
        return redirect('viewschemesponsordata')->with('Success','Your New Assembly Data has Created');
    }
    public function viewSchemesponsor_Data(){
        $spons = SchemesponsorData::all();
        return view("admin.Scheme.viewSchemesponsorData",compact('spons'));
    }
    public function editSchemesponsor_Data($schsponsor_id){
        $spons = SchemesponsorData::find($schsponsor_id);
        return view("admin.Scheme.updateSchemesponsorData",compact('spons'));
    }
    public function updateSchemesponsor_Data($schsponsor_id,Request $request){
        $spons = SchemesponsorData::find($schsponsor_id);
        $spons->schsponsor_name=$request->input('schemespons_data');
        $spons->update();
        return redirect('viewschemesponsordata')->with('Success',' updated successfully');
    }
    public function deleteSchemesponsor_Data($schsponsor_id){
        $spons = SchemesponsorData::find($schsponsor_id);
        $spons->delete();
        return redirect('viewschemesponsordata')->with('Success','Deleted Successfully ');
    }
    // END  START SCHEME SPONSOR MODULE


    // START OF SERVICES CATEGORY DATA  MODULE
    public function getServicecategory_Data(){
        $serve = ServicecategoryData::all();
        return view("admin.Services.addServicecategoryData",compact('serve'));
    }  
    public function postServicecategory_Data(Request $request){
        $serve = new ServicecategoryData;
        $serve->service_name=$request->input('service_data');
        $serve->save();
        return redirect('viewservicecategorydata')->with('Success','Your New Assembly Data has Created');
    }
    public function viewServicecategory_Data(){
        $serve = ServicecategoryData::all();
        return view("admin.Services.viewServicecategoryData",compact('serve'));
    }
    public function editServicecategory_Data($service_id){
        $serve = ServicecategoryData::find($service_id);
        return view("admin.Services.updateServicecategoryData",compact('serve'));
    }
    public function updateServicecategory_Data($service_id,Request $request){
        $serve = ServicecategoryData::find($service_id);
        $serve->service_name=$request->input('service_data');
        $serve->update();
        return redirect('viewservicecategorydata')->with('Success',' updated successfully');
    }
    public function deleteServicecategory_Data($service_id){
        $serve = ServicecategoryData::find($service_id);
        $serve->delete();
        return redirect('viewservicecategorydata')->with('Success','Deleted Successfully ');
    }
    // END OF SERVICES CATEGORY DATA MODULE

    //START OF ADD POSITION DATA

    public function getPosition_Data(){
        $position = Position::all();
        return view("admin.Position.addPositionData",compact('position'));
    }  
    public function postPosition_Data(Request $request){
        $position = new Position;
        $position->position_name=$request->input('position_data');
        $position->save();
        return redirect('viewpositiondata')->with('Success','Your New position Data has Created');
    }
    public function viewPosition_Data(){
        $position = Position::all();
        return view("admin.Position.viewPositionData",compact('position'));
    }
    public function editPosition_Data($position_id){
        $position = position::find($position_id);
        return view("admin.Position.updatePositionData",compact('position'));
    }
    public function updatePosition_Data($position_id,Request $request){
        $position = Position::find($position_id);
        $position->position_name=$request->input('position_data');
        $position->update();
        return redirect('viewpositiondata')->with('Success',' updated successfully');
    }
    public function deletePosition_Data($position_id){
        $position = Position::find($position_id);
        $position->delete();
        return redirect('viewpositiondata')->with('Success','Deleted Successfully ');
    }
    //END OF ADD POSITION MODULE

    //START OF MAP CATEGORY
    
    public function getMapcat(){
        $map = Map::all();
        return view("admin.Map.addMapData",compact('map'));
    }  
    public function postMapcat(Request $request){
        $map = new Map;
        $map->map_name=$request->input('map_data');
        $map->save();
        return redirect('viewmapdata')->with('Success','Your New map category Data has been Created');
    }
    public function viewMapcat(){
        $map = Map::all();
        return view("admin.Map.viewMapData",compact('map'));
    }
    public function editMapcat($map_id){
        $map = Map::find($map_id);
        return view("admin.Map.updateMapData",compact('map'));
    }
    public function updateMapcat($map_id,Request $request){
        $map = Map::find($map_id);
        $map->map_name=$request->input('map_data');
        $map->update();
        return redirect('viewmapdata')->with('Success',' updated successfully');
    }
    public function deleteMapcat($map_id){
        $map = Map::find($map_id);
        $map->delete();
        return redirect('viewmapdata')->with('Success','Deleted Successfully ');
    }

    //END OF MAP CATEGORY

}
