@php

    $address = App\Models\Pages::where('name', 'Contact Us Page')->first();
    $technology = App\Models\Technology::first();
    $graphData = $technology->graph_data;
    $website_logo = App\Models\Settings::where('key','app_logo')->first();
    $footer = App\Models\WebsiteFoter::first();
@endphp



<!-- ---------------Footer Section Start----------- -->



<section class="footersec">

    <div class="container">

        <div class="row mt-5" >

            <div class="col-sm-6 col-md-3">
                <span class="mb-5" style="display:block"> <a href="{{ url('/') }}"><img src="{{ asset('settings/app_logo/'.$website_logo->value)}}"></a></span>
                <p>@if($footer!=null) {!! $footer->footer_desc !!} @endif</p>
                <ul class="d-flex socials">
                    @if($footer!=null && $footer->fb_status == "active")
                      <li><a href="{{ $footer->fb_link }}" target="_blank"><i class="bi bi-facebook"></i></a></li>
                    @endif
                    @if($footer!=null && $footer->twitter_status == "active")
                    <li><a href="{{ $footer->twitter_link }}" target="_blank"><i class="bi bi-twitter"></i></a></li>
                    @endif
                    @if($footer!=null && $footer->goog_status == "active")
                    <li><a href="{{ $footer->goog_link }}" target="_blank"><i class="bi bi-google"></i></a></li>
                    @endif
                    @if($footer!=null && $footer->pint_status == "active")
                    <li><a href="{{ $footer->pint_link }}" target="_blank"><i class="bi bi-instagram"></i></a></li>
                    @endif
                </ul>
            </div>

            <div class="col-sm-6 col-md-3">
                <h4 class="mb-5" style="display:block">INFORMATION</h4>
                <ul>
                    <li><a href="{{ url('about-us') }}">About</a></li>
                    <li><a href="{{ url('shop') }}">Shop</a></li>
                    <li><a href="{{ url('contact-u') }}">Contact Us</a></li>
                    <li><a href="{{ url('wholesale-application') }}">Wholesale</a></li>
                    <li><a href="{{ url('retailers') }}">Retailers</a></li>
                </ul>
            </div>

            
            <div class="col-sm-6 col-md-3">
                <h4 class="mb-5" style="display:block">MY ACCOUNT</h4>
                
                <ul>
                    <li><a href="{{ url('my-account') }}">My Account</a></li>
                    
                   
                    <li><a href="{{ url('user/cart/page') }}">My Cart</a></li>
                    <li><a href="{{ url('user/wishlist/page') }}">My Wishlist</a></li>
                    

                    <li><a href="{{ url('shop') }}">My Shop</a></li>
                </ul>
                
            </div>

            <div class="col-sm-6 col-md-3">

                <h4 class="mb-5" style="display:block">Need Help?</h4>

                <div class="ftr-address">
                    <h5><small>Toll Free :</small><br><a href="javascript:void(0)" style="color:#ffc81d">{{ $address->phone }}</a></h5>
                    <ul>

                        <li>
                            <p><span><i class="bi bi-geo-alt-fill"></i></span> {{ $address->address }}</p>
                        </li>

                        <li>
                        <p><span><i class="bi bi-envelope-fill"></i></span><a href="javascript:void(0)"> {{ $address->email }} </a></p>
                        </li>

                        <li></li>

                    </ul>

                </div>

                {{-- <div class="company">

                    <p>Company Name : Grada Packs</p>

                    <p>Company Address : Zone Orlytech

                        Batiment 5161 allee du commandant

                        Mouchotte ORLY Paris ,91550 , France

                    </p>

                </div> --}}

            </div>

            <!-- <div class="col-md-4">

                <div class="ftrservice">

                    <div class="srvchdng">

                        <h4>Services</h4>

                    </div>

                    <ul>

                        @foreach ($services as $service)

                            <li><a href="{{ url('service-details', $service->slug) }}">{{ $service->name }}</a></li>

                        @endforeach

                    </ul>

                </div>

            </div>

            <div class="col-md-4">

                <div class="ftrservice">

                    <div class="srvchdng">

                        <h4>Quick Links</h4>

                    </div>

                    <ul>

                        @if (Auth::user())

                            <li><a href="{{ url('/') }}">Home</a></li>

                            <li><a href="{{ url('my-account') }}">My accounts</a></li>

                            <li><a href="{{ url('order-history') }}">My orders</a></li>

                            <li><a href="{{ url('contact-us') }}">Contact Us</a></li>

                            <li><a href="{{ url('about-us') }}">About Us</a></li>

                            <li><a href="{{ url('user.logout') }}">Logout</a></li>

                        @else

                            <li><a href="{{ url('/') }}">Home</a></li>

                            <li><a href="{{ url('contact-us') }}">Contact Us</a></li>

                            <li><a href="{{ url('about-us') }}">About Us</a></li>

                        @endif

                    </ul>

                    <div class="subscribe" data-aos="zoom-in" data-aos-duration="2000">

                    <h3>NEWSLETTER SIGN UP</h3>

                    <form action>

                        <div class="form">

                            <input type="email" placeholder="Enter your email address" required>

                            <button type="submit"><i class="bi bi-send"></i></button>

                        </div>

                    </form>

                </div>

                </div>

            </div> -->

        </div>

        <!-- <div class="row justify-content-center">

            <div class="col-md-4"></div>

            <div class="col-md-4"></div>

            <div class="col-md-4">

                

            </div>

        </div> -->

        <hr>

        <div class="row py-5 align-items-center">

            <div class="col-md-8">

                <div class="ftrbtm">

                    <p>@if($footer !=null ) {!! $footer->copy_right_text !!} @endif</p>

                </div>

            </div>

            <div class="col-md-4">

                <div class="ftrlogo">
                    @if($footer !=null && $footer->foot_img != null)
                    <img src="{{ asset('uploads/foot_img/'.$footer->foot_img) }}" alt="">
                    @else
                    <img src="{{ asset('assets/images/ftr-logo.png') }}" alt="">
                    @endif
                </div>

            </div>

        </div>

    </div>

