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
               <a class="postprt" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                Services <i class="fa fa-angle-down" aria-hidden="true"></i>
            </a>
          </li>
         <div class="collapse" id="collapseExample">
            <div class="card card-body">
            @foreach($categories as $category)
            <ul>	
              <li><a class="dropdown-item" href="{{ url('service-details', $category->slug) }}">{{ $category->name }}</a></li>
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

<!-- include jQuery library -->
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
    $('.owl-carousel.catgry_carousel').owlCarousel({
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
            items:3
        },
        1000:{
            items:8
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

</body>

</html>