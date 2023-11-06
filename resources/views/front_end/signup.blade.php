<x-userHeader />
<main>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
         integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
         crossorigin="anonymous">
         
         
   @include('front_end.commons.session-msg')

    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-9">
                    <div class="loginsec" id="loginsec">
         <div class="form-loginsec sign-up-loginsec">

            <form action="{{ route('user.register.action') }}" method="post">
               @csrf

               <h1>Create Account</h1>

               <input type="text" placeholder="Name" name="name" />
               @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
               @endif

               <input type="email" placeholder="Email" name="email" />
               @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
               @endif

               <input type="password" placeholder="Password" name="password" />
               @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
               @endif

               <button>Sign Up</button>
            </form>
         </div>
         <div class="form-loginsec sign-in-loginsec">
            <form action="{{ route('user.login.action') }}" method="post">
               @csrf

               <h1>Sign in</h1>
               <span>or use your account</span>
               <input type="email" placeholder="Email" name="email" />
               <input type="password" placeholder="Password" name="password"/>
               <a href="{{ url('forgot-password') }}">Forgot your password?</a>
               <button type="submit">Sign In</button>
            </form>
         </div>
         <div class="overlay-loginsec">
            <div class="overlay">
               <div class="overlay-panel overlay-left">
                  <h1>Welcome Back!</h1>
                  <p>To keep connected with us please login with your personal info</p>
                  <button class="ghost" id="signIn">Sign In</button>
               </div>
               <div class="overlay-panel overlay-right">
                  <h1>Hello, Friend!</h1>
                  <p>Enter your personal details and start journey with us</p>
                  <button class="ghost" id="signUp">Sign Up</button>
               </div>
            </div>
         </div>
      </div>
                </div>
            </div>
        </div>
    </section>
    
    </main>


      <!-------- Custom JS----------> 
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>   
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
      <script>
         const signUpButton = document.getElementById('signUp');
         const signInButton = document.getElementById('signIn');
         const loginsec = document.getElementById('loginsec');
         
         signUpButton.addEventListener('click', () =>
         loginsec.classList.add('right-panel-active'));
         
         signInButton.addEventListener('click', () =>
         loginsec.classList.remove('right-panel-active'));
      </script> 

<x-userFooter />