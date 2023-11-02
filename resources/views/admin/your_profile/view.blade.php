@extends('admin.commons.dashboard_header')
@section('content')

<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Your Profile</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Your Profile</li>
                    </ol>
                </nav>
            </div>
            
        </div>
        <!--end breadcrumb-->

        @if(Session::has('profile_save'))
        <div class="alert alert-success">
            {{ Session::get('profile_save') }}
            @php
            Session::forget('profile_save');
            @endphp
        </div>
        @endif

        <div class="container">
            <div class="main-body">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">

                                    @if($details->profile_img == null)
                                    <img src="{{asset('pages/featured_img/no_imge_found.jpg')}}" height="100"
                                        width="175" alt="">
                                    @else
                                    <img src="{{asset('admin/profile_img/'.$details->profile_img)}}" height="100"
                                        width="175" alt="">
                                    @endif

                                    <div class="mt-3">
                                        <h4>{{ $details->first_name }} {{ $details->last_name }}</h4>
                                        <p class="text-secondary mb-1">
                                            {{ ucfirst(str_replace('_', ' ', $details->type)) }}</p>
                                        <p class="text-muted font-size-sm">{{ $details->email }}</p>
                                        <a href="{{ url('admin/select/your/profile/image') }}"><button
                                                class="btn btn-outline-primary">Change Profile Image</button></a>
                                    </div>
                                </div>
                                <hr class="my-4" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <form action="{{ url('admin/save/your/profile', 'details') }}" method="post">
                            @csrf

                            <div class="card">
                                <div class="card-body">

                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">FIrst Name</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="text" name="first_name" class="form-control"
                                                value="{{ $details->first_name }}" />
                                        </div>
                                        @if ($errors->has('first_name'))
                                        <span class="text-danger">{{ $errors->first('first_name') }}</span>
                                        @endif
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Last Name</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="text" name="last_name" class="form-control"
                                                value="{{ $details->last_name }}" />
                                        </div>
                                        @if ($errors->has('last_name'))
                                        <span class="text-danger">{{ $errors->first('last_name') }}</span>
                                        @endif
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Email</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="text" name="email" value="{{ $details->email }}"
                                                class="form-control" value="john@example.com" />
                                        </div>
                                        @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>


                                    <div class="row">
                                        <div class="col-sm-3"></div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="submit" class="btn btn-primary px-4" value="Save Changes" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end page wrapper -->

@endsection