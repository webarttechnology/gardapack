<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\{HomePge, Testimonial};
use Illuminate\Http\Request;

class TestimonialManage extends Controller
{
    // 

    public function list(){
        $faqs = Testimonial::all();
        $home = HomePge::first();
        return view('admin.testimonial.list', compact('faqs', 'home'));
   }
   
   public function add_page(){
        return view('admin.testimonial.add');
   }
   
   public function add_action(Request $request){
       $request->validate([
           'name' => 'required',
           'message' => 'required'
       ]);

       Testimonial::create([
           'name' => $request->name,
           'message' => $request->message,
       ]);

       return back()->with('success', 'Successfully Saved');
   }
   
   public function delete($id){
        Testimonial::find($id)->delete();
        return back()->with('delete', 'Deleted');
   }
   
   public function update($id){
       $faq = Testimonial::whereId($id)->first();
       return view('admin.testimonial.update', compact('faq'));
   }

   public function update_action(Request $request, $id){
       $request->validate([
           'name' => 'required',
           'message' => 'required'
       ]);

       Testimonial::whereId($id)->update([
           'name' => $request->name,
           'message' => $request->message,
       ]);

       return back()->with('success', 'Successfully Saved');
   }

   public function heading_save(Request $request){
          $request->validate([
              'testimonial_heading' => 'required',
          ]);

          if(HomePge::first() == null){
              HomePge::create([
                  'testimonial_heading' => $request->testimonial_heading,
              ]);
          }
          else{
              HomePge::first()->update([
                  'testimonial_heading' => $request->testimonial_heading,
              ]);
          }

          return redirect()->back()->with('success', 'Success');
   }
}
