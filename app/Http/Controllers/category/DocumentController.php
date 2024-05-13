<?php

namespace App\Http\Controllers\category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Document;


class DocumentController extends Controller
{
    //
    public function addNewDocument(Request $request){
        $request->validate([
            'department' => 'required',
            'title' => 'required',
            'category' => 'required',
            'year' => 'required',
            'pdf' => 'required|mimes:jpg,pdf,txt,xlx,xls,csv|max:2048'
        ]);
        $doc = new Document;
        $doc->department=$request->input('department');
        $doc->title=$request->input('title');
        $doc->category=$request->input('category');
        $doc->year=$request->input('year');
        $doc->pdf=$request->input('pdf');
        if($request->hasfile('pdf')){
            $file = $request->file('pdf');
            $extension = $file->getClientOriginalExtension();
            $fileName = time()."_document.".$extension;
            $file->move('uploads/documents/',$fileName);
            $doc->pdf = $fileName;
        }else{
            return $request;
            $doc->pdf = "blank";
        }
        $doc->save();
        return redirect("viewdocument")
        ->with('success','File has been uploaded.')
                    ->with('file', $fileName);
    }
    public function viewDocument(){
        $vdoc = Document::orderBy('doc_id','asc')->get();
        return view('contentcreators.categories.viewCategories.viewDocuments',compact('vdoc'));
    }
    public function downloadDocument(Request $request,$file){
        return response()->download(public_path('/uploads/documents/'.$file));
    }
    public function deleteDocument($id){
        $deldoc = Document::find($id);
        $deldoc->delete();
        return redirect('viewdocument')->with('success','Record Deleted');
    }
    public function editDocument($id){
        $doc=Document::find($id);
        return view('contentcreators.categories.updateCategories.updateDocuments',compact('doc'));
    }
    public function updateDocument(Request $request, $id){
        $doc = Document::find($id);
        $doc->department=$request->input('department');
        $doc->title=$request->input('title');
        $doc->category=$request->input('category');
        $doc->year=$request->input('year');
        $doc->pdf=$request->input('pdf');
        if($request->hasfile('pdf')){
            $file = $request->file('pdf');
            $extension = $file->getClientOriginalExtension();
            $fileName = time()."_document.".$extension;
            $file->move('uploads/documents/',$fileName);
            $doc->pdf = $fileName;
        }else{
            return $request;
            $doc->pdf = "blank";
        }
        $doc->update();
        return redirect("viewdocument")
        ->with('success','File has been Updated.')
                    ->with('file', $fileName);
    }
    public function sendToPublisher(Request $request, $id)
    {
        $adoc = Document::find($id);
        if($adoc->status=='0'){
            $adoc->update(['status' => '1']);
            return redirect('viewdocument')->with('message', 'Status changed!');
        }else{
            echo 'not found';
        }
    }
    
}
