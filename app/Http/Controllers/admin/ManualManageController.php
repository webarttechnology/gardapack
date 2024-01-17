<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Manual;
use Illuminate\Http\Request;

class ManualManageController extends Controller
{
    //

    public function list(){
        $data = Manual::all();
        return view('admin.manual.list', compact('data'));
   }
   
   public function add_page(){
        return view('admin.manual.add');
   }
   
   public function add_action(Request $request){
       $request->validate([
           'title' => 'required',
           'pdf' => 'required|mimes:pdf|max:5120'
       ]);

        $pdf = time() . '.' . $request->pdf->extension();
        $request->pdf->move(public_path('uploads/pdfs/'), $pdf);

        Manual::create([
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'title' => $request->title,
            'pdf' => $pdf,
        ]);

       return back()->with('success', 'Successfully Saved');
   }
   
   public function delete($id){
        $manual = Manual::find($id)->first();
        unlink(public_path('uploads/pdfs/'.$manual->pdf));
        $manual->delete();
        return back()->with('delete', 'Deleted');
   }
   
   public function update($id){
       $manual = Manual::whereId($id)->first();
       return view('admin.manual.update', compact('manual'));
   }

   public function update_action(Request $request, $id){
    $request->validate([
        'title' => 'required',
        'pdf' => 'required|mimes:pdf|max:5120'
    ]);

     $pdf = time() . '.' . $request->pdf->extension();
     $request->pdf->move(public_path('uploads/pdfs/'), $pdf);

     Manual::whereId($id)->update([
         'meta_title' => $request->meta_title,
         'meta_description' => $request->meta_description,
         'title' => $request->title,
         'pdf' => $pdf,
     ]);

    return back()->with('success', 'Successfully Saved');
   }
}
