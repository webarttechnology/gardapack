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

        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <div class="row">
            <div class="col-xl-9 mx-auto">
                <h6 class="mb-0 text-uppercase">Add Category</h6>
                <hr />

                <form action="{{ url('admin/add/category', $type) }}" method="post" enctype= "multipart/form-data">
                    @csrf

                    <div class="card">
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">Category Name</label>
                                <input type="text" class="form-control datepicker" placeholder="Add Category Name" name="name" required />
                                <input type="hidden" value="0" name="id">
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <br>

                            <div class="mb-3">
                                <label class="form-label">Category Image</label>
                                <input type="file" class="form-control datepicker" name="category_img"  />
                                @if ($errors->has('category_img'))
                                <span class="text-danger">{{ $errors->first('category_img') }}</span>
                                @endif
                            </div>
                            <br>

                            <div class="mb-3">
                                <label class="form-label">Want to Display the Category on Top?</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="want_to_display" id="yes" value="yes" onchange="toggleImageField()">
                                    <label class="form-check-label" for="yes">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="want_to_display" id="no" value="no" checked onchange="toggleImageField()">
                                    <label class="form-check-label" for="no">No</label>
                                </div>
                            </div>

                            <!-- Image field (initially hidden) -->
                            <div class="mb-3" id="imageField" style="display: none;">
                                <label class="form-label">Category Top Image</label>
                                <input type="file" class="form-control" name="category_top_img" />
                                @if ($errors->has('category_top_img'))
                                    <span class="text-danger">{{ $errors->first('category_top_img') }}</span>
                                @endif
                            </div>


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

<script>
    function toggleImageField() {
        var wantToDisplay = document.querySelector('input[name="want_to_display"]:checked').value;
        var imageField = document.getElementById('imageField');

        // If "Yes" is selected, show the image field; otherwise, hide it
        if (wantToDisplay === 'yes') {
            imageField.style.display = 'block';
        } else {
            imageField.style.display = 'none';
        }
    }
</script>
@endsection