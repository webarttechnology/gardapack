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
            <span class="text-muted">$ {{ number_format((double)($cart->cart_quantity * $product->price), 2, '.', '' ) }}</span>
          </li>
        @endforeach
        

        {{-- <li class="list-group-item d-flex justify-content-between bg-light">
          <div class="text-success">
            <h6 class="my-0">Promo code</h6>
            <small>EXAMPLECODE</small>
          </div>
          <span class="text-success">$ 0</span>
        </li> --}}


        <li class="list-group-item d-flex justify-content-between">
          <span>Total</span>
          <strong>$ {{ $total }}</strong>
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

        <input type="hidden" name="total_price" id="total_price" value="{{ $total }}">
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
    
  </main>
<x-userFooter />