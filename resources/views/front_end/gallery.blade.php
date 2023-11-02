<x-userHeader />
<main>
<section class="introBannerHolder d-flex w-100 bgCover" style="background-image: url({{ asset('front_end/images/b-bg7.jpg')}});">
    <div class="container">
        <div class="row">
            <div class="col-12 pt-sm-10 text-center">
                <h1 class="headingIV fwEbold playfair mb-4">Gallery</h1>
                <ul class="list-unstyled breadCrumbs d-flex justify-content-center">
                    <li class="mr-2"><a href="#">Home</a></li>
                    <li class="mr-2">/</li>
                    <li class="active">Gallery</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="gallery-sec">
    <div class="container">
        <div class="row">
            @foreach ($galleries as $gallery)
            <div class="col-md-4">
                <div class="gallery-img">
                    <a href="{{ asset('admin/gallery/'.$gallery->img) }}" data-fancybox="gallery"><img alt="Gallery picture #1"
                            src="{{ asset('admin/gallery/'.$gallery->img) }}"></a>
                </div>
            </div>
            @endforeach
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