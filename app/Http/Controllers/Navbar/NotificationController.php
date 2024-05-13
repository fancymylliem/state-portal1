<?php

namespace App\Http\Controllers\Navbar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notification;
use App\Models\Department;

use DB;

class NotificationController extends Controller
{
    //
    function addNewNotification(Request $req){
        $req->validate([
            'noti_pdf'=>'required|mimes:jpg,pdf,txt,xlx,xls,csv|max:2048'
        ]);
        $fileModel = new Notification;
        $fileModel->title = $req->input('title');
        $fileModel->dept_id = $req->input('department');
        $fileModel->notification_no = $req->input('noti_no');
        $fileModel->release_date = $req->input('release_date');
        $fileModel->noti_pdf = $req->input('noti_pdf');
        $fileModel->filesize=$req->file('noti_pdf')->getSize();
        if($req->hasfile('noti_pdf')){
            $file = $req->file('noti_pdf');
            $extension = $file->getClientOriginalExtension();
            $fileName = time()."_notify.".$extension;
            $file->move('uploads/notifications/',$fileName);
            $fileModel->noti_pdf = $fileName;
        }
        else{
            return $req;
            $fileModel->noti_pdf = "blank";
        }
        $fileModel->save();
        return redirect('viewnotification')
        ->with('success','File uploaded successfully.');
    }
    public function downloadNotification(Request $request,$file){
        return response()->download(public_path('/uploads/notifications/'.$file));
    }
    public function viewNotification(){
        $notification = DB::table('notifications')
                        ->join('departments','departments.dept_id','=','notifications.dept_id')->get();
        return view('contentcreators.homecontents.viewhomecontents.viewNotifications',compact('notification'));
    }
    public function editNotification($id){
        $depts = Department::all();
        $notification = Notification::find($id);
        return view('contentcreators.homecontents.updatehomecontents.updateNotifications',compact('depts','notification'));
    }
    public function updateNotification(Request $req,$id){
        $fileModel = Notification::find($id);
        if(isset($req->noti_pdf)){
            $fileModel->noti_pdf = $req->input('noti_pdf');
            if($req->hasfile('noti_pdf')){
                $file = $req->file('noti_pdf');
                $extension = $file->getClientOriginalExtension();
                $fileName = time()."_notify.".$extension;
                $file->move('uploads/notifications/',$fileName);
                $fileModel->noti_pdf = $fileName;
            }
            else{
                return $req;
                $fileModel->noti_pdf = "blank";
            }
        }
        $fileModel->title = $req->input('title');
        $fileModel->dept_id = $req->input('department');
        $fileModel->notification_no = $req->input('noti_no');
        $fileModel->release_date = $req->input('release_date');        
        $fileModel->update();
        return redirect('viewnotification')
        ->with('success','File updated successfully.');
    }
    public function deleteNotification($id){
        $dnotification = Notification::find($id);
        $dnotification->delete();
        return redirect('viewnotification')->with('success','Record Deleted');
    }
    public function sendToPublisher(Request $request, $id)
    {
        $notification = Notification::find($id);
        if($notification->status=='0' || $notification->status=='3'){
            $notification->update(['status' => '1']);
            return redirect('viewnotification')->with('success', 'Sent to publisher!');
        }else{
            echo "Not Found";
        }    
    }
    public function viewNotificationDetails($id){
        $notification = DB::table('notifications')
                ->join('departments','notifications.dept_id','=','departments.dept_id')
                ->where('notifications.notification_id',$id)
                ->first();
        return view('contentcreators.homecontents.viewhomecontents.viewDetails.viewNotificationDetails',compact('notification'));
    }
    public function publicViewNotification(){
        $viewnotification =DB::table('notifications')
        ->join('departments','departments.dept_id','=','notifications.dept_id')
                        ->orderBy('notification_id','desc')
                        ->get();
        return view('home.navbar.notifications.notifications',compact('viewnotification'));
    }
    public function aboutNotification($id){
        $viewnotification =DB::table('notifications')
        ->join('departments','notifications.dept_id','=','departments.dept_id')
                    ->where('notifications.notification_id',$id)
                    ->first();
        return view('home.navbar.notifications.notificationDetails',compact('viewnotification'));
    }
}
