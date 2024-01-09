@extends('admin.commons.dashboard_header')
@section('content')
 
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">


        </div>

        <!--end breadcrumb-->
        

        @if(Session::has('success'))
        <div class="alert alert-success alert-custom-box">
            {{ Session::get('success') }}
            <i class="bx bx-check alrt-btn"></i>
            @php
            Session::forget('success');
            @endphp
        </div>
        @endif


        <div class="row">
            <div class="col-xl-9 mx-auto">
                <h6 class="mb-0 text-uppercase">Update </h6>
                <hr />

                <form action="{{ url('admin/support/store') }}" method="post" enctype= "multipart/form-data">
                    @csrf

                    <div class="card">
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">Meta Title</label>
                                <input type="text" class="form-control" name="meta_title"
                                    value="{{ $data->meta_title }}"  />
                                @if ($errors->has('meta_title'))
                                <span class="text-danger">{{ $errors->first('meta_title') }}</span>
                                @endif
                            </div>
                            <br>

                            <div class="mb-3">
                                <label class="form-label">Meta Description</label>
                                <input type="text" class="form-control" name="meta_description"
                                    value="{{ $data->meta_description }}"  />
                                @if ($errors->has('meta_description'))
                                <span class="text-danger">{{ $errors->first('meta_description') }}</span>
                                @endif
                            </div>
                            <br>
                            
                            <div class="mb-3">
                                <label class="form-label">Page Heading</label>                              
                                <input type="text" class="form-control"  value="{{ old('page_heading', $data->page_heading ?? '')}}" name="page_heading">
                                @if ($errors->has('page_heading'))
                                <span class="text-danger">{{ $errors->first('page_heading') }}</span>
                                @endif
                            </div>
                            <br>

                            <div class="">
                                <label class="form-label">Description</label>
                                 <textarea class="ckeditor form-control" name="page_des">{!!$data->page_des ?? '' !!}</textarea> 
                                @if ($errors->has('page_des'))
                                <span class="text-danger">{{ $errors->first('page_des') }}</span>
                                @endif
                            </div>
                            <br>                           


                            <div class="">
                                <label class="form-label">Email</label>
                                <textarea class="ckeditor form-control" name="email">{!!$data->email ?? '' !!}</textarea>
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <br>

                            
                            <div class="">
                                <label class="form-label">Phone</label>
                               <textarea class="ckeditor form-control" name="phone">{!!$data->phone ?? '' !!}</textarea>
                                @if ($errors->has('phone'))
                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                                @endif
                            </div>
                            <br>


                            <div class="">
                                <label class="form-label">Live Chat</label>                              
                                <textarea class="ckeditor form-control" name="live_chat">{!!$data->live_chat ?? '' !!}</textarea>
                                @if ($errors->has('live_chat'))
                                <span class="text-danger">{{ $errors->first('live_chat') }}</span>
                                @endif
                            </div>
                            <br>

                            <div class="">
                                <input type="submit" class="form-control btn btn-primary px-4" value="Submit" />
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

<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('.ckeditor').ckeditor();
});
</script>
