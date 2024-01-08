@php
           $app_logo = App\Models\Settings::where('key', 'app_logo')->first();
           $app_name = App\Models\Settings::where('key', 'app_name')->first();

		   $details = App\Models\Admin::whereId(Auth::guard('admin')->user()->id)->first();
@endphp

<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->

	@if($app_logo != null)
	@if($app_logo->input_type == "Text")
		{{ $app_logo->value }}
	@else
	<link rel="icon" href="{{asset('settings/'.$app_logo->key.'/'.$app_logo->value)}}" type="image/png" />
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


	<title>
	@if($app_name != null)
		{{ $app_name->value }}
	@else
	     WebArt Technology
	@endif
	</title>
</head>

<body>

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
					<img src="{{asset('settings/'.$app_logo->key.'/'.$app_logo->value)}}" class="logo-icon" alt="logo icon">
					@endif
					@else
					<img src="{{asset('images/webart.png')}}" class="logo-icon" alt="logo icon">
					@endif
				</div>
				<div>
					@if($app_name != null)
			    	@if($app_name->input_type == "Text")
                      <h4 class="logo-text">{{ $app_name->value }}</h4>
					@else
					<img src="{{asset('settings/'.$app_name->key.'/'.$app_name->value)}}" class="logo-icon" alt="logo icon">
					@endif
					@else
					<h4 class="logo-text">WebArt Technology Pvt. Ltd.</h4>
					@endif
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
				</div>
			</div>
			<!--navigation-->
			<ul class="metismenu" id="menu">
				<li>
					<a href="{{ url('admin/dashboard') }}" class="has-arrow">
						<div class="parent-icon"><i class='bx bx-home-circle'></i>
						</div>
						<div class="menu-title">Dashboard</div>
					</a>
				</li>
				
				
				<!-- <li class="menu-label">UI Elements</li> -->
				
			
				
				<li>
					<a href="{{url('admin/user-lists')}}">
						<div class="parent-icon"><i class="bx bx-user-circle"></i>
						</div>
						<div class="menu-title">User Profile</div>
					</a>
					<a href="{{url('admin/admin-lists')}}">
						<div class="parent-icon"><i class="bx bx-user-circle"></i>
						</div>
						<div class="menu-title">Admin Profile</div>
					</a>
					<a href="{{ url('admin/wholesaler/lists') }}">
						<div class="parent-icon"><i class="bx bx-user-circle"></i>
						</div>
						<div class="menu-title">Wholesaller</div>
					</a>
					<a href="{{ route('shops.lists') }}">
						<div class="parent-icon"><i class="bx bx-user-circle"></i>
						</div>
						<div class="menu-title">Retailer Shops</div>
					</a>
				</li>

				<!-- Order Management -->
				<li class="menu-label">Order</li>
				
				<li>
					<ul>
                         <li> <a href="{{ url('admin/order/list') }}"><i class="bx bx-right-arrow-alt"></i>Orders</a></li>
					</ul>
				</li>

				<li class="menu-label">Pages</li>
				<li>
					<ul>
                    <li> <a href="{{url('admin/pages-lists')}}"><i class="bx bx-right-arrow-alt"></i>Pages</a></li>
					</ul>
				</li>

				<li class="menu-label">Menubar Manage</li>
				<li>
					<ul>
                    <li> <a href="{{ url('admin/menu/list') }}"><i class="bx bx-right-arrow-alt"></i>Menubars</a></li>
					</ul>
				</li>
				
				
				
				
				<!-- gallery --> 
				{{-- <li class="menu-label">Gallery</li>
				<li>
					<ul>
					<li> <a href="{{ url('admin/gallery/list') }}"><i class="bx bx-right-arrow-alt"></i>Gallery List</a></li>
                    <li> <a href="{{ url('admin/gallery/page') }}"><i class="bx bx-right-arrow-alt"></i>Add Gallery</a></li>
					</ul>
				</li> --}}

				<li class="menu-label">Products</li>
				
				<li>
					<ul>
                    <li> <a href="{{ url('admin/categories/lists', 'product') }}"><i class="bx bx-right-arrow-alt"></i>All Categories</a></li>
					{{-- <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>All Sub-Categories</a></li> --}}
					<li> <a href="{{ url('admin/product/lists') }}"><i class="bx bx-right-arrow-alt"></i>All Products</a></li>
					<li> <a href="{{ url('admin/product/add') }}"><i class="bx bx-right-arrow-alt"></i>Add New Products</a></li>
					 <li> <a href="{{ url('admin/stock/page', 'in-stock') }}"><i class="bx bx-right-arrow-alt"></i>Manage Stocks</a></li>
					 {{-- <li> <a href="{{ url('admin/product/request/page') }}"><i class="bx bx-right-arrow-alt"></i>Product Requests</a></li> --}}
					</ul>
				</li>


                
				<!-- -->
				
                <!-- Stock Manage -->
				<!--<li class="menu-label">Stock Manage</li>-->
				<!--<li>-->
				<!--	<ul>-->
    <!--                <li> <a href="{{ url('admin/stock/page', 'in-stock') }}"><i class="bx bx-right-arrow-alt"></i>Manage Stocks</a></li>-->
				<!--	</ul>-->
				<!--</li>-->
				
				{{-- <li class="menu-label">Services</li>
				
				<li>
					<ul>
					<li> <a href="{{ url('admin/categories/lists', 'service') }}"><i class="bx bx-right-arrow-alt"></i>All Categories</a></li>
                    <li> <a href="{{ url('admin/services/all') }}"><i class="bx bx-right-arrow-alt"></i>All Services</a></li>
					<li> <a href="{{ url('admin/services/add/page') }}"><i class="bx bx-right-arrow-alt"></i>Add New Service</a></li>
					</ul>
				</li> --}}
				
				
				<!-- Download Pdf -->
				{{-- <li class="menu-label">Download PDF</li>
				<li>
					<ul>
						<li> <a href="{{ url('admin/pdf/list') }}"><i class="bx bx-right-arrow-alt"></i>All Pdf</a></li>
						<li> <a href="{{ url('admin/pdf/add') }}"><i class="bx bx-right-arrow-alt"></i>Add Pdf</a></li>
					</ul>
				</li> --}}
				
				<!-- Video Banner -->
				{{-- <li class="menu-label">Video Banner</li>
				<li>
					<ul>
						<li> <a href="{{ url('admin/video/banner/page') }}"><i class="bx bx-right-arrow-alt"></i>Video</a></li>
					</ul>
				</li> --}}
				
				<!-- Why Choose Us -->
				{{-- <li class="menu-label">Why Choose Us</li>
				<li>
					<ul>
						<li> <a href="{{ url('admin/others/choose-page') }}"><i class="bx bx-right-arrow-alt"></i>Why Choose Us</a></li>
					</ul>
				</li> --}}

                <!-- course -->
				{{-- <li class="menu-label">Course</li>
				<li>
					<ul>
                    <li> <a href="{{ url('admin/course/list') }}"><i class="bx bx-right-arrow-alt"></i>Course Lists</a></li>
					<li> <a href="{{ url('admin/course/add') }}"><i class="bx bx-right-arrow-alt"></i>Add Course</a></li>
					</ul>
				</li> --}}
			
			    <!-- faq -->
				<li class="menu-label">FAQ</li>
				<li>
					<ul>
                    <li> <a href="{{ url('admin/faq/list') }}"><i class="bx bx-right-arrow-alt"></i>FAQ Lists</a></li>
					<li> <a href="{{ url('admin/faq/add/page') }}"><i class="bx bx-right-arrow-alt"></i>Add FAQ</a></li>
					</ul>
				</li>

				<li class="menu-label">Testimonial</li>
				<li>
					<ul>
                    <li> <a href="{{ url('admin/testimonial/list') }}"><i class="bx bx-right-arrow-alt"></i>Lists</a></li>
					<li> <a href="{{ url('admin/testimonial/add/page') }}"><i class="bx bx-right-arrow-alt"></i>Add New</a></li>
					</ul>
				</li>
				
				<!-- newsletter -->
				{{-- <li class="menu-label">Newsletter</li>
				<li>
					<ul>
                    <li> <a href="{{ url('admin/newsletter') }}"><i class="bx bx-right-arrow-alt"></i>Newsletter</a></li>
					</ul>
				</li> --}}
				
				
				<!-- User's Message -->
				{{-- <li class="menu-label">User's Message</li>
				<li>
					<ul>
                    <li> <a href="{{ url('admin/user-msg') }}"><i class="bx bx-right-arrow-alt"></i>User's Message</a></li>
					</ul>
				</li> --}}

				@php
                    $options = App\Models\SettingsOptions::all();
				@endphp

				<li class="menu-label">Settings</li>
				<li>
					<ul>
					<li><a href="{{url('admin/settings/options/lists')}}"><i class="bx bx-right-arrow-alt"></i>Manage Settings</a></li>
					@foreach($options as $option)
                    <li> <a href="{{url('admin/settings/page', $option->settings_key)}}"><i class="bx bx-right-arrow-alt"></i>{{ $option->name }}</a></li>
					@endforeach
                    
					<li> <a href="{{ url('admin/website/footer/page') }}"><i class="bx bx-right-arrow-alt"></i>Website Footer</a></li>
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
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span class="alert-count"> {{ $total_notification }} </span>
									<i class='bx bx-bell'></i>
								</a>
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
@yield('custom_js')

</body>

</html>