</section>





<!-- quick view modal -->

<div class="modal fade prdct_mdl" id="quickViewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"

    aria-hidden="true">

    <div class="modal-dialog modal-lg" role="document">

        <div class="modal-content">

            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="quickViewModalClose()">

                    <span aria-hidden="true">&times;</span>

                </button>

            </div>

            <div class="modal-body">

                <div class="container">

                    <div class="row">

                        <div class="col-md-6">

                            <div class="owl-carousel imggry_carousel owl-theme" id="prodImages">



                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="productTextHolder overflow-hidden">

                                <h2 class="fwEbold mb-2" id="prodName">Wrought Iron Bench</h2>

                                <ul class="list-unstyled ratingList d-flex flex-nowrap mb-2" id="prodRating">

                                    <li class="mr-2"><a href="javascript:void(0);"><i class=" far fa-star "></i></a>

                                    </li>

                                    <li class="mr-2"><a href="javascript:void(0);"><i class=" far fa-star "></i></a>

                                    </li>

                                    <li class="mr-2"><a href="javascript:void(0);"><i class=" far fa-star "></i></a>

                                    </li>

                                    <li class="mr-2"><a href="javascript:void(0);"><i class=" far fa-star "></i></a>

                                    </li>

                                    <li class="mr-2"><a href="javascript:void(0);"><i class=" far fa-star "></i></a>

                                    </li>

                                    <li id="prodReviewCount">( 0 customer reviews )</li>

                                </ul>

                                <strong class="price d-block mb-5 text-green" id="prodRate">Rs. 12999</strong>

                                <p class="mb-5"></p>

                                {{-- <p>Size -&nbsp;127 cm x 79 cm x 58 cm</p> --}}

                                <ul id="prodAdditionalDetails">

                                </ul>

                                {{-- <p>&nbsp;(3 Seaters)</p> --}}

                                <p></p>

                                <ul class="list-unstyled productInfoDetail mb-5 overflow-hidden">

                                    <!--<li class="mb-2">Product Code: <span>FA008</span></li>-->

                                    <li class="mb-2">Quantity: <span id="prodQuantity">

                                            In Stock

                                        </span>

                                    </li>

                                    {{-- <li class="mb-2">Shipping tax: <span>

                                            0

                                        </span>

                                    </li> --}}

                                </ul>

                                <input type="hidden" id="prodId">

                                <div class="holder overflow-hidden d-flex flex-wrap mb-6">

                                    <input type="number" placeholder="1" id="cart_quantity" value="1"

                                        min="1" max="1000000000">

                                    <a href="javascript:void(0);"

                                        class="btn btnTheme btnShop fwEbold text-white md-round py-3 px-4 py-md-3 px-md-4"

                                        onclick="return beforeAddToCart()">Add

                                        To Cart <i class="fas fa-arrow-right ml-2"></i></a>

                                    <a href="javascript:void(0);" onclick="warningAlert()"

                                        class="icon-heart btn btnTheme ml-1 fwEbold text-white md-round py-3 px-4 py-md-3 px-md-4"></a>

                                </div>

                                <ul class="list-unstyled socialNetwork d-flex flex-wrap mb-4">

                                    <li class="text-uppercase mr-5">SHARE THIS PRODUCT:</li>

                                    <li class="mr-4"><a

                                            href="https://www.facebook.com/sharer/sharer.php?u=https://greenmall.mypickmyvote.com/product-details/wrought-iron-bench"

                                            target="_blank" class="fab fa-facebook-f"></a></li>

                                    <!--<li class="mr-4"><a href="javascript:void(0);" class="fab fa-google-plus-g"></a></li>-->

                                    <li class="mr-4"><a

                                            href="https://twitter.com/intent/tweet?url=https://greenmall.mypickmyvote.com/product-details/wrought-iron-bench"

                                            target="_blank" class="fab fa-twitter"></a></li>

                                    <li class="mr-4"><a

                                            href="https://pinterest.com/pin/create/button/?url=https://greenmall.mypickmyvote.com/product-details/wrought-iron-bench"

                                            target="_blank" class="fab fa-pinterest-p"></a></li>

                                </ul>

                                <!-- category -->

                                <ul class="list-unstyled productInfoDetail mb-0">

                                    <li class="mb-2">Categories: <a href="javascript:void(0);"

                                            id="prodCategory">Garden

                                            Furniture</a></li>

                                    <!--<li>Brand: <a href="javascript:void(0);">KFC</a></li>-->

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <!--<div class="modal-footer">-->

            <!--  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->

            <!--  <button type="button" class="btn btn-primary">Save changes</button>-->

            <!--</div>-->

        </div>

    </div>

