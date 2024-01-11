@php

    $categories = App\Models\Category::where('type', 'product')->get();
    $website_logo = App\Models\Settings::where('key', 'app_logo')->first();
    $website_name = App\Models\Settings::where('key', 'app_name')->first();
    $announcement = App\Models\Settings::where('key', 'header_announcement')->first();
    $home_menubars = App\Models\Menubar::where('old_page', 'yes')
        ->whereTitle('Home')
        ->first();
    $about_menubars = App\Models\Menubar::where('old_page', 'yes')
        ->whereTitle('About')
        ->first();
    $shop_menubars = App\Models\Menubar::where('old_page', 'yes')
        ->whereTitle('Shop')
        ->first();
    $technology_menubars = App\Models\Menubar::where('old_page', 'yes')
        ->whereTitle('Technology')
        ->first();
    $blog_menubars = App\Models\Menubar::where('old_page', 'yes')
        ->whereTitle('Blogs')
        ->first();
    $contact_menubars = App\Models\Menubar::where('old_page', 'yes')
        ->whereTitle('Contact Us')
        ->first();
    $account_menubars = App\Models\Menubar::where('old_page', 'yes')
        ->whereTitle('My Account')
        ->first();
    $wholesale_menubars = App\Models\Menubar::where('old_page', 'yes')
        ->whereTitle('Wholesale')
        ->first();
    $retailer_menubars = App\Models\Menubar::where('old_page', 'yes')
        ->whereTitle('Retailer')
        ->first();

    $new_menubars = App\Models\Menubar::where('old_page', 'no')
        ->whereStatus('active')
        ->orderBy('id', 'desc')
        ->get();

    $cartNo = 0;

    if (Auth::user()) {
        $cartNo = App\Models\Cart::where('user_id', Auth::user()->id)->count();
    } else {
        if (Session::has('existing_cart')) {
            $prods = json_decode(Session::get('existing_cart'), true);

            foreach ($prods as $prod) {
                $cartNo++;
            }
        }
    }

    if (url()->current() == url('/')) {
        $data = App\Models\HomePge::first();

        $metaTitle = ' | ' . $data->meta_title;
        $metaDescription = $data->meta_description;
    } elseif (url()->current() == url('technology')) {
        $data = App\Models\Technology::first();

        $metaTitle = ' | ' . $data->meta_title;
        $metaDescription = $data->meta_description;
    } elseif (url()->current() == url('support')) {
        $data = App\Models\Support::first();

        $metaTitle = ' | ' . $data->meta_title;
        $metaDescription = $data->meta_description;
    } elseif (stripos(url()->current(), 'about-us') !== false) {
        $data = App\Models\Pages::where('name', 'About Us')->first();
        
        $metaTitle = ' | ' . $data->meta_title;
        $metaDescription = $data->meta_description;
    } elseif (stripos(url()->current(), 'contact-us') !== false) {
        $data = App\Models\Pages::where('name', 'Contact Us Page')->first();
        
        $metaTitle = ' | ' . $data->meta_title;
        $metaDescription = $data->meta_description;
    } else {
        $metaTitle = '| Garda Pack';
        $metaDescription = 'Garda Pack';
    }

    $footer = App\Models\WebsiteFoter::first();
@endphp

<!DOCTYPE html>

<html lang="en">



<head>
    <meta name="description" content="{{ $metaDescription }}">
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token" content="{{ csrf_token() }}">



    <!-- Bootstrap CSS CDN -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">



    <!-- Bootstrap Icons -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">



    <!-- font-awsome -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



    <!-- AOS CSS -->

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">



    <!-- Google Font CDN -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Staller Nav CSS -->

    <link href="{{ asset('assets/css/stellarnav.min.css') }}" rel="stylesheet">
    <link rel="icon" href="{{ asset('settings/app_logo/' . $website_logo->value) }}" type="image/png" />
    <!-- Custom CSS -->

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- Responsive CSS -->

    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

    <title>{{ $website_name->value . $metaTitle }}</title>



    <!-- include the site bootstrap stylesheet -->

    <link rel="stylesheet" href="{{ asset('front_end/css/bootstrap.css') }}">

    <!-- include the site fontawesome stylesheet -->

    <link rel="stylesheet" href="{{ asset('front_end/css/fontawesome.css') }}">

    <!-- include the site stylesheet -->

    <link rel="stylesheet" href="{{ asset('front_end/style.css') }}">

    <!-- include theme plugins setting stylesheet -->

    <link rel="stylesheet" href="{{ asset('front_end/css/plugins.css') }}">

    <!-- include theme color setting stylesheet -->

    <link rel="stylesheet" href="{{ asset('front_end/css/color.css') }}">

    <!-- include theme responsive setting stylesheet -->

    <link rel="stylesheet" href="{{ asset('front_end/css/responsive.css') }}">



    <link rel="stylesheet" href="{{ asset('front_end/css/cart-page.css') }}">



    <!-- sweetalert -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.min.css">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.all.min.js"></script>



    <!-- toaster -->

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0- 

     alpha/css/bootstrap.css"
        rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>



    <!---------Owl Caraousel------------->



    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />


    <!-- Select2 -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
