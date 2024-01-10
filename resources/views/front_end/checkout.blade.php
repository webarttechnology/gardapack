<x-userHeader />
@php
    $shipping_options = App\Models\ShippingOption::whereStatus('active')->get();
@endphp
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
                            <label for="name">First Name *</label>
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
                            placeholder="you@example.com" value="" required>
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
                            
                            <select onchange="getpriceDetails()" class="custom-select d-block w-100" id="country" name="country" required>
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

                    <hr class="mb-4">


                    {{-- <div class="mb-5">
                        <button class="cstmbtn" type="submit">Continue to checkout</button>
                    </div> --}}
                {{-- </form> --}}


            </div>
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

                    {{-- <li class="list-group-item d-flex justify-content-between" id="other_cost">
                        <span>Other Cost</span>
                        <strong>$ 0</strong>
                    </li> --}}

                    <input type="hidden" id="totalPrice" name="totalPrice" value="{{ $total }}">
                    <input type="hidden" id="actualTotal" name="actualTotal" value="{{ $total }}">
                    <input type="hidden" id="shipCost" name="shipCost" value="0">
                    <input type="hidden" id="otherCost" name="otherCost" value="0">

                    <li class="list-group-item d-flex justify-content-between" id="totalAmt">
                        <span>Total</span>
                        <strong>$ {{ $total }}</strong>
                    </li>
                </ul>

                <!-- Shipping Options -->

                <div class="col-md-12 mb-3">
                    <label for="zip">Choose Shipping Option: *</label>

                    <select name="shipping_option" id="shipping_option" class="form-control"
                        onchange="getpriceDetails()">
                        <option value="0">Select A Option</option>
                        @if($shipping_options != null)
                        @foreach ($shipping_options as $carrier)
                            <option value="{{ $carrier->id }}">{{ $carrier->title }}</option>
                        @endforeach
                        @endif
                    </select>

                    @if ($errors->has('shipping_option'))
                        <span class="text-danger">{{ $errors->first('shipping_option') }}</span>
                    @endif
                </div> 


                {{-- <div class="col-md-12 mb-3">
                    <label for="zip">Choose a Carrier: *</label>

                    <select name="carrier" id="carrier" class="form-control"
                        onchange="getServiceDetails()">
                        <option value="">Select A Carrier</option>
                        @if($carriers != null)
                        @foreach ($carriers as $carrier)
                            <option value="{{ $carrier['code'] }}">{{ $carrier['name'] }}</option>
                        @endforeach
                        @endif
                    </select>

                    @if ($errors->has('carrier'))
                        <span class="text-danger">{{ $errors->first('carrier') }}</span>
                    @endif
                </div> --}}

                {{-- <div class="col-md-12 mb-3" id="service_main">
                    <label for="service">Choose a Service: </label>
                    <select name="service" id="service" class="form-control" onchange="getServiceRate();">
                        <option value="">Select A Service</option>
                    </select>

                    @if ($errors->has('service'))
                        <span class="text-danger">{{ $errors->first('service') }}</span>
                    @endif
                </div> --}}

                <div class="mb-5">
                    <button class="cstmbtn" type="submit" id="checkoutBtn" style="display: none;">Continue to checkout</button>
                </div>

            </div>

        </div>
        <div class="row">

            <div class="col-md-8 p-3 m-2">
                <input type="checkbox" class="form-check-input" id="sameAsShipping" onchange="toggleBillingAddress()" name="sameAsShipping">
                <label class="form-check-label" for="sameAsShipping"><strong>Same As Shipping Address?</strong></label>
            </div>
            

            <div class="col-md-8 order-md-1">
                <h4 class="mb-3">Billing address</h4>
    
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
                            <input type="text" class="form-control" id="bill_name" name="bill_fname"
                                placeholder="First Name" required>
                            @if ($errors->has('bill_fname'))
                                <span class="text-danger">{{ $errors->first('bill_fname') }}</span>
                            @endif
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName">Last Name *</label>
                            <input type="text" class="form-control" id="bill_lastName" name="bill_lname"
                                placeholder="Last name" required>
                            @if ($errors->has('bill_lname'))
                                <span class="text-danger">{{ $errors->first('bill_lname') }}</span>
                            @endif
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>
                    </div>
    
                    <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="email">Email *<span class="text-muted"></span></label>
                        <input type="email" class="form-control" id="bill_email" name="bill_email"
                            placeholder="you@example.com" value="" required>
                        @if ($errors->has('bill_email'))
                            <span class="text-danger">{{ $errors->first('bill_email') }}</span>
                        @endif
                    </div>
    
                    <div class="col-md-6 mb-3">
                        <label for="email">Phone * <span class="text-muted"></span></label>
                        <input type="text" class="form-control" id="bill_phone" name="bill_phone"
                            placeholder="Phone Number" required>
                        @if ($errors->has('bill_phone'))
                            <span class="text-danger">{{ $errors->first('bill_phone') }}</span>
                        @endif
                    </div>
                    </div>
    
                    <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="address">Address *</label>
                        <input type="text" class="form-control" id="bill_address1" name="bill_address1"
                            placeholder="Enter Your Address" required>
                        @if ($errors->has('bill_address1'))
                            <span class="text-danger">{{ $errors->first('bill_address1') }}</span>
                        @endif
                    </div>
    
                    <div class="col-md-6 mb-3">
                        <label for="bill_address2">Address 2 <span class="text-muted">(Optional)</span></label>
                        <input type="text" class="form-control" id="bill_address2" name="bill_address2" placeholder="">
                    </div>
                    </div>
    
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label for="country">Country *</label>
                            {{-- <input type="text" class="form-control" id="country" name="country" required> --}}
                            
                            <select class="custom-select d-block w-100" id="bill_country" name="bill_country" required>
                            @foreach($countries as $key => $country)
                            @if($country->country != "country")
                               <option value="{{ $country->country }}" @if($country->country == "US") selected @endif>{{ $country->name }}</option>
                            @endif
                            @endforeach
                            </select>
    
                            @if ($errors->has('bill_country'))
                                <span class="text-danger">{{ $errors->first('bill_country') }}</span>
                            @endif
                        </div>
    
    
                        <div class="col-md-3 mb-3">
                            <label for="country">Town/City *</label>
                            <input type="text" class="form-control" id="bill_town" name="bill_town" required>
                            {{-- <select class="custom-select d-block w-100" id="town" name="address1" required>
                            <option value="">Choose...</option>
                            <option>United States</option>
                            </select> --}}
                            @if ($errors->has('bill_town'))
                                <span class="text-danger">{{ $errors->first('bill_town') }}</span>
                            @endif
                        </div>
    
    
                        <div class="col-md-3 mb-3">
                            <label for="state">State *</label>
                            <input type="text" class="form-control" id="bill_state" name="bill_state" required>
                            {{-- <select class="custom-select d-block w-100" id="state" required>
                            <option value="">Choose...</option>
                            <option>California</option>
                            </select> --}}
                            @if ($errors->has('bill_state'))
                                <span class="text-danger">{{ $errors->first('bill_state') }}</span>
                            @endif
                        </div>
    
                        <div class="col-md-3 mb-3">
                            <label for="zip">Zip *</label>
                            <input type="text" class="form-control" id="bill_zip" name="bill_zip" placeholder=""
                                required>
                            @if ($errors->has('bill_zip'))
                                <span class="text-danger">{{ $errors->first('bill_zip') }}</span>
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

        // Enable the checkout button when required fields are filled
        $('input[name="town"], input[name="state"], input[name="zip"]').on('input', function() {
            if (validateFields()) {
                $('#checkoutBtn').show();
            } else {
                $('#checkoutBtn').hide();
            }
        });
    });

    // function getServiceDetails() {
    //     let carrier = $('#carrier').val();

    //     $('#service_main').hide();

    //     if (carrier != "") {
    //         $.ajax({
    //             type: "GET",
    //             url: '{{ url('user/product/order/getShipServices/') }}' + '/' + carrier,
    //             success: function(response) {

    //                 $('#service_main').show();
    //                 let services = response.services;

    //                 // Add new options based on the services
    //                 if (services.length > 0) {
    //                     // Clear existing options
    //                     $('#service').empty();

    //                     $('#service').append('<option value="">Select A Service</option>');
    //                     services.forEach(function(service) {
    //                         $('#service').append('<option value="' + service.code + '">' + service
    //                             .name + '</option>');
    //                     });
    //                 }

    //             }
    //         });

    //     } else {
    //         $('#service_main').hide();
    //         alert("Please Select a Carrier");
    //     }
    // }


    // function getServiceRate(){
    //     // $('#loader').show();
    //     rateDetailsFetch();
    // }

    // function rateDetailsFetch(){
    //     let carrier = $('#carrier').val();
    //     let service = $('#service').val();
    //     let country = $('#country').val();
    //     let town = $('#town').val();
    //     let state = $('#state').val();
    //     let zip = $('#zip').val();
    //     let totalPrice = $('#actualTotal').val();

    //     let shipCost= 0;
    //     let otherCost= 0;

    //     if (!validateField('Country', country) ||
    //     !validateField('Town', town) ||
    //     !validateField('State', state) ||
    //     !validateField('Zip', zip)) {
    //         // At least one field is empty, handle accordingly
    //        return;
    //     }

    //     if (carrier != "") {
    //         if (service != "") {
    //         Swal.fire({
    //             html: '<div class="spinner-border" role="status"><span class="sr-only">Loading...</span></div>',
    //             showCancelButton: false,
    //             showConfirmButton: false,
    //             allowOutsideClick: false,
    //             allowEscapeKey: false
    //         });

    //         $.ajax({
    //             type: "GET",
                
    //             url: '{{ url('user/product/order/getShipServiceRate/') }}' + '/' + carrier 
    //             + '/' + service + '/' + state + '/' + country + '/' + zip + '/' + town,

    //             success: function(response) {
    //                 // $('#loader').hide();
    //                 Swal.close();

    //                 if (response.length > 0) {
    //                     $('#checkoutBtn').show();
    //                     shipCost = response[0].shipmentCost;
    //                     otherCost = response[0].otherCost;

    //                     totalPrice = (parseFloat(totalPrice) + parseFloat(shipCost) + parseFloat(otherCost)).toFixed(2);
    //                     $('#totalPrice').val(totalPrice);
    //                     $('#totalAmt').html("<span>Total :</span><strong> $"+totalPrice+"</strong>");
    //                 }else{
    //                     $('#checkoutBtn').hide();
    //                     getServiceDetails();
    //                     $('#totalPrice').val(totalPrice);
    //                     $('#totalAmt').html("<span>Total :</span><strong>"+totalPrice+"</strong>");
    //                     toastr.error('Service  from this Provider is Not Available for this Location');
    //                 }

    //                 $('#shipCost').val(shipCost);
    //                 $('#shipment_cost').html('<span>Shipment Cost</span> <strong>$'+shipCost+'</strong>');
                    
    //                 $('#otherCost').val(otherCost);
    //                 $('#other_cost').html('<span>Other Cost</span> <strong>$'+otherCost+'</strong>');
    //             }
    //         });
    //        }
    //        else {
    //         toastr.error("Please Select a Service");
    //        }
    //     } else {
    //         toastr.error("Please Select a Carrier");
    //     }
    // }

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
        let shipping_option = $('#shipping_option').val();
        // let carrier = $('#carrier').val();
        // let service = $('#service').val();

        return town.trim() !== '' && state.trim() !== '' && zip.trim() !== '' 
        && shipping_option.trim() != 0;
    }

    function toggleBillingAddress(){
        if ($('#sameAsShipping').prop('checked')) {
            // Copy values from shipping address fields to billing address fields
            $('#bill_name').val($('#name').val());
            $('#bill_lastName').val($('#lastName').val());
            $('#bill_email').val($('#email').val());
            $('#bill_phone').val($('#phone').val());
            $('#bill_address1').val($('#address1').val());
            $('#bill_address2').val($('#address2').val());
            $('#bill_country').val($('#country').val());
            $('#bill_town').val($('#town').val());
            $('#bill_state').val($('#state').val());
            $('#bill_zip').val($('#zip').val());

            // Set billing address fields as readonly
            $('#bill_name, #bill_lastName, #bill_email, #bill_phone, #bill_address1, #bill_address2, #bill_country, #bill_town, #bill_state, #bill_zip').attr('readonly', 'readonly');
        } else {
            // If the checkbox is unchecked, remove readonly attribute
            $('#bill_name, #bill_lastName, #bill_email, #bill_phone, #bill_address1, #bill_address2, #bill_country, #bill_town, #bill_state, #bill_zip').prop('readonly', false);
        }
    }
