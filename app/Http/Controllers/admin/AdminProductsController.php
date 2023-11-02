<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\{Product, Variations, Category, VariationImages, ProductGallery, Notification};

class AdminProductsController extends Controller
{
    //

    public function lists()
    {
           $admin_type = Auth::guard('admin')->user()->type;

           if($admin_type == "admin"){
              $products = Product::orderBy('id', 'desc')->get();
           }else{
              $products = Product::where('added_by', Auth::guard('admin')->user()->id)->orderBy('id', 'desc')->get();
           }
           
           return view('admin.product.lists', compact('products'));
    }

    /*
          Product Page & Add
    */

    public function add(Request $request)
    {
           if($request->method() == "GET"){
               $categories = Category::where('type', 'product')->get();
               return view('admin.product.add', compact('categories'));
           }else{
               $request->validate([
                    'categories' => 'required|not_in:Select a Category',
                    'name' => 'required|max:200',
                    'featured_img' => 'required|max:2048|mimes:jpg,jpeg,png,gif',
                    'stock_status' => 'required|not_in:Select Status',
               ]);

               $price = ($request->product_price == null) ? 0 : ($request->product_price);
               $discount = ($request->product_discount == null) ? 0 : ($request->product_discount);

               // upload featured image
               $imageName = time().'.'.$request->featured_img->extension();
               $request->featured_img->move(public_path('admin/product/featured_img/'), $imageName);

               // video upload
               if($request->hasFile('video')){
                    $request->validate([
                          'video' => 'mimes:mp4|max:200000',
                    ]);

                    $videoName = time().'.'.$request->video->extension();
                    $request->video->move(public_path('admin/product/video/'), $videoName);
               }else{
                    $videoName = null;
               }

               // slug 
               $slug = Str::slug($request->name, '-');

               /**
                * Stock status 
               */

               if($request->stock_status == "In Stock"){
                     $no_in_stock = $request->no_in_stock;
               }
               else{
                     $no_in_stock = null;
               }

               $product = Product::create([
                     'category_id' => $request->categories,
                     'sub_category_id' => $request->subcategories,
                     'added_by' => Auth::guard('admin')->user()->id,
                     'name' => $request->name,
                     'sku_code' => $request->sku_code,
                     'description' => $request->description,
                     'short_description' => $request->short_description,
                     'video' => $videoName,
                     'featured_img' => $imageName,
                     'price' => $price,
                     'discount' => $discount,
                     'delivary_charge' => $request->delivary_charge,
                     'website_link' => $request->website_link,
                     'status' => $request->status,
                     'slug' => $slug,
                     'stock_status' => $request->stock_status,
                     'no_in_stock' => $no_in_stock,
                     'rating' => null,
                     'tags' => $request->tags,
                     
                     'weight' => $request->weight,
                     'length' => $request->length,
                     'width' => $request->width,
                     'height' => $request->height,
               ]);

               // add variations

               if($request->has('ropeChain')){
                       $variations = $request->ropeChain;

                       foreach($variations as $key => $variation){
                           $name = ($request->ropeChain[$key]) ?? 'NA' ?? $request->ropeChain[$key];
                           $carat = ($request->carat[$key]) ?? 'NA' ?? $request->carat[$key];
                           $size = ($request->size[$key]) ?? 'NA' ?? $request->size[$key];
                           $amount = ($request->amount[$key]) ?? 'NA' ?? $request->amount[$key];
                           $gold_color = ($request->gold_color[$key]) ?? 'NA' ?? $request->gold_color[$key];
                           $discount_percentage1 = ($request->discount_percentage1[$key]) ?? 'NA' ?? $request->discount_percentage1[$key];
                           $discount_amt1 = ($request->discount_amt1[$key]) ?? 'NA' ?? $request->discount_amt1[$key];


                            $new_var = Variations::create([
                                'product_id' => $product->id,
                                'variation' => $name,
                                'carat' => $carat,
                                'size' => $size,
                                'amount' => $amount,
                                'color' => $gold_color,
                                'discount' => $discount_percentage1,
                                'final_price' => $discount_amt1,
                            ]);


                            // upload image
                            if($request->hasFile('otherimage')){
                                    $variation_image = $request->otherimage[$key];
                            
                                    $imageName2 = time().'.'.$variation_image->extension();
                                    $variation_image->move(public_path('admin/product/variations/otherimage/'), $imageName2);

                                    VariationImages::create([
                                            'var_id' => $new_var->id,
                                            'var_image' => $imageName2,
                                    ]);
                            }
                       }
               }

               // add notification if sub admin add a admin
               if(Auth::guard('admin')->user()->type == "sub_admin"){
                Notification::setNotifications(Auth::guard('admin')->user()->id, 'Add', 'Product', $product->id);
               }

               $product_ids = $product->id;
               return view('admin.product.gallery_add', compact('product_ids'));
           }
    }

