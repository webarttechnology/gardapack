<x-userHeader />
<main>         
   
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-5">
                    <div class="forgotPass" id="loginsec">
                        <div class="form-loginsecdgd sign-in-loginsecd">
                            
                        @include('front_end.commons.session-msg')

                        <form action="{{ url('forgot-password-action') }}" method="post">
                             @csrf
                           
                            <h1>Change Password</h1>
                            
                            <input type="email" placeholder="Enter Your Email" name="email">
                            
                            <button type="submit">Change Password</button>
                            <a href="{{ route('user.signup') }}" class="ml-2">Signin</a>
                         </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</main>

      
<x-userFooter />