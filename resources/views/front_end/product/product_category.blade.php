<x-userHeader />

<main>
    <!-- introBannerHolder -->
    <section class="introBannerHolder d-flex w-100 bgCover" style="background-image: url({{ asset('front_end/images/b-bg7.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-12 pt-sm-10 text-center">
                    <h1 class="headingIV fwEbold playfair mb-4">{{ $category->name }}</h1>
                    <ul class="list-unstyled breadCrumbs d-flex justify-content-center">
                        <li class="mr-2"><a href="{{ url('/') }}">Home</a></li>
                        <li class="mr-2">/</li>
                        <li class="active">{{ $category->name }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    @php
        $segment = \Request::getRequestUri();
        $str = str_contains($segment, 'page'); 

        if($str == true){
             $page_no = explode("=", $str)[0];
             
             if($page_no == 1){
                $start_from = 1;
                $end_upto = $per_page;
             }
             else{
                $start_from = $per_page + ($page_no - 1);
                $end_upto = ($start_from + $per_page);
             }
        }
        else{
                if($total_products == 0){
                    $start_from = 0;
                }else{
                    $start_from = 1;
                }
                
                //

                if($total_products > $per_page){
                   $end_upto = $per_page;
                }
                else{
                    $end_upto = $total_products;
                }
        }
    @endphp

    <!-- twoColumns -->
    <div class="twoColumns container pt-lg-23 pb-lg-20 pt-md-16 pb-md-4 pt-10 pb-4">
        <div class="row">
            <div class="col-12 col-lg-9 order-lg-3">
                <!-- content -->
                <article id="content">
                    <!-- show-head -->
                    <header class="show-head d-flex flex-wrap justify-content-between mb-7">
                        <ul class="list-unstyled viewFilterLinks d-flex flex-nowrap align-items-center">
                            <li class="mr-2"><a href="javascript:void(0);" class="active"><i class="fas fa-th-large"></i></a></li>
                            <li class="mr-2"><a href="javascript:void(0);"><i class="fas fa-list"></i></a></li>
                            <li class="mr-2">Showing {{ $start_from }} – {{ $end_upto }} of {{ $total_products }} results</li>
                        </ul>
                        <!-- sortGroup -->
                        <!--<div class="sortGroup">-->
                        <!--    <div class="d-flex flex-nowrap align-items-center">-->
                        <!--        <strong class="groupTitle mr-2">Sort by:</strong>-->
                        <!--        <div class="dropdown">-->
                        <!--            <button class="dropdown-toggle buttonReset" type="button" id="sortGroup" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Default sorting</button>-->
                        <!--            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="sortGroup">-->
                        <!--                <li><a href="javascript:void(0);">Default Order</a></li>-->
                        <!--                <li><a href="javascript:void(0);">Default Order</a></li>-->
                        <!--                <li><a href="javascript:void(0);">Default Order</a></li>-->
                        <!--                <li><a href="javascript:void(0);">Default Order</a></li>-->
                        <!--            </ul>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->
                    </header>
                    <div class="row">
                        <!-- featureCol -->


                        @foreach($products as $product)
                        <div class="col-12 col-sm-6 col-lg-4 featureCol mb-7">
                            <div class="border">
                                <div class="imgHolder position-relative w-100 overflow-hidden">
                                    <a href="{{ url('product-details', $product->slug) }}"><img src="{{ asset('admin/product/featured_img/'.$product->featured_img)}}" alt="image description" class="img-fluid w-100"></a>
                                    <ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
                                        @if (Auth::user())
                                        @php
                                            $wish = App\Models\WishList::where('user_id', Auth::user()->id)->where('product_id', $product->id)->first();
                                        @endphp

                                        <li class="mr-2 overflow-hidden"><a href="javascript:void(0)" onclick="addWishList({{  $product->id }}, 1, 'category')" class="icon-heart d-block @if($wish) active @endif"></a></li>
                                        @else
                                        <li class="mr-2 overflow-hidden"><a href="javascript:void(0)" onclick="warningAlert('pc')" class="icon-heart d-block"></a></li>
                                        @endif
                                        
                                        
                                        {{-- <li class="mr-2 overflow-hidden"><a href="javascript:void(0)" onclick="return addToCart({{ $product->id }}, 'single', 'pc')" class="icon-cart d-block @if($cart_details) active @endif"></a></li> --}}
                                        <li class="mr-2 overflow-hidden"><a href="javascript:void(0)" onclick="return addToCart({{ $product->id }}, 'single', 'pc')" class="icon-cart d-block"></a></li>
                                        <li class="mr-2 overflow-hidden"><a href="javascript:void(0)" onclick="return productCompare({{ $product->id }}, 'pc')" class="icon-cart d-block"></a></li>
                                        <li class="mr-2 overflow-hidden"><a href="javascript:void(0)" onclick="#" class="icon-search d-block" data-toggle="modal" data-target="#exampleModal"></a></li>
                                    </ul>
                                </div>
                                <div class="text-center py-5 px-4">
                                    <span class="title d-block mb-2"><a href="{{ url('product-details', $product->slug) }}">{{ $product->name }}</a></span>
                                    <span class="price d-block fwEbold">@if($product->discount !=0) <del>$ {{ $product->price }}</del>$ {{ $product->discount }} @else $ {{ $product->price }} @endif</span>
                                    {{-- <span class="hotOffer fwEbold text-uppercase text-white position-absolute d-block">HOT</span> --}}
                                    {{-- <span class="hotOffer green fwEbold text-uppercase text-white position-absolute d-block ml-8">Sale</span> --}}
                                </div>
                            </div>
                        </div>
                        @endforeach


                        <div class="col-12 pt-3 mb-lg-0 mb-md-6 mb-3">
                            <ul class="list-unstyled pagination d-flex justify-content-center align-items-end">
                                <li>{{ $products->links() }}</li>
                            </ul>
                        </div>

                        {{-- <div class="col-12 pt-3 mb-lg-0 mb-md-6 mb-3">
                            <!-- pagination -->
                            <ul class="list-unstyled pagination d-flex justify-content-center align-items-end">
                                <li><a href="javascript:void(0);"><i class="fas fa-chevron-left"></i></a></li>
                                <li class="active"><a href="javascript:void(0);">1</a></li>
                                <li><a href="javascript:void(0);">2</a></li>
                                <li>...</li>
                                <li><a href="javascript:void(0);"><i class="fas fa-chevron-right"></i></a></li>
                            </ul>
                        </div> --}}



                    </div>
                </article>
            </div>
            <div class="col-12 col-lg-3 order-lg-1">
                <!-- sidebar -->
                <aside id="sidebar">
                    <!-- widget -->
                    <section class="widget overflow-hidden mb-9">
                        <form action="{{ url('product-search') }}" class="searchForm position-relative border" method="post">
                            @csrf

                            <fieldset>
                                <input type="search" class="form-control" placeholder="Search product..." name="p_search">
                                <button class="position-absolute" type="submit"><i class="icon-search"></i></button>
                            </fieldset>
                        </form>
                    </section>
                    <!-- widget -->
                    <section class="widget overflow-hidden mb-9">
                        <h3 class="headingVII fwEbold text-uppercase mb-5">PRODUCT CATEGORIES</h3>
                        <ul class="list-unstyled categoryList mb-0">

                            @foreach($product_categories as $product_category)
                            @php
                                $tot_products = count(App\Models\Product::where('category_id', $product_category->id)->get());
                            @endphp
                                <li class="mb-5 overflow-hidden"><a href="{{ url('product-category', ['subcategory_id' => 0, 'category_slug' => $product_category->slug]) }}"> {{ $product_category->name }} <span class="num border float-right">{{ $tot_products }}</span></a></li>
                            @endforeach

                        </ul>
                    </section>
                    <!-- widget -->
                    <section class="widget mb-9">
                        <h3 class="headingVII fwEbold text-uppercase mb-6">Filter by price</h3>
                        <!-- filter ranger form -->
                        
                        
                        <form action="{{ url('product-filter', $category->slug) }}" class="filter-ranger-form" method="post">
                            @csrf

                            <div id="slider-range"></div>
                            <input type="hidden" id="amount1" name="amount1">
                            <input type="hidden" id="amount2" name="amount2">
                            <div class="get-results-wrap d-flex align-items-center justify-content-between">
                                <button type="submit" class="btn btnTheme btn-shop fwEbold md-round px-3 pt-1 pb-2 text-uppercase">Filter</button>
                                <p id="amount" class="mb-0"></p>
                            </div>
                        </form>
                        
                        
                    </section>
                    <!-- widget -->
                    <section class="widget mb-9">
                        <h3 class="headingVII fwEbold text-uppercase mb-6">top rate</h3>
                        <ul class="list-unstyled recentListHolder mb-0 overflow-hidden">

                            @foreach($top_rated_products as $top_rated_product)
                            <li class="mb-6 d-flex flex-nowrap">
                                <div class="alignleft">
                                    <a href="{{ url('product-details', $top_rated_product->slug) }}"><img src="{{ asset('admin/product/featured_img/'.$top_rated_product->featured_img)}}" alt="image description" class="img-fluid"></a>
                                </div>
                                <div class="description-wrap pl-1">
                                    <h4 class="headingVII mb-1"><a href="{{ url('product-details', $top_rated_product->slug) }}">{{ $top_rated_product->name }}</a></h4>
                                    <strong class="price fwEbold d-block;">$ {{ $top_rated_product->price }}</strong>
                                </div>
                            </li>
                            @endforeach


                        </ul>
                    </section>
                    <!-- widget -->
                    
                    
                    @if($tags != null)
                   @php
                         $tag = explode(",", $tags);    
                    @endphp
                    
                    <section class="widget mb-9">
                        <h3 class="headingVII fwEbold text-uppercase mb-5">product tags</h3>
                        <ul class="list-unstyled tagNavList d-flex flex-wrap mb-0">

                           
                              @foreach($tag as $key => $t)
                                  <li class="text-center"><a href="javascript:void(0);" class="md-round d-block">{{ $t }}</a></li>
                              @endforeach
                            
                        </ul>
                    </section>
                    @endif
                    
                </aside>
            </div>
        </div>
    </div>
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

			<aside class="footerHolder container-fluid bg-lightGray overflow-hidden px-xl-20 px-lg-14 pt-xl-12 pb-xl-8 pt-lg-12 pt-md-8 pt-10 pb-lg-8">
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

<!-- Product Compare MOdal -->


<x-userFooter />