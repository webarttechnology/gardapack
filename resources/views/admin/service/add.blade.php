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
                <h6 class="mb-0 text-uppercase">Add Service</h6>
                <hr />

                <form action="{{ url('admin/services/add/action') }}" method="post" enctype= "multipart/form-data">
                    @csrf

                    <div class="card">
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">Category *</label>
                                
                                <select name="categories" class="select2-field form-control" >
                                    <option value="Select a Category">Select a Category</option>

                                    @foreach($categories as $category)
                                       <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach

                                    <option value="None">None</option>
                                </select>
                                @if ($errors->has('categories'))
                                <span class="text-danger">{{ $errors->first('categories') }}</span>
                                @endif
                            </div>
                            <br>

                            <div class="">
                                <label class="form-label">Title *</label>
                                <input type="text" class="form-control" name="title" required />
                                @if ($errors->has('title'))
                                <span class="text-danger">{{ $errors->first('title') }}</span>
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
                                <textarea class="ckeditor form-control" name="description" col="5" row="10"></textarea>
                                @if ($errors->has('description'))
                                <span class="text-danger">{{ $errors->first('description') }}</span>
                                @endif
                            </div>
                            <br>
                            
                            
                            <!-- newly added -->
                            <div class="">
                                <label class="form-label">Image2 *</label>
                                <input type="file" class="form-control" name="img2" required />
                                @if ($errors->has('img2'))
                                <span class="text-danger">{{ $errors->first('img2') }}</span>
                                @endif
                            </div>
                            <br>

                            
                            <div class="">
                                <label class="form-label">Description2</label>
                                <textarea class="ckeditor form-control" name="description2" col="5" row="10"></textarea>
                                @if ($errors->has('description2'))
                                <span class="text-danger">{{ $errors->first('description2') }}</span>
                                @endif
                            </div>
                            <br>

                            <!-- -->

                            <div class="">
                                <label class="form-label">Youtube Video Link - 1</label>
                                <input type="text" class="form-control" name="y_video_link1"  />
                                @if ($errors->has('y_video_link1'))
                                <span class="text-danger">{{ $errors->first('y_video_link1') }}</span>
                                @endif
                            </div>
                            <br>


                            <div class="">
                                <label class="form-label">Youtube Video Link - 2</label>
                                <input type="text" class="form-control" name="y_video_link2"  />
                                @if ($errors->has('y_video_link2'))
                                <span class="text-danger">{{ $errors->first('y_video_link2') }}</span>
                                @endif
                            </div>
                            <br>

                            {{-- <div class="">
                                <label class="form-label">Steps Involved</label>
                                <textarea class="ckeditor form-control" name="steps_inv" col="5" row="10"></textarea>
                                @if ($errors->has('steps_inv'))
                                <span class="text-danger">{{ $errors->first('steps_inv') }}</span>
                                @endif
                            </div>
                            <br> --}}

                            <!-- -->

                            {{-- <div class="">
                                <label class="form-label">Gallery</label>
                                <input type="file" class="form-control" name="gallaries[]" multiple />
                                @if ($errors->has('gallaries'))
                                <span class="text-danger">{{ $errors->first('gallaries') }}</span>
                                @endif
                            </div>
                            <br> --}}

                            {{-- <div class="">
                                <label class="form-label">Video</label>
                                <input type="file" class="form-control" name="video"  />
                                @if ($errors->has('video'))
                                <span class="text-danger">{{ $errors->first('video') }}</span>
                                @endif
                            </div>
                            <br> --}}

                            <div class="">
                                <label class="form-label">Status</label>
                        
                                <select class="form-control" name="status">
                                        <option value="active">Active</option>
                                        <option value="inactive">Inactive</option>
                                </select>

                                @if ($errors->has('status'))
                                <span class="text-danger">{{ $errors->first('status') }}</span>
                                @endif
                            </div>
                            <br>


                            <div class="">
                                <input type="submit" class="form-control btn btn-primary px-4" value="Save & Next" />
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