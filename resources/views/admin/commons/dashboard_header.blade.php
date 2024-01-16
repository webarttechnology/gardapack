@php
           $app_logo = App\Models\Settings::where('key', 'app_logo')->first();
           $app_name = App\Models\Settings::where('key', 'app_name')->first();
           $fab_icon = App\Models\Settings::where('key', 'fab_icon')->first();

		   $details = App\Models\Admin::whereId(Auth::guard('admin')->user()->id)->first();
		   $currentUrl = url()->current();
@endphp

<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->

	@if($fab_icon != null)
	@if($fab_icon->input_type == "Text")
		{{ $fab_icon->value }}
	@else
	<link rel="icon" href="{{asset('settings/'.$fab_icon->key.'/'.$fab_icon->value)}}" type="image/png" />
	@endif
	@else
	<link rel="icon" href="{{asset('images/webart.png')}}" type="image/png" />
	@endif

	<!--plugins-->
	<link href="{{asset('assets_old/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
	<link href="{{asset('assets_old/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
	<link href="{{asset('assets_old/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
	<link href="{{asset('assets_old/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" />
	<!-- loader-->
	<link href="{{asset('assets_old/css/pace.min.css')}}" rel="stylesheet" />
	<script src="{{asset('assets_old/js/pace.min.js')}}"></script>
	<!-- Bootstrap CSS -->
	<link href="{{asset('assets_old/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('assets_old/css/app.css')}}" rel="stylesheet">
	<link href="{{asset('assets_old/css/icons.css')}}" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="{{asset('assets_old/css/dark-theme.css')}}" />
	<link rel="stylesheet" href="{{asset('assets_old/css/semi-dark.css')}}" />
	<link rel="stylesheet" href="{{asset('assets_old/css/header-colors.css')}}" />

	<!-- toaster -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0- 
     alpha/css/bootstrap.css"
        rel="stylesheet">
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>


	<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
	
	<title>
	@if($app_name != null)
		{{ $app_name->value }}
	@else
	     WebArt Technology
	@endif
	</title>

	<style>
		.bxs-up-arrow-alt:before{
			color: white !important;
		}

		/* Back to Top Button Styles */
		.back-to-top {
			position: fixed;
			bottom: 20px;
			right: 20px;
			display: none;
			font-size: 24px;
			color: #070707; /* Change the color as needed */
			cursor: pointer;
			z-index: 99;
		}

		.back-to-top:hover{
			border: 1px solid #0d6efd;
			background-color: white;
		}

		.back-to-top:hover .bxs-up-arrow-alt:before{
			color: #0d6efd !important;
		}

		.activate {
			background-color: #0d6efd; /* Change the background color as needed */
		}

		.active_div{
			color: white;
		}
		/* .active_text{
			color: white;
		} */
	</style>
</head>

