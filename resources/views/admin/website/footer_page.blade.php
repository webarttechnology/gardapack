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
                <h6 class="mb-0 text-uppercase">Website Footer</h6>
                <hr/>

                <form action="{{ url('admin/website/footer/store') }}" method="post" enctype= "multipart/form-data">
                    @csrf

                    <div class="card">
                        <div class="card-body">

                            <div class="">
                                <label class="form-label">Description</label>
                                <textarea class="ckeditor form-control" name="footer_desc">@if($footer != null) {{ $footer->footer_desc }} @endif</textarea>
                                @if ($errors->has('footer_desc'))
                                <span class="text-danger">{{ $errors->first('footer_desc') }}</span>
                                @endif
                            </div>
                            <br>

                            <div class="">
                                <label class="form-label">Facebook Link</label>
                                <input type="text" class="form-control" name="fb_link" value="@if($footer != null) {{ $footer->fb_link }} @endif">
                                @if ($errors->has('fb_link'))
                                <span class="text-danger">{{ $errors->first('fb_link') }}</span>
                                @endif
                            </div>
                            <br>

                            <div class="">
                                <label class="form-label">Facebook Link Status</label>
                                <select class="form-control" name="fb_status">
                                    <option value="">Select Status</option>
                                    <option value="active" @if($footer != null && $footer->fb_status == "active") selected @endif>Active</option>
                                    <option value="inactive" @if($footer != null && $footer->fb_status == "inactive") selected @endif>Inactive</option>
                                </select>
                                @if ($errors->has('fb_status'))
                                <span class="text-danger">{{ $errors->first('fb_status') }}</span>
                                @endif
                            </div>
                            <br>

                            <div class="">
                                <label class="form-label">Twitter Link</label>
                                <input type="text" class="form-control" name="twitter_link" value="@if($footer != null) {{ $footer->twitter_link }} @endif">
                                @if ($errors->has('twitter_link'))
                                <span class="text-danger">{{ $errors->first('twitter_link') }}</span>
                                @endif
                            </div>
                            <br>

                            <div class="">
                                <label class="form-label">Twitter Link Status</label>
                                <select class="form-control" name="twitter_status">
                                    <option value="">Select Status</option>
                                    <option value="active" @if($footer != null && $footer->twitter_status == "active") selected @endif>Active</option>
                                    <option value="inactive" @if($footer != null && $footer->twitter_status == "inactive") selected @endif>Inactive</option>
                                </select>
                                @if ($errors->has('twitter_status'))
                                <span class="text-danger">{{ $errors->first('twitter_status') }}</span>
                                @endif
                            </div>
                            <br>

                            <div class="">
                                <label class="form-label">Instagram</label>
                                <input type="text" class="form-control" name="goog_link" value="@if($footer != null) {{ $footer->goog_link }} @endif">
                                @if ($errors->has('goog_link'))
                                <span class="text-danger">{{ $errors->first('goog_link') }}</span>
                                @endif
                            </div>
                            <br>

                            <div class="">
                                <label class="form-label">Instagram Status</label>
                                <select class="form-control" name="goog_status">
                                    <option value="">Select Status</option>
                                    <option value="active" @if($footer != null && $footer->goog_status == "active") selected @endif>Active</option>
                                    <option value="inactive" @if($footer != null && $footer->goog_status == "inactive") selected @endif>Inactive</option>
                                </select>
                                @if ($errors->has('goog_status'))
                                <span class="text-danger">{{ $errors->first('goog_status') }}</span>
                                @endif
                            </div>
                            <br>

                            <div class="">
                                <label class="form-label">Tiktok</label>
                                <input type="text" class="form-control" name="pint_link" value="@if($footer != null) {{ $footer->pint_link }} @endif">
                                @if ($errors->has('pint_link'))
                                <span class="text-danger">{{ $errors->first('pint_link') }}</span>
                                @endif
                            </div>
                            <br>

                            <div class="">
                                <label class="form-label">Tiktok Status</label>
                                <select class="form-control" name="pint_status">
                                    <option value="">Select Status</option>
                                    <option value="active" @if($footer != null && $footer->pint_status == "active") selected @endif>Active</option>
                                    <option value="inactive" @if($footer != null && $footer->pint_status == "inactive") selected @endif>Inactive</option>
                                </select>
                                @if ($errors->has('pint_status'))
                                <span class="text-danger">{{ $errors->first('pint_status') }}</span>
                                @endif
                            </div>
                            <br>

                            <div class="">
                                <label class="form-label">Copy Right Text</label>
                                <input type="text" class="form-control" name="copy_right_text" value="@if($footer != null) {{ $footer->copy_right_text }} @endif">
                                @if ($errors->has('copy_right_text'))
                                <span class="text-danger">{{ $errors->first('copy_right_text') }}</span>
                                @endif
                            </div>
                            <br>

                            <div class="">
                                <label class="form-label">Footer Image</label>
                                <br>
                                @if($footer != null && $footer->foot_img != null)
                                    <img src="{{ asset('uploads/foot_img/'.$footer->foot_img) }}" alt="" width="200">
                                @endif
                                <br>
                                <input type="file" class="form-control" name="foot_img">
                                @if ($errors->has('foot_img'))
                                <span class="text-danger">{{ $errors->first('foot_img') }}</span>
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