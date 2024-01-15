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
                <h6 class="mb-0 text-uppercase">Update Shipping</h6>
                <hr />

                <form action="{{ url('admin/shipping/update/action', $detail->id) }}" method="post" enctype= "multipart/form-data">
                    @csrf

                    <div class="card">
                        <div class="card-body">
                            
                                
                                <div class="">
                                    <label class="form-label">Title</label>
                                    <input type="text" class="form-control" name="title" value="{{ $detail->title }}" @if($detail->old_page == "yes") readonly @endif>
                                    @if ($errors->has('title'))
                                    <span class="text-danger">{{ $errors->first('title') }}</span>
                                    @endif
                                </div>
                                <br>

                            <div class="">
                                <label class="form-label">Price (in $)</label>
                                <input type="number" step="any" class="form-control" name="price" value="{{ $detail->price }}">
                                @if ($errors->has('price'))
                                <span class="text-danger">{{ $errors->first('price') }}</span>
                                @endif
                            </div>
                            <br>

                            <div class="">
                                <label class="form-label">Status</label>
                                <select class="form-control" name="status">
                                   <option value="active" @if($detail->status == "active") selected @endif>Active</option>
                                   <option value="inactive" @if($detail->status == "inactive") selected @endif>Inactive</option>
                                </select>
                                @if ($errors->has('status'))
                                <span class="text-danger">{{ $errors->first('status') }}</span>
                                @endif
                            </div>
                            <br>

                            <div class="">
                                <label class="form-label">Skip Free Shipping?</label>
                                <select class="form-control" name="skip_free_shipping">
                                   <option value="">Select Option</option>
                                   <option value="yes" @if($detail->skip_free_shipping == "yes") selected @endif>Yes</option>
                                   <option value="no" @if($detail->skip_free_shipping == "no") selected @endif>No</option>
                                </select>
                                @if ($errors->has('skip_free_shipping'))
                                <span class="text-danger">{{ $errors->first('skip_free_shipping') }}</span>
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