<body>

	<!-- Start Back To Top Button -->
	<a href="javascript:;" class="back-to-top" id="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
	<!-- End Back To Top Button -->

	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
		<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div>
					@if($app_logo != null)
			    	@if($app_logo->input_type == "Text")
                       {{ $app_logo->value }}
					@else
					<img src="{{asset('settings/'.$app_logo->key.'/'.$app_logo->value)}}" class="logo-icon" alt="logo icon" style="width: 160px !important">
					@endif
					@else
					<img src="{{asset('images/webart.png')}}" class="logo-icon" alt="logo icon">
					@endif
				</div>
				{{-- <div>
					@if($app_name != null)
			    	@if($app_name->input_type == "Text")
                      <h4 class="logo-text">{{ $app_name->value }}</h4>
					@else
					<img src="{{asset('settings/'.$app_name->key.'/'.$app_name->value)}}" class="logo-icon" alt="logo icon">
					@endif
					@else
					<h4 class="logo-text">WebArt Technology Pvt. Ltd.</h4>
					@endif
				</div> --}}
				{{-- <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
				</div> --}}
			</div>
			<!--navigation-->
			<ul class="metismenu" id="menu">
				<li @if(Str::contains($currentUrl, 'dashboard')) class="activate" @endif>
					<a href="{{ url('admin/dashboard') }}">
						<div class="parent-icon @if(Str::contains($currentUrl, 'dashboard')) active_div @endif"><i class='bx bx-home-circle'></i>
						</div>
						<div class="menu-title @if(Str::contains($currentUrl, 'dashboard')) active_div @endif">Dashboard</div>
					</a>
				</li>
				
				
				<!-- <li class="menu-label">UI Elements</li> -->
				
			
				
				<li>
					<a href="{{url('admin/user-lists')}}" @if(Str::contains($currentUrl, 'user')) class="activate" @endif>
						<div class="parent-icon @if(Str::contains($currentUrl, 'user')) active_div @endif"><i class="bx bx-user-circle"></i>
						</div>
						<div class="menu-title @if(Str::contains($currentUrl, 'user')) active_div @endif">User Profile</div>
					</a>
					<!--<a href="{{url('admin/admin-lists')}}">-->
					<!--	<div class="parent-icon"><i class="bx bx-user-circle"></i>-->
					<!--	</div>-->
					<!--	<div class="menu-title">Admin Profile</div>-->
					<!--</a>-->
					<a href="{{ url('admin/wholesaler/lists') }}" @if(Str::contains($currentUrl, 'wholesaler')) class="activate" @endif>
						<div class="parent-icon @if(Str::contains($currentUrl, 'wholesaler')) active_div @endif"><i class="bx bx-user-circle"></i>
						</div>
						<div class="menu-title @if(Str::contains($currentUrl, 'wholesaler')) active_div @endif">Wholeseller</div>
					</a>
					<a href="{{ route('shops.lists') }}" @if(Str::contains($currentUrl, 'shops')) class="activate" @endif>
						<div class="parent-icon @if(Str::contains($currentUrl, 'shops')) active_div @endif"><i class="bx bx-user-circle"></i>
						</div>
						<div class="menu-title @if(Str::contains($currentUrl, 'shops')) active_div @endif">Retailer Shops</div>
					</a>
				</li>
				
				 <!-- Order Management -->
				<li class="menu-label">Order</li>
				
				<li>
					<ul>
                         <li @if(Str::contains($currentUrl, 'order')) class="activate" @endif> 
							<a href="{{ url('admin/order/list') }}">
								<i class="bx bx-right-arrow-alt @if(Str::contains($currentUrl, 'order')) active_div @endif"></i> 
								<span @if(Str::contains($currentUrl, 'order')) class='active_div' @endif>Orders</span>
							</a>
						</li>
					</ul>
				</li>
				<!-- -->

				<li class="menu-label">Pages</li>
				<li>
					<ul>
                    <li @if(Str::contains($currentUrl, 'pages')) class="activate" @endif> 
						<a href="{{url('admin/pages-lists')}}">
						<i class="bx bx-right-arrow-alt @if(Str::contains($currentUrl, 'pages')) active_div @endif"></i>
						<span @if(Str::contains($currentUrl, 'pages')) class='active_div' @endif>Pages</span></a>
					</li>
					</ul>
				</li>
				
				<li class="menu-label">Menu Bar Manage</li>
				<li>
					<ul>
                    <li @if(Str::contains($currentUrl, 'menu')) class="activate" @endif> 
						<a href="{{ url('admin/menu/list') }}">
							<i class="bx bx-right-arrow-alt @if(Str::contains($currentUrl, 'menu')) active_div @endif"></i>
							<span @if(Str::contains($currentUrl, 'menu')) class='active_div' @endif>Menu Bars</span></a></li>
					</ul>
				</li>

				<li class="menu-label">Blogs</li>
				<li>
					<ul>
                    <li @if(Str::contains($currentUrl, 'blog')) class="activate" @endif> 
						<a href="{{ url('admin/blog') }}">
							<i class="bx bx-right-arrow-alt @if(Str::contains($currentUrl, 'blog')) active_div @endif"></i>
							<span @if(Str::contains($currentUrl, 'blog')) class='active_div' @endif>Blogs</span></a></li>
					</ul>
				</li>

				<li class="menu-label">Shipping Options</li>
				<li>
					<ul>
                    <li @if(Str::contains($currentUrl, 'shipping')) class="activate" @endif> 
						<a href="{{ url('admin/shipping/list') }}">
							<i class="bx bx-right-arrow-alt @if(Str::contains($currentUrl, 'shipping')) active_div @endif"></i>
							<span @if(Str::contains($currentUrl, 'shipping')) class='active_div' @endif>Shipping</span></a></li>
					</ul>
				</li>
				
				
				<!-- gallery --> 
				<!--<li class="menu-label">Gallery</li>-->
				<!--<li>-->
				<!--	<ul>-->
				<!--	<li> <a href="{{ url('admin/gallery/list') }}"><i class="bx bx-right-arrow-alt"></i>Gallery List</a></li>-->
    <!--                <li> <a href="{{ url('admin/gallery/page') }}"><i class="bx bx-right-arrow-alt"></i>Add Gallery</a></li>-->
				<!--	</ul>-->
				<!--</li>-->

				<li class="menu-label">Products</li>
				
				<li>
					<ul>
                    <li @if(Str::contains($currentUrl, 'categories')) class="activate" @endif> <a href="{{ url('admin/categories/lists', 'categories') }}">
						<i class="bx bx-right-arrow-alt @if(Str::contains($currentUrl, 'menu')) active_div @endif"></i><span @if(Str::contains($currentUrl, 'categories')) class='active_div' @endif>All Categories</span></a></li>
					{{-- <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>All Sub-Categories</a></li> --}}
					
				
					 <li @if(Str::contains($currentUrl, 'product/lists') || Str::contains($currentUrl, 'product/update')) class="activate" @endif> 
						<a href="{{ url('admin/product/lists') }}">
							<i class="bx bx-right-arrow-alt @if(Str::contains($currentUrl, 'product/lists') || Str::contains($currentUrl, 'product/update')) active_div @endif"></i>
							<span @if(Str::contains($currentUrl, 'product/lists') || Str::contains($currentUrl, 'product/update')) class='active_div' @endif>All Products</span>
						</a>
					</li>

					<li @if(Str::contains($currentUrl, 'product/add')) class="activate" @endif> <a href="{{ url('admin/product/add') }}"><i class="bx bx-right-arrow-alt @if(Str::contains($currentUrl, 'product/add')) active_div @endif"></i><span @if(Str::contains($currentUrl, 'product/add')) class='active_div' @endif>Add New Products</span></a></li>
					 <li @if(Str::contains($currentUrl, 'stock/page')) class="activate" @endif> <a href="{{ url('admin/stock/page', 'in-stock') }}"><i class="bx bx-right-arrow-alt @if(Str::contains($currentUrl, 'stock/page')) active_div @endif"></i><span @if(Str::contains($currentUrl, 'stock/page')) class='active_div' @endif>Manage Stocks</span></a></li>
					 <!--<li> <a href="{{ url('admin/product/request/page') }}"><i class="bx bx-right-arrow-alt"></i>Product Requests</a></li>-->
					</ul>
				</li>


               
				
                <!-- Stock Manage -->
				<!--<li class="menu-label">Stock Manage</li>-->
				<!--<li>-->
				<!--	<ul>-->
    <!--                <li> <a href="{{ url('admin/stock/page', 'in-stock') }}"><i class="bx bx-right-arrow-alt"></i>Manage Stocks</a></li>-->
				<!--	</ul>-->
				<!--</li>-->
				
				<!--<li class="menu-label">Services</li>-->
				
				<!--<li>-->
				<!--	<ul>-->
				<!--	<li> <a href="{{ url('admin/categories/lists', 'service') }}"><i class="bx bx-right-arrow-alt"></i>All Categories</a></li>-->
    <!--                <li> <a href="{{ url('admin/services/all') }}"><i class="bx bx-right-arrow-alt"></i>All Services</a></li>-->
				<!--	<li> <a href="{{ url('admin/services/add/page') }}"><i class="bx bx-right-arrow-alt"></i>Add New Service</a></li>-->
				<!--	</ul>-->
				<!--</li>-->
				
				
				<!-- Download Pdf -->
				<!--<li class="menu-label">Download PDF</li>-->
				<!--<li>-->
				<!--	<ul>-->
				<!--		<li> <a href="{{ url('admin/pdf/list') }}"><i class="bx bx-right-arrow-alt"></i>All Pdf</a></li>-->
				<!--		<li> <a href="{{ url('admin/pdf/add') }}"><i class="bx bx-right-arrow-alt"></i>Add Pdf</a></li>-->
				<!--	</ul>-->
				<!--</li>-->
				
				<!-- Video Banner -->
				<!--<li class="menu-label">Video Banner</li>-->
				<!--<li>-->
				<!--	<ul>-->
				<!--		<li> <a href="{{ url('admin/video/banner/page') }}"><i class="bx bx-right-arrow-alt"></i>Video</a></li>-->
				<!--	</ul>-->
				<!--</li>-->
				
				<!-- Why Choose Us -->
				<!--<li class="menu-label">Why Choose Us</li>-->
				<!--<li>-->
				<!--	<ul>-->
				<!--		<li> <a href="{{ url('admin/others/choose-page') }}"><i class="bx bx-right-arrow-alt"></i>Why Choose Us</a></li>-->
				<!--	</ul>-->
				<!--</li>-->

                <!-- course -->
				<!--<li class="menu-label">Course</li>-->
				<!--<li>-->
				<!--	<ul>-->
    <!--                <li> <a href="{{ url('admin/course/list') }}"><i class="bx bx-right-arrow-alt"></i>Course Lists</a></li>-->
				<!--	<li> <a href="{{ url('admin/course/add') }}"><i class="bx bx-right-arrow-alt"></i>Add Course</a></li>-->
				<!--	</ul>-->
				<!--</li>-->
			
			    <!-- faq -->
				<li class="menu-label">FAQ</li>
				<li>
					<ul>
                    <li @if(Str::contains($currentUrl, 'faq/list') || Str::contains($currentUrl, 'faq/update')) class="activate" @endif> <a href="{{ url('admin/faq/list') }}"><i class="bx bx-right-arrow-alt @if(Str::contains($currentUrl, 'faq/list') || Str::contains($currentUrl, 'faq/update')) active_div @endif"></i><span @if(Str::contains($currentUrl, 'faq/list') || Str::contains($currentUrl, 'faq/update')) class='active_div' @endif>FAQ Lists</span></a></li>
					<li @if(Str::contains($currentUrl, 'faq/add')) class="activate" @endif> <a href="{{ url('admin/faq/add/page') }}"><i class="bx bx-right-arrow-alt @if(Str::contains($currentUrl, 'faq/add')) active_div @endif"></i><span @if(Str::contains($currentUrl, 'faq/add')) class='active_div' @endif>Add FAQ</span></a></li>
					</ul>
				</li>
				
				<li class="menu-label">Testimonial</li>
				<li>
					<ul>
                    <li @if(Str::contains($currentUrl, 'testimonial/list') || Str::contains($currentUrl, 'testimonial/update')) class="activate" @endif> <a href="{{ url('admin/testimonial/list') }}"><i class="bx bx-right-arrow-alt @if(Str::contains($currentUrl, 'testimonial/list') || Str::contains($currentUrl, 'testimonial/update')) active_div @endif"></i><span @if(Str::contains($currentUrl, 'testimonial/list') || Str::contains($currentUrl, 'testimonial/update')) class='active_div' @endif>Lists</span></a></li>
					<li @if(Str::contains($currentUrl, 'testimonial/add')) class="activate" @endif> <a href="{{ url('admin/testimonial/add/page') }}"><i class="bx bx-right-arrow-alt @if(Str::contains($currentUrl, 'testimonial/add')) active_div @endif"></i><span @if(Str::contains($currentUrl, 'testimonial/add')) class='active_div' @endif>Add New</span></a></li>
					</ul>
				</li>
				
				<!-- newsletter -->
				<!--<li class="menu-label">Newsletter</li>-->
				<!--<li>-->
				<!--	<ul>-->
    <!--                <li> <a href="{{ url('admin/newsletter') }}"><i class="bx bx-right-arrow-alt"></i>Newsletter</a></li>-->
				<!--	</ul>-->
				<!--</li>-->
				
				
				<!-- User's Message -->
				<!--<li class="menu-label">User's Message</li>-->
				<!--<li>-->
				<!--	<ul>-->
    <!--                <li> <a href="{{ url('admin/user-msg') }}"><i class="bx bx-right-arrow-alt"></i>User's Message</a></li>-->
				<!--	</ul>-->
				<!--</li>-->

				@php
                    $options = App\Models\SettingsOptions::all();
				@endphp

				<li class="menu-label">Settings</li>
				<li>
					<ul>
					<li @if(Str::contains($currentUrl, 'settings/options/lists') || Str::contains($currentUrl, 'settings/options/update')) class="activate" @endif><a href="{{url('admin/settings/options/lists')}}"><i class="bx bx-right-arrow-alt @if(Str::contains($currentUrl, 'settings/options/lists') || Str::contains($currentUrl, 'settings/options/update')) active_div @endif"></i><span @if(Str::contains($currentUrl, 'settings/options/lists') || Str::contains($currentUrl, 'settings/options/update')) class='active_div' @endif>Manage Settings</span></a></li>
					@foreach($options as $option)
                    <li @if(Str::contains($currentUrl, $option->settings_key)) class="activate" @endif> <a href="{{url('admin/settings/page', $option->settings_key)}}"><i class="bx bx-right-arrow-alt @if(Str::contains($currentUrl, $option->settings_key)) active_div @endif"></i><span @if(Str::contains($currentUrl, $option->settings_key)) class='active_div' @endif>{{ $option->name }}</span></a></li>
					@endforeach
					
					<li @if(Str::contains($currentUrl, 'website/footer')) class="activate" @endif> <a href="{{ url('admin/website/footer/page') }}"><i class="bx bx-right-arrow-alt @if(Str::contains($currentUrl, 'website/footer')) active_div @endif"></i><span @if(Str::contains($currentUrl, 'website/footer')) class='active_div' @endif>Website Footer</span></a></li>
				</ul>
				</li>
				
				<li>
					<ul>
                         <li> <a href="{{url('admin/logout')}}"><i class="bx bx-log-out-circle"></i>Logout</a></li>
					</ul>
				</li>
			</ul>
			<!--end navigation-->
		</div>
		<!--end sidebar wrapper -->
		<!--start header -->
		<header>
			<div class="topbar d-flex align-items-center">
				<nav class="navbar navbar-expand">
					<div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
					</div>
					
					<div class="top-menu ms-auto">
						<ul class="navbar-nav align-items-center">
							<li class="nav-item mobile-search-icon">
								<a class="nav-link" href="#">	<i class='bx bx-search'></i>
								</a>
							</li>

							@if($details->type == "admin")

							@php
								  $notifications = Illuminate\Support\Facades\DB::table('admins')
                                                 ->join('notifications', 'admins.id', '=', 'notifications.sub_admin_id')
												 ->where('notifications.status', 'unread')
												 ->select('notifications.*', 'admins.first_name')
												 ->get();

								  $total_notification = count(App\Models\Notification::whereStatus('unread')->get());
							@endphp

							
							<li class="nav-item dropdown dropdown-large">
								<!--<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span class="alert-count"> {{ $total_notification }} </span>-->
								<!--	<i class='bx bx-bell'></i>-->
								<!--</a>-->
								<div class="dropdown-menu dropdown-menu-end">
									<a href="javascript:;">
										<div class="msg-header">
											<p class="msg-header-title">Notifications</p>
											<a href="{{ url('admin/mark/all/notifications') }}" class="msg-header-clear ms-auto">Marks all as read</a>
										</div>
									</a>

									<div class="header-notifications-list">

									    @foreach($notifications as $notification)
										
													<a class="dropdown-item" href="javascript:;">
													<div class="d-flex align-items-center">
														<div class="notify 
														           @if($notification->action =='Add') bg-light-primary @else bg-light-success @endif 
														           @if($notification->action =='Add') text-primary  @else text-success @endif">
														<i class="@if($notification->action_with =='Page') bx bx-file @elseif($notification->action_with =='Settings') bx bx-cog @else bx bx-group @endif"></i>
														</div>
														<div class="flex-grow-1">
															<h6 class="msg-name">{{ ucfirst($notification->first_name) }} {{ $notification->action }} A {{ ucfirst($notification->action_with) }}
																<span class="msg-time float-end">{{ \Carbon\Carbon::parse($notification->created_at)->diffForHumans() }}
														ago</span></h6>
														</div>
													</div>
												   </a>										 
										   
										@endforeach				
										
									</div>
									<a href="javascript:;">
										<div class="text-center msg-footer">View All Notifications</div>
									</a>
								</div>
							</li>
							@endif


						</ul>
					</div>
					<div class="user-box dropdown">
						<a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							<!-- <img src="asset('assets_old/images/avatars/avatar-2.png')}}" class="user-img" alt="user avatar"> -->
							
							@if($details->profile_img != null)
							<img src="{{asset('admin/profile_img/'.$details->profile_img)}}" class="user-img" alt="user avatar">
							@else
							<img src="{{asset('pages/featured_img/no_imge_found.jpg')}}" class="user-img" alt="user avatar">
							@endif

							<!-- <img src="{{asset('images/webart.png')}}" class="user-img" alt="user avatar"> -->
							<div class="user-info ps-3">
								<p class="user-name mb-0">{{ Auth::guard('admin')->user()->first_name." ".Auth::guard('admin')->user()->last_name }}</p>
								
								@if(Auth::guard('admin')->user()->type == "admin")
								<p class="designattion mb-0">Admin</p>
								@else
								<p class="designattion mb-0">Sub Admin</p>
								@endif
								
							</div>
						</a>
						<ul class="dropdown-menu dropdown-menu-end">
							<li><a class="dropdown-item" href="{{ url('admin/dashboard') }}"><i class='bx bx-home-circle'></i><span>Dashboard</span></a>
							</li>
							<li>
								<div class="dropdown-divider mb-0"></div>
							</li>
							<li><a class="dropdown-item" href="{{ url('admin/view/your/profile') }}"><i class='bx bx-user-circle'></i><span>Your Profile</span></a>
							</li>
							<li>
								<div class="dropdown-divider mb-0"></div>
							</li>
							<li><a class="dropdown-item" href="{{ url('admin/change/password') }}"><i class='bx bx-cog'></i><span>Change Password</span></a>
							</li>
							<li>
								<div class="dropdown-divider mb-0"></div>
							</li>
							<li><a class="dropdown-item" href="{{url('admin/logout')}}"><i class='bx bx-log-out-circle'></i><span>Logout</span></a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</header>
		<!--end header -->

            @yield('content')

        <!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<footer class="page-footer">
			<p class="mb-0">Copyright © 2023. All right reserved.</p>
		</footer>
	</div>
	<!--end wrapper-->
	<!-- Bootstrap JS -->
	<script src="{{asset('assets_old/js/bootstrap.bundle.min.js')}}"></script>
	<!--plugins-->
	<script src="{{asset('assets_old/js/jquery.min.js')}}"></script>
	<script src="{{asset('assets_old/plugins/simplebar/js/simplebar.min.js')}}"></script>
	<script src="{{asset('assets_old/plugins/metismenu/js/metisMenu.min.js')}}"></script>
	<script src="{{asset('assets_old/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
	<script src="{{asset('assets_old/plugins/apexcharts-bundle/js/apexcharts.min.js')}}"></script>
	<script src="{{asset('assets_old/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('assets_old/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>
	<script>
		$(document).ready(function() {
			$('#example').DataTable({
				lengthMenu: [[6, 10, 20, -1], [6, 10, 20, 'Todos']]
			});
		  } );
	</script>
	<script src="{{asset('assets_old/js/dashboard-eCommerce.js')}}"></script>
	<!--app JS-->
	<script src="{{asset('assets_old/js/app.js')}}"></script>
	<script>
		new PerfectScrollbar('.product-list');
		new PerfectScrollbar('.customers-list');
	</script>

	<!-- select2 -->
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
		$(".select2-field").select2();
		});
	</script>

