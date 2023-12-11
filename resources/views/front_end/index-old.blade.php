<x-userHeader />
<main>
     <!-- introBlock -->
			<section class="introBlock position-relative">
				<div class="slick-fade">
					<div>
						<div class="align w-100 d-flex align-items-center bgCover">
							<!-- holder -->
							<div class="container position-relative holder pt-xl-10 pt-0">
								<!-- py-12 pt-lg-30 pb-lg-25 introBlock position-relative------>
								<div class="row">
									<div class="col-12 col-xl-7">
										<div class="txtwrap pr-lg-10">
											<h1 class="fwEbold position-relative pb-lg-8 pb-4 mb-xl-7 mb-lg-6">Local area delivery <span class="text-break d-block">for big Pots within a certain Radius</span></h1>
											<p class="mb-5">Cinderella Flora Farms Pvt Ltd (Since 1995) ISO 9001:2015 Certified for Nursery, Garden Center & Landscaping</p>
											<a href="#" class="btn btnTheme btnShop fwEbold text-white md-round py-md-3 px-md-4 py-2 px-3">Shop Now <i class="fas fa-arrow-right ml-2"></i></a>
										</div>
									</div>
									<div class="imgHolder">
										<img src="{{ asset('front_end/images/img96.png') }}" alt="image description" class="img-fluid">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div>
						<div class="align w-100 d-flex align-items-center bgCover">
							<!-- holder -->
							<div class="container position-relative holder pt-xl-10 pt-0">
								<!-- py-12 pt-lg-30 pb-lg-25 -->
								<div class="row">
									<div class="col-12 col-xl-7">
										<div class="txtwrap pr-lg-10">
											<h1 class="fwEbold position-relative pb-lg-8 pb-4 mb-xl-7 mb-lg-6">Ready Pot Plants <br> in a Day creation</h1>
											<p class="mb-5">Cinderella Flora Farms Pvt Ltd (Since 1995) ISO 9001:2015 Certified for Nursery, Garden Center & Landscaping</p>
											<a href="#" class="btn btnTheme btnShop fwEbold text-white md-round py-md-3 px-md-4 py-2 px-3">Shop Now <i class="fas fa-arrow-right ml-2"></i></a>
										</div>
									</div>
									<div class="imgHolder imgholderupdtd">
										<img src="{{ asset('front_end/images/banner3y.png')}}" alt="image description" class="img-fluid">
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--<div>-->
					<!--	<div class="align w-100 d-flex align-items-center bgCover">-->
							<!-- holder -->
					<!--		<div class="container position-relative holder pt-xl-10 pt-0">-->
								<!-- py-12 pt-lg-30 pb-lg-25 -->
					<!--			<div class="row">-->
					<!--				<div class="col-12 col-xl-7">-->
					<!--					<div class="txtwrap pr-lg-10">-->
					<!--						<h1 class="fwEbold position-relative pb-lg-8 pb-4 mb-xl-7 mb-lg-6">Houseplant <span class="text-break d-block">The Perfect Choice.</span></h1>-->
					<!--						<p class="mb-xl-15 mb-lg-10">Cinderella Flora Farms Pvt Ltd (Since 1995) ISO 9001:2015 Certified for Nursery, Garden Center & Landscaping</p>-->
					<!--						<a href="#" class="btn btnTheme btnShop fwEbold text-white md-round py-md-3 px-md-4 py-2 px-3">Shop Now <i class="fas fa-arrow-right ml-2"></i></a>-->
					<!--					</div>-->
					<!--				</div>-->
					<!--				<div class="imgHolder">-->
					<!--					<img src="{{ asset('front_end/images/img96.png')}}" alt="image description" class="img-fluid">-->
					<!--				</div>-->
					<!--			</div>-->
					<!--		</div>-->
					<!--	</div>-->
					<!--</div>-->
				</div>
				<div class="slickNavigatorsWrap">
					<a href="#" class="slick-prev"><i class="icon-leftarrow"></i></a>
					<a href="#" class="slick-next"><i class="icon-rightarrow"></i></a>
				</div>
			</section>
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="ataUl">
							<ul>
							   <div class="owl-carousel catgry_carousel owl-theme">
							    @foreach ($categories as $category)
								<!--<li>-->
								<!--	@if($category->category_img != null)-->
        <!--                              <a href="{{ url('product-category', ['subcategory_id' => 0, 'category_slug' => $category->slug]) }}"><img src="{{ asset('category_img/'.$category->category_img) }}" height="100" width="175"  alt=""></a>-->
        <!--                            @else-->
								<!--	<a href="{{ url('product-category', ['subcategory_id' => 0, 'category_slug' => $category->slug]) }}"><img src="{{asset('pages/featured_img/no_imge_found.jpg')}}" height="100" width="175" alt=""></a>-->
        <!--                            @endif-->
								<!--	<h5><a href="{{ url('product-category', ['subcategory_id' => 0, 'category_slug' => $category->slug]) }}">{{ $category->name }}</a></h5>-->
								<!--</li>-->
								
								<div class="item">
                                   <li>
                                    @if($category->category_img != null)
                                     <a href="{{ url('product-category', ['subcategory_id' => 0, 'category_slug' => $category->slug]) }}"><img src="{{ asset('category_img/'.$category->category_img) }}" height="100" width="175" alt=""></a>
                                    @else
                                    <a href="{{ url('product-category', ['subcategory_id' => 0, 'category_slug' => $category->slug]) }}"><img src="{{asset('pages/featured_img/no_imge_found.jpg')}}" height="100" width="175" alt=""></a>
                                    @endif
                                    <h5><a href="{{ url('product-category', ['subcategory_id' => 0, 'category_slug' => $category->slug]) }}">{{ $category->name }}</a></h5>
                                   </li>
                                </div>
                            
								@endforeach
                              </div>
							  </ul>
                            </div>
						</div>
					</div>
				</div>
			</div>
			<!-- chooseUs-sec -->
			<section class="chooseUs-sec container pt-xl-22 pt-lg-20 pt-md-16 pt-10 pb-xl-12 pb-md-7 pb-2">
				<div class="row">
					<div class="col-12 col-lg-6 mb-lg-0 mb-4">
						<img src="{{ asset('admin/others/'.$why_us->img)}}" alt="image description" class="img-fluid">
					</div>
					<div class="col-12 col-lg-6 pr-4">
						<h2 class="headingII fwEbold playfair position-relative mb-6 pb-5">Why choose us ?</h2>
						<p class="mb-xl-14 mb-lg-10">{!! $why_us->details !!} ... <a href="javascript:void(0);" class="btnMore"><i>Learn More</i></a></p>
						<!-- chooseList -->
						<ul class="list-unstyled chooseList">
							<li class="d-flex justify-content-start mb-xl-7 mb-lg-5 mb-3">
								<span class="icon icon-plant"></span>
								<div class="alignLeft d-flex justify-content-start flex-wrap">
									<h3 class="headingIII fwEbold mb-2">{{ $why_us->reason_title_1 }}</h3>
									<p>{!! $why_us->reason_1 !!}</p>
								</div>
							</li>
							<li class="d-flex justify-content-start mb-xl-6 mb-lg-5 mb-4">
								<span class="icon icon-ic-plant"></span>
								<div class="alignLeft d-flex justify-content-start flex-wrap">
									<h3 class="headingIII fwEbold mb-2">{{ $why_us->reason_title_2 }}</h3>
									<p>{!! $why_us->reason_2 !!}</p>
								</div>
							</li>
							<li class="d-flex justify-content-start">
								<span class="icon icon-desert"></span>
								<div class="alignLeft d-flex justify-content-start flex-wrap">
									<h3 class="headingIII fwEbold mb-2">{{ $why_us->reason_title_3 }}</h3>
									<p>{!! $why_us->reason_3 !!}</p>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</section>
			
			<!---------Video Banner----------->
			
			<section class="secvid">
               <div class="container">
                  <div class="row justify-content-center">
                     <div class="col-md-9">
                        <div class="vidby" style="width:100%;height:100%;">
                             <iframe width="100%" height="500" src="{{ $video_banner->video_link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                          </div>
                     </div>
                  </div>
               </div>
            </section>
            
            <!---------PDF----------->
            
            <section class="pdfsec py-5">
               <div class="container">
                  <header class="col-12 mainHeader mb-7 text-center">
                     <h1 class="headingIV playfair fwEblod mb-4">Download PDF</h1>
                     <span class="headerBorder d-block mb-md-5 mb-3"><img src="{{ asset('front_end/images/hbdr.png')}}" alt="Header Border" class="img-fluid img-bdr"></span>
                  </header>
                  <div class="row mdfy">
                      
                      
                      @foreach($pdfs as $pdf)
                      <div class="col-md-3">
                         <div class="pdfbx">
                           <div class="brdrsec">
                            <a href="{{ asset('front_end/pdf/'.$pdf->pdf)}}" target="_blank">
                             <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                            </a>
                             <h6>{{ $pdf->title }}</h6>
                             <div class="dnldprt pt-2">
                              <a href="{{ asset('front_end/pdf/'.$pdf->pdf)}}" target="_blank">
                                <p>Download Now <i class="fa fa-download" aria-hidden="true"></i></p>
                              </a>  
                             </div>
                           </div> 
                         </div>
                      </div>
					@endforeach
                      
                      
                  </div>
               </div>
            </section>
            
            <!-- tutorial -->
			<section class="coursec py-5">
               <div class="container">
                  <header class="col-12 mainHeader mb-7 text-center">
                     <h1 class="headingIV playfair fwEblod mb-4">Our Courses</h1>
                     <span class="headerBorder d-block mb-md-5 mb-3"><img src="{{ asset('front_end/images/hbdr.png')}}" alt="Header Border" class="img-fluid img-bdr"></span>
                  </header>
                  <div class="row">
                      
                      
                     @foreach ($courses as $course)
                     <div class="col-md-4">
                        <div class="crsebx mb-5">
                           <div class="crseimg">
                              <img src="{{ asset('admin/course/img/'.$course->img)}}" alt="">
                           </div>
                           <div class="crsecnt pt-3">
                              <div class="starssct">
                                 <!--<div class="stars">-->
                                 <!--   <i class="fa fa-star" aria-hidden="true"></i>-->
                                 <!--   <i class="fa fa-star" aria-hidden="true"></i>-->
                                 <!--   <i class="fa fa-star" aria-hidden="true"></i>-->
                                 <!--   <i class="fa fa-star" aria-hidden="true"></i>-->
                                 <!--   <i class="fa fa-star" aria-hidden="true"></i>-->
                                 <!--   <span>(15 Reviews)</span> -->
                                 <!--</div>-->
                                 <!--<div class="bkmrk">-->
                                 <!--   <a href="#"><i class="fa fa-bookmark-o" aria-hidden="true"></i></a>-->
                                 <!--</div>-->
                              </div>
                              <h3 class="pt-2">{{ $course->name }}</h3>
                              <p>{!! $course->description !!}</p>
                              <div class="btnprt">
                                 <a href="#">Learn More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>
					 @endforeach
                   
                     
                  </div>
               </div>
            </section>
			
			<!-- featureSec -->
			<section class="featureSec container-fluid overflow-hidden pt-xl-12 pt-lg-10 pt-md-80 pt-5 pb-xl-10 pb-lg-4 pb-md-2 px-xl-14 px-lg-7">
				<!-- mainHeader -->
				<header class="col-12 mainHeader mb-7 text-center">
					<h1 class="headingIV playfair fwEblod mb-4">Featured Product</h1>
					<span class="headerBorder d-block mb-md-5 mb-3"><img src="{{ asset('front_end/images/hbdr.png')}}" alt="Header Border" class="img-fluid img-bdr"></span>
					<p>Lorem ipsum is simply dummy text of the printing and typesetting industry.</p>
				</header>
				<div class="col-12 p-0 overflow-hidden d-flex flex-wrap">
				    
				    
					<!-- featureCol -->
					@foreach ($products as $product)
					@php
						$category_name = App\Models\Category::whereId($product->category_id)->first();
					@endphp

                    @if ($category_name != null)
					<div class="featureCol px-3 mb-6">
						<div class="border">
							<div class="imgHolder position-relative w-100 overflow-hidden">
								<a href="{{ url('product-details', $product->slug) }}"><img src="{{ asset('admin/product/featured_img/'.$product->featured_img)}}" alt="image description" class="img-fluid w-100"></a>
								<ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
									
									@if (Auth::user())
									@php
									  $wish = App\Models\WishList::where('user_id', Auth::user()->id)->where('product_id', $product->id)->first();
									@endphp
									
									 <li class="mr-2 overflow-hidden"><a href="javascript:void(0)" onclick="addWishList({{  $product->id }}, 1)" class="icon-heart d-block @if($wish) active @endif"></a></li>
									@else
									 <li class="mr-2 overflow-hidden"><a href="javascript:void(0)" onclick="warningAlert()" class="icon-heart d-block"></a></li>
									@endif
									
									
									@if($product->no_in_stock != null)
									@if (Auth::user())
									<!-- check the productr in cart or not -->
									@php
										$cart_details = App\Models\Cart::where('user_id', Auth::user()->id)->where('product_id', $product->id)->first();
									@endphp
									
									<li class="mr-2 overflow-hidden"><a href="javascript:void(0)" onclick="return addToCart({{ $product->id }}, 'single')" class="icon-cart d-block @if($cart_details) active @endif"></a></li>
									@else
									<li class="mr-2 overflow-hidden"><a href="javascript:void(0)" onclick="warningAlert()" class="icon-cart d-block"></a></li>
									@endif
									@endif
									
									<!--<li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-eye d-block"></a></li>-->
									<!--<li class="overflow-hidden"><a href="javascript:void(0);" class="icon-arrow d-block"></a></li>-->
								</ul>
							</div>
							<div class="text-center txtblk py-xl-5 py-sm-4 py-2 px-xl-2 px-1">
								<span class="title d-block mb-2"><a href="{{ url('product-details', $product->slug) }}">{{ $product->name }}</a></span>
								<span class="price d-block fwEbold">Rs {{ $product->price }}</span>
							</div>
						</div>
					</div>
					@endif
					@endforeach
					
					
				</div>
			</section>
			<!-- contactListBlock -->
			<div class="contactListBlock container overflow-hidden pt-xl-8 pt-lg-10 pt-md-8 pt-4 pb-xl-12 pb-lg-10 pb-md-4 pb-1">
				<div class="row">
					<div class="col-12 col-sm-6 col-lg-3 mb-4 mb-lg-0">
						<!-- contactListColumn -->
						<div class="contactListColumn border overflow-hidden py-xl-5 py-md-3 py-2 px-xl-6 px-md-3 px-3 d-flex">
							<span class="icon icon-van"></span>
							<div class="alignLeft pl-2">
								<strong class="headingV fwEbold d-block mb-1">Free shipping order</strong>
								<p class="m-0">On orders over  $100</p>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-lg-3 mb-4 mb-lg-0">
						<!-- contactListColumn -->
						<div class="contactListColumn border overflow-hidden py-xl-5 py-md-3 py-2 px-xl-6 px-md-3 px-3 d-flex">
							<span class="icon icon-gift"></span>
							<div class="alignLeft pl-2">
								<strong class="headingV fwEbold d-block mb-1">Special gift card</strong>
								<p class="m-0">The perfect gift idea</p>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-lg-3 mb-4 mb-lg-0">
						<!-- contactListColumn -->
						<div class="contactListColumn border overflow-hidden py-xl-5 py-md-3 py-2 px-xl-4 px-md-2 px-3 d-flex">
							<span class="icon icon-recycle"></span>
							<div class="alignLeft pl-2">
								<strong class="headingV fwEbold d-block mb-1">Return &amp; exchange</strong>
								<p class="m-0">Free return within 3 days</p>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-lg-3 mb-4 mb-lg-0">
						<!-- contactListColumn -->
						<div class="contactListColumn border overflow-hidden py-xl-5 py-md-3 py-2 px-xl-6 px-md-3 px-3 d-flex">
							<span class="icon icon-call"></span>
							<div class="alignLeft pl-2">
								<strong class="headingV fwEbold d-block mb-1">Support 24 / 7</strong>
								<p class="m-0">Customer support</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- productOfferSec -->
			<!-- <div class="productOfferSec d-none container overflow-hidden py-xl-12 py-lg-10 py-md-8 py-5">
				<div class="row">
					<div class="col-12 col-sm-6 mb-sm-0 mb-2">
						<a href="#" class="w-100"><img src="images/ad1.jpg" alt="image description" class="img-fluid"></a>
					</div>
					<div class="col-12 col-sm-6">
						<a href="#" class="w-100"><img src="images/ad2.jpg" alt="image description" class="img-fluid"></a>
					</div>
				</div>
			</div> -->
			<!-- dealSecHolder -->

			<section class="dealSecHolder container-fluid overflow-hidden py-xl-12 py-lg-10 py-md-8 py-5">
				<!-- mainHeader -->
				<header class="col-12 mainHeader mb-7 text-center">
					<h1 class="headingIV playfair fwEblod mb-5">Daily Deal</h1>
					<span class="headerBorder d-block mb-md-5 mb-3"><img src="{{ asset('front_end/images/hbdr.png')}}" alt="Header Border" class="img-fluid img-bdr"></span>
					<p class="mb-6">There are many variations of passages of lorem ipsum available.</p>
					<!-- <div id="defaultCountdown" class="comming-timer"></div> -->
				</header>
				<!-- dealSlider -->
				<div class="dealSlider w-100 px-xl-10 px-lg-5 px-md-2">
				    
				    
				    @foreach ($daily_deals as $daily_deal)
						@php
					     	$category_name = App\Models\Category::whereId($daily_deal->category_id)->first();
					    @endphp

                        @if ($category_name != null)
						<div>
						<div class="featureCol position-relative w-100 px-3 mb-sm-8 mb-6">
							<div class="border">
								<div class="imgHolder position-relative w-100 overflow-hidden">
									<a href="{{ url('product-details', $daily_deal->slug) }}"><img src="{{ asset('admin/product/featured_img/'.$daily_deal->featured_img)}}" alt="image description" class="img-fluid w-100"></a>
									<ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
										@if (Auth::user())
										@php
									    	$wish = App\Models\WishList::where('user_id', Auth::user()->id)->where('product_id', $daily_deal->id)->first();
										@endphp
										
    									 <li class="mr-2 overflow-hidden"><a href="javascript:void(0)" onclick="addWishList({{  $daily_deal->id }}, 1)" class="icon-heart d-block @if($wish) active @endif"></a></li>
    									@else
    									 <li class="mr-2 overflow-hidden"><a href="javascript:void(0)" onclick="warningAlert()" class="icon-heart d-block"></a></li>
    									@endif
										
										
										@if($daily_deal->no_in_stock != null)
										@if (Auth::user())
										
										@php
										  $cart_details = App\Models\Cart::where('user_id', Auth::user()->id)->where('product_id', $daily_deal->id)->first();
									    @endphp
									    
										<li class="mr-2 overflow-hidden"><a href="javascript:void(0)" onclick="return addToCart({{ $daily_deal->id }}, 'single')" class="icon-cart d-block @if($cart_details) active @endif"></a></li>
										@else
										<li class="mr-2 overflow-hidden"><a href="javascript:void(0)" onclick="warningAlert()" class="icon-cart d-block"></a></li>
										@endif
										@endif
										
										<!--<li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-cart d-block"></a></li>-->
										<!--<li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-eye d-block"></a></li>-->
										<!--<li class="overflow-hidden"><a href="javascript:void(0);" class="icon-arrow d-block"></a></li>-->
									</ul>
								</div>
								<div class="text-center py-5 px-2">
									<span class="title d-block mb-2"><a href="{{ url('product-details', $daily_deal->slug) }}">{{ $daily_deal->name }}</a></span>
									<span class="price d-block fwEbold">Rs {{ $daily_deal->price }}</span>
									<!--<span class="hotOffer fwEbold text-uppercase text-white position-absolute d-block">HOT</span>-->
									<!--<span class="hotOffer green fwEbold text-uppercase text-white position-absolute d-block">Sale</span>-->
								</div>
							</div>
						</div>
					</div>
					@endif
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
			
			<!-- footerHolder -->
			@php
				$address = App\Models\Pages::where('name', 'Contact Us Page')->first();
				$phones = explode(',', $address->phone);
				$emails = explode(',', $address->email);
			@endphp

			<aside class="footerHolder container-fluid overflow-hidden px-xl-20 px-lg-14 pt-xl-12 pb-xl-8 pt-lg-12 pt-md-8 pt-10 pb-lg-8">
				<div class="d-flex flex-wrap flex-lg-nowrap">
					<div class="coll-1 pr-3 mb-sm-4 mb-3 mb-lg-0">
						<h3 class="headingVI fwEbold text-uppercase mb-7">Contact Us</h3>
						<ul class="list-unstyled footerContactList mb-3">
							<li class="mb-3 d-flex flex-nowrap"><span class="icon icon-place mr-3"></span> <address class="fwEbold m-0">{{ $address->address }}</address></li>
							<li class="mb-3 d-flex flex-nowrap"><span class="icon icon-phone mr-3"></span> <span class="leftAlign">Phone : 
								@foreach ($phones as $phone)
								<a href="tel:{{ $phone }}">{{ $phone }}</a><br>
								@endforeach

							</span></li>
							<li class="email d-flex flex-nowrap"><span class="icon icon-email mr-2"></span> <span class="leftAlign">Email : 
								@foreach ($emails as $email)
						    		<a href="mailto:{{ $email }}">{{ $email }}</a><br>								
								@endforeach

							</span></li>
						</ul>
						<ul class="list-unstyled followSocailNetwork d-flex flex-nowrap">
							<li class="fwEbold mr-xl-11 mr-sm-6 mr-4">Follow  us:</li>
							<li class="mr-xl-6 mr-sm-4 mr-2"><a href="https://www.facebook.com/greenmall" target="_blank" class="fab fa-facebook-f"></a></li>
							<li class="mr-xl-6 mr-sm-4 mr-2"><a href="https://www.youtube.com/c/LiveGreenMall" target="_blank" class="fab fa-youtube"></a></li>
							{{-- <li class="mr-xl-6 mr-sm-4 mr-2"><a href="javascript:void(0);" class="fab fa-pinterest"></a></li>
							<li class="mr-2"><a href="javascript:void(0);" class="fab fa-google-plus-g"></a></li> --}}
						</ul>
					</div>

					
					<div class="coll-2 mb-sm-4 mb-3 mb-lg-0">
						<h3 class="headingVI fwEbold text-uppercase mb-6">Quick Link</h3>
						<ul class="list-unstyled footerNavList">
							<li class="mb-1"><a href="{{ url('/') }}">Home</a></li>
							<li class="mb-1"><a href="{{ url('gallery') }}">Gallery</a></li>
							<li class="mb-2"><a href="{{ url('about-us') }}">About</a></li>
							<li class="mb-2"><a href="{{ url('contact-us') }}">Contact</a></li>
						</ul>
					</div>
					
					
					@if (Auth::user())
					<div class="coll-3 mb-sm-4 mb-3 mb-lg-0">
						<h3 class="headingVI fwEbold text-uppercase mb-6">My Account</h3>
						<ul class="list-unstyled footerNavList">
							<li class="mb-1"><a href="javascript:void(0);">My account</a></li>
							<li class="mb-2"><a href="javascript:void(0);">My Order</a></li>
						</ul>
					</div>
					@else
					<div class="coll-3 mb-sm-4 mb-3 mb-lg-0">
						<h3 class="headingVI fwEbold text-uppercase mb-6">My Account</h3>
						<ul class="list-unstyled footerNavList">
							<li class="mb-1"><a href="{{ url('signup') }}">Signin</a></li>
						</ul>
					</div>
					@endif

                    @php
						$category_lists = App\Models\Category::where('type', 'product')->inRandomOrder()->limit(6)->get();
					@endphp

					<div class="coll-4 mb-sm-4 mb-3 mb-lg-0">
						<h3 class="headingVI fwEbold text-uppercase mb-7 pl-xl-14 pl-lg-10">Category</h3>
						<ul class="list-unstyled tagNavList d-flex flex-wrap justify-content-lg-end mb-0">
							@foreach ($category_lists as $category_list)
							   <li class="text-center mb-2"><a href="{{ url('product-category', ['subcategory_id' => 0, 'category_slug' => $category_list->slug]) }}" class="md-round d-block py-2 px-2">{{ $category_list->name }}</a></li>
							@endforeach

							{{-- <li class="text-center mb-2 mr-2"><a href="javascript:void(0);" class="md-round d-block py-2 px-2">Trend</a></li>
							<li class="text-center mb-2"><a href="javascript:void(0);" class="md-round d-block py-2 px-2">Decor</a></li>
							<li class="text-center mb-2 mr-2"><a href="javascript:void(0);" class="md-round d-block py-2 px-2">Plant</a></li>
							<li class="text-center mb-2"><a href="javascript:void(0);" class="md-round d-block py-2 px-2">Table tree</a></li>
							<li class="text-center mb-2 mr-2"><a href="javascript:void(0);" class="md-round d-block py-2 px-2">Bedroom tree</a></li>
							<li class="text-center mb-2"><a href="javascript:void(0);" class="md-round d-block py-2 px-2">Living room</a></li> --}}
						</ul>
					</div>
				</div>
			</aside>
			
        </main>
        
        <!----------Sound Part----------> 

         <div class="soundsec">
            <audio id="track">
               <source src="{{ asset('front_end/audio/audio.mp3')}}" type="audio/mpeg"  loop="loop"/>
            </audio>
            <div id="player-container">
               <div id="play-pause" class="play">Play</div>
            </div>
         </div>

<!-- Add to cart -->


<x-userFooter />