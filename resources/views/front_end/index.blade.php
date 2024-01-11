<x-userHeader />
{{-- <section class="home-banner clearfix"
    @if ($home != null) style="background-image: url('{{ 'uploads/banners/' . $home->banner }}') !important;" @endif>

    <div class="container">

        <div class="row align-items-center text-center">

            <div class="col-md-12 order-md-1 order-sm-2" data-aos="zoom-in" data-aos-duration="2000">

                {!! $home->banner_des !!}

                <div class="home-button"><a href="@if ($home != null) {{ $home->btn1_link }} @endif"
                        target="_blank"><button type="button" class="btn btn-secondary">
                            @if ($home != null)
                                {{ $home->btn1_txt }}
                            @endif
                        </button></a>
                    <span class="home-button2"><a href="@if ($home != null) {{ $home->btn1_link }} @endif"
                            target="_blank"><button type="button" class="btn btn-secondary">
                                @if ($home != null)
                                    {{ $home->btn2_txt }}
                                @endif
                            </button></a></span>

                </div>

            </div>

        </div>

    </div>

</section> --}}

<section id="carouselExampleCaptions" class="carousel slide home-banner carousel-fade" data-bs-ride="carousel">
    <div class="carousel-indicators">
        @foreach (json_decode($home->banner, true) as $key => $bann)
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{$key}}" class="{{ $key == 0 ? 'active' : ''; }}" aria-label="Slide " {{ $key+1 }}></button>
        @endforeach
    </div>
    <div class="carousel-inner">

        @foreach (json_decode($home->banner, true) as $key => $bann)
            <div class="carousel-item @if ($key == 0) active @endif">
                <div>
                    <img src="{{ 'uploads/banners/' . $bann['img'] }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-caption d-none d-md-block" style="top: 5%">
                    <div class="container">

                        <div class="row align-items-center text-center">

                            <div class="col-md-12 order-md-1 order-sm-2" data-aos="zoom-in" data-aos-duration="2000">

                                {!! $home->banner_des !!}

                                <div class="home-button"><a
                                        href="@if ($home != null) {{ $home->btn1_link }} @endif"
                                        target="_blank"><button type="button" class="btn btn-secondary">
                                            @if ($home != null)
                                                {{ $home->btn1_txt }}
                                            @endif
                                        </button></a>
                                    <span class="home-button2"><a
                                            href="@if ($home != null) {{ $home->btn1_link }} @endif"
                                            target="_blank"><button type="button" class="btn btn-secondary">
                                                @if ($home != null)
                                                    {{ $home->btn2_txt }}
                                                @endif
                                            </button></a></span>

                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        @endforeach

        {{-- <div class="carousel-item">
            <img src="{{ 'uploads/banners/' . $home->banner }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block" style="top: 5%">
                <div class="container">

                    <div class="row align-items-center text-center">

                        <div class="col-md-12 order-md-1 order-sm-2" data-aos="zoom-in" data-aos-duration="2000">

                            {!! $home->banner_des !!}

                            <div class="home-button"><a
                                    href="@if ($home != null) {{ $home->btn1_link }} @endif"
                                    target="_blank"><button type="button" class="btn btn-secondary">
                                        @if ($home != null)
                                            {{ $home->btn1_txt }}
                                        @endif
                                    </button></a>
                                <span class="home-button2"><a
                                        href="@if ($home != null) {{ $home->btn1_link }} @endif"
                                        target="_blank"><button type="button" class="btn btn-secondary">
                                            @if ($home != null)
                                                {{ $home->btn2_txt }}
                                            @endif
                                        </button></a></span>

                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ 'uploads/banners/' . $home->banner }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block" style="top: 5%">
                <div class="container">

                    <div class="row align-items-center text-center">

                        <div class="col-md-12 order-md-1 order-sm-2" data-aos="zoom-in" data-aos-duration="2000">

                            {!! $home->banner_des !!}

                            <div class="home-button"><a
                                    href="@if ($home != null) {{ $home->btn1_link }} @endif"
                                    target="_blank"><button type="button" class="btn btn-secondary">
                                        @if ($home != null)
                                            {{ $home->btn1_txt }}
                                        @endif
                                    </button></a>
                                <span class="home-button2"><a
                                        href="@if ($home != null) {{ $home->btn1_link }} @endif"
                                        target="_blank"><button type="button" class="btn btn-secondary">
                                            @if ($home != null)
                                                {{ $home->btn2_txt }}
                                            @endif
                                        </button></a></span>

                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div> --}}
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</section>



