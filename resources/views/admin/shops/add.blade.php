@extends('admin.commons.dashboard_header')
@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">


            </div>
            <!--end breadcrumb-->
            @if (Session::has('cat_success'))
                <div class="alert alert-success">
                    {{ Session::get('cat_success') }}
                    @php
                        Session::forget('cat_success');
                    @endphp
                </div>
            @endif

            @if (Session::has('cat_err'))
                <div class="alert alert-danger">
                    {{ Session::get('cat_err') }}
                    @php
                        Session::forget('cat_err');
                    @endphp
                </div>
            @endif


            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <h6 class="mb-0 text-uppercase">Add Shops</h6>
                    <hr />

                    <form action="{{ route('shops.store') }}" method="post" enctype= "multipart/form-data">
                        @csrf

                        <div class="card">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label class="form-label"> Name *</label>
                                    <input type="text" class="form-control datepicker" placeholder="Name" name="name"
                                        required />
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                                <br>
                                <div class="mb-3">
                                    <label class="form-label"> Address *</label>
                                    <input type="text" class="form-control datepicker" placeholder="Address"
                                        name="address" required />
                                    @if ($errors->has('address'))
                                        <span class="text-danger">{{ $errors->first('address') }}</span>
                                    @endif
                                </div>
                                <br>
                                <div class="mb-3">
                                    <label class="form-label"> Other Address</label>
                                    <input type="text" class="form-control datepicker" placeholder="Address"
                                        name="address2" />
                                    @if ($errors->has('address2'))
                                        <span class="text-danger">{{ $errors->first('address2') }}</span>
                                    @endif
                                </div>
                                <br>
                                <div class="mb-3">
                                    <label class="form-label"> City *</label>
                                    <input type="text" class="form-control datepicker" placeholder="City" name="city"
                                        required />
                                    @if ($errors->has('city'))
                                        <span class="text-danger">{{ $errors->first('city') }}</span>
                                    @endif
                                </div>
                                <br>
                                <div class="mb-3">
                                    <label class="form-label"> State </label>
                                    <input type="text" class="form-control datepicker" placeholder="State"
                                        name="state" />
                                    @if ($errors->has('state'))
                                        <span class="text-danger">{{ $errors->first('state') }}</span>
                                    @endif
                                </div>
                                <br>
                                <div class="mb-3">
                                    <label class="form-label"> Zip Code </label>
                                    <input type="text" class="form-control datepicker" placeholder="Zip Code"
                                        name="zip_code" />
                                    @if ($errors->has('zip'))
                                        <span class="text-danger">{{ $errors->first('zip') }}</span>
                                    @endif
                                </div>
                                <br>
                                <div class="mb-3">
                                    <label class="form-label"> Country* </label>
                                    <input type="text" class="form-control datepicker" placeholder="Country"
                                        name="country" required />
                                    @if ($errors->has('country'))
                                        <span class="text-danger">{{ $errors->first('country') }}</span>
                                    @endif
                                </div>
                                <br>
                                <div class="mb-3">
                                    <label class="form-label"> Latitude *</label>
                                    <input type="text" class="form-control datepicker" placeholder="Latitude"
                                        name="latitude" required />
                                    @if ($errors->has('latitude'))
                                        <span class="text-danger">{{ $errors->first('latitude') }}</span>
                                    @endif
                                </div>
                                <br>
                                <div class="mb-3">
                                    <label class="form-label"> Longitude* </label>
                                    <input type="text" class="form-control datepicker" placeholder="Longitude"
                                        name="longitude" required />
                                    @if ($errors->has('longitude'))
                                        <span class="text-danger">{{ $errors->first('longitude') }}</span>
                                    @endif
                                </div>
                                <br>
                                <div class="mb-3">
                                    <label class="form-label"> Tel </label>
                                    <input type="number" class="form-control datepicker" placeholder="Tel"
                                        name="tel" />
                                    @if ($errors->has('tel'))
                                        <span class="text-danger">{{ $errors->first('tel') }}</span>
                                    @endif
                                </div>
                                <br>
                                <div class="mb-3">
                                    <label class="form-label"> FAX </label>
                                    <input type="text" class="form-control datepicker" placeholder="fax"
                                        name="fax" />
                                    @if ($errors->has('fax'))
                                        <span class="text-danger">{{ $errors->first('fax') }}</span>
                                    @endif
                                </div>
                                <br>
                                <div class="mb-3">
                                    <label class="form-label"> Email </label>
                                    <input type="text" class="form-control datepicker" placeholder="Email"
                                        name="email" />
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <br>
                                <div class="mb-3">
                                    <label class="form-label"> URL </label>
                                    <input type="text" class="form-control datepicker" placeholder="URL"
                                        name="url" />
                                    @if ($errors->has('url'))
                                        <span class="text-danger">{{ $errors->first('url') }}</span>
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

    <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.ckeditor').ckeditor();
        });
    </script>
@endsection