    /*
           Product Gallery Images..
    */

    public function gallery(Request $request, $id)
    {
        $image = $request->file('file');
        $imageName = time().$image->getClientOriginalName();
        $image->move(public_path('admin/product/gallery'),$imageName);

        $gallery = ProductGallery::create([
              'product_id' => $id,
              'gallery_image' => $imageName
        ]);

        return response()->json(['success'=>$imageName]);
    }

    /* 
            Product Delete..
    */

    public function delete($id)
    {
          Product::find($id)->delete();
          return back()->with('product_delete', 'Successfully Deleted.');
    }

    /*
         Product GAllery List
    */

    public function gallery_lists($id)
    {
        $galleries = Product::find($id)->productGalleries;
        return view('admin.product.gallery.list', compact('galleries', 'id'));
    }

    /*
        Add GAllery
    */

    public function gallery_add($id)
    {
        $product_ids = $id;
        return view('admin.product.gallery_add', compact('product_ids'));
    }

    /*
       Delete Gallery
    */

    public function gallery_delete($id)
    {
           $gallery = ProductGallery::whereId($id)->first();
           unlink('admin/product/gallery/'.$gallery->gallery_image);
           $gallery->delete();
           return back()->with('product_delete', 'Successfully Deleted.');
    }

    /*
        Gallery Update
    */

    public function gallery_update(Request $request, $id)
    {
        if($request->method() == "GET"){
              $gallery = ProductGallery::whereId($id)->first();
              return view('admin.product.gallery.update', compact('gallery'));
        }else{
             if($request->hasFile('gallery_image')){
                    $image = $request->gallery_image;
                    $imageName = time().$image->getClientOriginalName();
                    $image->move(public_path('admin/product/gallery'), $imageName);
                    
                    $gallery = ProductGallery::whereId($id)->first();
                    unlink('admin/product/gallery/'.$gallery->gallery_image);
            
                    $gallery = ProductGallery::whereId($id)->update([
                        'gallery_image' => $imageName
                    ]);
                    
                    return back()->with('gallery_update', 'Successfully Saved.');
             }else{
                    return redirect()->back();
             }
        }
    }

     /**
     * Variation delete
     */

     public function variation_delete($id)
     {
            Variations::find($id)->delete();
            return back();
     }

    /*
          Product Update..
    */

