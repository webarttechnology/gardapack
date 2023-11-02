<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Rating};

class ReviewsManageController extends Controller
{
    //

    public function reviews($product_id){
            $reviews = Rating::where('product_id', $product_id)->get();
            return view('admin.product.review.page', compact('reviews'));
    }
    
    public function reviews_delete($review_id){
           Rating::find($review_id)->delete();
           return redirect()->back()->with('success', 'Successfully Deleted');
    }
}