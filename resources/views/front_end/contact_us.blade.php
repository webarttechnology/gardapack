<x-userHeader />
<main>
    <!-- introBannerHolder -->
    <section class="introBannerHolder d-flex w-100 bgCover" style="background-image: url({{ asset('front_end/images/b-bg7.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-12 pt-sm-10 text-center">
                    <h1 class="headingIV fwEbold playfair mb-4">Contact</h1>
                    <ul class="list-unstyled breadCrumbs d-flex justify-content-center">
                        <li class="mr-2"><a href="{{ url('/') }}">Home</a></li>
                        <li class="mr-2">/</li>
                        <li class="active">Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    @php
         $phone = explode(',', $details->phone); 
         $email = explode(',', $details->email);  
         $address = str_split($details->address, 35);
    @endphp

    <div class="contactSec container pt-xl-24 pb-xl-23 py-lg-20 pt-md-16 pb-md-10 pt-10 pb-0">
        <div class="row">
            <div class="col-12">
                <ul class="list-unstyled contactListHolder mb-0 d-flex flex-wrap text-center">
                    <li class="mb-lg-0 mb-6">
                        <span class="icon d-block mx-auto bg-lightGray py-4 mb-4"><i class="fas fa-map-marker-alt"></i></span>
                        <strong class="title text-uppercase playfair mb-5 d-block">address</strong>
                        
                        @foreach($address as $a)
                        <address class="mb-0">{{ $a }}</address>
                        @endforeach
                    </li>
                    <li class="mb-lg-0 mb-6">
                        <span class="icon d-block mx-auto bg-lightGray py-4 mb-3"><i class="fas fa-headphones"></i></span>
                        <strong class="title text-uppercase playfair mb-5 d-block">phone</strong>

                        @foreach($phone as $p)
                        <a href="tel:{{ $p }}" class="d-block">{{ $p }}</a>
                        @endforeach
                    </li>
                    <li class="mb-lg-0 mb-6">
                        <span class="icon d-block mx-auto bg-lightGray py-5 mb-3"><i class="fas fa-envelope"></i></span>
                        <strong class="title text-uppercase playfair mb-5 d-block">email</strong>
                        
                        @foreach($email as $e)
                        <a href="#" class="d-block">{{ $e }}</a>
                        @endforeach
                        
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- mapHolder -->
    <div class="mapHolder">
        <iframe src="{{ $details->map_link }}" style="border:0;" allowfullscreen="">
        </iframe>
    </div>
    <p>{!! $details->description !!}</p>

    <section class="contactSecBlock container pt-xl-23 pb-xl-24 pt-lg-20 pb-lg-10 pt-md-16 pb-md-8 py-10">
        <div class="row">
            <header class="col-12 mainHeader mb-10 text-center">
                <h1 class="headingIV playfair fwEblod mb-7">Get In Touch</h1>
                <p>Lorem ipsum dolor consectetuer adipiscing elit sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna<br class="d-block"> aliquam erat volutpatcommodo consequat.</p>
            </header>
        </div>
        <div class="row">
            <div class="col-12">
                
                @if(session("contact_success"))
                <script type="text/javascript">
                   toastr.success("{{ session('contact_success') }}");
                </script>
                @endif
                
                <form action="{{ url('contact-us') }}" method="post" class="contactForm">
                     @csrf

                    <div class="d-flex flex-wrap row1 mb-md-1">
                        <div class="form-group coll mb-5">
                            <input type="text" id="name" class="form-control" name="name" placeholder="Your name  *" required>
                            @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        <div class="form-group coll mb-5">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Your email  *" required>
                            @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div class="form-group coll mb-5">
                            <input type="tel" class="form-control" id="tel" name="tel" placeholder="Telephone number  *" required>
                            @if ($errors->has('tel'))
                                    <span class="text-danger">{{ $errors->first('tel') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group w-100 mb-6">
                        <textarea class="form-control" placeholder="Meesage  *" name="message" required></textarea>
                        @if ($errors->has('message'))
                                <span class="text-danger">{{ $errors->first('message') }}</span>
                        @endif
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btnTheme btnShop md-round fwEbold text-white py-3 px-4 py-md-3 px-md-4">Send Message</button>
                    </div>
                </form>
                
                
            </div>
        </div>
    </section>
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
						</ul>
					</div>

					
				</div>
			</aside>
</main>
<x-userFooter />