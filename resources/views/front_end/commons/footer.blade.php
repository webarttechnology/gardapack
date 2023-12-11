<!-- footer -->
<footer id="footer" class="container-fluid overflow-hidden px-lg-20">
    <div class="copyRightHolder text-center pt-lg-5 pb-lg-4 py-3">
        <p class="mb-0 text-white">Coppyright 2023 by <a href="javascript:void(0);">Green Mall</a> - All right reserved</p>
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
            <li><a href="#">About Us</a></li>
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
            <ul>	
              <li><a class="dropdown-item" href="#">Landscaping Services</a></li>
              <li><a class="dropdown-item" href="#">Rooftop Gardening</a></li>
            </ul>	
            </div>
          </div>
            <li><a href="#">Faq</a></li>
            <li><a href="#">Gallery</a></li>
            <li><a href="#">Contact us</a></li>
            
            
            @if(auth()->user())
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


<!-- warning alert -->
<script>
    function warningAlert(){
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
                window.location.href = "../signup";
                // Swal.fire('Saved!', '', 'success')
            } else if (result.isDenied) {
                Swal.fire('Changes are not saved', '', 'info')
            }
        })
    }
</script>
</body>

</html>