@extends('admin.commons.dashboard_header')
@section('content')

<style>
    .save-button-container {
        position: fixed;
        bottom: 50%;
        right: 20px;
        top: 50%;
        z-index: 1000;
    }
</style>

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
                <h6 class="mb-0 text-uppercase">Add Manual</h6>
                <hr />

                <form action="{{ url('admin/manual/add/action') }}" id="form1" method="post" enctype= "multipart/form-data">
                    @csrf

                    <div class="card">
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">Meta Title</label>
                                <input type="text" class="form-control" value="{{ old('meta_title') }}" name="meta_title"
                                     />
                                @if ($errors->has('meta_title'))
                                <span class="text-danger">{{ $errors->first('meta_title') }}</span>
                                @endif
                            </div>
                            <br>

                            <div class="mb-3">
                                <label class="form-label">Meta Description</label>
                                <input type="text" class="form-control" value="{{ old('meta_description') }}" name="meta_description"
                                     />
                                @if ($errors->has('meta_description'))
                                <span class="text-danger">{{ $errors->first('meta_description') }}</span>
                                @endif
                            </div>
                            <br>
                            
                            <div class="mb-3">
                                <label class="form-label">Title</label>                              
                                <input type="text" class="form-control" value="{{ old('title') }}" name="title" required>
                                @if ($errors->has('title'))
                                <span class="text-danger">{{ $errors->first('title') }}</span>
                                @endif
                            </div>
                            <br>

                            <div class="mb-3">
                                <label class="form-label">Manual</label>                              
                                <input type="file" class="form-control" name="pdf" required>
                                @if ($errors->has('pdf'))
                                <span class="text-danger">{{ $errors->first('pdf') }}</span>
                                @endif
                            </div>
                            <br>

                            <!-- Inside your form -->
                            <div class="save-button-container">
                                <button id="saveButton1" class="btn btn-primary">Save</button>
                            </div>

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

<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('.ckeditor').ckeditor();
});
</script>

<script>
    $(document).ready(function() {
        function saveChanges() {
            $('#form1').submit();
        }

        $('#saveButton1').on('click', function() {
            saveChanges();
        });
    });
</script>

@endsection