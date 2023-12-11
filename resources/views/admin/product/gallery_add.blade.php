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
                <h6 class="mb-0 text-uppercase">Add Gallery</h6>
                <hr />

                {{-- <form action="{{ url('admin/product/gallery', ['id' => $product_ids]) }}" method="post" enctype="multipart/form-data" class="dropzone"> --}}

                    <form action="{{ url('admin/product/gallery', ['id' => $product_ids]) }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="">
                        <label class="form-label">Color</label>
                        {{-- <input type="number" class="form-control" name="product_discount"  value="0" /> --}}

                        <select class="form-control" name="color" id="color">
                            <option value="White">White</option>
                            <option value="Black">Black</option>
                            <option value="Red">Red</option>
                        </select>
                    </div>
                    <br>

                    <div class="">
                        <label class="form-label">Product Discount Price</label>
                        <input type="file" class="form-control" name="file"  value="0" />
                    </div>

                    <div class="">
                        <button class="form-control btn btn-primary mt-2" type="submit">Save</button>
                    </div>
                    <br>
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

<!-- Dropzone  -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.js"></script>
<script type="text/javascript">
        Dropzone.options.imageUpload = {
            maxFilesize         :  12,
            renameFile: function(file) {
                var dt = new Date();
                var time = dt.getTime();
               return time+file.name;
            },
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            success: function(file, response) 
            {
                console.log(response);
            },
            error: function(file, response)
            {
               return false;
            }
        };
</script>
@endsection