</div>



<!-- ---------------Footer Section End----------- -->

<!-- Sohail END -->

</body>



<!-- AOS JS  -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>

    AOS.init();

</script>

<!-- Bootstrap JS CDN -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"

    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">

</script>



<!-- jquery min-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"

    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="

    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!--<script src="{{ asset('assets/js/stellarnav.min.js') }}"></script>-->

<script type="text/javascript">

    // jQuery(document).ready(function($) {

    //     jQuery('.stellarnav').stellarNav({

    //         breakpoint: 960,

    //         position: 'right',

    //         phoneBtn: '18009997788',

    //         locationBtn: 'https://www.google.com/maps'

    //     });

    // });

</script>



<!-- include bootstrap popper JavaScript -->

<script src="{{ asset('front_end/js/popper.min.js') }}"></script>

<!-- include bootstrap JavaScript -->

<script src="{{ asset('front_end/js/bootstrap.min.js') }}"></script>

<!-- include custom JavaScript -->

<script src="{{ asset('front_end/js/jqueryCustome.js') }}"></script>

<script type="text/javascript" src="{{ asset('front_end/js/stellarnav.min.js') }}"></script>

<script src="{{ asset('front_end/js/cart.js') }}"></script>

<script src="{{ asset('front_end/js/wish-list.js') }}"></script>

<script src="{{ asset('front_end/js/product.js') }}"></script>



<!---------Owl Caraousel Script------------>



<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>



<script type="text/javascript">

    jQuery(document).ready(function($) {

        jQuery('.stellarnav').stellarNav({

            theme: 'dark',

            breakpoint: 960,

            position: 'right',

            phoneBtn: '18009997788',

            locationBtn: 'https://www.google.com/maps'

        });

    });

</script>

<script>

    $(document).ready(function() {

        $drawerRight = $('.cart-drawer-right');

        $cart_list = $('.cart-drawer-btn, .cart-drawer-close-btn');

        $cart_list.click(function() {

            $(this).toggleClass('active');

            $('body').toggleClass('cart-drawer-pushtoleft');

            $drawerRight.toggleClass('cart-drawer-open');

        });

    });

</script>

<script>

    $(document).ready(function() {

        $(".icon-search").click(function() {

            $(".pseudo-search").toggle(500);

            $(".searchLi").hide();

        });

    });

</script>





<!-- warning alert -->

