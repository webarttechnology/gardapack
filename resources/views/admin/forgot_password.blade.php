@extends('admin.commons.login_header')
@section('content')

@if(Session::has('password_success'))
<div class="alert alert-success">
    {{ Session::get('password_success') }}
    @php
    Session::forget('password_success');
    @endphp
</div>
@endif

@if(Session::has('unauthenticated'))
<div class="alert alert-danger">
    {{ Session::get('unauthenticated') }}
    @php
    Session::forget('unauthenticated');
    @endphp
</div>
@endif

<form action="{{ url('admin/post/forgot/password') }}" method="post">
    @csrf

    <div class="wrapper">
        <div class="authentication-forgot d-flex align-items-center justify-content-center">
            <div class="card forgot-box">

                <div class="card-body">
                    <div class="p-4 rounded  border">
                        <div class="text-center">
                            <img src="{{asset('assets/images/icons/forgot-2.png')}}" width="100" alt="" />
                        </div>
                        <h4 class="mt-5 font-weight-bold">Forgot Password?</h4>
                        <p class="text-muted">Enter your registered email ID to reset the password</p>
                        <div class="my-4">
                            <label class="form-label">Email id</label>
                            <input type="email" class="form-control form-control-lg" name="email"
                                placeholder="example@user.com" required />
                            @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>

                        <div class="my-4">
                            <label class="form-label">New Password</label>
                            <input type="password" class="form-control form-control-lg" name="new_password"
                                placeholder="New Password" required />
                            @if ($errors->has('new_password'))
                            <span class="text-danger">{{ $errors->first('new_password') }}</span>
                            @endif
                        </div>

                        <div class="my-4">
                            <label class="form-label">Confirm Password</label>
                            <input type="password" class="form-control form-control-lg" name="conf_password"
                                placeholder="Confirm Password" required />
                            @if ($errors->has('conf_password'))
                            <span class="text-danger">{{ $errors->first('conf_password') }}</span>
                            @endif
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary btn-lg">Change Password</button> <a
                                href="{{ url('admin\login') }}" class="btn btn-light btn-lg"><i
                                    class='bx bx-arrow-back me-1'></i>Back to Login</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</form>

@endsection