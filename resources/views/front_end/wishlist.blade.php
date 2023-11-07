<x-userHeader />

<main>
    <!-- introBannerHolder -->
    <section class="introBannerHolder d-flex w-100 bgCover" style="background-image: url({{ asset('front_end/images/b-bg7.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-12 pt-sm-10 text-center">
                    <h1 class="headingIV fwEbold playfair mb-4">Wish List</h1>
                    <ul class="list-unstyled breadCrumbs d-flex justify-content-center">
                        <li class="mr-2"><a href="#">Home</a></li>
                        <li class="mr-2">/</li>
                        <li class="mr-2"><a href="#" class="active">Wish List</a></li>
                        {{-- <li class="mr-2">/</li> --}}
                        {{-- <li class="active">Page</li> --}}
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
                        <h1>Lists:</h1>
                    </div>
                    <ul class="items">


                        @foreach ($lists as $cart)
                        @php
                            $product = App\Models\Product::where('id', $cart->product_id)->first();
                        @endphp
                        <li class="grid_4 item">
                            
                            <a onclick="deleteWishList({{  $cart->id }})" class="btn-remove">
                                <i class="bi bi-trash"></i>
                            </a>



                            <div class="preview">
                                <img src="{{ asset('admin/product/featured_img/'.$product->featured_img) }}" />
                            </div>
                            <div class="details" data-price="15.50">
                                <h3>
                                    <a href="{{ url('product-details', $product->slug) }}">{{ $product->name }}</a>
                                </h3>
                                {{-- <p>{!! $product->description !!}</p> --}}

                            </div>
                            <div class="inner_container">

                                <div class="col_1of2 align-center picker">

                                    
                                    <input type="hidden" class="quantity_field" name="quantity" data-price="15.50"
                                        value="1" />
                                </div>
                
                            </div>
                        </li>
                        @endforeach
             
                    </ul>
                    
                     <!-- pagination -->
                    <div>
                        {{ $lists->links() }}
                    </div>
                    
                
                </div>
            </div>
        </div>
    </section>

</main>
<x-userFooter />