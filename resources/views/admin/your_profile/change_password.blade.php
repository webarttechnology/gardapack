@extends('admin.commons.dashboard_header')
@section('content')

<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">


        </div>
        <!--end breadcrumb-->
        @if(Session::has('password_success'))
        <div class="alert alert-success">
            {{ Session::get('password_success') }}
            @php
            Session::forget('password_success');
            @endphp
        </div>
        @endif


        <div class="row">
            <div class="col-xl-9 mx-auto">
                <h6 class="mb-0 text-uppercase">Change Password</h6>
                <hr />

                <form action="{{ url('admin/change/password') }}" method="post" enctype= "multipart/form-data">
                    @csrf

                    <div class="card">
                        <div class="card-body">

                            <div class="mb-3">
                                <label class="form-label">New Password</label>
                                <input type="password" class="form-control datepicker" name="new_password" required />
                                @if ($errors->has('new_password'))
                                <span class="text-danger">{{ $errors->first('new_password') }}</span>
                                @endif
                            </div>
                            <br>

                            <div class="">
                                <label class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" name="conf_password" required />
                                @if ($errors->has('conf_password'))
                                <span class="text-danger">{{ $errors->first('conf_password') }}</span>
                                @endif
                            </div>
                            <br>

                            <div class="">
                                <input type="submit" class="form-control btn btn-primary px-4" value="Change Password" />
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
        <!--end row-->
    </div>
</div>

@endsection