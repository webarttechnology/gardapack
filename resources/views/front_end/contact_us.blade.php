<x-userHeader />

<main>

    <!-- introBannerHolder -->

    {{-- <section class="introBannerHolder d-flex w-100 bgCover" style="background-image: url({{ asset('front_end/images/b-bg7.jpg') }});">

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

    </section> --}}



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


    <section class="contactSecBlock container pt-5 pb-5">
    <div class="container">
        <div class="row">

            <div class="col-12 text-center">
                <p>{!! $details->description !!}</p>
            </div>

            <header class="col-12 mainHeader text-center">

                <h1 class="headingIV playfair fwEblod mb-2">Get In Touch</h1>

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

                        <textarea class="form-control txtarea" placeholder="Meesage  *" name="message" required></textarea>

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
    </div>
    </section>

    <!-- footerHolder -->

    

</main>

<x-userFooter />