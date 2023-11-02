@extends('admin.commons.dashboard_header')
@section('content')

<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">


        </div>
        <!--end breadcrumb-->
        @if(Session::has('page_success'))
        <div class="alert alert-success">
            {{ Session::get('page_success') }}
            @php
            Session::forget('page_success');
            @endphp
        </div>
        @endif


        <div class="row">
            <div class="col-xl-9 mx-auto">
                <h6 class="mb-0 text-uppercase">Update Page</h6>
                <hr />


                <form action="{{ url('admin/settings/post/update', $details->id) }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="card">
                        <div class="card-body">
                            <input type="hidden" value="{{$details->input_type}}" name="input_type">

                            @if($details->input_type == "Text")
                            <div class="">
                                <label class="form-label">Text</label>
                                <input type="text" class="form-control" value="{{$details->value}}" name="text_value" />
                                @if ($errors->has('text_value'))
                                <span class="text-danger">{{ $errors->first('text_value') }}</span>
                                @endif
                            </div>
                            @else
                            <br>

                            <div class="">
                                <label class="form-label">Image</label>
                                <img src="{{asset('settings/'.$details->key.'/'.$details->value)}}" height="150"
                                    width="200" alt="">
                                <input type="file" class="form-control" name="file_value" />
                                @if ($errors->has('file_value'))
                                <span class="text-danger">{{ $errors->first('file_value') }}</span>
                                @endif
                            </div>
                            <br>
                            @endif

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