<script>

    function warningAlert(page = "na") {

        Swal.fire({

            icon: 'error',

            title: 'You are not Logedin, Please Login First',

            showDenyButton: false,

            showCancelButton: true,

            confirmButtonText: 'Login',

            // denyButtonText: `Don't save`,

        }).then((result) => {

            /* Read more about isConfirmed, isDenied below */

            if (result.isConfirmed) {

                if (page == "pc") {

                    window.location.href = "../../signup";

                } else {

                    window.location.href = "../signup";

                }



                // Swal.fire('Saved!', '', 'success')

            } else if (result.isDenied) {

                Swal.fire('Changes are not saved', '', 'info')

            }

        })

    }

</script>





<!-- audio -->

<script type="text/javascript">

    var track = document.getElementById('track');



    var controlBtn = document.getElementById('play-pause');



    function playPause() {

        if (track.paused) {

            track.play();

            //controlBtn.textContent = "Pause";

            controlBtn.className = "pause";

        } else {

            track.pause();

            //controlBtn.textContent = "Play";

            controlBtn.className = "play";

        }

    }



    controlBtn.addEventListener("click", playPause);

    track.addEventListener("ended", function() {

        controlBtn.className = "play";

    });

</script>



<!---------Zoom in-------------->



<script>

    function zoom(e) {

        var zoomer = e.currentTarget;

        e.offsetX ? offsetX = e.offsetX : offsetX = e.touches[0].pageX

        e.offsetY ? offsetY = e.offsetY : offsetX = e.touches[0].pageX

        x = offsetX / zoomer.offsetWidth * 100

        y = offsetY / zoomer.offsetHeight * 100

        zoomer.style.backgroundPosition = x + '% ' + y + '%';

    }

</script>



<script>

    var owlCarousel = $('.owl-carousel.catgry_carousel').owlCarousel({

        loop: true,

        margin: 10,

        nav: false,

        dots: false,

        // autoplay:true,

        slideTransition: 'linear',

        // autoplayTimeout: 4000,

        // autoplaySpeed: 4000,

        responsive: {

            0: {

                items: 1

            },

            600: {

                items: 1

            },

            1000: {

                items: 1

            }

        }

    })

</script>





<!-- Fancybox JS -->

<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>

<!-- Gallery JS -->

<script>

    Fancybox.bind("[data-fancybox]", {

        // Custom options for all galleries

    });

</script>



<!-- Product Compare -->

<script>

    function productCompare(product_id, page = "na") {



        $.ajax({

            type: "GET",

            url: '{{ url('product/compare') }}' + '/' + product_id,

            success: function(response) {

                console.log(response);

                $("#productCompare_modal").modal('show');

                $("#productCompare_modal .modal-body").append(response.view);

            }

        });

    }

</script>





<script>

    toastr.options = {

        "closeButton": true,

        "progressBar": true

    }



    @if (Session::has('success'))

        toastr.success("{{ session('success') }}");

    @endif



    @if (Session::has('error'))

        toastr.error("{{ session('error') }}");

    @endif



    @if (Session::has('login_error'))

        toastr.error("{{ session('login_error') }}");

    @endif



    @if (Session::has('info'))

        toastr.info("{{ session('info') }}");

    @endif



    @if (Session::has('warning'))

        toastr.warning("{{ session('warning') }}");

    @endif



    @if ($errors->any())

        @foreach ($errors->all() as $error)

            toastr.error("{{ $error }}");

        @endforeach

    @endif



    function quickViewProduct(productId) {

        $.ajax({

            type: "GET",

            url: '{{ url('single/product/details') }}' + '/' + productId,

            success: function(response) {

                // console.log(response.details);

                $('#quickViewModal').modal('show');

                $('#prodId').val(response.details.id);

                $('#prodName').text(response.details.name);

                $('#prodRate').text('$' + response.details.price);

                $('#prodQuantity').text(response.quantity);

                $('#prodCategory').text(response.details.category.name);

                $('#prodAdditionalDetails').html(response.details.short_description);



                var imageContainer = $('#prodImages');



                $.each(response.details.product_galleries, function(index, gallery) {

                    var imageSrc = '{{ asset('admin/product/gallery') }}' + '/' + gallery

                        .gallery_image;



                    // Create an <img> element and set its attributes

                    var image = $('<img>', {

                        src: imageSrc

                    });



                    var str = '<div class="item"><div class="glryimg">';

                    // Create an image element and append it to the image container

                    str += image;

                    str += '</div></div>';



                    // Append the image to the image container

                    imageContainer.append(image);

                });



                imageContainer.owlCarousel({

                    loop: true,

                    margin: 10,

                    nav: false,

                    dots: false,

                    // autoplay: true,

                    slideTransition: 'linear',

                    // autoplayTimeout: 4000,

                    // autoplaySpeed: 4000,

                    responsive: {

                        0: {

                            items: 1

                        },

                        600: {

                            items: 1

                        },

                        1000: {

                            items: 1

                        }

                    }

                })



                // Trigger the refresh event to reload the Owl Carousel

                // imageContainer.trigger('refresh.owl.carousel');



                // console.log(owlCarousel);



                owlCarousel.trigger('refresh.owl.carousel');

            }

        });

    }



    function beforeAddToCart() {

        prodId = $('#prodId').val();

        // let var currentUrl = window.location.href;

        // var isWordPresent = currentUrl.indexOf('product-category');

        // if(isWordPresent == true){

        addToCart(prodId, 'multiple', 'pc');

        // }else{

        //     addToCart(prodId, 'multiple');

        // }

    }

    

    function quickViewModalClose(){

        $('#quickViewModal').modal('hide');

    }

