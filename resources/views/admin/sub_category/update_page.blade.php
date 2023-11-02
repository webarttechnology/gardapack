@extends('admin.commons.dashboard_header')
@section('content')


<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">


        </div>
        <!--end breadcrumb-->
        @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
            @php
            Session::forget('success');
            @endphp
        </div>
        @endif


        @if(Session::has('danger'))
        <div class="alert alert-danger">
            {{ Session::get('danger') }}
            @php
            Session::forget('danger');
            @endphp
        </div>
        @endif

        <div class="row">
            <div class="col-xl-9 mx-auto">
                <h6 class="mb-0 text-uppercase">Edit Sub Category</h6>
                <hr />

                <form action="{{ url('admin/sub-categories/update/page/action', $id) }}" method="post">
                    @csrf

                    <div class="card">
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control datepicker" name="name" value="{{ $sub_category->name }}" required />
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
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

@endsection