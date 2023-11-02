@extends('admin.commons.dashboard_header')
@section('content')


<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">


        </div>
        <!--end breadcrumb-->
        @if(Session::has('user_success'))
        <div class="alert alert-success">
            {{ Session::get('user_success') }}
            @php
            Session::forget('user_success');
            @endphp
        </div>
        @endif


        <!-- for add page -->
        @if($page == "add")


        <div class="row">
            <div class="col-xl-9 mx-auto">
                <h6 class="mb-0 text-uppercase">Add User</h6>
                <hr />

                <form action="{{url('admin/post/save/user')}}" method="post">
                    @csrf

                    <div class="card">
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control datepicker" name="name" required />
                                <input type="hidden" value="0" name="id">
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <br>

                            <div class="">
                                <label class="form-label">Email</label>
                                <input type="text" class="form-control" name="email" required />
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <br>


                            <div class="">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" required />
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <br>


                            <div class="">
                                <input type="submit" class="form-control btn btn-primary px-4" value="Add" />
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
        <!--end row-->
    </div>
</div>


<!-- for edit page -->
@else


<div class="row">
            <div class="col-xl-9 mx-auto">
                <h6 class="mb-0 text-uppercase">Edit User</h6>
                <hr />

                <form action="{{url('admin/post/save/user')}}" method="post">
                    @csrf

                    <div class="card">
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control datepicker" name="name" value="{{ $user->name }}" required />
                                <input type="hidden" value="{{ $user->id }}" name="id">
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <br>

                            <div class="">
                                <label class="form-label">Email</label>
                                <input type="text" class="form-control" name="email" value="{{ $user->email }}" required />
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <br>

                            <div class="">
                                <input type="submit" class="form-control btn btn-primary px-4" value="Save" />
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
        <!--end row-->
    </div>
</div>

@endif

@endsection