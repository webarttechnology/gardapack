<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Category, Notification};
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CatagoriesManageController extends Controller
{
    //

    public function categories_lists($type)
    {
           $categories = Category::where('type', $type)->orderBY('id', 'desc')->get();
           return view('admin.categories.lists', compact('categories', 'type'));
    }

    public function add_page($type)
    {
           return view('admin.categories.add', compact('type'));
    }

    public function add_action(Request $request, $type)
    {
           $request->validate([
                 'name' => 'required|max:200',
                 'want_to_display' => 'required',
           ]);

           // slug 
           $slug = Str::slug($request->name, '-');

            $check = Category::whereName($request->name)->first();

            if($request->want_to_display == "yes"){
                $request->validate([
                    'category_top_img' => 'required|mimes:jpg,jpeg,png|max:2048'
               ]);

               // upload featured image
               $topImg = time().'.'.$request->category_top_img->extension();
               $request->category_top_img->move(public_path('uploads/category_top_img/'), $topImg);
            }else{
                $topImg = null;
            }

            if($check == null){

                  // if category has image
                  if($request->hasFile('category_img')){
                        $request->validate([
                             'category_img' => 'mimes:jpg,jpeg,png|max:2048'
                        ]);

                        // upload featured image
                        $imageName = time().'.'.$request->category_img->extension();
                        $request->category_img->move(public_path('category_img/'), $imageName);

                        $category = Category::create([
                            'name' => $request->name,
                            'display_top' => $request->want_to_display,
                            'added_by' => Auth::guard('admin')->user()->id,
                            'category_img' => $imageName,
                            'category_top_img' => $topImg,
                            'type' => $type,
                            'slug' => $slug
                        ]);

                  }
                else{
                    $category = Category::create([
                            'name' => $request->name,
                            'added_by' => Auth::guard('admin')->user()->id,
                            'type' => $type,
                            'slug' => $slug,
                            'category_top_img' => $topImg,
                            'display_top' => $request->want_to_display,
                    ]);
                }

                // add notification if sub admin add a Page
                if(Auth::guard('admin')->user()->type == "sub_admin"){
                    Notification::setNotifications(Auth::guard('admin')->user()->id, 'Add', 'Category', $category->id);
                }

                return back()->with('cat_success', 'Successfully Saved');
                 
            }else{
                return back()->with('cat_err', 'Sorry! This Category is Already Present');
            }
    }


    public function update_page($id, $type)
    {
            $categories = Category::whereId($id)->first();
            return view('admin.categories.update', compact('categories', 'type'));
    }

    public function update(Request $request, $id, $type)
    {
        $request->validate([
            'name' => 'required|max:200'
        ]);

       $check = Category::whereName($request->name)->where('id', '!=', $id)->first();
       if($check == null){
               
              $check2 = Category::where('id', $id)->first();
                if($request->want_to_display == "yes"){
                    $request->validate([
                        'category_top_img' => 'mimes:jpg,jpeg,png|max:2048'
                ]);

                    if($request->hasFile('category_top_img')){
                        // upload featured image
                        $topImg = time().'.'.$request->category_top_img->extension();
                        $request->category_top_img->move(public_path('uploads/category_top_img/'), $topImg);
                    }
                    else{
                            $topImg = $check2->category_top_img;
                    }

                }else{
                    if($check2->category_top_img != null){
                        $topImg = $check2->category_top_img;
                    }else{
                        $topImg = null;
                    }
                }

               // 
               if($request->hasFile('category_img')){
                      $request->validate([
                           'category_img' => 'mimes:jpg,jpeg,png|max:2048'
                      ]);

                      $details = Category::whereId($id)->first();

                      if($details->category_img != null){
                            unlink('category_img/'.$details->category_img);
                      }

                      // upload featured image
                      $imageName = time().'.'.$request->category_img->extension();
                      $request->category_img->move(public_path('category_img/'), $imageName);

                      $category = Category::whereId($id)->update([
                          'category_img' => $imageName,
                      ]);
               }else{
                    // slug 
                    $slug = Str::slug($request->name, '-');

                    Category::whereId($id)->update([
                        'name' => $request->name,
                        'type' => $type,
                        'slug' => $slug,
                        'category_top_img' => $topImg,
                        'display_top' => $request->want_to_display,
                    ]);
               }

                // add notification if sub admin add a Page
                if(Auth::guard('admin')->user()->type == "sub_admin"){
                    Notification::setNotifications(Auth::guard('admin')->user()->id, 'Add', 'Category', $category->id);
                }

                return back()->with('cat_success', 'Successfully Saved');
       }else{
                return back()->with('cat_err', 'Sorry! This Category is Already Present');
       }
    }


    public function delete($id)
    {
           Category::find($id)->delete();
           return back()->with('category_delete', 'Deleted.');
    }

}