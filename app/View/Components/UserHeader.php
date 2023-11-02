<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\WishList;

class UserHeader extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        if(Auth::user()){
            $product_in_cart = count(Cart::where('user_id', Auth::user()->id)->get());
            $wish_list_product = count(WishList::where('user_id', Auth::user()->id)->get());
        }else{
            $product_in_cart= 0;
            $wish_list_product = 0;
        }
        
        return view('components.user-header', compact('product_in_cart', 'wish_list_product'));
    }
}