</script>

<script>
    $(".filterBtn").click(function(){
        $(".asidesecty").toggleClass("open");
    });
    $(".forClose").click(function(){
        $(".asidesecty").removeClass("open");
    });
</script>
<!-- tooltip -->
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>

<script>
    window.Promise ||
    document.write(
        '<script src="https://cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.min.js"><\/script>'
    )
    window.Promise ||
    document.write(
        '<script src="https://cdn.jsdelivr.net/npm/eligrey-classlist-js-polyfill@1.2.20171210/classList.min.js"><\/script>'
    )
    window.Promise ||
    document.write(
        '<script src="https://cdn.jsdelivr.net/npm/findindex_polyfill_mdn"><\/script>'
    )
</script>

<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

<script>
    var graphData = JSON.parse({!! json_encode($graphData) !!});
    var categories = [];
    var seriesData1 = [];
    var seriesData2 = [];

    
    graphData.forEach(function (item) {
        categories.push(item.key);
        seriesData1.push([parseFloat(item.value1)]);
        seriesData2.push([parseFloat(item.value2)]);
    });

    var sd1 = seriesData1.map(function(subArray) {
         return subArray[0];
     });

    var sd2 = seriesData2.map(function(subArray) {
         return subArray[0];
     });


        var category = categories.map(function (item) {
        // Split each string into an array of words
        var words = item.split(' ');
        
        // Iterate through the words and handle splitting longer words
        var result = [];
        var currentLine = '';

        for (var i = 0; i < words.length; i++) {
            if (currentLine.length + words[i].length <= 15) {
            // Add the word to the current line
            currentLine += (currentLine.length > 0 ? ' ' : '') + words[i];
            } else {
            // Start a new line with the current word
            result.push(currentLine);
            currentLine = words[i];
            }
        }

        // Add the last line if it's not empty
        if (currentLine.length > 0) {
            result.push(currentLine);
        }

        return result;
        });

        var options = {
          series: [

         {
            data:sd1,
          },{
            data:sd2,
          }
        ],
          chart: {
          type: 'bar',
          height: 500
        },
        colors:['#4a8bfc', '#f03627'],
        plotOptions: {
          bar: {
            horizontal: false,
            dataLabels: {
              position: 'top',
            },
          }
        },
    
        dataLabels: {
          enabled: true,
          offsetX:30,
          style: {
            fontSize: '12px',
            colors: ['#fff']
          }
        },
        stroke: {
          show: true,
          width: 1,
          colors: ['#333']
        },
        legend: {
            customLegendItems: [
                'OTR = cm<sup>3</sup> / (m<sup>2</sup> - 24hr)',
                'MVTR = cm<sup>3</sup> / (m<sup>2</sup> - 24hr)'
            ]
        },
        tooltip: {
          shared: true,
          intersect: false
        },
        xaxis: {

            categories: category
        },
        yaxis: {
            labels: {
                maxWidth: 500,
            }
        },
        };

        console.log(options);

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();

        function changeSvgColor() {
            $('#chart').find('.apexcharts-text tspan').css('fill', '#ffc21f');
            $('#chart').find('.apexcharts-text tspan').css('font-size', '13px');
            $('#chart').find('.apexcharts-legend-text').css('color', '#ffc21f');
             $('#chart').find('text').css('white-space', 'wrap');
        }
      
        $(window).on('load', function() {
            changeSvgColor();
        });

    </script>

</html>