<section class="abouts">

    <div class="container">

        <div class="row align-items-center justify-content-around text-center">

            <div class="col-md-10">

                <h2 class="effectCenter">{{ $home->home_about_heading }}</h2>

                <p>{!! $home->home_about_des !!}</p>

                <iframe class="videobox" width="100%" height="450px" src="{{ $home->home_about_video }}"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>

            </div>



        </div>

    </div>

</section>

<section class="dealofday newproducts">

    <div class="container">

        <div class="row" data-aos="fade-up" data-aos-duration="2000">

            <div class="col-sm-8 col-md-6">

                <h2>New Products</h2>

            </div>

            <div class="col-sm-4 col-md-6">

                <div class="btnbox">

                    <a href="{{ url('shop') }}">View All <i class="bi bi-arrow-right"></i></a>

                </div>

            </div>

        </div>

        <div class="row">





            @foreach ($products as $product)
                <div class="col-6 col-sm-6 col-md-3 my-3" data-aos="fade-up" data-aos-duration="2500">

                    <div class="deal-item">

                        <div class="img">

                            <a href="{{ url('product-details', $product->slug) }}"><img
                                    src="{{ asset('admin/product/featured_img/' . $product->featured_img) }}"
                                    alt=""></a>

                            <ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">

                                @if (Auth::user())
                                    @php

                                        $wish = App\Models\WishList::where('user_id', Auth::user()->id)

                                            ->where('product_id', $product->id)

                                            ->first();

                                    @endphp



                                    <li class="overflow-hidden"><a href="javascript:void(0)"
                                            onclick="addWishList({{ $product->id }}, 1, 'category')"
                                            class="icon-heart d-block @if ($wish) active @endif"></a>

                                    </li>
                                @else
                                    <li class="overflow-hidden"><a href="javascript:void(0)"
                                            onclick="warningAlert('pc')" class="icon-heart d-block"></a>

                                    </li>
                                @endif





                                {{-- <li class="overflow-hidden"><a href="javascript:void(0)" onclick="return addToCart({{ $product->id }}, 'single', 'pc')" class="icon-cart d-block @if ($cart_details) active @endif"></a></li> --}}

                                <li class="overflow-hidden"><a href="javascript:void(0)"
                                        onclick="return addToCart({{ $product->id }}, 'single', 'pc')"
                                        class="icon-cart d-block"></a></li>

                                <li class="overflow-hidden"><a href="{{ url('product/compare', $product->id) }}"
                                        target="_blank" class="d-block"><i class="bi bi-arrow-clockwise"></i></a>
                                </li>

                                <li class="overflow-hidden"><a href="javascript:void(0)" class="icon-search d-block"
                                        onclick="quickViewProduct({{ $product->id }})"></a></li>

                            </ul>



                        </div>

                        <a href="{{ url('product-details', $product->slug) }}">

                            <h5>{{ $product->name }}</h5>

                            <div class="stars">

                                <i class="bi bi-star-fill"></i>

                                <i class="bi bi-star-fill"></i>

                                <i class="bi bi-star-fill"></i>

                                <i class="bi bi-star-fill"></i>

                                <i class="bi bi-star-fill"></i>

                            </div>

                            <p class="price">${{ $product->price }}</p>

                        </a>

                    </div>

                </div>
            @endforeach



        </div>

    </div>

