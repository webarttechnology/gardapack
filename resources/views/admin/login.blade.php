@extends('admin.commons.login_header')
@section('content')

@php
           $app_logo = App\Models\Settings::where('key', 'app_logo')->first();
@endphp

<div class="wrapper">
    <div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
        <div class="container-fluid">
            <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
                <div class="col mx-auto">
                    <div class="mb-4 text-center">

                            @if($app_logo != null)
                            @if($app_logo->input_type == "Text")
                            {{ $app_logo->value }}
                            @else
                            <img src="{{asset('settings/'.$app_logo->key.'/'.$app_logo->value)}}" width="150" alt="">
                            @endif
                            @else
                            <img src="{{asset('images/webart.png')}}" width="150" alt="">
                            @endif

                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="border p-4 rounded">
                                <div class="text-center">
                                    <h3 class="#">Sign in</h3>
                                    <!-- <p>Don't have an account yet? <a href="{{ url('admin\register') }}">Sign up here</a> -->
                                    </p>
                                </div>
                                       
                                </div>
                                <div class="form-body">

                                    @if(Session::has('error'))
                                    <div class="alert alert-danger">
                                        {{ Session::get('error') }}
                                        @php
                                        Session::forget('error');
                                        @endphp
                                    </div>
                                    @endif


                                    <form class="row g-3" action="{{url('admin\post-login')}}" method="post">
                                        @csrf

                                        <div class="col-12">
                                            <label for="inputEmailAddress" class="form-label">Email Address</label>
                                            <input type="email" class="form-control" id="inputEmailAddress"
                                                placeholder="Email Address" name="email" required>
                                            
                                        @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif

                                        </div>
                                        <div class="col-12">
                                            <label for="inputChoosePassword" class="form-label">Enter Password</label>
                                            <div class="input-group" id="show_hide_password">
                                                <input type="password" class="form-control border-end-0"
                                                    id="inputChoosePassword"
                                                    placeholder="Enter Password" name="password" required> <a
                                                    href="javascript:;" class="input-group-text bg-transparent"><i
                                                        class='bx bx-hide'></i></a>

                                            @if ($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                            @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            
                                        </div>
                                        <div class="col-md-6 text-end"> <a
                                                href="{{ url('admin\forgot-password') }}">Forgot Password ?</a>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-grid">
                                                <button type="submit" class="btn btn-primary"><i
                                                        class="bx bxs-lock-open"></i>Sign in</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
    </div>
</div>

@endsection