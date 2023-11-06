<x-userHeader />

<main>
    <!-- introBannerHolder -->
    <section class="introBannerHolder d-flex w-100 bgCover" style="background-image: url({{ asset('front_end/images/b-bg7.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-12 pt-sm-10 text-center">
                    <h1 class="headingIV fwEbold playfair mb-4">Cart</h1>
                    <ul class="list-unstyled breadCrumbs d-flex justify-content-center">
                        <li class="mr-2"><a href="#">Home</a></li>
                        <li class="mr-2">/</li>
                        <li class="mr-2"><a href="#">Cart</a></li>
                        <li class="mr-2">/</li>
                        <li class="active">Pellentesque aliquet</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>



    <section class="cart-list">
        <div class="container">
            <div class="cart">
                <div class="catlist">
                    <div class="grid_12">
                        <h1>Your Cart:</h1>
                    </div>
                    <!-- if user login -->
                    @if(Auth::user())
                    <ul class="items">



                        @foreach ($carts as $cart)
                        @php
                            $product = App\Models\Product::where('id', $cart->product_id)->first();
                        @endphp
                        <li class="grid_4 item">
                            <a href="javascript:void(0)" onclick="deleteCart({{ $cart->id }})" class="btn-remove">
                                <i class="bi bi-trash"></i>
                            </a>
                            <div class="preview">
                                <img src="{{ asset('admin/product/featured_img/'.$product->featured_img) }}" />
                            </div>
                            <div class="details" data-price="15.50">
                                <h3>
                                    <a href="{{ url('product-details', $product->slug) }}">{{ $product->name }}</a>
                                </h3>
                                <p>{!! $product->description !!}</p>

                            </div>
                            <div class="inner_container">
                                <div class="col_1of2 align-center picker">

                                    <a href="javascript:void(0)" onclick="cartUpdate({{ $cart->id }}, 'plus')" class="btn-quantity plus">
                                        <i class="bi bi-plus"></i>
                                    </a>
                                    <div class="col_1of2 quantity-text">
                                        <p><span class="current_quantity" id="current_quantity_<?php echo $cart->id ?>">{{ $cart->cart_quantity }}</span></p>
                                    </div>
                                    <a href="javascript:void(0)" onclick="cartUpdate({{ $cart->id }}, 'minus')" class="btn-quantity minus">
                                        <i class="bi bi-dash"></i>
                                    </a>
                                    </p>
                                    <input type="hidden" class="quantity_field" name="quantity" data-price="15.50"
                                        value="1" />
                                </div>
                                <div class="pl-3 prcfk">$ {{ number_format((double)($cart->cart_quantity * $product->price), 2, '.', '' ) }}</div>
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
                        @if(Session::has('existing_cart'))
                        @php
                            $carts = json_decode(Session::get('existing_cart'),  true);
                        @endphp
                        @foreach ($carts as $key => $cart)
                        @php
                            $product = App\Models\Product::where('id', $cart['product_id'])->first();
                        @endphp
                        <li class="grid_4 item">
                            <a href="javascript:void(0)" onclick="" class="btn-remove">
                                <i class="bi bi-trash"></i>
                            </a>
                            <div class="preview">
                                <img src="{{ asset('admin/product/featured_img/'.$product->featured_img) }}" />
                            </div>
                            <div class="details" data-price="15.50">
                                <h3>
                                    <a href="{{ url('product-details', $product->slug) }}">{{ $product->name }}</a>
                                </h3>
                                <p>{!! $product->description !!}</p>

                            </div>
                            <div class="inner_container">
                                <div class="col_1of2 align-center picker">

                                    {{-- cartUpdate({{ $cart->id }}, 'plus') --}}
                                    <a href="javascript:void(0)" onclick="#" class="btn-quantity plus">
                                        <i class="bi bi-plus"></i>
                                    </a>
                                    <div class="col_1of2 quantity-text">
                                        <p><span class="current_quantity" id="current_quantity_<?php echo $key ?>">{{ $cart['cart_quantity'] }}</span></p>
                                    </div>
                                    {{-- cartUpdate({{ $cart->id }}, 'minus') --}}
                                    <a href="javascript:void(0)" onclick="#" class="btn-quantity minus">
                                        <i class="bi bi-dash"></i>
                                    </a>
                                    </p>
                                    <input type="hidden" class="quantity_field" name="quantity" data-price="15.50"
                                        value="1" />
                                </div>
                                <div class="pl-3 prcfk">$ {{ number_format((double)($cart['cart_quantity'] * $product->price), 2, '.', '' ) }}</div>
                            </div>
                        </li>
                        @endforeach
                        @else
                        <h2>No Products Found</h2>
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
                                        <em>Sub Total: </em><span class="amount"> $ {{ $total }}</span>
                                    </div>
                                    <!--<div class="taxes">-->
                                    <!--    <em>Plus VAT: </em><span class="amount">@ 20%</span>-->
                                    <!--</div>-->

                                </div>
                                <div class="col_1of2">
                                    <div class="total">
                                        <span class="amount"> Total $ {{ $total }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-summary">

                                <a href="{{ url('/') }}" class="btn-checkout btn-reverse">Continue Shopping</a>

                                <a href="{{ url('checkout') }}" class="btn-checkout">Checkout</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
<x-userFooter />