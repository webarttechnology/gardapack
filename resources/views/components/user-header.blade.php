@php

    $categories = App\Models\Category::where('type', 'product')->get();

@endphp



<!DOCTYPE html>

<html lang="en">



<head>

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

    <!-- Custom CSS -->

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- Responsive CSS -->

    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

    <title>Grada </title>



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



</head>



<body>







    <!-- Ria -->





    <!-- --------home-header--------------- -->



    <header>

        <div class="header-part clearfix">

            <div class="container">

                <div class="row justify-content-between">

                    <div class="col-md-3 col-sm-3 col-5">

                        <nav>

                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>

                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>

                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>

                        </nav>

                    </div>



                    <div class="col-md-6 col-sm-6 col-2">

                        <p>Custom packaging and pre-designed bags now available! <a href="#" class="learn">Learn

                                more</a></p>

                    </div>



                    <div class="col-md-3 col-sm-3 col-5">

                        <div class="header-log">

                            @if (Auth::user())

                                <a href="{{ url('logout') }}" class="log">Log Out</a>

                            @else

                                <a href="{{ url('signup') }}" class="log">Log in</a>

                                <a href="{{ url('signup') }}">Sign Up</a>

                            @endif

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="header-part2 clearfix">

            <div class="container">

                <div class="row justify-content-end">

                    <div class="col-md-3 col-sm-6 col-5">

                        <div class="home-logo">

                            <a href="{{ url('/') }}"><img src="{{ asset('assets/images/Nav_Logo.png') }}"></a>

                        </div>

                    </div>



                    <div class="col-md-6 col-sm-6 col-7">

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

                                        <button class="searchBtn" type="submit"><i class="bi bi-search"></i></button>

                                    </span>

                                </div>

                            </div>

                        </form>

                    </div>



                    <div class="col-md-3 col-sm-6 ">

                        <nav class="icnstty">

                            <ul>

                                <li>

                                    <a href="#" class="rgstrprt me-2"><i class="bi bi-headphones"></i></a>

                                    <ul class="sbmnu">

                                        <li><a href="{{ url('product/request') }}">Product Registration</a></li>

                                       </ul>

                                </li>

                                @if (Auth::user())

                                    <li>

                                    <a href="{{ url('user/wishlist/page') }}"><i class="bi bi-heart"></i></a></li>

                                    <li>

                                    <a href="{{ url('user/wishlist/page') }}"><i class="fa fa-user"

                                            aria-hidden="true"></i></a>

                                    </li>

                                @endif

                                <li><a href="{{ url('user/cart/page') }}"><i class="bi bi-cart4"></i></a></li>

                            </ul>

                        </nav>

                    </div>



                </div>

            </div>

        </div>



        <div class="header-part3 ">

            <div class="stellarnav">

                <ul>

                    <li><a href="{{ url('/') }}" class="active">Home</a></li>
                    <li><a href="{{ url('about-us') }}">About</a></li>
                    <li><a href="{{ url('shop') }}">Shop</a></li>
                    <li><a href="{{ url('technology') }}">Technology</a></li>
                    <li><a href="{{ url('contact-us') }}">Contact Us</a></li>
                    <li>
                        @if (Auth::user())
                            <a href="{{ url('my-account') }}">My Account</a>
                        @else
                            <a href="{{ url('my-account') }}">My Account</a>
                        @endif
                    </li>
                    <li><a href="{{ url('wholesale-application') }}">Wholesale</a></li>
                    <li><a href="{{ url('retailers') }}">Retailers</a></li>

                </ul>

            </div><!-- .stellarnav -->

        </div>

        

        <div class="headerctgry">

          <div class="container">    

            <div class="row justify-content-center">

                <div class="col-6 col-md-2 text-center">

                    <div class="headerglry">

                        <div class="headerimg">

                           <!--<img src="https://www.urbanmonkey.com/cdn/shop/collections/4b1-all-bottoms_120x120.jpg?v=1680173271"> -->

                           <img src="https://t4.ftcdn.net/jpg/06/01/26/55/360_F_601265575_JkTPQdyLZgN1murpRHVUdE63u97W52DL.jpg">

                        </div>

                        <h6>Clear/Black Bags</h6>

                    </div>

                </div>

                <div class="col-6 col-md-2 text-center">

                    <div class="headerglry">

                        <div class="headerimg">

                           <!--<img src="https://www.urbanmonkey.com/cdn/shop/collections/1-all-headwear_120x120.jpg?v=1680249946">-->

                           <img src="https://cdn-icons-png.flaticon.com/512/706/706956.png">

                        </div>

                        <h6>Clear/Black Rolls</h6>

                    </div>

                </div>

                <div class="col-6 col-md-2 text-center">

                    <div class="headerglry">

                        <div class="headerimg">

                           <!--<img src="https://www.urbanmonkey.com/cdn/shop/collections/3-eyewear_120x120.jpg?v=1680513152"> -->

                           <img src="https://us.123rf.com/450wm/semenchenko/semenchenko1803/semenchenko180300023/96799529-blank-food-stand-up-flexible-pouch-snack-sachet-bag-mock-up-template-illustration-isolated-on-white.jpg?ver=6">

                        </div>

                        <h6>Mylar Bags</h6>

                    </div>

                </div>

                <div class="col-6 col-md-2 text-center">

                    <div class="headerglry">

                        <div class="headerimg">

                           <!--<img src="https://www.urbanmonkey.com/cdn/shop/collections/5c-backpack_120x120.jpg?v=1680258901"> -->

                           <img src="https://images.assetsdelivery.com/compings_v2/vectorhome/vectorhome1907/vectorhome190700032.jpg">

                        </div>

                        <h6>Vacuum Machine</h6>

                    </div>

                </div>

                <div class="col-6 col-md-2 text-center">

                    <div class="headerglry">

                        <div class="headerimg">

                           <!--<img src="https://www.urbanmonkey.com/cdn/shop/collections/5b-belts_120x120.jpg?v=1680257700"> -->

                           <img src="https://static.thenounproject.com/png/4454610-200.png"> 

                        </div>

                        <h6>Vacuum Seal Bags</h6>

                    </div>

                </div>

                <div class="col-6 col-md-2 text-center">

                    <div class="headerglry">

                        <div class="headerimg">

                           <!--<img src="https://www.urbanmonkey.com/cdn/shop/collections/um-steals-menu_120x120.svg?v=1678955365">-->

                           <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQHmzP9zCtYGKheN4K2ZL8l4ha-s5si1kiHJg&usqp=CAU">

                        </div>

                        <h6>Vacuum Seal Rolls</h6>

                    </div>

                </div>

            </div>

           </div>    

        </div>

    </header>

