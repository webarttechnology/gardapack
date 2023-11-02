<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "products";
    protected $fillable = [
        'category_id',
        'sub_category_id',
        'added_by',
        'name',
        'title',
        'description',
        'short_description',
        'featured_img',
        'price',
        'discount',
        'delivary_charge',
        'gallery',
        'sku_code',
        'video',
        'website_link',
        'no_in_stock',
        'stock_status',
        'slug',
        'rating',
        'status',
        'tags',
        'weight',
        'length',
        'width',
        'height',
        'features',
        'color_added',
        'qty_check',
    ];

    public function variations()
    {
            return $this->hasMany(Variations::class);
    }

    public function productGalleries()
    {
            return $this->hasMany(ProductGallery::class);
    }

    /**
     * counting product 
    */

    public static function countProduct($type){
           if($type == "admin"){
                $total_product = count(Product::all());
           }else{
                $total_product = count(Product::where('added_by', Auth::guard('admin')->user()->id)->get());
           }

           return $total_product;
    }
    
    /**
     * Related Products
    */

     public static function relatedProducts($product_id, $category_id){
        $related_products = Product::where('category_id', $category_id)
        ->where('id', '!=', $product_id)->inRandomOrder()->limit(8)->get();

        return $related_products;
     }
     
     /**
      * Top Rated Products
     */

     public static function topRatedProducts($category_id, $subcategory_id){
            if($subcategory_id == 0){
                $top = Product::where('category_id', $category_id)->orderByRaw('CAST(price as UNSIGNED) desc')->limit(5)->get();
            }else{
                 $top = Product::where('category_id', $category_id)
                      ->where('sub_category_id', $subcategory_id)
                      ->orderByRaw('CAST(price as UNSIGNED) desc')->limit(5)->get();
            }

            return $top;
     }
     
     /**
      * In stock products
     */

     public static function inStockProducts(){
          if(Auth::guard('admin')->user()->type == "admin"){
               $products = Product::where('stock_status', 'In Stock')
               ->get();
          }else{
               $products = Product::whereId(Auth::guard('admin')->user()->id)
               ->where('stock_status', 'In Stock')
               ->get();
          }

          return $products;
     }

     /**
      *  out of stock products
     */

     public static function outOfStockProducts(){
          if(Auth::guard('admin')->user()->type == "admin"){
               $products = Product::where('stock_status', 'Out of Stock')
               ->get();
          }
          else{
               $products = Product::whereId(Auth::guard('admin')->user()->id)
               ->where('stock_status', 'Out of Stock')
               ->get();
          }

          return $products;
     }
     
     /**
      * Lowest In Stock Products
     */

     public static function lowestInStockProducts(){
          if(Auth::guard('admin')->user()->type == "admin"){
               $products = Product::where('stock_status', 'In Stock')
               ->where('no_in_stock', '<', 10)
               ->get();
          }
          else{
               $products = Product::whereId(Auth::guard('admin')->user()->id)
               ->where('stock_status', 'In Stock')
               ->where('no_in_stock', '<', 10)
               ->get();
          }

          return $products;
     }
}