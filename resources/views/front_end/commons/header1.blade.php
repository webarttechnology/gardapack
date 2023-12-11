<!DOCTYPE html>
<html lang="en">

<head>
	<!-- set the encoding of your site -->
	<meta charset="utf-8">
	<!-- set the Compatible of your site -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- set the page title -->
	<title>GreenMall</title>
	<!-- include the site Google Fonts stylesheet -->
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700%7CRoboto:300,400,500,700,900&amp;display=swap" rel="stylesheet">
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
	
	<link rel="stylesheet" type="text/css" media="all" href="{{ asset('front_end/css/stellarnav.css')}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />


    <!-- sweetalert -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.all.min.js"></script>
    
</head>

<body>
	<!-- pageWrapper -->
	
	@php
	     $segment = Request::segment(1);	
	@endphp
	
	<div id="pageWrapper">
		 <!--pageHeader -->
		<header id="header" class="pt-lg-5 pt-md-3 pt-2 @if($segment != "signup") position-absolute @endif w-100">
			<div class="container-fluid px-xl-17 px-lg-5 px-md-3 px-0 d-flex flex-wrap">
				
				<div class="col-12 col-sm-6 col-lg-12 static-block">
					<div class="topHeaderBar">
						<div class="row">
							<div class="col-md-4">
								<ul class="nav nav-tabs wishList pt-lg-4 pt-3 mr-xl-3 mr-0  border-bottom-0">
									<li class="nav-item"><a class="nav-link cart-drawer-btn" href="javascript:void(0);"><i class="bi bi-list"></i></a></li>
									<li class="nav-item"><a class="nav-link position-relative" href="javascript:void(0);"><i class="bi bi-facebook"></i></a></li>
									<li class="nav-item"><a class="nav-link position-relative" href="javascript:void(0);"><i class="bi bi-youtube"></i></a></li>
								</ul>
							</div>
							<div class="col-md-4">
								<li class="nav-item text-center">
									<a class="nLogo" href="{{ url('/') }}"><img src="{{ asset('front_end/images/greenlogo.png')}}" alt="" class="img-fluid"></a>
								</li>
							</div>
							<div class="col-md-4">
								<ul class="nav nav-tabs wishList pt-lg-4 pt-3 mr-xl-3 mr-0 justify-content-end border-bottom-0">
									<li class="nav-item"><a class="nav-link icon-search" href="javascript:void(0);"></a></li>
									<li class="nav-item"><a class="nav-link position-relative icon-heart" href="javascript:void(0);"><span class="num rounded d-block">1</span></a></li>
									
									
									@if(Auth::user())
									   <li class="nav-item"><a class="nav-link position-relative icon-cart" href="{{ url('user/cart/page') }}"><span class="num rounded d-block">2</span></a></li>
                                    @else
    									<li class="nav-item"><a class="nav-link position-relative icon-cart" onclick="warningAlert()"><span class="num rounded d-block">0</span></a></a></li>
									@endif
									
									
								</ul>
							</div>
						</div>
					</div>
					 <!--mainHolder -->
					 <!--category -->
					
					<div class="mainHolder justify-content-center">
						<div class="stellarnav">
						    
					@php
					     	$categories = App\Models\Category::where('type', 'product')->limit(10)->get();
					@endphp

					<div class="mainHolder justify-content-center">
						<div class="stellarnav">

						<ul>
							@foreach ($categories as $category)
							    @php
								    $sub_category = App\Models\Subcategory::where('category_id', $category->id)->get();	
								@endphp

								<li><a href="{{ url('product-category', ['subcategory_id' => 0, 'category_slug' => $category->slug]) }}">{{ $category->name }}</a>
			                         @if ($sub_category->isEmpty() == false)
										 <ul>
											@foreach ($sub_category as $sub)
										    	<li><a href="{{ url('product-category', ['subcategory_id' => $sub->id, 'category_slug' => $category->slug]) }}">{{ $sub->name }}</a></li>
											@endforeach
										 </ul>
									 @endif					
								</li>
								
							@endforeach
						</ul>
						
						
						</div>
						 <!--pageNav1 -->
						<nav class="navbar d-none navbar-expand-lg navbar-light p-0 pageNav1 position-static">
							<button type="button" class="navbar-toggle collapsed position-relative mt-md-2" data-toggle="collapse" data-target="#navbarNav" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<div class="collapse navbar-collapse" id="navbarNav">
								<ul class="navbar-nav text-uppercase d-inline-block">
									<li class="nav-item active dropdown">
										<a class="dropdown-toggle d-block" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pots Plants</a>
										 <ul class="list-unstyled text-capitalize border-right border-bottom border-left dropdown-menu mt-0 py-0">
											<li class="d-block mx-0"><a href="index.html">Home 1</a></li>
											<li class="d-block mx-0"><a href="#">Home 2</a></li>
											<li class="d-block mx-0"><a href="#">Home 3</a></li>
										</ul>
									</li>
									 <li class="nav-item dropdown">
										<a class="dropdown-toggle d-block" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Store</a>
										<ul class="list-unstyled text-capitalize border-right border-bottom border-left dropdown-menu mt-0 py-0">
											<li class="d-block mx-0"><a href="#">Shop Left Sidebar</a></li>
											<li class="d-block mx-0"><a href="#">Single Product</a></li>
										</ul>
									</li>
									<li class="nav-item">
										<a class="d-block" href="#">Pots</a>
									</li>
									<li class="nav-item">
										<a class="d-block" href="#">Plants</a>
									</li>
									<li class="nav-item">
										<a class="d-block" href="#">Artificial Plants</a>
									</li>
									<li class="nav-item">
										<a class="d-block" href="#">Pebbles &amp; Boulders</a>
									</li>
									<li class="nav-item">
										<a class="d-block" href="#">Garden Furniture</a>
									</li>
									 <li class="nav-item active dropdown">
										<a class="dropdown-toggle d-block" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services <i class="fa fa-angle-down" aria-hidden="true"></i></a>
										<ul class="list-unstyled text-capitalize border-right border-bottom border-left dropdown-menu mt-0 py-0">
											<li class="d-block mx-0"><a href="#">Landscaping Services</a></li>
											<li class="d-block mx-0"><a href="#">Rooftop Gardening</a></li>
										</ul>
									</li>
									
									 <li class="nav-item dropdown">
										<a class="dropdown-toggle d-block" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog</a>
										<ul class="list-unstyled text-capitalize border-right border-bottom border-left dropdown-menu mt-0 py-0">
											<li class="d-block mx-0"><a href="#">Blog Left Sidebar</a></li>
											<li class="d-block mx-0"><a href="#">Blog Detail</a></li>
										</ul>
									</li>
									<li class="nav-item">
										<a class="d-block" href="#">Garden Tools</a>
									</li>
									 <li class="nav-item active dropdown">
										<a class="dropdown-toggle d-block" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Products <i class="fa fa-angle-down" aria-hidden="true"></i></a>
										<ul class="list-unstyled text-capitalize border-right border-bottom border-left dropdown-menu mt-0 py-0">
											<li class="d-block mx-0"><a href="#">Pots Plants</a></li>
											<li class="d-block mx-0"><a href="#">Pots</a></li>
										</ul>
									</li>
									<li class="nav-item">
										<a class="d-block" href="#">Garden Implements</a>
									</li>
									<li class="nav-item">
										<a class="d-block" href="#">Media &amp; Fertilizer</a>
									</li>
									<li class="nav-item">
										<a class="d-block" href="#">Planting Bags &amp; Accessories</a>
									</li>
								</ul>
							</div>
						</nav>
						 <div class="logo">
							<a href="index.html"><img src="images/logo.png" alt="" class="img-fluid"></a>
						</div>
					</div>
				</div>
			</div>
		</header>
		 <!--main -->

            @yield('content')