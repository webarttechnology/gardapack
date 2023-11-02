<x-userHeader />

@include('front_end.commons.session-msg')

<main>
    <!-- introBannerHolder -->
    <section class="introBannerHolder d-flex w-100 bgCover" style="background-image: url({{ asset('front_end/images/b-bg7.jpg')}} );">
        <div class="container">
            
            <div class="row">
                <div class="col-12 pt-sm-10 text-center">
                    <h1 class="headingIV fwEbold playfair mb-4">Profile</h1>
                    <ul class="list-unstyled breadCrumbs d-flex justify-content-center">
                        <li class="mr-2"><a href="{{ url('/') }}">Home</a></li>
                        <li class="mr-2">/</li>
                        <li class="mr-2"><a href="#">My Account</a></li>
                        <li class="mr-2">/</li>
                        <li class="active">Edit Profile</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

<section class="my-account">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="dashboard">
                    <div class="user-icon">
                        <i class="bi bi-person"></i>
                    </div>
                    <div class="h-user">
                        <h4>{{ Auth::user()->name }}</h4>
                    </div>
                    <div class="d-board">
                        <ul>
                            <li><a href="{{ url('my-account') }}"><i class="bi bi-pencil-square"></i>Edit Profile</a></li>
                            <li><a href="{{ url('change-password') }}"><i class="fa fa-unlock-alt" aria-hidden="true"></i>Change
                                    Password</a>
                            <li><a href="{{ url('order-history') }}"><i class="bi bi-bag-check-fill"></i>Order History</a></li>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="p-edit">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="prfl-head">
                                <h3>Edit Profile</h3>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="p-form">

                                <form action="{{ url('edit-profile-action') }}" method="post">
                                    @csrf

                                    <div class="p-input">
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <label for="">Name</label>
                                                <input type="text" class="form-control" name="name" value="{{ Auth::user()->name }}" placeholder="Name">
                                                @if ($errors->has('name'))
                                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                                @endif
                                            </div>
                                            <div class="col-md-6">
                                                <label for="">Email</label> 
                                                <input type="email" class="form-control" name="email" value="{{ Auth::user()->email }}" placeholder="Emil">
                                                @if ($errors->has('email'))
                                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                                @endif
                                            </div>
                                        </div>


                                        {{-- <div class="row mb-3">
                                            <div class="col-md-6">
                                                <label for="">Address</label>
                                                <input type="text" class="form-control" placeholder="Adress">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="">Phone No.</label>
                                                <input type="text" class="form-control" placeholder="Phone No.">
                                            </div>
                                        </div> --}}
                                        {{-- <div class="row mb-3">
                                            <div class="col-md-6">
                                                <label for="">Name</label>
                                                <input type="text" class="form-control" placeholder="Adress">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="">Name</label>
                                                <input type="text" class="form-control" placeholder="Phone No.">
                                            </div>
                                        </div> --}}

                                        <div class="row mb-3">
                                            <div class="col-md-12">
                                                <label for="">Phone</label>
                                                <input type="text" class="form-control" placeholder="Phone Number" value="{{ Auth::user()->phone }}" name="phone" required>
                                                @if ($errors->has('phone'))
                                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-md-12">
                                                <label for="">Address</label>
                                                <textarea class="form-control text-light" name="address" id="address" cols="30" rows="10" placeholder="Enter Your Address" required>{{ Auth::user()->address }}</textarea>
                                                @if ($errors->has('address'))
                                                <span class="text-danger">{{ $errors->first('address') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        
                                        <div class="row text-center">
                                            <div class="col-md-12">
                                                <div class="s-button">
                                                    <button class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>



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
						</ul>
					</div>

					
				</div>
			</aside>


</main>

<x-userFooter />