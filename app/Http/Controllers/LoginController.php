<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use App\Illuminate\Http\RedirectResponse;


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

//use Auth;
use DB;
use Session;

class LoginController extends Controller
{
    public function getlogin(){
        // $depts = Department::select('dept_id','department_name')->get();
        // ,compact('depts'))
        return view('login');
    }
   
    public function getdashboard(Request $request)
	
    {
//dd($request);exit;
        // $depts = Department::select('dept_id','department_name')->get();
        // ,compact('depts'))
		// $request->validate([
        //     'email' => 'email | required',
        //     'password' => 'required',
        //     'role' => 'required',
        // ]);

        //     $credentials=$request->only('email','password');
        //     if(Auth::attempt($credentials)){
        //     // authetication success
        //     $user = Auth::user();

        switch($request->role)
        {// ADMIN USER
            case 1:			
			 $request->validate([
                    'email' => 'email|required',
                    'password' => 'required'
                ]);
                $credentials = $request->only('email', 'password');
                if (Auth::guard('superadmin')->attempt($credentials)) {   
                    // Authentication successful
                    return redirect("admindashboard");
                } else {
                    // Authentication failed
                    return back()->withError('Invalid credentials');
                }
                return redirect ('/admindashboard');
                break;
				
				
				
               
				// CREATOR/NIC
            case 2:
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
                break;
				
				 // PUBLISHER 
            case 3:
			
			  $request->validate([
                    'email' => 'email | required',
                    'password' => 'required'
                ]);
                $role = User::where('role','=','3')->first();
                $status = User::where('status','=','1')->first();
                $credentials = $request->only('email', 'password');
                if(!$status){
                    echo "Your account status is pending";
                }else{
                    if (Auth::attempt($credentials) && $role) {
                        // Authentication successful
                        return redirect('///');
                        
                } else {
                    // Authentication failed
                    return back()->withError('Invalid credentials');
                }
                }
                break;
				
				
				
            // DRAFT - DEPARTMENT USER   
				
            case 4:
               
			    $request->validate([
                    'email' => 'email | required',
                    'password' => 'required'
                ]);
                $role = User::where('role','=','4')->first();
                $status = User::where('status','=','1')->first();
                $credentials = $request->only('email', 'password');
                if(!$status){
                    echo "Your account status is pending";
                }else{
                    if (Auth::attempt($credentials) && $role) {
                        // Authentication successful
                        return redirect('///');
                        
                } else {
                    // Authentication failed
                    return back()->withError('Invalid credentials');
                }
                }
                break;
				
				//APPROVER - DEPARTENT USER 
            case 5:              
				
				 $request->validate([
                    // 'dept_name' =>['required'],
                    'email' => 'required|email',
                    'password' => 'required'
                ]);
                $status = User::where('status','=','1')->first();
                $role = User::where('role','=','5')->first();
                $credentials = $request->only('email', 'password');
                if(!$status){
                    echo "Your account status is pending";
                }else{
					
					//dd($credentials);exit;
                    if (Auth::attempt($credentials) && $role) {
                        // Authentication successful
                        return redirect('approver');
                        
                } else {
                    // Authentication failed
                    return back()->withError('Invalid credentials');
                }
                }
                break;		
           default:
                return back()->withErrors(['role' => 'Invalid role selected']);
         }
        }
    
    }

