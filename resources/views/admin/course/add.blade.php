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
                <h6 class="mb-0 text-uppercase">Add Course</h6>
                <hr />

                <form action="{{ url('admin/course/add/action') }}" method="post" enctype= "multipart/form-data">
                    @csrf

                    <div class="card">
                        <div class="card-body">
                            
                            <div class="">
                                <label class="form-label">Name *</label>
                                <input type="text" class="form-control" name="name" required />
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <br>

                            <div class="">
                                <label class="form-label">Image *</label>
                                <input type="file" class="form-control" name="img" required />
                                @if ($errors->has('img'))
                                <span class="text-danger">{{ $errors->first('img') }}</span>
                                @endif
                            </div>
                            <br>
                                    
                            <div class="">
                                <label class="form-label">Description</label>
                                <textarea class="ckeditor form-control" name="description"></textarea>
                                @if ($errors->has('description'))
                                <span class="text-danger">{{ $errors->first('description') }}</span>
                                @endif
                            </div>
                            <br>

                            <div class="">
                                <label class="form-label">Video</label>
                                <input type="file" class="form-control" name="video"  />
                                @if ($errors->has('video'))
                                <span class="text-danger">{{ $errors->first('video') }}</span>
                                @endif
                            </div>
                            <br>

                            <div class="">
                                <label class="form-label">Youtube Link</label>
                                <input type="text" class="form-control" name="youtube_video"  />
                                @if ($errors->has('youtube_video'))
                                <span class="text-danger">{{ $errors->first('youtube_video') }}</span>
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