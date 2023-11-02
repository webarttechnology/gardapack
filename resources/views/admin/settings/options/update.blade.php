@extends('admin.commons.dashboard_header')
@section('content')

<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">


        </div>
        <!--end breadcrumb-->
        @if(Session::has('options_success'))
        <div class="alert alert-success">
            {{ Session::get('options_success') }}
            @php
            Session::forget('options_success');
            @endphp
        </div>
        @endif


        <div class="row">
            <div class="col-xl-9 mx-auto">
                <h6 class="mb-0 text-uppercase">Update Settings Options</h6>
                <hr />

                <form action="{{url('admin/settings/options/update/action', $option->id)}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="card">
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">Settings Name</label>
                                <input type="text" class="form-control datepicker" name="name" value="{{ $option->name }}" required />
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <br>

                            <div class="">
                                <label class="form-label">Settings Key</label>
                                <input type="text" class="form-control" name="settings_key" value="{{ $option->settings_key }}" readonly />
                                @if ($errors->has('settings_key'))
                                <span class="text-danger">{{ $errors->first('settings_key') }}</span>
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

<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('.ckeditor').ckeditor();
});
</script>
@endsection