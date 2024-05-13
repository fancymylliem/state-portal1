<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Language;
use Illuminate\Support\Facades\DB;


class LanguageController extends Controller
{
    //
    public function getLanguage(){
        $lang = Language::all();
        return view('admin.Language.addLanguage',compact('lang'));
    }
    public function postLanguage(Request $request){
        $request->validate([
            'language' => 'required'
        ]);
        $lang = new Language;
        $lang->language=$request->input('language');
        $lang->save();
        return redirect('viewLanguage')->with('success','New Language added successfully');
    }
    public function viewLanguage(){
        $lang = DB::table('languages')->get();
        return view('admin.Language.viewLanguage',compact('lang'));
    }
    public function getUpdateLanguage($lang_id){
        $lang = Language::find($lang_id);
        return view('admin.Language.updateLanguage',compact('lang'));
    }
    public function postUpdateLanguage($lang_id,Request $request){
        $request->validate([
            'language' => 'required'
        ]);
        $lang = Language::find($lang_id);
        $lang->language=$request->input('language');
        $lang->update();
        return redirect('viewLanguage')->with('success','Language updated successfully');
    }
    public function deleteLanguage($lang_id){
        $lang = Language::find($lang_id);
        $lang->delete();
        return back()->with('success','Language Deleted Successfully');

    }
}
