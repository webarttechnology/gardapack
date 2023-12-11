<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Faq};

class FaqManageController extends Controller
{
    //

    public function list(){
         $faqs = Faq::all();
          return view('admin.faq.list', compact('faqs'));
    }
    
    public function add_page(){
         return view('admin.faq.add');
    }
    
    public function add_action(Request $request){
        $request->validate([
            'question' => 'required',
            'answer' => 'required'
        ]);

        Faq::create([
            'question' => $request->question,
            'answer' => $request->answer,
        ]);

        return back()->with('success', 'Successfully Saved');
    }
    
    public function delete($id){
         Faq::find($id)->delete();
         return back()->with('delete', 'Deleted');
    }
    
    public function update($id){
        $faq = Faq::whereId($id)->first();
        return view('admin.faq.update', compact('faq'));
    }

    public function update_action(Request $request, $id){
        $request->validate([
            'question' => 'required',
            'answer' => 'required'
        ]);

        Faq::whereId($id)->update([
            'question' => $request->question,
            'answer' => $request->answer,
        ]);

        return back()->with('success', 'Successfully Saved');
    }
}