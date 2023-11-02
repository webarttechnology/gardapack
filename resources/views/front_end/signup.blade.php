<x-userHeader />
<main>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
         integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
         crossorigin="anonymous">
         
         
   @include('front_end.commons.session-msg')

    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-9">
                    <div class="loginsec" id="loginsec">
         <div class="form-loginsec sign-up-loginsec">

            <form action="{{ route('user.register.action') }}" method="post">
               @csrf

               <h1>Create Account</h1>

               <input type="text" placeholder="Name" name="name" />
               @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
               @endif

               <input type="email" placeholder="Email" name="email" />
               @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
               @endif

               <input type="password" placeholder="Password" name="password" />
               @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
               @endif

               <button>Sign Up</button>
            </form>
         </div>
         <div class="form-loginsec sign-in-loginsec">
            <form action="{{ route('user.login.action') }}" method="post">
               @csrf

               <h1>Sign in</h1>
               <span>or use your account</span>
               <input type="email" placeholder="Email" name="email" />
               <input type="password" placeholder="Password" name="password"/>
               <a href="{{ url('forgot-password') }}">Forgot your password?</a>
               <button type="submit">Sign In</button>
            </form>
         </div>
         <div class="overlay-loginsec">
            <div class="overlay">
               <div class="overlay-panel overlay-left">
                  <h1>Welcome Back!</h1>
                  <p>To keep connected with us please login with your personal info</p>
                  <button class="ghost" id="signIn">Sign In</button>
               </div>
               <div class="overlay-panel overlay-right">
                  <h1>Hello, Friend!</h1>
                  <p>Enter your personal details and start journey with us</p>
                  <button class="ghost" id="signUp">Sign Up</button>
               </div>
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


      <!-------- Custom JS----------> 
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>   
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
      <script>
         const signUpButton = document.getElementById('signUp');
         const signInButton = document.getElementById('signIn');
         const loginsec = document.getElementById('loginsec');
         
         signUpButton.addEventListener('click', () =>
         loginsec.classList.add('right-panel-active'));
         
         signInButton.addEventListener('click', () =>
         loginsec.classList.remove('right-panel-active'));
      </script> 

<x-userFooter />