</script>

<script>
    function getpriceDetails(){
        let shipping_option = $('#shipping_option').val();
        if( shipping_option === '' ) return false;
        let totalPrice = $('#actualTotal').val();
        let country = $('#country').val();
        let shipCost= 0;
        // alert(shipping_option);

        if (shipping_option != 0) {
            Swal.fire({
                html: '<div class="spinner-border" role="status"><span class="sr-only">Loading...</span></div>',
                showCancelButton: false,
                showConfirmButton: false,
                allowOutsideClick: false,
                allowEscapeKey: false
            });

            $.ajax({
                type: "GET",
                 
                url: '{{ url('user/shipment/price/') }}' + '/' + shipping_option + '/' + totalPrice + '/' + country,

                success: function(response) {
                    // $('#loader').hide();
                    Swal.close();

                    $('#checkoutBtn').show();
                    // shipCost = response[0].price;
                    shipCost = response;

                    totalPrice = (parseFloat(totalPrice) + parseFloat(shipCost)).toFixed(2);

                    $('#totalPrice').val(totalPrice);
                    $('#totalAmt').html("<span>Total :</span><strong> $"+totalPrice+"</strong>");
                    
                    $('#shipCost').val(shipCost);
                    $('#shipment_cost').html('<span>Shipment Cost</span> <strong>$'+shipCost+'</strong>');
                    
                }
            });
           }
           else {
            $('#checkoutBtn').hide();

            $('#totalPrice').val(totalPrice);
            $('#totalAmt').html("<span>Total :</span><strong> $"+totalPrice+"</strong>");

            $('#shipCost').val(0);
            $('#shipment_cost').html('<span>Shipment Cost</span> <strong>$'+0+'</strong>');
            toastr.error("Please Select a Shiping Option");
           }
    }
</script>
<x-userFooter />
