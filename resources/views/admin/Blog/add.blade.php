@extends('admin.commons.dashboard_header')
@section('content')

<div class="page-wrapper">
    <div class="main-content">
        <!-- Page Title Start -->
        <div class="row">
            <div class="colxl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-title-wrapper">
                    <div class="page-title-box ad-title-box-use">
                        <h4 class="page-title">Blog Details</h4>
                    </div>
                    <div class="ad-breadcrumb">
                        <ul>
                            <li>
                                {{-- <div class="add-group">
                                    <a class="ad-btn" href="{{route ('blog')}}">Show Content</a>
                                </div> --}}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Table Start -->
        <div class="row">
            <!-- Styled Table Card-->
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-header">
                            @if (isset($data))
                            <h4>Update</h4>
                            @else
                            <h4>Add</h4>
                            @endif
                            
                        </div>
                        <div class="card-body">
                            @if (isset($data))
                            <form class="separate-form" method="POST" action="{{ route('blog_update', ['id' => $data->id]) }}" enctype="multipart/form-data">
                            @method('PUT')
                            @else
                            <form class="separate-form" method="POST" action="{{route ('blog_store')}}" enctype="multipart/form-data">
                            @endif
                            @csrf
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    
                                    <div class="row">

                                        <!-- meta fields -->
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="form-group">
                                                <label class="col-form-label">Meta Title</label>
                                                @if (isset($data))
                                                 <input class="form-control" type="text" name="meta_title" value="{{ old('meta_title', $data->meta_title) }}">
                                                @else
                                                 <input class="form-control" type="text" name="meta_title" value="{{ old('meta_title') }}">
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="form-group">
                                                <label class="col-form-label">Meta Description</label>
                                                @if (isset($data))
                                                 <input class="form-control" type="text" name="meta_description" value="{{ old('meta_description', $data->meta_description) }}">
                                                @else
                                                 <input class="form-control" type="text" name="meta_description" value="{{ old('meta_description') }}">
                                                @endif
                                            </div>
                                        </div>

                                        <!-- -->

                                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                            <div class="form-group">
                                                <label class="col-form-label">Title</label>
                                                @if (isset($data))
                                                 <input class="form-control" type="text" name="title" value="{{ old('title', $data->title) }}">
                                                @else
                                                 <input class="form-control" type="text" name="title" value="{{ old('title') }}">
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                            <div class="form-group">
                                                <label class="col-form-label">Sub Heading</label>
                                                @if (isset($data))
                                                 <input class="form-control" type="text" name="subheading" value="{{ old('subheading', $data->subheading) }}">
                                                @else
                                                 <input class="form-control" type="text" name="subheading" value="{{ old('subheading') }}">
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                            <div class="form-group">
                                                <label class="col-form-label">Image</label>
                                                <input class="form-control" type="file" name="image">                                                
                                                @if (isset($data))
                                                <img src="{{ asset($data->image) }}" alt="Your Image" width="100px">
                                                @endif
                                            </div>
                                        </div>                                                                               
                                    </div>
                                    <div class="row">                                       
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="form-group">
                                                <label class="col-form-label">Description</label>
                                                <textarea class="ckeditor form-control text-primary" name="description" rows="10" cols="50">{!! isset($data) ? old('description', $data->description) : '' !!}</textarea>                                               
                                            </div>                                           
                                        </div>                                      
                                    </div>
                                    <div class="form-group mb-0">
                                        <button class="btn btn-danger" type="submit">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        <div class="ad-footer-btm">
            <p>Copyright 2022 © MME All Rights Reserved.</p>
        </div>    
    </div>    
</div>    
</div>    

@endsection