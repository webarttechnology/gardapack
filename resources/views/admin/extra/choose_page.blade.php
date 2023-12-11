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


        <div class="row">
            <div class="col-xl-9 mx-auto">
                <h6 class="mb-0 text-uppercase">Why Choose US</h6>
                <hr />

                <form action="{{ url('admin/others/choose-page/action', $data->id) }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="card">
                        <div class="card-body">

                            <div class="">
                                <label class="form-label">Details</label>
                                <textarea class="ckeditor form-control" name="details" required>{!! $data->details !!}</textarea>
                                @if ($errors->has('details'))
                                <span class="text-danger">{{ $errors->first('details') }}</span>
                                @endif
                            </div>
                            <br>

                            <div class="">
                                <label class="form-label">Reason Title - 1</label>
                                <input type="text" class="form-control" name="reason_title_1" value="{{ $data->reason_title_1 }}" required />
                                @if ($errors->has('reason_title_1'))
                                <span class="text-danger">{{ $errors->first('reason_title_1') }}</span>
                                @endif
                            </div>
                            <br>

                            <div class="">
                                <label class="form-label">Reason - 1</label>
                                <input type="text" class="form-control" name="reason_1" value="{{ $data->reason_1 }}" required />
                                @if ($errors->has('reason_1'))
                                <span class="text-danger">{{ $errors->first('reason_1') }}</span>
                                @endif
                            </div>
                            <br>

                            <div class="">
                                <label class="form-label">Reason Title - 2</label>
                                <input type="text" class="form-control" name="reason_title_2" value="{{ $data->reason_title_2 }}" required />
                                @if ($errors->has('reason_title_2'))
                                <span class="text-danger">{{ $errors->first('reason_title_2') }}</span>
                                @endif
                            </div>
                            <br>

                            <div class="">
                                <label class="form-label">Reason - 2</label>
                                <input type="text" class="form-control" name="reason_2" value="{{ $data->reason_2 }}" required />
                                @if ($errors->has('reason_2'))
                                <span class="text-danger">{{ $errors->first('reason_2') }}</span>
                                @endif
                            </div>
                            <br>

                            <div class="">
                                <label class="form-label">Reason Title - 3</label>
                                <input type="text" class="form-control" name="reason_title_3" value="{{ $data->reason_title_3 }}" required />
                                @if ($errors->has('reason_title_3'))
                                <span class="text-danger">{{ $errors->first('reason_title_3') }}</span>
                                @endif
                            </div>
                            <br>

                            <div class="">
                                <label class="form-label">Reason - 3</label>
                                <input type="text" class="form-control" name="reason_3" value="{{ $data->reason_3 }}" required />
                                @if ($errors->has('reason_3'))
                                <span class="text-danger">{{ $errors->first('reason_3') }}</span>
                                @endif
                            </div>
                            <br>

                            <div class="">
                                <label class="form-label">Img</label><br>
                                <img src="{{ asset('admin/others/'.$data->img) }}" alt="" height="300"><br>
                                <input type="file" class="form-control" name="img" required />
                                @if ($errors->has('img'))
                                <span class="text-danger">{{ $errors->first('img') }}</span>
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