</head>



<body>
    <a href="javascript:;" class="back-to-top" id="back-to-top"><i class="bi bi-arrow-up"></i></a>
    <header class="main-header site-header">

        <div class="header-part clearfix">

            <div class="container">

                <div class="row justify-content-between">

                    <div class="col-md-3 col-sm-3 col-5">

                        <nav>
                             @if($footer!=null && $footer->fb_status == "active")
                                <a href="{{ $footer->fb_link }}" target="_blank"><img src="{{ asset('uploads/social/' . $footer->fb_image) }}" alt=""></a>
                            @endif
                            @if($footer!=null && $footer->twitter_status == "active")
                                <a href="{{ $footer->twitter_link }}" target="_blank"><img src="{{ asset('uploads/social/' . $footer->twitter_image) }}" alt=""></a>
                            @endif
                            @if($footer!=null && $footer->goog_status == "active")
                                <a href="{{ $footer->goog_link }}" target="_blank"><img src="{{ asset('uploads/social/' . $footer->goog_image) }}" alt=""></a>
                            @endif
                            @if($footer!=null && $footer->pint_status == "active")
                                <a href="{{ $footer->pint_link }}" target="_blank"><img src="{{ asset('uploads/social/' . $footer->pint_image) }}" alt=""></a>
                            @endif

                        </nav>

                    </div>



                    <!--<div class="col-md-6 col-sm-6 col-2">-->

                    {{-- <!--    <p>{{ $announcement->value }}</p>--> --}}

                    <!--</div>-->



                    <div class="col-md-3 col-sm-3 col-5">

                        <!--<div class="header-log">-->

                        <!--    @if (Auth::user())-->
                        <!--        <a href="{{ url('logout') }}" class="log">Log Out</a>-->
                        <!--    @else-->
                        <!--        <a href="{{ url('signup') }}" class="log">Log in</a>-->

                        <!--        <a href="{{ url('signup') }}">Sign Up</a>-->
                        <!--    @endif-->

                        <!--</div>-->

                    </div>

                </div>

            </div>

        </div>

        <div class="header-part2 clearfix">

            <div class="container">

                <div class="row justify-content-between">


                    

                    <div class="col-md-3 col-4">

                        <div class="home-logo">

                            <a href="{{ url('/') }}"><img
                                    src="{{ asset('settings/app_logo/' . $website_logo->value) }}"></a>

                        </div>

                    </div>

                    <div class="col-md-8 col-8">
                        <nav class="icnstty">

                            <ul>
                                <li class="position-relative">
                                    <a href="javascipt:void;" class="me-2 searchs"><i class="bi bi-search"></i></a>
                                    
                                    <div class="float_search">

                                        <form action="{{ url('product-search') }}" method="post">
                
                                            @csrf
                
                
                
                                            <div class="home-form">
                
                                                <div class="home-wrap d-none">
                
                                                    <select class="form-select" name="search_category"
                                                        aria-label="Default select example">
                
                                                        @foreach ($categories as $category)
                                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                        @endforeach
                
                                                    </select>
                
                                                </div>
                
                                                <div class="home-wrap2">
                
                                                    <input type="text" name="p_search" placeholder="Search of products" required>
                
                                                    <span class="search">
                
                                                        <button class="searchBtn" type="submit"><i
                                                                class="bi bi-search"></i></button>
                
                                                    </span>
                
                                                </div>
                
                                            </div>
                
                                        </form>
                
                                    </div>
                                </li>
                                
                                @if(Auth::user())
                                <li class="position-relative" data-bs-toggle="tooltip" data-bs-placement="buttom" title="My account">
                                    <a href="{{ url('my-account') }}" class="me-2"><i class="bi bi-person"></i></a>
                                </li>
                                @endif

                                <li>

                                    <a href="#" class="rgstrprt me-2" data-bs-toggle="tooltip" data-bs-placement="buttom" title="Support"><i class="bi bi-headphones"></i></a>

                                    <ul class="sbmnu">

                                        <li><a href="{{ url('product/request') }}">Product Registration</a></li>
                                        <li><a href="{{ url('faq') }}">FAQ</a></li>
                                        <li><a href="{{ url('support') }}">Support</a></li>
                                        <li><a href="{{ url('contact-us') }}">Contact Us</a></li>
                                    </ul>

                                </li>

                                @if (Auth::user())
                                    <li>

                                        <a href="{{ url('user/wishlist/page') }}"><i class="bi bi-heart"></i></a>
                                    </li>

                                    <li>

                                        <!--<a href="{{ url('my-account') }}"><i class="fa fa-user"-->
                                        <!--        aria-hidden="true"></i></a>-->

                                    </li>
                                @endif

                                <li class="position-relative" data-bs-toggle="tooltip" data-bs-placement="buttom" title="Cart">
                                    <a href="{{ url('user/cart/page') }}"><i class="bi bi-cart4"></i></a>
                                    <span class="cart-total">{{ $cartNo }}</span>
                                </li>
                                

                            </ul>

                        </nav>
                        
                        <div class="header-log">

                            @if (Auth::user())
                                <a href="{{ url('logout') }}" class="log btn btn-sm btn-warning"><i class="fa fa-lock"></i> Log Out</a>
                            @else
                                <a href="{{ url('signup') }}" class="log btn btn-sm btn-warning"><i class="fa fa-unlock"></i> Log in</a>

                                <a href="{{ url('signup') }}" class="btn btn-sm btn-warning"><i class="fa fa-user"></i> Sign Up</a>
                            @endif

                        </div>
                    </div>



                </div>

            </div>

        </div>



        <div class="header-part3 ">

            <div class="stellarnav">

                <ul>



                    @if ($home_menubars->status == 'active')
                        <li><a href="{{ url('/') }}" class="active">Home</a></li>
                    @endif

                    @if ($about_menubars->status == 'active')
                        <li><a href="{{ url('about-us') }}">About</a></li>
                    @endif

                    @if ($shop_menubars->status == 'active')
                        <li><a href="{{ url('shop') }}">Shop</a></li>
                    @endif

                    @if ($technology_menubars->status == 'active')
                        <li><a href="{{ url('technology') }}">Technology</a></li>
                    @endif

                    @if ($contact_menubars->status == 'active')
                        <li><a href="{{ url('contact-us') }}">Contact Us</a></li>
                    @endif

                    @if ($account_menubars->status == 'active')
                        <li>
                            @if (Auth::user())
                                <a href="{{ url('my-account') }}">My Account</a>
                            @else
                                <a href="{{ url('my-account') }}">My Account</a>
                            @endif
                        </li>
                    @endif

                    @if ($wholesale_menubars->status == 'active')
                        <li><a href="{{ url('wholesale-application') }}">Wholesale</a></li>
                    @endif

                    @if ($retailer_menubars->status == 'active')
                        <li><a href="{{ url('retailers') }}">Retailers</a></li>
                    @endif
                    
                    @if ($blog_menubars->status == 'active')
                        <li><a href="{{ url('blogs') }}">Blogs</a></li>
                    @endif

                    @foreach ($new_menubars as $key => $new_menubar)
                        <li><a href="{{ $new_menubar->link }}" target="_blank">{{ $new_menubar->title }}</a></li>
                    @endforeach
                </ul>

            </div><!-- .stellarnav -->

        </div>

        @php
            $top_categories = App\Models\Category::where('display_top', 'yes')
                ->orderBy('id', 'desc')
                ->get();
        @endphp

        <div class="headerctgry">

            <div class="container">
                <div class="row justify-content-center">
                    @foreach ($top_categories as $top_category)
                        <div class="col-6 col-sm-4 col-md-2 text-center">
                            <a
                                href="{{ url('product-category', ['subcategory_id' => 0, 'category_slug' => $top_category->slug]) }}">
                                <div class="headerglry">
                                    <div class="headerimg">
                                        <img
                                            src="{{ asset('uploads/category_top_img/' . $top_category->category_top_img) }}">
                                    </div>
                                    <h6>{{ $top_category->top_name }}</h6>
                                </div>
                            </a>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>

    </header>
