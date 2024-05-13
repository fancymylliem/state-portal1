<?php

namespace App\Http\Controllers\category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Govorder;


class GovorderController extends Controller
{
    //
    public function addNewGovOrder(Request $request){
        $request->validate([
            'department' => 'required',
            'title' => 'required',
            'gono' => 'required',
            'releasedate' => 'required',
            'pdf' => 'required|mimes:jpg,pdf,txt,xlx,xls,csv|max:2048'
        ]);
        $govo = new Govorder;
        $govo->department=$request->input('department');
        $govo->title=$request->input('title');
        $govo->gono=$request->input('gono');
        $govo->releasedate=$request->input('releasedate');
        $govo->pdf=$request->input('pdf');
        if($request->hasfile('pdf')){
            $file = $request->file('pdf');
            $extension = $file->getClientOriginalExtension();
            $fileName = time()."_govorder.".$extension;
            $file->move('uploads/orders/',$fileName);
            $govo->pdf = $fileName;
        }else{
            return $request;
            $govo->pdf = "blank";
        }
        $govo->save();
        return redirect('vieworder')
        ->with('success','File has been uploaded.')
                    ->with('file', $fileName);

    }
    public function viewGovOrder(){
        $vorder = Govorder::all();
        return view('contentcreators.categories.viewCategories.viewGovOrders',compact('vorder'));
    }
    public function downloadOrder(Request $request,$file){
        return response()->download(public_path('/uploads/orders/'.$file));
    }
    public function deleteGovOrder($id){
        $delorder = Govorder::find($id);
        $delorder->delete();
        return redirect('vieworder')->with('success','Record Deleted');
    }
    public function editGovOrder($id){
        $order = Govorder::find($id);
        return view('contentcreators.categories.updateCategories.updateGovorders',compact('order'));
    }
    public function updateGovOrder(Request $request, $id){
        $order = Govorder::find($id);
        $order->department=$request->input('department');
        $order->title=$request->input('title');
        $order->gono=$request->input('gono');
        $order->releasedate=$request->input('releasedate');
        $order->pdf=$request->input('pdf');
        if($request->hasfile('pdf')){
            $file = $request->file('pdf');
            $extension = $file->getClientOriginalExtension();
            $fileName = time()."_govorder.".$extension;
            $file->move('uploads/orders/',$fileName);
            $order->pdf = $fileName;
        }else{
            return $request;
            $order->pdf = "blank";
        }
        $order->update();
        return redirect('vieworder')
        ->with('success','File updated successfully.')
                    ->with('file', $fileName);
    }
    public function sendToPublisher(Request $request, $id)
    {
        $order = Govorder::find($id);
        if($order->status=='0'){
            $order->update(['status' => '1']);
            return back()->with('message', 'Sent to publisher!');
        }else{
            echo "Not Found";
        }
    }
}
