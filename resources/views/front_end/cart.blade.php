<x-userHeader />
<main>

    <section class="cart-list">
        <div class="container">
            <div class="cart">
                <div class="catlist">
                    <div class="grid_12">
                        @if($total > 0)
                        <h1>Your Cart:</h1>
                        @endif
                    </div>

                    <!-- if user login -->

                    @if (Auth::user())

                        <ul class="items">
                            @foreach ($carts as $cart)
                                @php
                                    $product = App\Models\Product::where('id', $cart->product_id)->first();
                                @endphp

                                <li class="grid_4 item">

                                    <a href="javascript:void(0)" onclick="deleteCart({{ $cart->id }})"
                                        class="btn-remove">
                                        <i class="bi bi-trash"></i>
                                    </a>

                                    <div class="preview">
                                        <img src="{{ asset('admin/product/featured_img/' . $product->featured_img) }}" />
                                    </div>

                                    <div class="details" data-price="15.50">
                                        <h3>
                                            <a href="{{ url('product-details', $product->slug) }}">{{ $product->name }}</a>
                                        </h3>
                                    </div>

                                    
                                    <div class="inner_container">
                                        @if(Auth::user()->user_type != "wholesale")
                                        <div class="col_1of2 align-center picker">

                                            <a href="javascript:void(0)"
                                                onclick="cartUpdate({{ $cart->id }}, 'plus')"
                                                class="btn-quantity plus">

                                                <i class="bi bi-plus"></i>
                                            </a>
                                            <div class="col_1of2 quantity-text">

                                                <p><span class="current_quantity"
                                                        id="current_quantity_<?php echo $cart->id; ?>">{{ $cart->cart_quantity }}</span>

                                                </p>
                                            </div>

                                            <a href="javascript:void(0)"
                                                onclick="cartUpdate({{ $cart->id }}, 'minus')"
                                                class="btn-quantity minus">

                                                <i class="bi bi-dash"></i>

                                            </a>
                                            </p>

                                            <input type="hidden" class="quantity_field" name="quantity"
                                                data-price="15.50" value="1" />

                                        </div>
                                        @endif

                                        <div class="pl-3 prcfk">$
                                            {{ number_format((float) ($cart->cart_quantity * $cart['amount']), 2, '.', '') }}
                                        </div>
                                    </div>
                                    

                                </li>
                            @endforeach

                        </ul>

                        <!-- pagination -->

                        <div>
                            {{ $carts->links() }}
                        </div>
                    @else
                        <!-- if user not login -->

                        <ul class="items">
                            @if (Session::has('existing_cart'))
                                @php
                                    $carts = json_decode(Session::get('existing_cart'), true);
                                @endphp

                                @foreach ($carts as $key => $cart)
                                    @php
                                        $product = App\Models\Product::where('id', $cart['product_id'])->first();
                                    @endphp

                                    <li class="grid_4 item">
                                        {{-- <a href="javascript:void(0)" onclick="" class="btn-remove">
                                            <i class="bi bi-trash"></i>
                                        </a> --}}

                                        <div class="preview">
                                            <img src="{{ asset('admin/product/featured_img/' . $product->featured_img) }}" />
                                        </div>

                                        <div class="details" data-price="15.50">
                                            <h3>
                                                <a href="{{ url('product-details', $product->slug) }}">{{ $product->name }}</a>
                                            </h3>
                                        </div>

                                        <div class="inner_container">

                                            <div class="col_1of2 align-center picker">

                                                {{-- cartUpdate({{ $cart->id }}, 'plus') --}}

                                                <a href="javascript:void(0)" onclick="return addToCart({{ $product->id }}, 'multiple-add', 'pc', {{ $cart['cart_quantity'] }})" class="btn-quantity plus">
                                                    <i class="bi bi-plus"></i>
                                                </a>
                                                {{-- <input type="number" name="cart_quantity" id="cart_quantity" placeholder="1" min="1" --}}
                                                
                                                <div class="col_1of2 quantity-text">
                                                    <p><span class="current_quantity"
                                                            id="current_quantity_<?php echo $key; ?>">{{ $cart['cart_quantity'] }}</span>

                                                    </p>
                                                </div>

                                                {{-- cartUpdate({{ $cart->id }}, 'minus') --}}

                                                <a href="javascript:void(0)" onclick="return addToCart({{ $product->id }}, 'multiple-sub', 'pc', {{ $cart['cart_quantity'] }})" class="btn-quantity minus">
                                                    <i class="bi bi-dash"></i>
                                                </a>

                                                </p>

                                                <input type="hidden" class="quantity_field" name="quantity"
                                                    data-price="15.50" value="1" />

                                            </div>

                                            <div class="pl-3 prcfk">$
                                                {{ number_format((float) ($cart['cart_quantity'] * $cart['amount']), 2, '.', '') }}
                                            </div>

                                        </div>

                                    </li>
                                @endforeach
                            @else
                                <h2 class="text-center">No Products Found</h2>

                            @endif

                        </ul>
                    @endif

                    <!-- appy coupon section -->
                    <!--<div class="grid_12 coupon mt-5">-->
                    <!--    <h3>Apply Coupon</h3>-->
                    <!--    <input class="coupon-input" type="text">-->
                    <!--</div>-->

                    <div class="grid_12 summary mt-2">
                        <div class="inner_container">
                            <div class="summary-content">
                                <div class="col_1of2 meta-data">
                                    <div class="sub-total">
                                        {{-- <em>Sub Total: </em><span class="amount"> $ {{ $total }}</span> --}}
                                    </div>

                                    <!--<div class="taxes">-->

                                    <!--    <em>Plus VAT: </em><span class="amount">@ 20%</span>-->

                                    <!--</div>-->
                                </div>

                                <div class="col_1of2">
                                    @if($total > 0)
                                    <div class="total">
                                        <span class="amount"> Total $ {{ $total }}</span>
                                 </div>
                                 @endif
                                </div>
                            </div>


                            <div class="btn-summary">
                                <a href="{{ url('/') }}" class="btn-checkout btn-reverse">Continue Shopping</a>
                                
                                @if($total > 0)
                                <a href="{{ url('checkout') }}" class="btn-checkout">Checkout</a>
                                @endif
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
<x-userFooter/>