</section>




<!-- Fratures SEC -->



<!-- -------------Features Section Start----------------- -->

<section class="featuressec">

    <div class="container">

        <div class="row">

            <div class="col-md-12">

                <div class="ftrhdng">

                    {{-- <h1 class="effectCenter">Special <span>Features</span></h1> --}}
                    <h1 class="effectCenter">
                        @if ($home != null)
                            {{ $home->feature_heading }}
                        @else
                            Special
                            <span>Features</span>
                        @endif
                        </span>
                    </h1>

                </div>

            </div>

        </div>

        <div class="row">

            <div class="col-md-12">

                <div class="maincircle forDesktop">

                    <div class="roundimg">

                        <div class="circleimg">

                            @if ($home != null)
                                <img src="{{ asset('uploads/feature_side_imgs/' . $home->feature_side_img) }}"
                                    alt="">
                            @else
                                <img src="assets/images/Special fetures post.png" alt="">
                            @endif

                        </div>

                    </div>

                    <div class="roundcircle">
                        <div class="halfcirle">
                            <img src="assets/images/packet-design.png" alt="" class="w-100">
                        </div>
                    </div>

                    <div class="feacontent">
                        <div class="circlehdng it1">
                            <span>
                                @if ($home != null)
                                    <img src="{{ asset('uploads/feature_img_1/' . $home->feature_img_1) }}"
                                        alt="" class="img-fluid">
                                @else
                                    <img src="assets/images/2.png" alt="" class="img-fluid">
                                @endif
                            </span>
                            <h5>
                                @if ($home != null)
                                    {{ $home->feature_title_1 }}
                                @endif
                            </h5>
                            @if ($home != null)
                                {!! $home->feature_description_1 !!}
                            @endif

                        </div>

                        <div class="circlehdng it2">
                            <span>
                                @if ($home != null)
                                    <img src="{{ asset('uploads/feature_img_2/' . $home->feature_img_2) }}"
                                        alt="" class="img-fluid">
                                @else
                                    <img src="assets/images/3.png" alt="" class="img-fluid">
                                @endif
                            </span>
                            <h5>
                                @if ($home != null)
                                    {{ $home->feature_title_2 }}
                                @endif
                            </h5>
                            @if ($home != null)
                                {!! $home->feature_description_2 !!}
                            @endif

                        </div>

                        <div class="circlehdng it3">
                            <span>
                                @if ($home != null)
                                    <img src="{{ asset('uploads/feature_img_3/' . $home->feature_img_3) }}"
                                        alt="" class="img-fluid">
                                @else
                                    <img src="assets/images/4.png" alt="" class="img-fluid">
                                @endif
                            </span>
                            <h5>
                                @if ($home != null)
                                    {{ $home->feature_title_3 }}
                                @endif
                            </h5>
                            @if ($home != null)
                                {!! $home->feature_description_3 !!}
                            @endif

                        </div>

                        <div class="circlehdng it4">
                            <span>
                                @if ($home != null)
                                    <img src="{{ asset('uploads/feature_img_4/' . $home->feature_img_4) }}"
                                        alt="" class="img-fluid">
                                @else
                                    <img src="assets/images/5.png" alt="" class="img-fluid">
                                @endif
                            </span>
                            <h5>
                                @if ($home != null)
                                    {{ $home->feature_title_4 }}
                                @endif
                            </h5>
                            @if ($home != null)
                                {!! $home->feature_description_4 !!}
                            @endif
                        </div>

                        <div class="circlehdng it5">
                            <span>
                                @if ($home != null)
                                    <img src="{{ asset('uploads/feature_img_5/' . $home->feature_img_5) }}"
                                        alt="" class="img-fluid">
                                @else
                                    <img src="assets/images/6.png" alt="" class="img-fluid">
                                @endif
                            </span>
                            <h5>
                                @if ($home != null)
                                    {{ $home->feature_title_5 }}
                                @endif
                            </h5>

                            @if ($home != null)
                                {!! $home->feature_description_5 !!}
                            @endif
                        </div>

                    </div>

                </div>

                <div class="maincircle forMobile">

                    <div class="row justify-content-center">

                        <div class="col-7 col-sm-6">

                            <div class="circleimg" data-aos="zoom-in" data-aos-duration="2000">

                                @if ($home != null)
                                    <img src="{{ asset('uploads/feature_side_imgs/' . $home->feature_side_img) }}"
                                        alt="">
                                @else
                                    <img src="assets/images/Special fetures post.png" alt="">
                                @endif

                            </div>

                        </div>

                    </div>

                    <div class="clearfix"></div>

                    <div class="row feacontent justify-content-center">

                        <div class="col-md-6">

                            <div class="circlehdng it1 mt-5" data-aos="fade-up">
                                <h5>
                                    @if ($home != null)
                                        {{ $home->feature_title_1 }}
                                    @endif
                                </h5>
                                <p>
                                    @if ($home != null)
                                        {!! $home->feature_description_1 !!}
                                    @endif
                                </p>
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="circlehdng it2 mt-5" data-aos="fade-up">
                                <h5>
                                    @if ($home != null)
                                        {{ $home->feature_title_2 }}
                                    @endif
                                </h5>
                                <p>
                                    @if ($home != null)
                                        {!! $home->feature_description_2 !!}
                                    @endif
                                </p>
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="circlehdng it3 mt-5" data-aos="fade-up">
                                <h5>
                                    @if ($home != null)
                                        {{ $home->feature_title_3 }}
                                    @endif
                                </h5>
                                <p>
                                    @if ($home != null)
                                        {!! $home->feature_description_3 !!}
                                    @endif
                                </p>
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="circlehdng it4 mt-5" data-aos="fade-up">
                                <h5>
                                    @if ($home != null)
                                        {{ $home->feature_title_4 }}
                                    @endif
                                </h5>
                                <p>
                                    @if ($home != null)
                                        {!! $home->feature_description_4 !!}
                                    @endif
                                </p>
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="circlehdng it5 mt-5" data-aos="fade-up">
                                <h5>
                                    @if ($home != null)
                                        {{ $home->feature_title_5 }}
                                    @endif
                                </h5>
                                <p>
                                    @if ($home != null)
                                        {!! $home->feature_description_5 !!}
                                    @endif
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<!-- -------------Features Section End----------------- -->

