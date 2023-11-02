@extends('admin.commons.dashboard_header')
@section('content')

<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">

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

<div class="row">
            <div class="col-xl-9 mx-auto">
                <h6 class="mb-0 text-uppercase">Save Profile Image</h6>
                <hr />

                <form action="{{url('admin/save/your/profile', 'image')}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="card">
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">Profile Image</label>
                                <br>
                                @if($details->profile_img == null)
                                   <img src="{{asset('pages/featured_img/no_imge_found.jpg')}}" height="100" width="175" class="mb-2" alt="">
                                @else
                                   <img src="{{asset('admin/profile_img/'.$details->profile_img)}}" height="100" width="175" class="mb-2" alt="">
                                @endif
                                <br>
                                <input type="file" class="form-control datepicker" name="profile_img" required />
                                @if ($errors->has('profile_img'))
                                <span class="text-danger">{{ $errors->first('profile_img') }}</span>
                                @endif
                        </div>
                        <br>

                        <div class="">
                            <input type="submit" class="form-control btn btn-primary" value="Save" />
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