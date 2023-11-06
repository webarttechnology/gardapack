<x-userHeader />

<main>
    <!-- introBannerHolder -->
    {{-- <section class="introBannerHolder d-flex w-100 bgCover" style="background-image: url({{ asset('front_end/images/b-bg7.jpg')}} );">
        <div class="container">
            
            <div class="row">
                <div class="col-12 pt-sm-10 text-center">
                    <h1 class="headingIV fwEbold playfair mb-4">Shop</h1>
                    <ul class="list-unstyled breadCrumbs d-flex justify-content-center">
                        <li class="mr-2"><a href="{{ url('/') }}">Home</a></li>
                        <li class="mr-2">/</li>
                        <li class="mr-2"><a href="#">Shop</a></li>
                        <li class="mr-2">/</li>
                        <li class="active">{{ $product->name }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- twoColumns -->
    <div class="text-right" id="cart_msg"></div>
    
    <div class="twoColumns container pt-xl-23 pb-xl-20 pt-lg-20 pb-lg-20 py-md-16 py-10">
        <div class="row mb-6">
            
            <div class="col-12 col-lg-5 order-lg-1">
                <!-- productSliderImage -->
                <div class="productSliderImage mb-lg-0 mb-4" id="first_img" style="display: block;">
                    
                    <div class="zoom" onmousemove="zoom(event)" style="background-image: url({{ asset('admin/product/featured_img/'.$product->featured_img) }})">
								<img src="{{ asset('admin/product/featured_img/'.$product->featured_img) }}" id="main_img" alt="image description">
					</div>
							
							
                    <!--<div>-->
                    <!--    <img src="{{ asset('admin/product/featured_img/'.$product->featured_img) }}" alt="image description">-->
                    <!--</div>-->
                </div>
                
                <div class="zoom" onmousemove="zoom(event)" class="productSliderImage mb-lg-0 mb-4" id="other_img" style="display: none;"></div>
                
            </div>
            
            
            <!-- rate -->
            @php
                $rating = App\Models\Rating::where('product_id', $product->id)->get();

                $rating_no = count($rating);
                if($rating_no > 0){
                    $total = 0;
                    for($i=0;$i<$rating_no;$i++){
                        $total = $total + $rating[$i]->rate;
                    }

                    $rate = ceil($total/$rating_no);
                }else{
                    $rate = 0;
                }
            @endphp
            
            <div class="col-12 col-lg-6 order-lg-3">
                <!-- productTextHolder -->
                <div class="productTextHolder overflow-hidden">
                    <h2 class="fwEbold mb-2">{{ $product->name }}</h2>
                    <ul class="list-unstyled ratingList d-flex flex-nowrap mb-2">
                        
                        <li class="mr-2"><a href="javascript:void(0);"><i class="@if($rate>0) fas fa-star @else far fa-star @endif"></i></a></li>
                        <li class="mr-2"><a href="javascript:void(0);"><i class="@if($rate>1) fas fa-star @else far fa-star @endif"></i></a></li>
                        <li class="mr-2"><a href="javascript:void(0);"><i class="@if($rate>2) fas fa-star @else far fa-star @endif"></i></a></li>
                        <li class="mr-2"><a href="javascript:void(0);"><i class="@if($rate>3) fas fa-star @else far fa-star @endif"></i></a></li>
                        <li class="mr-2"><a href="javascript:void(0);"><i class="@if($rate>4) fas fa-star @else far fa-star @endif"></i></a></li>
                        
                        <li>( {{ $rating_no }} customer reviews )</li>
                    </ul>
                    <strong class="price d-block mb-5 text-green" id="total_price">$ {{ $product->price }}</strong>
                    {{-- <p class="mb-5">{!! $product->short_description !!}</p> --}}
                    <ul class="list-unstyled productInfoDetail mb-5 overflow-hidden">
                        
                        <li class="mb-2">
                            {!! $product->features !!}
                        </li>

                        <li class="mb-2">Availability:: <span>
                            @if ($product->no_in_stock == null)
                               Out of Stock
                            @else
                              In Stock
                            @endif
                        </span></li>
                        {{-- <li class="mb-2">Shipping tax: <span>
                            {{ $product->delivary_charge }}
                        </span></li> --}}

                        <li class="mb-2">sku: <span>
                            @if($product->sku_code == null)
                               N/A
                            @else
                             {{ $product->sku_code }}
                            @endif
                        </span></li>

                        @if($product->qty_check != null)
                        @php
                            $variations = App\Models\Variations::where('product_id', $product->id)->get();
                        @endphp

                        <li class="mb-2 mt-2">
                            <label for="">Qty</label>
                            <select name="variation" id="variation" class="form-control bg-light" onchange="variationChange({{ $product->id }})">
                                 <option value="Select">Select a Option</option>
                                 @foreach ($variations as $variation)
                                     <option value="{{ $variation->id }}">{{ $variation->variation }}</option>
                                 @endforeach         
                            </select>
                        </li>
                        @endif

                        @if($product->color_added != null)
                        <li class="mb-2 mt-2">
                            <label for="">Color</label>
                            <select name="color" id="color" class="form-control bg-light" onchange="colorChange({{ $product->id }})">
                                 <option value="Select">Select a Option</option>
                                 <option value="White">White</option>
                                 <option value="Black">Black</option>
                                 <option value="Red">Red</option>
                            </select>
                        </li>
                        <li class="mb-2 mt-2">
                            <a href="javascript:void(0)" onclick="clearSection()">CLEAR SECTION</a>
                        </li>
                        @endif
                    </ul>
                    
                    @if($product->no_in_stock != null)
                    <div class="holder overflow-hidden d-flex flex-wrap mb-6">
                        <input type="number" name="cart_quantity" id="cart_quantity" placeholder="1" min="1" value="1">
                        <a href="javascript:void(0);" class="btn btnTheme btnShop fwEbold text-white md-round py-3 px-4 py-md-3 px-md-4" onclick="return addToCart({{ $product->id }}, 'multiple')">   Add To Cart <i class="fas fa-arrow-right ml-2"></i></a>
                        
                        
                        <!-- wishlist section  -->

                        @if(Auth::user())
                        <a href="javascript:void(0);" onclick="addWishList({{  $product->id }}, 1, 'details')" class="icon-heart btn btnTheme ml-1 fwEbold text-white md-round py-3 px-4 py-md-3 px-md-4"></a>
                        @else
                        <a href="javascript:void(0);" onclick="warningAlert()" class="icon-heart btn btnTheme ml-1 fwEbold text-white md-round py-3 px-4 py-md-3 px-md-4"></a>
                        @endif
                        
                    </div>
                    @endif
                    
                    
                    <ul class="list-unstyled socialNetwork d-flex flex-wrap mb-sm-11 mb-4">
                        <li class="text-uppercase mr-5">SHARE THIS PRODUCT:</li>
                        <li class="mr-4"><a href="https://www.facebook.com/sharer/sharer.php?u={{ url('product-details', $product->slug) }}" target="_blank" class="fab fa-facebook-f"></a></li>
                        <!--<li class="mr-4"><a href="javascript:void(0);" class="fab fa-google-plus-g"></a></li>-->
                        <li class="mr-4"><a href="https://twitter.com/intent/tweet?url={{ url('product-details', $product->slug) }}" target="_blank" class="fab fa-twitter"></a></li>
                        <li class="mr-4"><a href="https://pinterest.com/pin/create/button/?url={{ url('product-details', $product->slug) }}" target="_blank" class="fab fa-pinterest-p"></a></li>
                    </ul>
                    
                    <!-- category -->
                    @php
                        $category = App\Models\Category::where('id', $product->category_id)->first();
                    @endphp
                    
                    <ul class="list-unstyled productInfoDetail mb-0">
                        <li class="mb-2">Categories: <a href="javascript:void(0);">{{ $category->name }}</a></li>
                        
                        @if($product->tags != null)
                        <li class="mb-2">Tags: <a href="javascript:void(0);">{{ $product->tags }}</a></li>
                        @endif
                        <!--<li>Brand: <a href="javascript:void(0);">KFC</a></li>-->
                    </ul>
                </div>
            </div>
        </div>

        <!-- gallery images -->
        <div class="row">
            <div class="col-12">
                <!-- paggSlider -->
                <div class="paggSlider">
                    
                    @php
                        $galleries = App\Models\ProductGallery::where('product_id', $product->id)->get();
                    @endphp

                    @if ($galleries->isEmpty() == false)
                    @foreach ($galleries as $gallery)
                    <div>
                        <div class="imgBlock m-2">
                            <img src="{{ asset('admin/product/gallery/'.$gallery->gallery_image)}}"
                            onclick="showGalleryImage(<?php echo $gallery->id ?>)" alt="image description" class="img-fluid">
                        </div>
                    </div>
                    @endforeach
                    @endif
                    
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="d-flex align-items-center justify-content-center m-2">
    @include('front_end.commons.session-msg')

    @if ($errors->has('rating'))
    <span class="text-danger">{{ $errors->first('rating') }}</span>
    @endif

    @if ($errors->has('comment'))
    <span class="text-danger">{{ $errors->first('comment') }}</span>
    @endif
   </div>
   
   
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <!-- tabSetList -->
                <ul class="list-unstyled tabSetList d-flex justify-content-center mb-9">
                    <li class="mr-md-20 mr-sm-10 mr-2">
                        <a href="#tab0-0" class="active playfair fwEbold pb-2">Additional Information</a>
                    </li>
                    <li class="mr-md-10 mr-sm-10 mr-2">
                        <a href="#tab1-0" class="active playfair fwEbold pb-2">Description</a>
                    </li>
                    <li>
                        <a href="#tab2-0" class="playfair fwEbold pb-2">Reviews ( {{ $rating_no }} )</a>
                    </li>
                </ul>
                <!-- tab-content -->
                <div class="tab-content mb-xl-11 mb-lg-10 mb-md-8 mb-5">
                    <div id="tab0-0" class="active">
                        <p class="mb-5">{!! $product->short_description !!}</p>
                    </div>
                    <div id="tab1-0">
                        <p>{!! $product->description !!}</p>
                    </div>
                    <div id="tab2-0">
                         <!-- review -->

                          <div class="cmntsbx">
                              
                              <form action="{{ route('user.product.review', $product->id) }}" method="post">
                                  @csrf
                                  
                            <div class="ratingst">
                                <div class="d-inline-block">
                                    <p>Your Rating*</p>
                                </div>
                                <div class="strtcns d-inline-block">
                                    <ul>
                                        <li><i class="far fa-star" id="rateing_1" aria-hidden="true" onclick="return ratingSection(1)"></i>
                                        </li>
                                        <li><i class="far fa-star" id="rateing_2" aria-hidden="true" onclick="return ratingSection(2)"></i>
                                        </li>
                                        <li><i class="far fa-star" id="rateing_3" aria-hidden="true" onclick="return ratingSection(3)"></i>
                                        </li>
                                        <li><i class="far fa-star" id="rateing_4" aria-hidden="true" onclick="return ratingSection(4)"></i>
                                        </li>
                                        <li><i class="far fa-star" id="rateing_5" aria-hidden="true" onclick="return ratingSection(5)"></i>
                                        </li>
                                    </ul>
                                    
                                     <input type="hidden" name="rating" id="rating">
                                </div>
                            </div> 	
                            <div class="cform">
                                
                                    <div class="mb-3">
                                        <label for="">Comment*</label>
                                        <textarea class="form-control" name="comment" required></textarea>
                                    </div>   
                                    <div>
                                        @if(Auth::user())
                                          <input type="Submit" class="sbmtbtn" value="Submit">
                                        @else
                                          <input type="button" class="sbmtbtn" value="Submit" onclick="warningAlert()">
                                        @endif
                                    </div>
                               
                            </div>
                             </form>
                            
                            
                            <div class="cntscty pb-3">
                                
                                
                            @foreach($reviews as $review)
                            @php
                                $user = App\Models\User::whereId($review->user_id)->first();
                            @endphp
                            <div class="cmntsdetails mt-5">
                                <h5 class="pt-2 pb-1">{{ $user->name }}</h5>
                                <div class="strtcns">
                                    <ul>
                                        
                                        <li><i class="@if($review->rate>0) fas fa-star @else far fa-star @endif" id="rateing_1" aria-hidden="true"></i>
                                        </li>
                                        <li><i class="@if($review->rate>1) fas fa-star @else far fa-star @endif" id="rateing_2" aria-hidden="true"></i>
                                        </li>
                                        <li><i class="@if($review->rate>2) fas fa-star @else far fa-star @endif" id="rateing_3" aria-hidden="true"></i>
                                        </li>
                                        <li><i class="@if($review->rate>3) fas fa-star @else far fa-star @endif" id="rateing_4" aria-hidden="true"></i>
                                        </li>
                                        <li><i class="@if($review->rate>4) fas fa-star @else far fa-star @endif" id="rateing_5" aria-hidden="true"></i>
                                        </li>
                                        
                                    </ul>
                                </div>
                                <p>{{ $review->comment }}</p>
                            </div>
                            @endforeach
                            
                            
                            
                            
                            </div> 
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- featureSec -->
    <section class="featureSec container overflow-hidden pt-xl-12 pb-xl-29 pt-lg-10 pb-lg-14 pt-md-8 pb-md-10 py-5">
        <div class="row">
            <!-- mainHeader -->
            <header class="col-12 mainHeader mb-5 text-center">
                <h1 class="headingIV playfair fwEblod mb-4">Related products</h1>
            </header>
        </div>
        <div class="row">
            
            
            @foreach ($related_products as $related_product)
            <!-- featureCol -->
            <div class="col-12 col-sm-6 col-lg-3 featureCol position-relative mb-7">
                <div class="border">
                    <div class="imgHolder position-relative w-100 overflow-hidden">
                        <a href="{{ url('product-details', $related_product->slug) }}"><img src="{{ asset('admin/product/featured_img/'.$related_product->featured_img)}}" alt="image description" class="img-fluid w-100"></a>
                        <ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
                            @if (Auth::user())
                            @php
                                $wish = App\Models\WishList::where('user_id', Auth::user()->id)->where('product_id', $related_product->id)->first();
                            @endphp

                            <li class="mr-2 overflow-hidden"><a href="javascript:void(0)" onclick="addWishList({{  $related_product->id }}, 1, 'details')" class="icon-heart d-block @if($wish) active @endif"></a></li>
                            @else
                            <li class="mr-2 overflow-hidden"><a href="javascript:void(0)" onclick="warningAlert()" class="icon-heart d-block"></a></li>
                            @endif
                            
                            
                            @if($related_product->no_in_stock != null)
                            @if(Auth::user())
                            @php
								$cart_details = App\Models\Cart::where('user_id', Auth::user()->id)->where('product_id', $related_product->id)->first();
							@endphp
							
                              <li class="mr-2 overflow-hidden"><a href="javascript:void(0)" onclick="return addToCart({{ $related_product->id }}, 'single')" class="icon-cart d-block @if($cart_details) active @endif"></a></li>
                            @else
                               <li class="mr-2 overflow-hidden"><a href="javascript:void(0)" onclick="warningAlert()" class="icon-cart d-block"></a></li>
                            @endif
                            @endif
                            
                            <!--<li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-eye d-block"></a></li>-->
                            <!--<li class="overflow-hidden"><a href="javascript:void(0);" class="icon-arrow d-block"></a></li>-->
                        </ul>
                    </div>
                    <div class="text-center py-5 px-4">
                        <span class="title d-block mb-2"><a href="{{ url('product-details', $related_product->slug) }}">{{ $related_product->name }}</a></span>
                        <span class="price d-block fwEbold">@if($related_product->discount !=0) <del>$ {{ $related_product->price }}</del>$ {{ $related_product->discount }} @else $ {{ $related_product->price }} @endif</span>
                        {{-- <span class="hotOffer green fwEbold text-uppercase text-white position-absolute d-block">Sale</span> --}}
                    </div>
                </div>
            </div>
            @endforeach
            
            
        </div>
    </section>
    <div class="container-fluid px-xl-20 px-lg-14">
				<!-- subscribeSecBlock -->
				<section class="subscribeSecBlock bgCover col-12 pt-xl-24 pb-xl-12 pt-lg-20 pt-md-16 pt-10 pb-md-8 pb-5" style="background-image: url({{ asset('front_end/images/n-bg.jpg') }})">
					<header class="col-12 mainHeader mb-sm-9 mb-6 text-center">
						<h1 class="headingIV playfair fwEblod mb-4">Subscribe Our Newsletter</h1>
						<span class="headerBorder d-block mb-md-5 mb-3"><img src="{{ asset('front_end/images/hbdr.png')}}" alt="Header Border" class="img-fluid img-bdr"></span>
						<p class="mb-sm-6 mb-3">Enter Your email address to join our mailing list and keep yourself update</p>
					</header>

					<form class="emailForm1 mx-auto overflow-hidden d-flex flex-wrap" action="{{ url('add-newsletter') }}" method="post">
						@csrf

						<input type="email" name="email" class="form-control px-4 border-0" placeholder="Enter your mail..." required>
						<button type="submit" class="btn btnTheme btnShop fwEbold text-white py-3 px-4">Shop Now <i class="fas fa-arrow-right ml-2"></i></button>
					</form>
				</section>
			</div>
			
</main>

<!-- show gallery image -->
<script>
    function showGalleryImage(img_id){

         $.ajax({
            method: 'GET',
            url: '../fetch/gallery/'+img_id,
            dataType: 'json',
            success: function (data) {
                document.getElementById('first_img').style.display = "none";
                document.getElementById('other_img').style.display = "block";
                document.getElementById('other_img').innerHTML = '<div class="zoom" onmousemove="zoom(event)" style="background-image: url('+data+')"><img src="'+data+'" id="other_img_1" alt="image description"></div>';
            },
            error: function (data) {
                console.log(data);
            }
        });
    }
</script>

<!-- rating product -->
<script>
     function ratingSection(rate){
         if(rate == 1){
            document.getElementById("rateing_1").className = "fas fa-star";
            document.getElementById("rateing_2").className = 'far fa-star';
            document.getElementById("rateing_3").className = 'far fa-star';
            document.getElementById("rateing_4").className = 'far fa-star';
            document.getElementById("rateing_5").className = 'far fa-star';
         }
         if(rate == 2){
            document.getElementById("rateing_1").className = "fas fa-star";
            document.getElementById("rateing_2").className = "fas fa-star";
            document.getElementById("rateing_3").className = 'far fa-star';
            document.getElementById("rateing_4").className = 'far fa-star';
            document.getElementById("rateing_5").className = 'far fa-star';
         }
         if(rate == 3){
            document.getElementById("rateing_1").className = "fas fa-star";
            document.getElementById("rateing_2").className = "fas fa-star";
            document.getElementById("rateing_3").className = 'fas fa-star';
            document.getElementById("rateing_4").className = 'far fa-star';
            document.getElementById("rateing_5").className = 'far fa-star';
         }
         if(rate == 4){
            document.getElementById("rateing_1").className = "fas fa-star";
            document.getElementById("rateing_2").className = "fas fa-star";
            document.getElementById("rateing_3").className = 'fas fa-star';
            document.getElementById("rateing_4").className = 'fas fa-star';
            document.getElementById("rateing_5").className = 'far fa-star';
         }
         if(rate == 5){
            document.getElementById("rateing_1").className = "fas fa-star";
            document.getElementById("rateing_2").className = "fas fa-star";
            document.getElementById("rateing_3").className = 'fas fa-star';
            document.getElementById("rateing_4").className = 'fas fa-star';
            document.getElementById("rateing_5").className = 'fas fa-star';
         }
         
         document.getElementById('rating').value = rate;
     }
</script>

<x-userFooter />