<x-userHeader />
<main>
    <section class="introBannerHolder d-flex w-100 bgCover" style="">
        {{-- <section class="introBannerHolder d-flex w-100 bgCover"
        style="background-image: url({{ asset('front_end/images/b-bg7.jpg') }});"> --}}
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

    <form class="needs-validation" action="{{ url('user/product/order/add') }}" method="post" novalidate>
        @csrf

    <div class="container checkout">

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
                                <h6 class="my-0"><a href="{{ url('product-details', $product->slug) }}"
                                        target="_blank">{{ $product->name }}</a></h6>
                                <small class="text-muted">( {{ $cart->cart_quantity }} products)</small>
                            </div>
                            <span class="text-muted">$
                                {{ number_format((float) ($cart->cart_quantity * $cart->amount), 2, '.', '') }}</span>
                        </li>
                    @endforeach

                    <div class="mb-5" id="loader" style="display: none;">
                        Loading...
                    </div>

                    <li class="list-group-item d-flex justify-content-between" id="shipment_cost">
                        <span>Shipment Cost</span>
                        <strong>$ 0</strong>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Total</span>
                        <strong>$ {{ $total }}</strong>
                    </li>
                </ul>



                <div class="col-md-12 mb-3">
                    <label for="zip">Choose a Carrier: *</label>

                    <select name="carrier" id="carrier" class="form-control"
                        onchange="getServiceDetails()">
                        <option value="">Select A Carrier</option>
                        @foreach ($carriers as $carrier)
                            <option value="{{ $carrier['code'] }}">{{ $carrier['name'] }}</option>
                        @endforeach
                    </select>

                    @if ($errors->has('carrier'))
                        <span class="text-danger">{{ $errors->first('carrier') }}</span>
                    @endif
                </div>

                <div class="col-md-12 mb-3" id="service_main">
                    <label for="service">Choose a Service: </label>
                    <select name="service" id="service" class="form-control" onchange="getServiceRate();">
                        <option value="">Select A Service</option>
                    </select>

                    @if ($errors->has('service'))
                        <span class="text-danger">{{ $errors->first('service') }}</span>
                    @endif
                </div>

                <div class="mb-5">
                    <button class="cstmbtn" type="submit" id="checkoutBtn" disabled>Continue to checkout</button>
                </div>



            </div>
            <div class="col-md-8 order-md-1">
                <h4 class="mb-3">Shipping address</h4>

                @if (Session::has('order_submit'))
                    <div class="alert alert-success">
                        {{ Session::get('order_submit') }}
                        @php
                            Session::forget('order_submit');
                        @endphp
                    </div>
                @endif

                {{-- <form class="needs-validation" action="{{ url('user/product/order/add') }}" method="post" novalidate>
                    @csrf --}}

                    <input type="hidden" name="total_price" id="total_price" value="{{ $total }}">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">First Name *</label>
                            <input type="text" class="form-control" id="name" name="fname"
                                placeholder="First Name" required>
                            @if ($errors->has('fname'))
                                <span class="text-danger">{{ $errors->first('fname') }}</span>
                            @endif
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName">Last Name *</label>
                            <input type="text" class="form-control" id="lastName" name="lname"
                                placeholder="Last name" required>
                            @if ($errors->has('lname'))
                                <span class="text-danger">{{ $errors->first('lname') }}</span>
                            @endif
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>
                    </div>

                    <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="email">Email *<span class="text-muted"></span></label>
                        <input type="email" class="form-control" id="email" name="email"
                            placeholder="you@example.com" value="{{ Auth::user()->email }}" required>
                        @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="email">Phone * <span class="text-muted"></span></label>
                        <input type="text" class="form-control" id="phone" name="phone"
                            placeholder="Phone Number" required>
                        @if ($errors->has('phone'))
                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                        @endif
                    </div>
                    </div>

                    <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="address">Address *</label>
                        <input type="text" class="form-control" id="address1" name="address1"
                            placeholder="Enter Your Address" required>
                        @if ($errors->has('address1'))
                            <span class="text-danger">{{ $errors->first('address1') }}</span>
                        @endif
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
                        <input type="text" class="form-control" id="address2" name="address2" placeholder="">
                    </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label for="country">Country *</label>
                            {{-- <input type="text" class="form-control" id="country" name="country" required> --}}
                            
                            <select class="custom-select d-block w-100" id="country" name="country" required>
                            @foreach($countries as $key => $country)
                            @if($country->country != "country")
                               <option value="{{ $country->country }}" @if($country->country == "US") selected @endif>{{ $country->name }}</option>
                            @endif
                            @endforeach
                            </select>

                            @if ($errors->has('country'))
                                <span class="text-danger">{{ $errors->first('country') }}</span>
                            @endif
                        </div>


                        <div class="col-md-3 mb-3">
                            <label for="country">Town/City *</label>
                            <input type="text" class="form-control" id="town" name="town" required>
                            {{-- <select class="custom-select d-block w-100" id="town" name="address1" required>
                            <option value="">Choose...</option>
                            <option>United States</option>
                            </select> --}}
                            @if ($errors->has('town'))
                                <span class="text-danger">{{ $errors->first('town') }}</span>
                            @endif
                        </div>


                        <div class="col-md-3 mb-3">
                            <label for="state">State *</label>
                            <input type="text" class="form-control" id="state" name="state" required>
                            {{-- <select class="custom-select d-block w-100" id="state" required>
                            <option value="">Choose...</option>
                            <option>California</option>
                            </select> --}}
                            @if ($errors->has('state'))
                                <span class="text-danger">{{ $errors->first('state') }}</span>
                            @endif
                        </div>

                        <div class="col-md-3 mb-3">
                            <label for="zip">Zip *</label>
                            <input type="text" class="form-control" id="zip" name="zip" placeholder=""
                                required>
                            @if ($errors->has('zip'))
                                <span class="text-danger">{{ $errors->first('zip') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="country">Order Notes (Optional)</label>
                            <textarea class="form-control" name="order_notes" id="order_notes" cols="30" rows="5"></textarea>
                        </div>
                    </div>

                    <hr class="mb-4">


                    {{-- <div class="mb-5">
                        <button class="cstmbtn" type="submit">Continue to checkout</button>
                    </div> --}}
                {{-- </form> --}}


            </div>
        </div>
    </div>
</form>
</main>

<script>
    $(document).ready(function() {
        $('#service_main').hide();


        // Disable the checkout button initially
        $('#checkoutBtn').prop('disabled', true);

        // Enable the checkout button when required fields are filled
        $('input[name="town"], input[name="state"], input[name="zip"]').on('input', function() {
            if (validateFields()) {
                $('#checkoutBtn').prop('disabled', false);
            } else {
                $('#checkoutBtn').prop('disabled', true);
            }
        });
    });

    function getServiceDetails() {
        let carrier = $('#carrier').val();

        $('#service_main').hide();

        if (carrier != "") {
            $.ajax({
                type: "GET",
                url: '{{ url('user/product/order/getShipServices/') }}' + '/' + carrier,
                success: function(response) {

                    $('#service_main').show();
                    let services = response.services;

                    // Add new options based on the services
                    if (services.length > 0) {
                        // Clear existing options
                        $('#service').empty();

                        services.forEach(function(service) {
                            $('#service').append('<option value="' + service.code + '">' + service
                                .name + '</option>');
                        });
                    }

                }
            });

        } else {
            $('#service_main').hide();
            alert("Please Select a Carrier");
        }
    }


    function getServiceRate(){
        // $('#loader').show();
        

        rateDetailsFetch();
    }

    function rateDetailsFetch(){
        let carrier = $('#carrier').val();
        let service = $('#service').val();
        let country = $('#country').val();
        let town = $('#town').val();
        let state = $('#state').val();
        let zip = $('#zip').val();

        let shipCost= 0;

        if (!validateField('Country', country) ||
        !validateField('Town', town) ||
        !validateField('State', state) ||
        !validateField('Zip', zip)) {
            // At least one field is empty, handle accordingly
           return;
        }

        if (carrier != "") {
            // Swal.fire("<div class="spinner-border" role="status"><span class="sr-only">Loading...</span></div>");
            Swal.fire({
                html: '<div class="spinner-border" role="status"><span class="sr-only">Loading...</span></div>',
                showCancelButton: false,
                showConfirmButton: false,
                allowOutsideClick: false,
                allowEscapeKey: false
            });

            $.ajax({
                type: "GET",
                
                url: '{{ url('user/product/order/getShipServiceRate/') }}' + '/' + carrier 
                + '/' + service + '/' + state + '/' + country + '/' + zip + '/' + town,

                success: function(response) {
                    // $('#loader').hide();
                    Swal.close();

                    if (response.length > 0) {
                      shipCost = response[0].shipmentCost;
                    }else{
                        toastr.error('Service  from this Provider is Not Available for this Location');
                    }
                    
                    $('#shipment_cost').html('<span>Shipment Cost</span> <strong>$'+shipCost+'</strong>');
                }
            });

        } else {
            toastr.error("Please Select a Carrier");
        }
    }

    function validateField(fieldName, fieldValue) {
    if (fieldValue === "") {
        toastr.error(fieldName + ' is Required');
        return false;
    }
    return true;
   }

   function validateFields() {
        let town = $('#town').val();
        let state = $('#state').val();
        let zip = $('#zip').val();
        let carrier = $('#carrier').val();
        let service = $('#service').val();

        return town.trim() !== '' && state.trim() !== '' && zip.trim() !== '' 
        && carrier.trim() !== '' && service.trim() !== '';
    }
</script>
<x-userFooter />