<!-- Link Swiper's CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<section class="dealofday">

    <div class="container">

        <div class="row" data-aos="fade-up" data-aos-duration="2000">

            <div class="col-sm-8 col-md-6">
                <h2 class="effectLeft">Shop By Categories</h2>
            </div>

            <div class="col-sm-4 col-md-6">
                <div class="btnbox">
                    <a href="{{ url('shop') }}">View All <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>

        </div>

        <div class="row justify-content-center">
            <div class="col-12 my-3">

                <!-- Swiper -->
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        @foreach ($categories as $category)
                            <div class="swiper-slide" data-aos="fade-up" data-aos-duration="3000">
                                <div class="deal-item">

                                    <div class="img">

                                        @if ($category->category_img != null)
                                            <a
                                                href="{{ url('product-category', ['subcategory_id' => 0, 'category_slug' => $category->slug]) }}">

                                                <img src="{{ asset('category_img/' . $category->category_img) }}"
                                                    alt="">

                                            </a>
                                        @else
                                            <a
                                                href="{{ url('product-category', ['subcategory_id' => 0, 'category_slug' => $category->slug]) }}">
                                                <img src="{{ asset('pages/featured_img/no_imge_found.jpg') }}"
                                                    height="100" width="175" alt="">
                                            </a>
                                        @endif

                                    </div>

                                    <h5>{{ $category->name }}</h5>

                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </div>
    </div>

