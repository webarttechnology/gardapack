<!-- footer -->
<footer id="footer" class="container-fluid overflow-hidden px-lg-20">
    <div class="copyRightHolder text-center pt-lg-5 pb-lg-4 py-3">
        <p class="mb-0">Coppyright 2023 by <a href="javascript:void(0);">Green Mall</a> - All right reserved</p>
    </div>
</footer>
<div class="cart-drawer cart-drawer-right">
    <h3>Menu</h3>
    <div class="cart-drawer-close-btn">
        X
    </div>
    <div class="manuItem">
        <ul>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('about-us') }}">About Us</a></li>
            <!-- <div class="dropdown">
               <li class="text-white dropdown-toggle listsec" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Services
               </li>
               <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
             <a class="dropdown-item" href="#">Landscaping Services</a>
             <a class="dropdown-item" href="#">Rooftop Gardening</a>
            </div>
           </div> -->
            <li>
                <a class="postprt" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false"
                    aria-controls="collapseExample">
                    Services <i class="fa fa-angle-down" aria-hidden="true"></i>
                </a>
            </li>
            <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    @foreach($categories as $category)
                    <ul>
                        <li><a class="dropdown-item" href="{{ url('service-details', $category->slug) }}">{{
                                $category->name }}</a></li>
                    </ul>
                    @endforeach
                </div>
            </div>
            <li><a href="{{ url('faq') }}">Faq</a></li>
            <li><a href="{{ url('gallery') }}">Gallery</a></li>
            <li><a href="{{ url('contact-us') }}">Contact us</a></li>


            @if(auth()->user())
            <li><a href="#">My Order</a></li>
            <li><a href="{{ route('user.logout') }}">Signout</a></li>
            @else
            <li><a href="{{ url('signup') }}">Signup</a></li>
            @endif
        </ul>
    </div>
</div>
</div>

{{-- Compare Modal --}}
<div class="modal" id="productCompare_modal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Modal Title</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>


<!-- quick view modal -->
<div class="modal fade prdct_mdl" id="quickViewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="owl-carousel imggry_carousel owl-theme" id="prodImages">
                                <div class="item">
                                    <div class="glryimg">
                                        
                                    </div>
                                </div>
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
                                <input type="hidden" id="prodId" >
                                <div class="holder overflow-hidden d-flex flex-wrap mb-6">
                                    <input type="number" placeholder="1" id="cart_quantity" value="1" min="1" max="1000000000">
                                    <a href="javascript:void(0);"
                                        class="btn btnTheme btnShop fwEbold text-white md-round py-3 px-4 py-md-3 px-md-4" onclick="return beforeAddToCart()">Add
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
                                    <li class="mb-2">Categories: <a href="javascript:void(0);" id="prodCategory">Garden
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

<!-- include jQuery library -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src="{{ asset('front_end/js/jquery-3.4.1.min.js')}}"></script>
<!-- include bootstrap popper JavaScript -->
<script src="{{ asset('front_end/js/popper.min.js')}}"></script>
<!-- include bootstrap JavaScript -->
<script src="{{ asset('front_end/js/bootstrap.min.js')}}"></script>
<!-- include custom JavaScript -->
<script src="{{ asset('front_end/js/jqueryCustome.js')}}"></script>
<script type="text/javascript" src="{{ asset('front_end/js/stellarnav.min.js')}}"></script>
<script src="{{asset('front_end/js/cart.js')}}"></script>
<script src="{{asset('front_end/js/wish-list.js')}}"></script>
<script src="{{asset('front_end/js/product.js')}}"></script>

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
    $(document).ready(function(){
      $(".icon-search").click(function(){
        $(".pseudo-search").toggle(500);
        $(".searchLi").hide();
      });
    });
</script>


<!-- warning alert -->
<script>
    function warningAlert(page = "na"){
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
            if(page == "pc"){
                window.location.href = "../../signup";
            }else{
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
    function zoom(e){
  var zoomer = e.currentTarget;
  e.offsetX ? offsetX = e.offsetX : offsetX = e.touches[0].pageX
  e.offsetY ? offsetY = e.offsetY : offsetX = e.touches[0].pageX
  x = offsetX/zoomer.offsetWidth*100
  y = offsetY/zoomer.offsetHeight*100
  zoomer.style.backgroundPosition = x + '% ' + y + '%';
}
</script>

<script>
    var owlCarousel = $('.owl-carousel.catgry_carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        dots:false,
        autoplay:true,
        slideTransition: 'linear',
        autoplayTimeout: 4000,
        autoplaySpeed: 4000,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
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
    function productCompare(product_id, page="na"){

    $.ajax({
    type: "GET",  
        url:'{{ url("product/compare") }}'+'/'+product_id,
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

    function quickViewProduct(productId){
          $.ajax({
            type: "GET",  
                url:'{{ url("single/product/details") }}'+'/'+productId,
                success: function(response) {
                    // console.log(response.details);
                    $('#quickViewModal').modal('show');
                    $('#prodId').val(response.details.id);
                    $('#prodName').text(response.details.name);
                    $('#prodRate').text('$'+response.details.price);
                    $('#prodQuantity').text(response.quantity);
                    $('#prodCategory').text(response.details.category.name);
                    $('#prodAdditionalDetails').html(response.details.short_description);

                    var imageContainer = $('#prodImages');

                    $.each(response.details.product_galleries, function (index, gallery) {
                        var imageSrc = '{{ asset('admin/product/gallery') }}' + '/' + gallery.gallery_image;

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
                        loop:true,
                        margin:10,
                        nav:false,
                        dots:false,
                        autoplay:true,
                        slideTransition: 'linear',
                        autoplayTimeout: 4000,
                        autoplaySpeed: 4000,
                        responsive:{
                            0:{
                                items:1
                            },
                            600:{
                                items:1
                            },
                            1000:{
                                items:1
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

   function beforeAddToCart(){
        prodId = $('#prodId').val();
        // let var currentUrl = window.location.href;
        // var isWordPresent = currentUrl.indexOf('product-category');
        // if(isWordPresent == true){
            addToCart(prodId, 'multiple', 'pc');
        // }else{
        //     addToCart(prodId, 'multiple');
        // }
   }
</script>
</body>

</html>