    public function update(Request $request, $id)
    {
        if($request->method() == "GET"){
            $products = Product::whereId($id)->first();
            $variations = Product::find($id)->variations;
            $categories = Category::all();

            return view('admin.product.update', compact('products', 'variations', 'categories'));
        }else{
            $request->validate([
                'categories' => 'required|not_in:Select a Category',
                'name' => 'required|max:200',
           ]);

           $price = ($request->product_price == null) ? 0 : ($request->product_price);
           $discount = ($request->product_discount == null) ? 0 : ($request->product_discount);

           // slug
           $slug = Str::slug($request->name, '-');

           /**
            * Stock status 
            */

            if($request->stock_status == "In Stock"){
                   $no_in_stock = $request->no_in_stock;
            }
            else{
                    $no_in_stock = null;
            }

           $basics = Product::whereId($id)->update([
                'category_id' => $request->categories,
                'sub_category_id' => $request->subcategories,
                'name' => $request->name,
                'sku_code' => $request->sku_code,
                'description' => $request->description,
                'short_description' => $request->short_description,
                'price' => $price,
                'discount' => $discount,
                'delivary_charge' => $request->delivary_charge,
                'website_link' => $request->website_link,
                'status' => $request->status,
                'slug' => $slug,
                'stock_status' => $request->stock_status,
                'no_in_stock' => $no_in_stock,
                'rating' => null,
                'tags' => $request->tags,
                
                'weight' => $request->weight,
                 'length' => $request->length,
                 'width' => $request->width,
                 'height' => $request->height,
           ]);


           // video upload
           if($request->hasFile('video')){
                $request->validate([
                    'video' => 'mimes:mp4|max:200000',
                ]);

                $videoName = time().'.'.$request->video->extension();
                $request->video->move(public_path('admin/product/video/'), $videoName);

                Product::whereId($id)->update([
                     'video' => $videoName,
                ]);
           }

           // featureed image upload..
           if($request->hasFile('featured_img')){
                    $request->validate([
                        'featured_img' => 'max:2048|mimes:jpg,jpeg,png,gif',
                    ]);

                    $imageName = time().'.'.$request->featured_img->extension();
                    $request->featured_img->move(public_path('admin/product/featured_img/'), $imageName);

                    Product::whereId($id)->update([
                        'featured_img' => $imageName,
                    ]);
           }

           // variations upload
           if($request->has('ropeChain')){
               $variations = $request->ropeChain;
               
               foreach($variations as $key => $variation){
                        $name = ($request->ropeChain[$key]) ?? 'NA' ?? $request->ropeChain[$key];
                        $carat = ($request->carat[$key]) ?? 'NA' ?? $request->carat[$key];
                        $size = ($request->size[$key]) ?? 'NA' ?? $request->size[$key];
                        $amount = ($request->amount[$key]) ?? 'NA' ?? $request->amount[$key];
                        $gold_color = ($request->gold_color[$key]) ?? 'NA' ?? $request->gold_color[$key];
                        $discount_percentage1 = ($request->discount_percentage1[$key]) ?? 'NA' ?? $request->discount_percentage1[$key];
                        $discount_amt1 = ($request->discount_amt1[$key]) ?? 'NA' ?? $request->discount_amt1[$key];

                        /**  
                         * check the variation is already exists or not 
                         * if, exits data will be updated
                         * else, a new variation will be created
                        */

                        $check = Variations::whereVariation($name)->whereCarat($carat)->whereId($id)->first();
                        if($check == null){
                                $new_var = Variations::create([
                                    'product_id' => $id,
                                    'variation' => $name,
                                    'carat' => $carat,
                                    'size' => $size,
                                    'amount' => $amount,
                                    'color' => $gold_color,
                                    'discount' => $discount_percentage1,
                                    'final_price' => $discount_amt1,
                                ]);
                        }else{
                                    Variations::where('product_id', $id)->update([
                                        'variation' => $name,
                                        'carat' => $carat,
                                        'size' => $size,
                                        'amount' => $amount,
                                        'color' => $gold_color,
                                        'discount' => $discount_percentage1,
                                        'final_price' => $discount_amt1,
                                    ]);
                        }

                        // // upload image
                        // if($request->hasFile('otherimage')){
                        //     $variation_image = $request->otherimage[$key];
                    
                        //     $imageName2 = time().'.'.$variation_image->extension();
                        //     $variation_image->move(public_path('admin/product/variations/otherimage/'), $imageName2);

                        //     VariationImages::create([
                        //             'var_id' => $new_var->id,
                        //             'var_image' => $imageName2,
                        //     ]);
                        // }
               }
           }

              return back()->with('product_update', 'Successfully Updated');
        }
    }
}