<x-userHeader />

<section class="contactSecBlock container pt-lg-10 pb-lg-10 pt-md-16 pb-md-8 py-10">

    <div class="row">

        <header class="col-12 mainHeader mb-5 text-center">

            {{-- <h1 class="headingIV playfair fwEblod mb-7">Get In Touch</h1> --}}

            <h2>Registration Form</h2>

        </header>

    </div>

    <div class="row">

        <div class="col-12">

            

            @if(session("contact_success"))

            <script type="text/javascript">

               toastr.success("{{ session('contact_success') }}");

            </script>

            @endif

            

            <form action="{{ url('product/request/save') }}" method="post" class="contactForm">

                 @csrf



                 <h3>Your Product</h3><hr>

                <div class="form-group w-100 mb-6">

                    <label for="">Your Model Number *</label>

                        <input type="text" id="name" class="form-control" name="product_model_no" value="{{ old('product_model_no') }}" required>

                        @if ($errors->has('product_model_no'))

                                <span class="text-danger">{{ $errors->first('product_model_no') }}</span>

                        @endif

                </div>



                <h3>Your Information</h3><hr>

                <div class="d-flex flex-wrap row1 mb-md-1">

                    <div class="form-group coll mb-5">

                        <label for="">First Name *</label>

                        <input type="text" id="first_name" class="form-control" name="first_name" value="{{ old('first_name') }}" required>

                        @if ($errors->has('first_name'))

                                <span class="text-danger">{{ $errors->first('first_name') }}</span>

                        @endif

                    </div>

                    <div class="form-group coll mb-5">

                        <label for="">Last Name *</label>

                        <input type="text" id="last_name" class="form-control" name="last_name" value="{{ old('last_name') }}" required>

                        @if ($errors->has('last_name'))

                                <span class="text-danger">{{ $errors->first('last_name') }}</span>

                        @endif

                    </div>





                    <div class="form-group coll mb-5">

                        <label for="">Email *</label>

                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))

                                <span class="text-danger">{{ $errors->first('email') }}</span>

                        @endif

                    </div>

                    <div class="form-group coll mb-5">

                        <label for="">Phone Number</label>

                        <input type="tel" class="form-control" id="tel" name="phone_no" value="{{ old('phone_no') }}">

                        @if ($errors->has('phone_no'))

                                <span class="text-danger">{{ $errors->first('phone_no') }}</span>

                        @endif

                    </div>

                </div>



                <h3>Your Purchase Information</h3><hr>

                <div class="d-flex flex-wrap row1 mb-md-1">

                <div class="form-group coll mb-5">

                    <label for="">Purchased From</label>

                    <input type="text" id="purchased_from" class="form-control" name="purchased_from" value="{{ old('purchased_from') }}">

                    @if ($errors->has('purchased_from'))

                            <span class="text-danger">{{ $errors->first('purchased_from') }}</span>

                    @endif

                </div>

                <div class="form-group coll mb-5">

                    <label for="">Date of Purchase *</label>

                    <input type="date" id="date_of_purchase" class="form-control" max="{{ date('Y-m-d') }}" name="date_of_purchase" value="{{ old('date_of_purchase') }}">

                    @if ($errors->has('date_of_purchase'))

                            <span class="text-danger">{{ $errors->first('date_of_purchase') }}</span>

                    @endif

                </div>

                <div class="form-group coll mb-5">

                    <label for="">Date of Delivery</label>

                    <input type="date" id="delivery_date" class="form-control" name="delivery_date" max="{{ date('Y-m-d') }}" value="{{ old('delivery_date') }}">

                    @if ($errors->has('delivery_date'))

                            <span class="text-danger">{{ $errors->first('delivery_date') }}</span>

                    @endif

                </div>

                </div>

                

                {{-- <div class="form-check mb-10">

                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">

                  <label class="form-check-label" for="flexCheckDefault">

                    Sign up to receive emails regarding promotions, recipe inspiration, vacuum sealing 101 tips and new product launches.

                  </label>

                </div> --}}



                <div class="text-center">

                    <button type="submit" class="btn btnTheme btnShop md-round fwEbold text-white py-3 px-4 py-md-3 px-md-4">Submit</button>

                </div>

            </form>

            

            

        </div>

    </div>

</section>

<x-userFooter />