</section>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".dealofday .mySwiper", {
        slidesPerView: 4,
        spaceBetween: 30,
        // autoplay: {
        // delay: 2500,
        // disableOnInteraction: false
        // },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            0: {
                slidesPerView: 1
            },
            640: {
                slidesPerView: 2
            },
            768: {
                slidesPerView: 3
            },
            1024: {
                slidesPerView: 4
            },
        },
    });
</script>

<!-- Features SEC END -->
<section class="p-b-50">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 mb-5">
                <div class="offersbox left"
                    @if ($home != null) style="background-image: url('{{ 'uploads/offer_banner_1/' . $home->offer_banner_1 }}') !important;" @endif>
                    <div class="texts text-center">
                        <h3>
                            @if ($home != null)
                                {{ $home->offer_title_1 }}
                            @endif
                        </h3>
                        <h4>
                            @if ($home != null)
                                {{ $home->offer_subtitle_1 }}
                            @endif
                        </h4>
                        <span><a @if ($home != null) href="{{ $home->offer_link_1 }}" @endif
                                target="_blank" class="btn btn-dark">Order Now</a></span>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 mb-5">
                <div class="offersbox"
                    @if ($home != null) style="background-image: url('{{ 'uploads/offer_banner_2/' . $home->offer_banner_2 }}') !important;" @endif>
                    <div class="texts text-center">
                        <h3>
                            @if ($home != null)
                                {{ $home->offer_title_2 }}
                            @endif
                        </h3>
                        <h4>
                            @if ($home != null)
                                {{ $home->offer_subtitle_2 }}
                            @endif
                        </h4>
                        <span><a @if ($home != null) href="{{ $home->offer_link_2 }}" @endif
                                target="_blank" class="btn btn-dark">Order Now</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- explore -->

<section class="explore"
    @if ($home != null) style="background-image: url('{{ 'uploads/explore_tech_banner/' . $home->explore_tech_banner }}') !important;" @endif>

    <div class="container">
        <div class="sec-title" data-aos="zoom-in" data-aos-duration="1500">
            <h2 class="effectCenter">
                @if ($home != null)
                    {{ $home->explore_tech_heading }}
                @endif
            </h2>
        </div>
    </div>

    <div class="expcontent">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9  exfitm">
                    <div class="expitems" data-aos="fade-up" data-aos-duration="2500">
                        <div class="item-img">
                            <div class="img">
                                @if ($home != null)
                                    <img src="{{ asset('uploads/tech_img_1/' . $home->tech_img_1) }}" alt="">
                                @endif
                            </div>
                        </div>

                        <div class="item-text">

                            <div class="item-title">
                                @if ($home != null)
                                    {{ $home->tech_title_1 }}
                                @endif
                            </div>
                            <h3>
                                @if ($home != null)
                                    {!! $home->technology_description_1 !!}
                                @endif
                            </h3>
                        </div>
                    </div>

                    <div class="expitems" data-aos="fade-up" data-aos-duration="2500">

                        <div class="item-text">

                            <div class="item-title">
                                @if ($home != null)
                                    {{ $home->tech_title_2 }}
                                @endif
                            </div>

                            <h3>
                                @if ($home != null)
                                    {!! $home->technology_description_2 !!}
                                @endif
                            </h3>

                        </div>

                        <div class="item-img">

                            <div class="img">

                                @if ($home != null)
                                    <img src="{{ asset('uploads/tech_img_2/' . $home->tech_img_2) }}" alt="">
                                @endif

                            </div>

                        </div>

                    </div>

                    <div class="expitems" data-aos="fade-up" data-aos-duration="2500">

                        <div class="item-img">

                            <div class="img">

                                @if ($home != null)
                                    <img src="{{ asset('uploads/tech_img_3/' . $home->tech_img_3) }}" alt="">
                                @endif

                            </div>

                        </div>

                        <div class="item-text">

                            <div class="item-title">
                                @if ($home != null)
                                    {{ $home->tech_title_3 }}
                                @endif
                            </div>

                            <h3>
                                @if ($home != null)
                                    {!! $home->technology_description_3 !!}
                                @endif
                            </h3>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section>

