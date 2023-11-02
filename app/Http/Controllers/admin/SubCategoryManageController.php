<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Subcategory};
use Illuminate\Support\Str;
use Illuminate\Http\Response;

class SubCategoryManageController extends Controller
{
    //

    public function page($id) {
           $sub_categories = Subcategory::where('category_id', $id)->get();
           return view('admin.sub_category.page', compact('id', 'sub_categories'));
    }

    public function add_page($category_id) {
          return view('admin.sub_category.add', compact('category_id'));
    }

    public function add_page_action(Request $request, $category_id) {
           $check =  Subcategory::whereName($request->name)->first();
           
           // slug 
           $slug = Str::slug($request->name, '-');

           if($check == null){
                Subcategory::create([
                    'category_id'  => $category_id,
                    'name' => $request->name,
                    'slug' => $slug,      
                ]);

                return redirect()->back()->with('success', 'Successfully Saved');
           }else{
                return redirect()->back()->with('danger', 'This Category Already Exists');
           }      
    }

    public function update_page($id){
            $sub_category = Subcategory::where('id', $id)->first();
            return view('admin.sub_category.update_page', compact('id', 'sub_category'));
    }

    public function update_page_action(Request $request, $id) {
            $check =  Subcategory::where('name', $request->name)->where('id', '!=', $id)->first();
            
            if($check == null){
                // slug 
                $slug = Str::slug($request->name, '-');

                Subcategory::whereId($id)->update([
                    'name' => $request->name, 
                    'slug' => $slug,   
                ]);

                return redirect()->back()->with('success', 'Successfully Saved');
            }else{
                return redirect()->back()->with('danger', 'This Category Already Exists');
            }      
    }

    public function delete($id) {
           Subcategory::find($id)->delete();
           return redirect()->back()->with('danger', 'Deleted');
    }

    /**
     * 
    */

    public function subcategory_fetch($category_id) {
        /**
         * Check if subcategory exists for the selected category or not 
        */

        $sub_category = Subcategory::where('category_id', $category_id)->orderBy('id', 'desc')->get();
        return response()->json($sub_category); 
    }
}