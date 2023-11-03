<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\{Product, Category, ProductGallery, Rating, Variations};
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    public function product_details($slug){
        $product = Product::whereSlug($slug)->first();
        $related_products = Product::relatedProducts($product->id, $product->category_id);
        $reviews = Rating::where('product_id', $product->id)->get();

        return view('front_end.product.product_details', compact('product', 'related_products', 'reviews'));
    }
    
    
    // Product Category

    public function product_category($subcategory_id, $category_slug) {
        $per_page = 12;
        $category = Category::where('slug', $category_slug)->first();
        $top_rated_products = Product::topRatedProducts($category->id, $subcategory_id);
        $tags = (Product::where('category_id', $category->id)->first() == null) ? null : ((Product::where('category_id', $category->id)->first())->tags);

        if($subcategory_id == 0){
            $products = Product::where('category_id', $category->id)->paginate($per_page);
            $total_products = count(Product::where('category_id', $category->id)->get());
        }
        else{
            $products = Product::where('category_id', $category->id)
                       ->where('sub_category_id', $subcategory_id)
                       ->paginate($per_page);

            $total_products = count(Product::where('category_id', $category->id)
            ->where('sub_category_id', $subcategory_id)
            ->get());
        }

        $product_categories = Category::where('type', 'product')->get();

        
        return view('front_end.product.product_category', compact('products', 'tags', 'category', 'per_page', 'top_rated_products', 'total_products', 'product_categories'));
    }
    
    
    /**
     * Product Filter By Amount
    */


    public function product_filter(Request $request, $category_id) {
           $min_amount = $request->amount1;
           $max_amount = $request->amount2;
           
            $per_page = 12;
            $category = Category::where('slug', $category_id)->first();
            $top_rated_products = Product::topRatedProducts($category->id, 0);
            $tags = (Product::where('category_id', $category->id)->first() == null) ? null : ((Product::where('category_id', $category->id)->first())->tags);

            $product_categories = Category::where('type', 'product')->get();
            $total_products = count(Product::where('category_id', $category->id)->get());

            $products = Product::where('category_id', $category->id)
                      ->whereBetween('price', [$min_amount, $max_amount])
                       ->paginate($per_page);

            return view('front_end.product.product_category', compact('products', 'tags', 'per_page', 'category', 'top_rated_products', 'total_products', 'product_categories'));
    }
    
    
    /**
     * Product search
    */

    public function product_search(Request $request){
        
        $per_page = 12;
        $search_for = $request->p_search;
        $product_categories = Category::where('type', 'product')->get();
        $products = Product::where('name', 'LIKE', '%'.$search_for.'%')->get();
        $total_products = count($products);

        return view('front_end.product.product_search', compact('products', 'search_for', 'total_products', 'per_page',  'product_categories'));
    }

    /**
     * Ajax call
    */

    public function fetch_gallery_img($id){
        $gal = ProductGallery::whereId($id)->first();
        return response()->json(asset("admin/product/gallery/".$gal->gallery_image));
    }

    /**
     * GAllery Image Fetch
     */

     public function galImg_fetch($prod_id, $color){
        $prodImg = ProductGallery::where('product_id', $prod_id)->where('color', $color)->first();
        if($prodImg != null){
            return response()->json(['image' => $prodImg->gallery_image]);
        }else{
            return response()->json(['image' => "null"]);
        }
     }

     public function prodVar_fetch($prod_id){
        $prodVar = Variations::whereId($prod_id)->first();
        return response()->json(['variation' => $prodVar->final_price]);
     }

     /**
      * product compare
     */

     public function product_compare($product_id){
        $product = Product::whereId($product_id)->first();
        $view = view('front_end.product.compare', compact('product'));
        return response()->json(['view' => $view->render(), 'status' => true]);
     }
}
