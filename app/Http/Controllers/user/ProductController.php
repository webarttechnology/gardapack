<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\{Product, Category, ProductGallery, Rating, Variations, ProductCompare};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    //

    public function product_details($slug)
    {
        $product = Product::whereSlug($slug)->first();
        $related_products = Product::relatedProducts($product->id, $product->category_id);
        $reviews = Rating::where('product_id', $product->id)->get();

        return view('front_end.product.product_details', compact('product', 'related_products', 'reviews'));
    }


    // Product Category

    public function product_category($subcategory_id, $category_slug)
    {
        $per_page = 12;
        $category = Category::where('slug', $category_slug)->first();
        $top_rated_products = Product::topRatedProducts($category->id, $subcategory_id);
        $tags = (Product::where('category_id', $category->id)->first() == null) ? null : ((Product::where('category_id', $category->id)->first())->tags);

        if ($subcategory_id == 0) {
            $products = Product::where('category_id', $category->id)->paginate($per_page);
            $total_products = count(Product::where('category_id', $category->id)->get());
        } else {
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
     * shop 
     */

    public function shop()
    {
        $per_page = 12;
        $category = Category::get();
        $total_products = count(Product::all());
        $products = Product::inRandomOrder()->paginate($per_page);
        $product_categories = Category::where('type', 'product')->get();
        $top_rated_products = Product::topRatedProducts(0, 0);

        return view('front_end.product.shop', compact('category', 'product_categories', 'products', 'total_products', 'per_page', 'top_rated_products'));
    }


    /**
     * Product Filter By Amount
     */


    public function product_filter(Request $request, $category_id)
    {
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

    public function product_search(Request $request)
    {
        $request->validate([
            'p_search' => 'required',
            'search_category' => 'required',
        ]);

        $per_page = 12;
        $search_for = $request->p_search;
        $search_category = $request->search_category;
        $product_categories = Category::where('type', 'product')->get();
        $products = Product::where('name', 'LIKE', '%' . $search_for . '%')->where('category_id', $search_category)->get();
        $total_products = count($products);

        return view('front_end.product.product_search', compact('products', 'search_for', 'total_products', 'per_page',  'product_categories'));
    }

    /**
     * Ajax call
     */

    public function fetch_gallery_img($id)
    {
        $gal = ProductGallery::whereId($id)->first();
        return response()->json(asset("admin/product/gallery/" . $gal->gallery_image));
    }

    /**
     * GAllery Image Fetch
     */

    public function galImg_fetch($prod_id, $color)
    {
        $prodImg = ProductGallery::where('product_id', $prod_id)->where('color', $color)->first();
        if ($prodImg != null) {
            return response()->json(['image' => $prodImg->gallery_image]);
        } else {
            return response()->json(['image' => "null"]);
        }
    }

    public function prodVar_fetch($prod_id)
    {
        $prodVar = Variations::whereId($prod_id)->first();
        return response()->json(['variation' => $prodVar->final_price]);
    }

    /**
     * product compare
     */

    public function product_compare($product_id)
    {
        $unique_id = Session::has('compareUniqueId') ? Session::get('compareUniqueId') : Str::random(30);
        Session::put('compareUniqueId', $unique_id);
        
        $prod_no = count(ProductCompare::where('unique_id', Session::get('compareUniqueId'))->get());
        
        if($prod_no == 4){
            ProductCompare::where('unique_id', $unique_id)->first()->delete();
        }

        $check = ProductCompare::where('unique_id', $unique_id)
            ->where('prod_id', $product_id)->first();

            if ($check === null) {
                ProductCompare::create([
                    'unique_id' => $unique_id,
                    'prod_id' => $product_id,
                ]);
            }

        return redirect('product/compare/page/view');
    }

    /**
     * product compare delete
    */

    public function product_compare_delete($id){
        $prod_no = count(ProductCompare::where('unique_id', Session::get('compareUniqueId'))->get());
        
        if($prod_no == 1){
             Session::forget('compareUniqueId');
        }

        ProductCompare::whereId($id)->delete();
        Session::put('success', 'Successfully Removed');

        return redirect()->route('product.compare.page')->with('success', 'Successfully Removed');
    }

    public function prodCompareView(){
        $productsCompares = ProductCompare::where('unique_id', Session::get('compareUniqueId'))
        ->orderBy('id', 'desc')
        ->limit(4)
        ->get();
    
        $prodCount = count($productsCompares);
        if($prodCount > 0){
            return view('front_end.product.compare', compact('productsCompares', 'prodCount'));
        }else{
            return redirect('shop')->with('error', 'No Product to Compare');
        }
    }

    /**
     * Single product details
     */

    public function SingleProductDetails($product_id)
    {
        $product = Product::with('productGalleries', 'category')->whereId($product_id)->first();
        $prod_quantity = ($product->no_in_stock > 0) ? "In Stock" : "Out of Stock";
        // $prodCategory = Category::where('id', $product->category_id)->first();
        // $prodGalleries = ProductGallery::where('product_id', $product->id)->get();
        return response()->json([
            'details' => $product, 'quantity' => $prod_quantity,
        ]);
    }
}
