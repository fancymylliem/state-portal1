<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Govorder;
use App\Models\User;
use App\Models\User_role;
use App\Models\Act;
use App\Models\Document;
use App\Models\Tender;
use App\Models\Scheme;
use App\Models\Form;
use App\Models\Notification;
use DB;
use Hash;
use Auth;
use Session;
class ApproverController extends Controller
{
    //
    function index(){
        $depts = Department::select('dept_id','department_name')->get();
        // return $depts;
        return view('approver/deptAdminLogin',compact('depts'));
    }
    /* public function deptAdminLogin(Request $request){

        $request->validate([
            // 'dept_name' =>['required'],
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $status = User::where('status','=','1')->first();
        $role = User::where('role','=','1')->first();
        $credentials = $request->only('email', 'password');
        if(!$status){
            echo "Your account status is pending";
        }else{
            if (Auth::attempt($credentials) && $role) {
                // Authentication successful
                return redirect('deptadmindashboard');
                
        } else {
            // Authentication failed
            return back()->withError('Invalid credentials');
        }
        }
    }
    public function publisherLogout(){
        Session::flush();
        Auth::logout();
        return redirect('deptadminlogin');
    } */
    //publisher dashboard
    function ApproverDashboard(){
        if(Auth::check()){
            $act = Act::all();
            $vc = Govorder::all();
            $doc = Document::all();
            $scheme = Scheme::all();
            $tender = Tender::all();
            $form = form::all();
            $notification = Notification::all();
            return view('approver.ApproverDashboard',compact('act','vc','doc','tender','form','scheme','notification'));
        }else{
            echo "you are not authorised to visit this page";
        }
    }
// ============================================================================================================
   //functions for create new content creator
    public function addCC(){
        $depts = Department::select('dept_id','department_name')->get();
        $roles = User_role::select('id','role')->get();
        return view('approver/createCC',compact('depts','roles'));
    }
    public function postCC(Request $request){
        $request->validate([
            // 'first_name' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'email|required',
            'password'=>'required|confirmed',
            'password_confirmation'=>'required'
        ]);
        $cc = new User;
        $cc->dept_id=$request->input('dept_name');
        $cc->first_name=$request->input('first_name');
        $cc->last_name=$request->input('last_name');
        $cc->email=$request->input('email');
        $cc->role=$request->input('user_role');
        $cc->password=Hash::make($request['password']);
        $cc->save();
        return back()->with('success','Content creator created successfully.');
    }
    public function viewCC(){
        // $role = User::get('role');
        $details = DB::table('users')
                    ->join('departments','users.dept_id','=','departments.dept_id')
                    ->orderBy('id','asc')
                    ->get();
        // dd($details);
      
        return view('approver/viewCC',compact('details'));
    }
    public function activeCC($id){
        $cc = User::find($id);
        if($cc->status==0){ 
            $cc->update(['status' => 1]);
            return back()->with('success', 'Status Active');
        }else{
            echo "Not Found";
        }
    }
    public function pendingCC($id){
        $cc = User::find($id);
        if($cc->status=='1'){
            $cc->update(['status' => '0']);
            return back()->with('success', 'Status pending');
        }else{
            echo "Not Found";
        }
    }
    //==============================================================================================
    //view Contents for approve
    // Government orders
    public function viewGovContent($id){
        $order = Govorder::find($id);
        return view('approver.viewContentsForApprove.category.viewGovContent',compact('order'));
        // dd($id);
    }
    public function approveOrderContent($id){
        $aorder = Govorder::find($id);
        if($aorder->status=='1'){
            $aorder->update(['status' => '2']);
            return back()->with('success','Content Approved');
        }
    }
    public function recheckOrderContent($id){
        $aorder = Govorder::find($id);
        if($aorder->status=='1'){
            $aorder->update(['status' => '3']);
            return back()->with('success','Content sent for recheck');
        }
    }
    public function rejectOrderContent($id){
        $order = Govorder::find($id);
        if($order->status=='1' || $order->status=='2' || $order->status=='3'){
            $order->update(['status' => '4']);
            return back()->with('success', 'Content Rejected!');
        }else{
            echo "Not Found";
        }
    }
    //==============================================================================================
    //Act 
    public function viewActContent($id){
        $act = DB::table('acts')
                ->join('departments','departments.dept_id','=','acts.dept_id')
                // ->join('districts','districts.dist_id','=','acts.dist_id')
                ->join('languages','languages.lang_id','=','acts.lang_id')
                ->where('acts.act_id',$id)
                ->first();
        return view('approver.viewContentsForApprove.category.viewActContent',compact('act'));
        // dd($id);
    }
    public function approveActContent($id){
        $appact = Act::find($id);
        if($appact->status=='1'){
            $appact->update(['status' => '2']);
            return back()->with('success','Content Approved');
        }
    }
    public function recheckActContent(Request $request , $id){
        $react = Act::find($id);
        $react->remark=$request->input('remark');
        if($react->status=='1'){
            $react->update([
                'status' => '3',
                'remark'
            ]);
            return back()->with('success','Content sent for recheck');
        }
    }
    public function rejectActContent($id){
        $dact = Act::find($id);
        if($dact->status=='1' || $dact->status=='2' || $dact->status=='3'){
            $dact->update(['status' => '4']);
            return back()->with('success', 'Content Rejected!');
        }else{
            echo "Not Found";
        }
    }
    public function delActFromPub($id){
        $dact = Act::find($id);
        $dact->delete();
        return back()->withSuccess('Record Deleted');
        
    }
    //==============================================================================================
    //Document 
    public function viewDocContent($id){
        $doc = Document::find($id);
        return view('approver.viewContentsForApprove.category.viewDocContent',compact('doc'));
        // dd($id);
    }
    public function approveDocContent($id){
        $adoc = Document::find($id);
        if($adoc->status=='1'){
            $adoc->update(['status' => '2']);
            return back()->with('success','Content Approved');
        }
    }
    public function recheckDocContent($id){
        $adoc = Document::find($id);
        if($adoc->status=='1'){
            $adoc->update(['status' => '3']);
            return back()->with('success','Content sent for recheck');
        }
    }
    public function rejectDocContent($id){
        $doc = Document::find($id);
        if($doc->status=='1' || $doc->status=='2' || $doc->status=='3'){
            $doc->update(['status' => '4']);
            return back()->with('success', 'Content Rejected!');
        }else{
            echo "Not Found";
        }
    }
    //==========================================================================================================
    // Tender 
    public function viewTenderContent($id){
        $tender = DB::table('tenders')
                ->join('departments','tenders.dept_id','=','departments.dept_id')
                ->where('tenders.tender_id',$id)
                ->first();
        return view('approver.viewContentsForApprove.navigation.viewTenderContent',compact('tender'));
        // dd($id);
    }
    public function approveTenderContent($id){
        $apptender = Tender::find($id);
        if($apptender->status=='1'){
            $apptender->update(['status' => '2']);
            return back()->with('success','Content Approved');
        }
    }
    public function recheckTenderContent(Request $request , $id){
        $rtender = Tender::find($id);
        $rtender->remark=$request->input('remark');
        if($rtender->status=='1'){
            $rtender->update([
                'status' => '3',
                'remark'
            ]);
            return back()->with('success','Content sent for recheck');
        }
    }
    public function rejectTenderContent($id){
        $rejtender = Tender::find($id);
        if($rejtender->status=='1' || $rejtender->status=='2' || $rejtender->status=='3'){
            $rejtender->update(['status' => '4']);
            return back()->with('success', 'Content Rejected!');
        }else{
            echo "Not Found";
        }
    }
    public function delTenderFromPub($id){
        $deltender = Tender::find($id);
        $deltender->delete();
        return back()->withSuccess('Record Deleted');
    }
    //=======================================================================================
    //notification
    public function viewNotificationContent($id){
        $notification = DB::table('notifications')
                ->join('departments','notifications.dept_id','=','departments.dept_id')
                ->where('notifications.notification_id',$id)
                ->first();
        return view('approver.viewContentsForApprove.navigation.viewNotification',compact('notification'));
        // dd($id);
    }
    public function approveNotificationContent($id){
        $notification = Notification::find($id);
        if($notification->status=='1'){
            $notification->update(['status' => '2']);
            return back()->with('success','Content Approved');
        }
    }
    public function recheckNotificationContent(Request $request , $id){
        $notification = Notification::find($id);
        $notification->remark=$request->input('remark');
        if($notification->status=='1'){
            $notification->update([
                'status' => '3',
                'remark'
            ]);
            return back()->with('success','Content sent for recheck');
        }
    }
    public function rejectNotificationContent($id){
        $notification = Notification::find($id);
        if($notification->status=='1' || $notification->status=='2' || $notification->status=='3'){
            $notification->update(['status' => '4']);
            return back()->with('success', 'Content Rejected!');
        }else{
            echo "Not Found";
        }
    }
    public function delNotificationFromPub($id){
        $notification = Notification::find($id);
        $notification->delete();
        return back()->withSuccess('Record Deleted');
    }
}