<!-- explore END -->

<!-- dealofday -->

<section class="p-v-50 featuresSec">
    <div class="fetureHead">
        @if ($home != null)
            <h2>{{ $home->why_us_heading }}</h2>
        @else
            <h2>why choose us</h2>
        @endif
    </div>
    <div class="container">
        <div class="row justify-content-around align-items-start">
            <div class="col-md-6 col-lg-4 d-flex fetureBoxes">
                <span>
                    <i class="fas fa-certificate"></i>

                    {{-- @if ($home != null)
                     <img src="{{ asset('uploads/why_us_img_1/'.$home->why_us_img_1) }}" alt="">
                @endif --}}
                </span>
                <div>
                    <h4>
                        @if ($home != null)
                            {{ $home->why_us_title_1 }}
                        @endif
                    </h4>
                    <p>
                        @if ($home != null)
                            {!! $home->why_us_desc_1 !!}
                        @endif
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 d-flex fetureBoxes">
                <span><i class="fas fa-money-check-alt"></i></span>
                <div>
                    <h4>
                        @if ($home != null)
                            {{ $home->why_us_title_2 }}
                        @endif
                    </h4>
                    <p>
                        @if ($home != null)
                            {!! $home->why_us_desc_2 !!}
                        @endif
                    </p>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-md-6 col-lg-4 d-flex fetureBoxes">
                <span><i class="far fa-clock"></i></span>
                <div>
                    <h4>
                        @if ($home != null)
                            {{ $home->why_us_title_3 }}
                        @endif
                    </h4>
                    <p>
                        @if ($home != null)
                            {!! $home->why_us_desc_3 !!}
                        @endif
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 d-flex fetureBoxes">
                <span><i class="fas fa-balance-scale-left"></i></span>
                <div>
                    <h4>
                        @if ($home != null)
                            {{ $home->why_us_title_4 }}
                        @endif
                    </h4>
                    <p>
                        @if ($home != null)
                            {!! $home->why_us_desc_4 !!}
                        @endif
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- dealofday END -->

<!-- FAQ -->

<section class="faq"
    @if ($home != null) style="background-image: url('{{ 'uploads/faq_banner/' . $home->faq_banner }}') !important;" @endif>

    <div class="container">

        <div class="sec-title" data-aos="zoom-in" data-aos-duration="1500">

            <h2 class="effectCenter">Frequently <span>Asked Questions</span> </h2>

        </div>

        <div class="row py-5">

            <div class="col-md-12">

                <div class="accordion" id="accordionExample">





                    @foreach ($faqs as $key => $faq)
                        <div class="accordion-item" data-aos="fade-up" data-aos-duration="">

                            <h2 class="accordion-header">

                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne_{{ $key }}" aria-expanded="true"
                                    aria-controls="collapseOne_{{ $key }}">

                                    {!! $faq->question !!}

                                </button>

                            </h2>

                            <div id="collapseOne_{{ $key }}"
                                class="accordion-collapse collapse @if ($key == 0) show @endif"
                                data-bs-parent="#accordionExample">

                                <div class="accordion-body">

                                    {!! $faq->answer !!}

                                </div>

                            </div>

                        </div>
                    @endforeach



                </div>

                <center>
                    <div class="btnbox" data-aos="fade-up" data-aos-duration="">

                        <a href="{{ url('faq') }}">View More <i class="bi bi-arrow-right"></i></a>

                    </div>
                </center>

            </div>

        </div>

    </div>

</section>

<!-- FAQ END -->