<script>
    toastr.options = {
        "closeButton": true,
        "progressBar": true
    }

    @if (Session::has('success'))
        toastr.success("{{ session('success') }}");
    @endif

    @if (Session::has('error'))
        toastr.error("{{ session('error') }}");
    @endif

    @if (Session::has('login_error'))
        toastr.error("{{ session('login_error') }}");
    @endif

    @if (Session::has('info'))
        toastr.info("{{ session('info') }}");
    @endif

    @if (Session::has('warning'))
        toastr.warning("{{ session('warning') }}");
    @endif

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            toastr.error("{{ $error }}");
        @endforeach
    @endif
</script>

<script>
    $(document).ready(function () {
        // Show or hide the back-to-top button based on scroll position
        $(window).scroll(function () {
            if ($(this).scrollTop() > 30) {
                $('#back-to-top').fadeIn();
            } else {
                $('#back-to-top').fadeOut();
            }
        });

        // Scroll to top on button click
        $('#back-to-top').click(function () {
            $('html, body').animate({ scrollTop: 0 }, 100);
            return false;
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var form = document.querySelector('form');

        form.addEventListener('keydown', function(event) {
            if (event.key === 'Enter' || (event.key === 'Shift' && event.key === 'Enter')) {
                event.preventDefault();
            }
        });
    });
</script>

@yield('custom_js')
</body>

</html>