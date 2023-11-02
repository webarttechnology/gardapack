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
                                <div class="pl-3 prcfk">Rs. {{ number_format((double)($cart->cart_quantity * $product->price), 2, '.', '' ) }}</div>
                            </div>
                        </li>
                        @endforeach



                        
                    </ul>
                    
                     <!-- pagination -->
                    <div>
                        {{ $carts->links() }}
                    </div>
                    
                    
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
                                        <em>Sub Total: </em><span class="amount"> Rs. {{ $total }}</span>
                                    </div>
                                    <!--<div class="taxes">-->
                                    <!--    <em>Plus VAT: </em><span class="amount">@ 20%</span>-->
                                    <!--</div>-->

                                </div>
                                <div class="col_1of2">
                                    <div class="total">
                                        <span class="amount"> Total Rs. {{ $total }}</span>
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





    <!-- footerHolder -->
    <aside class="footerHolder overflow-hidden bg-lightGray pt-xl-23 pb-xl-8 pt-lg-10 pb-lg-8 pt-md-12 pb-md-8 pt-10">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-4 mb-lg-0 mb-4">
                    <h3 class="headingVI fwEbold text-uppercase mb-7">Contact Us</h3>
                    <ul class="list-unstyled footerContactList mb-3">
                        <li class="mb-3 d-flex flex-nowrap pr-xl-20 pr-0"><span class="icon icon-place mr-3"></span>
                            <address class="fwEbold m-0">Address: London Oxford Street, 012 United Kingdom.</address>
                        </li>
                        <li class="mb-3 d-flex flex-nowrap"><span class="icon icon-phone mr-3"></span> <span
                                class="leftAlign">Phone : <a href="javascript:void(0);">(+032) 3456 7890</a></span></li>
                        <li class="email d-flex flex-nowrap"><span class="icon icon-email mr-2"></span> <span
                                class="leftAlign">Email: <a
                                    href="javascript:void(0);">Botanicalstore@gmail.com</a></span></li>
                    </ul>
                    <ul class="list-unstyled followSocailNetwork d-flex flex-nowrap">
                        <li class="fwEbold mr-xl-11 mr-md-8 mr-3">Follow us:</li>
                        <li class="mr-xl-6 mr-md-5 mr-2"><a href="javascript:void(0);" class="fab fa-facebook-f"></a>
                        </li>
                        <li class="mr-xl-6 mr-md-5 mr-2"><a href="javascript:void(0);" class="fab fa-twitter"></a></li>
                        <li class="mr-xl-6 mr-md-5 mr-2"><a href="javascript:void(0);" class="fab fa-pinterest"></a>
                        </li>
                        <li class="mr-2"><a href="javascript:void(0);" class="fab fa-google-plus-g"></a></li>
                    </ul>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 pl-xl-14 mb-lg-0 mb-4">
                    <h3 class="headingVI fwEbold text-uppercase mb-6">Information</h3>
                    <ul class="list-unstyled footerNavList">
                        <li class="mb-1"><a href="javascript:void(0);">New Products</a></li>
                        <li class="mb-2"><a href="javascript:void(0);">Top Sellers</a></li>
                        <li class="mb-2"><a href="javascript:void(0);">Our Blog</a></li>
                        <li class="mb-2"><a href="javascript:void(0);">About Our Shop</a></li>
                        <li><a href="javascript:void(0);">Privacy policy</a></li>
                    </ul>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 pl-xl-12 mb-lg-0 mb-4">
                    <h3 class="headingVI fwEbold text-uppercase mb-7">My Account</h3>
                    <ul class="list-unstyled footerNavList">
                        <li class="mb-1"><a href="javascript:void(0);">My account</a></li>
                        <li class="mb-2"><a href="javascript:void(0);">Discount</a></li>
                        <li class="mb-2"><a href="javascript:void(0);">Orders history</a></li>
                        <li><a href="javascript:void(0);">Personal information</a></li>
                    </ul>
                </div>
                <div class="col-12 col-sm-6 col-lg-2 pl-xl-18 mb-lg-0 mb-4">
                    <h3 class="headingVI fwEbold text-uppercase mb-5">PRODUCTS</h3>
                    <ul class="list-unstyled footerNavList">
                        <li class="mb-2"><a href="javascript:void(0);">Delivery</a></li>
                        <li class="mb-2"><a href="javascript:void(0);">Legal notice</a></li>
                        <li class="mb-2"><a href="javascript:void(0);">Prices drop</a></li>
                        <li class="mb-2"><a href="javascript:void(0);">New products</a></li>
                        <li><a href="javascript:void(0);">Best sales</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </aside>
</main>
<x-userFooter />