<section class="infogrsap d-none">

    <article data-icon="📊" style="--c: #ffffff; --slist: #ffffff,#ffffff,#ffffff,#ffffff"><span
            aria-hidden="true"></span>

        <h3>Terpene Preservation</h3>

        <p>Terpenes are Essential for

            Preserving Cannabis Synergy.</p>

    </article>

    <article data-icon="🙎" style="--c:  #ffffff; --slist: #ffffff,#ffffff,#ffffff,#ffffff"><span
            aria-hidden="true"></span>

        <h3>Mold Prevention</h3>

        <p>Mold can occur early on

            in the curing process.

        </p>

    </article>

    <article data-icon="📍" style="--c:  #ffffff; --slist: #ffffff,#ffffff,#ffffff,#ffffff"><span
            aria-hidden="true"></span>

        <h3>Weight Retension</h3>

        <p>Moisture loss is a consistent

            problem across legal markets.</p>

    </article>

    <!-- <article data-icon="💬" style="--c: #e35638; --slist: #b53292,#be3c68,#dc4f45,#e15822"><span

            aria-hidden="true"></span>

        <h3>lava cake</h3>

        <p>Cake cookie lemon drops muffin sugar plum. Liquorice pudding sugar plum topping macaroon pie chocolate.

        </p>

    </article>

    <article data-icon="⚙️" style="--c: #f8d602; --slist: #dc4f45,#e15822,#f48b15,#fad700"><span

            aria-hidden="true"></span>

        <h3>macaroon</h3>

        <p>Cake muffin donut chocolate cake jelly sesame snaps wafer tart pie sweet roll muffin chupa chups.</p>

    </article> -->

</section>



<!-- Tanmoy END -->



<!-- Sohail -->



<!-- ---------------Blog Section Start----------- -->



<section class="blog py-5">

    <div class="container">

        <div class="blogside">

            <div class="row">

                <div class="col-md-12">

                    <div class="hdng" data-aos="fade-up" data-aos-duration="2000">

                        <h1>Latest News Updates & Blogs</h1>

                    </div>

                </div>

            </div>

        </div>

        <div class="blogside" data-aos="zoom-in" data-aos-duration="2000">

            <div class="row mt-5">

                @foreach ($blogs as $blog)
                    <div class="col-md-6 col-lg-4">
                        <div class="blogbx">
                            <img src="{{ asset($blog->image) }}" alt="">
                        </div>

                        <div class="content">
                            <p>{{ $blog->created_at->format('F j, Y') }}</p>
                            <h5>{{ $blog->title }}</h5>
                            <div class="blogbtn">
                                <a href="{{ url('blog/details', $blog->id) }}">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

</section>

<section class="testimonials">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="hdng text-center" data-aos="fade-up" data-aos-duration="2000">
                    <h2 class="effectCenter">
                        @if ($home != null)
                            {{ $home->testimonial_heading }}
                        @else
                            Customer <span>Feedback</span>
                        @endif
                    </h2>
                </div>
            </div>

            <div class="col-md-10">

                <!-- Carousel -->
                <div id="demo" class="carousel slide" data-bs-ride="carousel">

                    <!-- Indicators/dots -->
                    <div class="carousel-indicators">
                        @for ($i = 0; $i < count($testimonials); $i++)
                            <button type="button" data-bs-target="#demo" data-bs-slide-to="{{ $i }}"
                                class="@if ($i == 0) active @endif"></button>
                        @endfor
                    </div>

                    <!-- The slideshow/carousel -->
                    <div class="carousel-inner">

                        @foreach ($testimonials as $key => $testimonial)
                            <div class="carousel-item  @if ($key == 0) active @endif testimonyBox">
                                <center>
                                    {{-- <div class="d-flex mt-2 mb-4 justify-content-center align-items-center">
                                    <span><i class="fa fa-quote-left"></i></span><span><img src="images/testi-02.webp" alt=""></span><span><i class="fa fa-quote-right"></i></span>
                                </div> --}}
                                    <p>{!! $testimonial->message !!}</p>
                                    <h5>{{ $testimonial->name }}</h5>
                                </center>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<x-userFooter />
