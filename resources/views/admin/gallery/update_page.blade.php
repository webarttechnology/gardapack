@extends('admin.commons.dashboard_header')
@section('content')

<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">


        </div>
        <!--end breadcrumb-->
        @if(Session::has('gallery_update'))
        <div class="alert alert-success">
            {{ Session::get('gallery_update') }}
            @php
            Session::forget('gallery_update');
            @endphp
        </div>
        @endif


        <div class="row">
            <div class="col-xl-9 mx-auto">
                <h6 class="mb-0 text-uppercase">Update Gallery</h6>
                <hr />

                <form action="{{ url('admin/gallery/update/page/action', $gallery->id) }}" method="post" enctype= "multipart/form-data">
                    @csrf

                    <div class="card">
                        <div class="card-body">
                            
                                <div class="">
                                    <label class="form-label">Gallery Image</label>
                                    <br>
                                    <img src="{{ asset('admin/gallery/'.$gallery->img) }}" 
                                    class="card-img-top" alt="..." style="height: 100px; width: 125px">
                                    <br>
                                    <input type="file" class="form-control" name="img" required />
                                    @if ($errors->has('img'))
                                    <span class="text-danger">{{ $errors->first('img') }}</span>
                                    @endif
                                </div>
                                <br>

                            <div class="">
                                <input type="submit" class="form-control btn btn-primary px-4" value="Update" />
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
        <!--end row-->
    </div>
</div>

@endsection