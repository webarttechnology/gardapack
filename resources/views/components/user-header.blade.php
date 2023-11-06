<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <link
        href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600;700;800&family=Montserrat:wght@400;500;600;700&family=Poppins:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Staller Nav CSS -->
    <link href="{{ asset('assets/css/stellarnav.min.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css')}}">
    <title>Grada </title>

    <!-- include the site bootstrap stylesheet -->
	<link rel="stylesheet" href="{{ asset('front_end/css/bootstrap.css')}}">
	<!-- include the site fontawesome stylesheet -->
	<link rel="stylesheet" href="{{ asset('front_end/css/fontawesome.css')}}">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="{{ asset('front_end/style.css')}}">
	<!-- include theme plugins setting stylesheet -->
	<link rel="stylesheet" href="{{ asset('front_end/css/plugins.css')}}">
	<!-- include theme color setting stylesheet -->
	<link rel="stylesheet" href="{{ asset('front_end/css/color.css')}}">
	<!-- include theme responsive setting stylesheet -->
	<link rel="stylesheet" href="{{ asset('front_end/css/responsive.css') }}">
	
	<link rel="stylesheet" href="{{ asset('front_end/css/cart-page.css') }}">

    <!-- sweetalert -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.all.min.js"></script>
    
    <!-- toaster -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0- 
     alpha/css/bootstrap.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <!---------Owl Caraousel------------->

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

</head>

<body>



    <!-- Ria -->


    <!-- --------home-header--------------- -->

    <header>
        <div class="header-part clearfix">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-2 col-sm-2">
                        <nav>
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </nav>
                    </div>

                    <div class="col-md-5 col-sm-5 ">
                        <p>Custom packaging and pre-designed bags now available! <a href="#" class="learn">Learn
                                more</a></p>
                    </div>

                    <div class="col-md-2 col-sm-2 ">
                        <div class="header-log">
                            @if (Auth::user())
                              <a href="#" class="log">Log Out</a>
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
                <div class="row">
                    <div class="col-md-4">
                        <div class="home-logo">
                            <a href="{{ url('/') }}"><img src="{{ asset('assets/images/Nav_Logo.png')}}"></a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="home-form">
                            <div class="home-wrap">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>All Catagories</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="home-wrap2">
                                <input type="text" placeholder="Search of products">
                                <span class="search"><a href="#"><i class="bi bi-search"></i></a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 ">
                        <nav>
                            <a href="#"><i class="fa fa-user" aria-hidden="true"></i></a>
                            <a href="#"><i class="bi bi-cart4"></i></a>
                        </nav>
                    </div>

                </div>
            </div>
        </div>

        <div class="header-part3 ">
            <div class="stellarnav">
                <ul>
                    <li><a href="#" class="active">Technology</a></li>
                    <li><a href="#">Media</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="{{ url('about-us') }}">About</a></li>
                    <li><a href="{{ url('contact-us') }}">Contact</a></li>
                    <li><a href="#">Reseller</a></li>
                </ul>
            </div><!-- .stellarnav -->
        </div>
    </header>