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
                <h6 class="mb-0 text-uppercase">Update Service</h6>
                <hr />

                <form action="{{ url('admin/services/update/action', $service->service_id) }}" method="post" enctype= "multipart/form-data">
                    @csrf

                    @php
                        $category1 = App\Models\Category::where('id', $service->category)->first();
                    @endphp

                    <div class="card">
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">Category *</label>
                                
                                <select name="categories" class="select2-field form-control" >
                                    <option value="{{ $category1->id }}">{{ $category1->name }}</option>
                                    @foreach($categories as $category)
                                    @if ($category->id != $service->category)
                                       <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endif
                                    @endforeach
                                </select>
                                @if ($errors->has('categories'))
                                <span class="text-danger">{{ $errors->first('categories') }}</span>
                                @endif
                            </div>
                            <br>

                            <div class="">
                                <label class="form-label">Title *</label>
                                <input type="text" class="form-control" name="title" value="{{ $service->title }}" required />
                                @if ($errors->has('title'))
                                <span class="text-danger">{{ $errors->first('title') }}</span>
                                @endif
                            </div>
                            <br>

                            <div class="">
                                <label class="form-label">Image</label><br>
                                <img src="{{ asset('admin/service/'.$service->img) }}" 
                                    class="card-img-top m-1" alt="..." style="height: 65px; width:175px;">

                                <input type="file" class="form-control" name="img" />
                                @if ($errors->has('img'))
                                <span class="text-danger">{{ $errors->first('img') }}</span>
                                @endif
                            </div>
                            <br>

                            
                            <div class="">
                                <label class="form-label">Description</label>
                                <textarea class="ckeditor form-control" name="description" col="5" row="10">
                                    {!! $service->description !!}
                                </textarea>
                                @if ($errors->has('description'))
                                <span class="text-danger">{{ $errors->first('description') }}</span>
                                @endif
                            </div>
                            <br>


                            <!-- title - 2 -->
                            <div class="">
                                <label class="form-label">Title - 2 *</label>
                                <input type="text" class="form-control" name="title2" value="{{ $service->title2 }}" required />
                                @if ($errors->has('title2'))
                                <span class="text-danger">{{ $errors->first('title2') }}</span>
                                @endif
                            </div>
                            <br>

                            <div class="">
                                <label class="form-label">Image 2</label><br>
                                <img src="{{ asset('admin/service2/'.$service->img2) }}" 
                                    class="card-img-top m-1" alt="..." style="height: 65px; width:175px;">

                                <input type="file" class="form-control" name="img2" />
                                @if ($errors->has('img2'))
                                <span class="text-danger">{{ $errors->first('img2') }}</span>
                                @endif
                            </div>
                            <br>

                            <div class="">
                                <label class="form-label">Description 2</label>
                                <textarea class="ckeditor form-control" name="description2" col="5" row="10">
                                    {!! $service->description2 !!}
                                </textarea>
                                @if ($errors->has('description2'))
                                <span class="text-danger">{{ $errors->first('description2') }}</span>
                                @endif
                            </div>
                            <br>


                            <!-- -->

                            <!-- youtube video link -->
                                <div class="">
                                    <label class="form-label">Youtube Video Link - 1</label>
                                    <input type="text" class="form-control" name="y_video_link1" value="{{ $service->y_video_link1 }}" required />
                                    @if ($errors->has('y_video_link1'))
                                    <span class="text-danger">{{ $errors->first('y_video_link1') }}</span>
                                    @endif
                                </div>
                                <br>

                                <div class="">
                                    <label class="form-label">Youtube Video Link - 2</label>
                                    <input type="text" class="form-control" name="y_video_link2" value="{{ $service->y_video_link2 }}" required />
                                    @if ($errors->has('y_video_link2'))
                                    <span class="text-danger">{{ $errors->first('y_video_link2') }}</span>
                                    @endif
                                </div>
                                <br>
                            <!-- -->

                            {{-- <div class="">
                                <label class="form-label">Gallery</label><br>

                                @if ($service->gallery != null)
                                @foreach (explode(",", $service->gallery) as $s)
                                <img src="{{ asset('admin/service/gallery/'.$s) }}" 
                                    class="card-img-top m-1" alt="..." style="height: 65px; width:175px;">
                                @endforeach
                                @else
                                    <p><b>No Gallery Found</b></p>
                                @endif

                                <input type="file" class="form-control" name="gallaries[]" multiple />
                                @if ($errors->has('gallaries'))
                                <span class="text-danger">{{ $errors->first('gallaries') }}</span>
                                @endif
                            </div>
                            <br> --}}

                            {{-- <div class="">
                                <label class="form-label">Video</label><br>

                                @if ($service->video != null)
                                    <video width="320" height="240" controls>
                                        <source src="{{ asset('admin/service/video/'.$service->video) }}" type="video/mp4">
                                    </video>
                                @else
                                    <p><b>No Video Found</b></p>
                                @endif

                                <input type="file" class="form-control" name="video"  />
                                @if ($errors->has('video'))
                                <span class="text-danger">{{ $errors->first('video') }}</span>
                                @endif
                            </div>
                            <br> --}}

                            <div class="">
                                <label class="form-label">Status</label>
                        
                                @if ($service->status == "active")
                                <select class="form-control" name="status">
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                </select>    
                                @else
                                <select class="form-control" name="status">
                                    <option value="inactive">Inactive</option>
                                    <option value="active">Active</option>
                                </select>
                                @endif
                                

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