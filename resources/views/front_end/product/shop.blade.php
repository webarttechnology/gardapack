<x-userHeader />
<main>
    <!-- introBannerHolder -->
    <section class="introBannerHolder d-flex w-100 bgCover"
        style="background-image: url({{ asset('front_end/images/b-bg7.jpg') }});">
        {{-- <section class="introBannerHolder d-flex w-100"> --}}
        <div class="container">
            <div class="row">
                <div class="col-12 pt-sm-10 text-center">
                    <h1 class="headingIV fwEbold playfair mb-4"></h1>
                    <ul class="list-unstyled breadCrumbs d-flex justify-content-center">
                        <li class="mr-2"><a href="{{ url('/') }}">Home</a></li>
                        <li class="mr-2">/</li>
                        <li class="active"><a href="{{ url('shop') }}">Shop</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    @php
        $segment = \Request::getRequestUri();
        $str = str_contains($segment, 'page');

        if ($str == true) {
            $page_no = explode('=', $str)[0];

            if ($page_no == 1) {
                $start_from = 1;
                $end_upto = $per_page;
            } else {
                $start_from = $per_page + ($page_no - 1);
                $end_upto = $start_from + $per_page;
            }
        } else {
            if ($total_products == 0) {
                $start_from = 0;
            } else {
                $start_from = 1;
            }

            //

            if ($total_products > $per_page) {
                $end_upto = $per_page;
            } else {
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
                            <li class="mr-2"><a href="javascript:void(0);" class="active"><i
                                        class="fas fa-th-large"></i></a></li>
                            <li class="mr-2"><a href="javascript:void(0);"><i class="fas fa-list"></i></a></li>
                            <li class="mr-2">Showing {{ $start_from }} – {{ $end_upto }} of
                                {{ $total_products }} results</li>
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


                        @foreach ($products as $product)
                            <div class="col-12 col-sm-6 col-lg-4 featureCol mb-7">
                                <div class="border">
                                    <div class="imgHolder position-relative w-100 overflow-hidden">
                                        <a href="{{ url('product-details', $product->slug) }}"><img
                                                src="{{ asset('admin/product/featured_img/' . $product->featured_img) }}"
                                                alt="image description" class="img-fluid w-100"></a>
                                        <ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
                                            @if (Auth::user())
                                                @php
                                                    $wish = App\Models\WishList::where('user_id', Auth::user()->id)
                                                        ->where('product_id', $product->id)
                                                        ->first();
                                                @endphp

                                                <li class="mr-2 overflow-hidden"><a href="javascript:void(0)"
                                                        onclick="addWishList({{ $product->id }}, 1, 'category')"
                                                        class="icon-heart d-block @if ($wish) active @endif"></a>
                                                </li>
                                            @else
                                                <li class="mr-2 overflow-hidden"><a href="javascript:void(0)"
                                                        onclick="warningAlert('pc')" class="icon-heart d-block"></a>
                                                </li>
                                            @endif


                                            {{-- <li class="mr-2 overflow-hidden"><a href="javascript:void(0)" onclick="return addToCart({{ $product->id }}, 'single', 'pc')" class="icon-cart d-block @if ($cart_details) active @endif"></a></li> --}}
                                            <li class="mr-2 overflow-hidden"><a href="javascript:void(0)"
                                                    onclick="return addToCart({{ $product->id }}, 'single', 'pc')"
                                                    class="icon-cart d-block"></a></li>
                                            {{-- <li class="mr-2 overflow-hidden"><a
                                                    href="{{ url('product/compare', $product->id) }}" target="_blank"
                                                    class="d-block"><i class="bi bi-arrow-clockwise"></i></a></li> --}}
                                            <li class="mr-2 overflow-hidden"><a href="javascript:void(0)"
                                                    class="icon-search d-block"
                                                    onclick="quickViewProduct({{ $product->id }})"></a></li>
                                        </ul>
                                    </div>
                                    <div class="text-center py-5 px-4">
                                        <span class="title d-block mb-2"><a
                                                href="{{ url('product-details', $product->slug) }}">{{ $product->name }}</a></span>
                                        <span class="price d-block fwEbold">
                                            @if ($product->discount != 0)
                                                <del>$ {{ $product->price }}</del>$ {{ $product->discount }}
                                            @else
                                                $ {{ $product->price }}
                                            @endif
                                        </span>
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

                    </div>
                </article>
            </div>
            <div class="col-12 col-lg-3 order-lg-1">
                <!-- sidebar -->
                <aside id="sidebar">
                    <!-- widget -->
                    <section class="widget overflow-hidden mb-9">
                        <form action="{{ url('product-search') }}" class="searchForm position-relative border"
                            method="post">
                            @csrf

                            <fieldset>
                                <input type="search" class="form-control" placeholder="Search product..."
                                    name="p_search">
                                <button class="position-absolute" type="submit"><i class="icon-search"></i></button>
                            </fieldset>
                        </form>
                    </section>
                    <!-- widget -->
                    <section class="widget overflow-hidden mb-9">
                        <h3 class="headingVII fwEbold text-uppercase mb-5">PRODUCT CATEGORIES</h3>
                        <ul class="list-unstyled categoryList mb-0">

                            @foreach ($product_categories as $product_category)
                                @php
                                    $tot_products = count(App\Models\Product::where('category_id', $product_category->id)->get());
                                @endphp
                                <li class="mb-5 overflow-hidden"><a
                                        href="{{ url('product-category', ['subcategory_id' => 0, 'category_slug' => $product_category->slug]) }}">
                                        {{ $product_category->name }} <span
                                            class="num border float-right">{{ $tot_products }}</span></a></li>
                            @endforeach

                        </ul>
                    </section>
                    <!-- widget -->

                    {{-- <section class="widget mb-9">
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
                        
                        
                    </section> --}}


                    <!-- widget -->
                    <section class="widget mb-9">
                        <h3 class="headingVII fwEbold text-uppercase mb-6">top rate</h3>
                        <ul class="list-unstyled recentListHolder mb-0 overflow-hidden">

                            @foreach ($top_rated_products as $top_rated_product)
                                <li class="mb-6 d-flex flex-nowrap">
                                    <div class="alignleft">
                                        <a href="{{ url('product-details', $top_rated_product->slug) }}"><img
                                                src="{{ asset('admin/product/featured_img/' . $top_rated_product->featured_img) }}"
                                                alt="image description" class="img-fluid"></a>
                                    </div>
                                    <div class="description-wrap pl-1">
                                        <h4 class="headingVII mb-1"><a
                                                href="{{ url('product-details', $top_rated_product->slug) }}">{{ $top_rated_product->name }}</a>
                                        </h4>
                                        <strong class="price fwEbold d-block;">$
                                            {{ $top_rated_product->price }}</strong>
                                    </div>
                                </li>
                            @endforeach


                        </ul>
                    </section>
                    <!-- widget -->


                </aside>
            </div>
        </div>
    </div>


</main>

<!-- Product Compare MOdal -->


<x-userFooter />
