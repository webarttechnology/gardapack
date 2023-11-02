<x-userHeader />
<main>
    <section class="introBannerHolder d-flex w-100 bgCover" style="background-image: url({{ asset('front_end/images/b-bg7.jpg') }});">
        <div class="container">
          <div class="row">
            <div class="col-12 pt-sm-10 text-center">
              <h1 class="headingIV fwEbold playfair mb-4">Checkout</h1>
              <ul class="list-unstyled breadCrumbs d-flex justify-content-center">
                <li class="mr-2"><a href="{{ url('/') }}">Home</a></li>
                <li class="mr-2">/</li>
                <li class="mr-2"><a href="#">Checkout</a></li>
                <!--<li class="mr-2">/</li>-->
                <!--<li class="active">Pellentesque aliquet</li>-->
              </ul>
            </div>
          </div>
        </div>
      </section>
    <div class="container checkout">
  <div class="py-5 text-center">
    
    <h2>Checkout form</h2>
    <p class="lead">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
  </div>

  <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Your Checkout</span>
        <span class="badge badge-secondary badge-pill"></span>
      </h4>
      <ul class="list-group mb-3">


        @foreach ($carts as $cart)
        @php
            $product = App\Models\Product::where('id', $cart->product_id)->first();
        @endphp

          <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
              <h6 class="my-0"><a href="{{ url('product-details', $product->slug) }}" target="_blank">{{ $product->name }}</a></h6>
              <small class="text-muted">( {{ $cart->cart_quantity }} products)</small>
            </div>
            <span class="text-muted">Rs. {{ number_format((double)($cart->cart_quantity * $product->price), 2, '.', '' ) }}</span>
          </li>
        @endforeach
        

        {{-- <li class="list-group-item d-flex justify-content-between bg-light">
          <div class="text-success">
            <h6 class="my-0">Promo code</h6>
            <small>EXAMPLECODE</small>
          </div>
          <span class="text-success">Rs. 0</span>
        </li> --}}


        <li class="list-group-item d-flex justify-content-between">
          <span>Total</span>
          <strong>Rs. {{ $total }}</strong>
        </li>
      </ul>

      {{-- <form class="card p-2">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Promo code">
          <div class="input-group-append">
            <button type="submit" class="btn btn-secondary bggrn">Redeem</button>
          </div>
        </div>
      </form> --}}


    </div>
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Billing address</h4>

      @if(Session::has('order_submit'))
      <div class="alert alert-success">
          {{ Session::get('order_submit') }}
          @php
          Session::forget('order_submit');
          @endphp
      </div>
      @endif

      <form class="needs-validation" action="{{ url('user/product/order/add') }}" method="post" novalidate>
        @csrf

        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">First Name *</label>
            <input type="text" class="form-control" id="name" name="fname" placeholder="First Name" required>
            @if ($errors->has('fname'))
            <span class="text-danger">{{ $errors->first('fname') }}</span>
            @endif
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Last Name *</label>
            <input type="text" class="form-control" id="lastName" name="lname" placeholder="Last name" required>
            @if ($errors->has('lname'))
            <span class="text-danger">{{ $errors->first('lname') }}</span>
            @endif
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>

        {{-- <div class="mb-3">
          <label for="username">Username (Optional)</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">@</span>
            </div>
            <input type="text" class="form-control" id="username" name="username" placeholder="Username" >
            <div class="invalid-feedback" style="width: 100%;">
              Your username is required.
            </div>
          </div>
        </div> --}}

        <div class="mb-3">
          <label for="email">Email *<span class="text-muted"></span></label>
          <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" value="{{ Auth::user()->email }}" required>
          @if ($errors->has('email'))
            <span class="text-danger">{{ $errors->first('email') }}</span>
          @endif
        </div>

        <div class="mb-3">
          <label for="email">Phone * <span class="text-muted"></span></label>
          <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number" required>
          @if ($errors->has('phone'))
            <span class="text-danger">{{ $errors->first('phone') }}</span>
          @endif
        </div>

        <div class="mb-3">
          <label for="address">Address *</label>
          <input type="text" class="form-control" id="address1" name="address1" placeholder="Enter Your Address" required>
          @if ($errors->has('address1'))
            <span class="text-danger">{{ $errors->first('address1') }}</span>
          @endif
        </div>

        <div class="mb-3">
          <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
          <input type="text" class="form-control" id="address2" name="address2" placeholder="">
        </div>

        <div class="row">
          <div class="col-md-4 mb-3">
            <label for="country">Country *</label>
            <input type="text" class="form-control" id="country" name="country"  required>
            {{-- <select class="custom-select d-block w-100" id="country" name="address1" required>
              <option value="">Choose...</option>
              <option>United States</option>
            </select> --}}
            @if ($errors->has('country'))
            <span class="text-danger">{{ $errors->first('country') }}</span>
            @endif
          </div>


          <div class="col-md-4 mb-3">
            <label for="country">Town/City *</label>
            <input type="text" class="form-control" id="town" name="town"  required>
            {{-- <select class="custom-select d-block w-100" id="town" name="address1" required>
              <option value="">Choose...</option>
              <option>United States</option>
            </select> --}}
            @if ($errors->has('town'))
            <span class="text-danger">{{ $errors->first('town') }}</span>
            @endif
          </div>


          <div class="col-md-4 mb-3">
            <label for="state">State *</label>
            <input type="text" class="form-control" id="state" name="state"  required>
            {{-- <select class="custom-select d-block w-100" id="state" required>
              <option value="">Choose...</option>
              <option>California</option>
            </select> --}}
            @if ($errors->has('state'))
            <span class="text-danger">{{ $errors->first('state') }}</span>
            @endif
          </div>

          <div class="col-md-12 mb-3">
            <label for="zip">Zip *</label>
            <input type="text" class="form-control" id="zip" name="zip" placeholder="" required>
            @if ($errors->has('zip'))
            <span class="text-danger">{{ $errors->first('zip') }}</span>
            @endif
          </div>
        </div>

        <div class="row">
          <div class="col-md-12 mb-3">
            <label for="country">Order Notes (Optional)</label>
            <textarea class="form-control" name="order_notes" id="order_notes" cols="30" rows="10"></textarea>
          </div>
        </div>

        <hr class="mb-4">
       
        
        <div class="mb-5">
        <button class="cstmbtn" type="submit">Continue to checkout</button>
        </div>
      </form>


    </div>
  </div>
