@extends('admin.commons.dashboard_header')
@section('content')


<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">


        </div>
        <!--end breadcrumb-->
        @if(Session::has('admin_success'))
        <div class="alert alert-success">
            {{ Session::get('admin_success') }}
            @php
            Session::forget('admin_success');
            @endphp
        </div>
        @endif


        @if(Session::has('existing_error'))
        <div class="alert alert-danger">
            {{ Session::get('existing_error') }}
            @php
            Session::forget('existing_error');
            @endphp
        </div>
        @endif


        <!-- for add page -->
        @if($page == "add")


        <div class="row">
            <div class="col-xl-9 mx-auto">
                <h6 class="mb-0 text-uppercase">Add Admins</h6>
                <hr />

                <form action="{{url('admin/sub-admin/post/save')}}" method="post">
                    @csrf

                    <div class="card">
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">First Name</label>
                                <input type="text" class="form-control datepicker" name="first_name" required />
                                <input type="hidden" value="0" name="id">
                                @if ($errors->has('first_name'))
                                <span class="text-danger">{{ $errors->first('first_name') }}</span>
                                @endif
                            </div>
                            <br>

                            <div class="mb-3">
                                <label class="form-label">Last Name</label>
                                <input type="text" class="form-control datepicker" name="last_name" required />
                                @if ($errors->has('last_name'))
                                <span class="text-danger">{{ $errors->first('last_name') }}</span>
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
                                <label class="form-label">Status</label>
                        
                                <select class="form-control" name="status">
                                        <option value="active">Active</option>
                                        <option value="inactive">Inactive</option>
                                </select>

                                @if ($errors->has('status'))
                                <span class="text-danger">{{ $errors->first('status') }}</span>
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
                <h6 class="mb-0 text-uppercase">Edit Admin</h6>
                <hr />

                <form action="{{url('admin/sub-admin/post/save')}}" method="post">
                    @csrf

                    <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">First Name</label>
                                <input type="text" class="form-control datepicker" name="first_name" value="{{ $details->first_name }}" required />
                                <input type="hidden" value="{{$details->id}}" name="id">
                                @if ($errors->has('first_name'))
                                <span class="text-danger">{{ $errors->first('first_name') }}</span>
                                @endif
                            </div>
                            <br>

                            <div class="mb-3">
                                <label class="form-label">Last Name</label>
                                <input type="text" class="form-control datepicker" value="{{ $details->last_name }}" name="last_name" required />
                                @if ($errors->has('last_name'))
                                <span class="text-danger">{{ $errors->first('last_name') }}</span>
                                @endif
                            </div>
                            <br>

                            <div class="">
                                <label class="form-label">Email</label>
                                <input type="text" class="form-control" name="email" value="{{ $details->email }}" required />
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <br>



                            <div class="">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" />
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <br>

                            @if (Auth::guard('admin')->user()->type == "admin")
                            <div class="">
                                <label class="form-label">Status</label>
                        
                                <select class="form-control" name="status">
                                    @if ($details->status == "active")
                                     <option value="active">Active</option>
                                     <option value="inactive">Inactive</option>
                                    @else
                                     <option value="inactive">Inactive</option>
                                     <option value="active">Active</option> 
                                    @endif
                                </select>

                                @if ($errors->has('status'))
                                <span class="text-danger">{{ $errors->first('status') }}</span>
                                @endif
                            </div>
                            <br>
                            @endif

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