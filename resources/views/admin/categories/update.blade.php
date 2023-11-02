@extends('admin.commons.dashboard_header')
@section('content')

<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">


        </div>
        <!--end breadcrumb-->
        @if(Session::has('cat_success'))
        <div class="alert alert-success">
            {{ Session::get('cat_success') }}
            @php
            Session::forget('cat_success');
            @endphp
        </div>
        @endif

        @if(Session::has('cat_err'))
        <div class="alert alert-danger">
            {{ Session::get('cat_err') }}
            @php
            Session::forget('cat_err');
            @endphp
        </div>
        @endif


        <div class="row">
            <div class="col-xl-9 mx-auto">
                <h6 class="mb-0 text-uppercase">Update Category</h6>
                <hr />

                <form action="{{ url('admin/update/category', ['id' => $categories->id, 'type' => $type]) }}" method="post" enctype= "multipart/form-data">
                    @csrf

                    <div class="card">
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">Category Name</label>
                                <input type="text" class="form-control datepicker" name="name" value="{{ $categories->name }}" required />
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <br>


                            <div class="">
                                <label class="form-label">Image</label><br>

                                @if($categories->category_img != null)
                                <a href="{{asset('category_img/'.$categories->category_img)}}" target="_blank">
                                    <img src="{{asset('category_img/'.$categories->category_img)}}" height="100" width="175" alt="">
                                </a>
                                @else
                                <a href="{{asset('pages/featured_img/no_imge_found.jpg')}}" target="_blank">
                                    <img src="{{asset('pages/featured_img/no_imge_found.jpg')}}" height="100" width="175" alt="">
                                </a>
                                @endif
                                
                                <br>
                                <input type="file" class="form-control" name="category_img" />
                                @if ($errors->has('category_img'))
                                <span class="text-danger">{{ $errors->first('category_img') }}</span>
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