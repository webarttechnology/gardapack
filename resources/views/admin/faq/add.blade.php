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
                <h6 class="mb-0 text-uppercase">Add FAQs</h6>
                <hr />

                <form action="{{ url('admin/faq/add/action') }}" method="post" enctype= "multipart/form-data">
                    @csrf

                    <div class="card">
                        <div class="card-body">
                            
                            <div class="">
                                <label class="form-label">Question</label>
                                <textarea class="ckeditor form-control" name="question"></textarea>
                                @if ($errors->has('question'))
                                <span class="text-danger">{{ $errors->first('question') }}</span>
                                @endif
                            </div>
                            <br>

                            <div class="">
                                <label class="form-label">Answer</label>
                                <textarea class="ckeditor form-control" name="answer"></textarea>
                                @if ($errors->has('answer'))
                                <span class="text-danger">{{ $errors->first('answer') }}</span>
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

<!-- Add duplicate variations -->
<script src="../js/product_add.js"></script>
@endsection