</div>
    <aside class="footerHolder overflow-hidden bg-lightGray pt-xl-23 pb-xl-8 pt-lg-10 pb-lg-8 pt-md-12 pb-md-8 pt-10">
        <div class="container">
          <div class="row">
            <div class="col-12 col-sm-6 col-lg-4 mb-lg-0 mb-4">
              <h3 class="headingVI fwEbold text-uppercase mb-7">Contact Us</h3>
              <ul class="list-unstyled footerContactList mb-3">
                <li class="mb-3 d-flex flex-nowrap pr-xl-20 pr-0"><span class="icon icon-place mr-3"></span> <address class="fwEbold m-0">Address: London Oxford Street, 012 United Kingdom.</address></li>
                <li class="mb-3 d-flex flex-nowrap"><span class="icon icon-phone mr-3"></span> <span class="leftAlign">Phone : <a href="javascript:void(0);">(+032) 3456 7890</a></span></li>
                <li class="email d-flex flex-nowrap"><span class="icon icon-email mr-2"></span> <span class="leftAlign">Email:  <a href="javascript:void(0);">Botanicalstore@gmail.com</a></span></li>
              </ul>
              <ul class="list-unstyled followSocailNetwork d-flex flex-nowrap">
                <li class="fwEbold mr-xl-11 mr-md-8 mr-3">Follow  us:</li>
                <li class="mr-xl-6 mr-md-5 mr-2"><a href="javascript:void(0);" class="fab fa-facebook-f"></a></li>
                <li class="mr-xl-6 mr-md-5 mr-2"><a href="javascript:void(0);" class="fab fa-twitter"></a></li>
                <li class="mr-xl-6 mr-md-5 mr-2"><a href="javascript:void(0);" class="fab fa-pinterest"></a></li>
                <li class="mr-2"><a href="javascript:void(0);" class="fab fa-google-plus-g"></a></li>
              </ul>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 pl-xl-14 mb-lg-0 mb-4">
              <h3 class="headingVI fwEbold text-uppercase mb-6">Information</h3>
              <ul class="list-unstyled footerNavList">
                <li class="mb-1"><a href="javascript:void(0);">New Products</a></li>
                <li class="mb-2"><a href="javascript:void(0);">Top Sellers</a></li>
                <li class="mb-2"><a href="javascript:void(0);">Our Blog</a></li>
                <li class="mb-2"><a href="javascript:void(0);">About Our Shop</a></li>
                <li><a href="javascript:void(0);">Privacy policy</a></li>
              </ul>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 pl-xl-12 mb-lg-0 mb-4">
              <h3 class="headingVI fwEbold text-uppercase mb-7">My Account</h3>
              <ul class="list-unstyled footerNavList">
                <li class="mb-1"><a href="javascript:void(0);">My account</a></li>
                <li class="mb-2"><a href="javascript:void(0);">Discount</a></li>
                <li class="mb-2"><a href="javascript:void(0);">Orders history</a></li>
                <li><a href="javascript:void(0);">Personal information</a></li>
              </ul>
            </div>
            <div class="col-12 col-sm-6 col-lg-2 pl-xl-18 mb-lg-0 mb-4">
              <h3 class="headingVI fwEbold text-uppercase mb-5">PRODUCTS</h3>
              <ul class="list-unstyled footerNavList">
                <li class="mb-2"><a href="javascript:void(0);">Delivery</a></li>
                <li class="mb-2"><a href="javascript:void(0);">Legal notice</a></li>
                <li class="mb-2"><a href="javascript:void(0);">Prices drop</a></li>
                <li class="mb-2"><a href="javascript:void(0);">New products</a></li>
                <li><a href="javascript:void(0);">Best sales</a></li>
              </ul>
            </div>
          </div>
        </div>
      </aside>
  </main>
<x-userFooter />