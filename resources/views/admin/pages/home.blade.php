@extends('admin.commons.dashboard_header')
@section('content')

<style>
    .add-remv-btn{
        padding: 10px 0;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 40px;
    }
    }
</style>

    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">


            </div>
            <!--end breadcrumb-->
            @if (Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                    @php
                        Session::forget('success');
                    @endphp
                </div>
            @endif


            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <h6 class="mb-0 text-uppercase">Home Page</h6>
                    <hr />

                    <form action="{{ route('admin.home.store') }}" method="post" enctype= "multipart/form-data">
                        @csrf

                        <div class="card">
                            <div class="card-body">

                                <div class="mb-3">
                                    <label class="form-label">Meta Title</label>
                                    <input type="text" class="form-control" name="meta_title"
                                        value="{{ $data->meta_title }}" />
                                    @if ($errors->has('meta_title'))
                                        <span class="text-danger">{{ $errors->first('meta_title') }}</span>
                                    @endif
                                </div>
                                <br>

                                <div class="mb-3">
                                    <label class="form-label">Meta Description</label>
                                    <input type="text" class="form-control" name="meta_description"
                                        value="{{ $data->meta_description }}" />
                                    @if ($errors->has('meta_description'))
                                        <span class="text-danger">{{ $errors->first('meta_description') }}</span>
                                    @endif
                                </div>
                                <br>

                                <h4>Banner Section</h4>
                                {{-- <div class="">
                                <label class="form-label">Banner</label>
                                <br>
                                @if ($data != null)
                                    <img src="{{ asset('uploads/banners/'.$data->banner) }}" width="200" alt="banner">
                                @endif
                                <br>

                                <input type="file" class="form-control" name="banner" />
                                @if ($errors->has('banner'))
                                <span class="text-danger">{{ $errors->first('banner') }}</span>
                                @endif

                            </div> --}}


                                @if ($data == null)
                                    <div class="">
                                        <label class="form-label">Banner</label>
                                        <input type="file" class="form-control" name="banner[]" />
                                    </div>
                                    <div class="col-md-2 col-12 rope-chan mt-3">
                                        <span class="btn btn-primary m-b-5 m-t-5 add-remv-btn" id="addrow" onclick="return addRows();"
                                            style="float: left;"><i class="bx bx-plus" aria-hidden="true"></i></span>
                                        <span class="btn btn-danger m-b-5 m-t-5" id="removerow" style="float: right;"
                                            onclick="return removeRows(this);"><i class="bx bx-trash"
                                                aria-hidden="true"></i></span>
                                    </div>
                                @else
                                    @if ($data->banner != null)
                                        @foreach (json_decode($data->banner, true) as $key => $bann)
                                        <div class="row">
                                                <input type="hidden" name="hidden_banner[]" value="{{ $bann['img'] }}">
                                                <div class="">
                                                    @if ($key == 0)
                                                        <label class="form-label">Banner</label>
                                                    @endif

                                                    <br>
                                                    <img src="{{ asset('uploads/banners/' . $bann['img']) }}" width="200"
                                                        alt="banner">
                                                    <br>

                                                    <input type="file" class="form-control" name="banner[]" />
                                                </div>

                                                <div class="col-md-2 col-12 rope-chan mt-3">
                                                    <span class="btn btn-primary m-b-5 m-t-5 add-remv-btn" id="addrow"
                                                        onclick="return addRows();" style="float: left;"><i
                                                            class="bx bx-plus" aria-hidden="true"></i></span>

                                                            @if ($key > 0)
                                                    <span class="btn btn-danger m-b-5 m-t-5 add-remv-btn" id="removerow"
                                                        style="float: right;" onclick="return removeRows(this);"><i
                                                            class="bx bx-trash" aria-hidden="true"></i></span>
                                                            @endif
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                @endif




                                <div id="banner_div" class="mt-5">
                                </div>
                                <br>

                                <div class="mb-3">
                                    <label class="form-label">Buuton 1 Text</label>
                                    <input type="text" class="form-control"
                                        value="@if ($data != null) {{ $data->btn1_txt }} @endif"
                                        name="btn1_txt">
                                    @if ($errors->has('btn1_txt'))
                                        <span class="text-danger">{{ $errors->first('btn1_txt') }}</span>
                                    @endif
                                </div>
                                <br>

                                <div class="mb-3">
                                    <label class="form-label">Button 1 Link</label>
                                    <input type="text" class="form-control"
                                        value="@if ($data != null) {{ $data->btn1_link }} @endif"
                                        name="btn1_link">
                                    @if ($errors->has('btn1_link'))
                                        <span class="text-danger">{{ $errors->first('btn1_link') }}</span>
                                    @endif
                                </div>
                                <br>

                                <div class="mb-3">
                                    <label class="form-label">BUtton 2 Text</label>
                                    <input type="text" class="form-control"
                                        value="@if ($data != null) {{ $data->btn2_txt }} @endif"
                                        name="btn2_txt">
                                    @if ($errors->has('btn2_txt'))
                                        <span class="text-danger">{{ $errors->first('btn2_txt') }}</span>
                                    @endif
                                </div>
                                <br>

                                <div class="mb-3">
                                    <label class="form-label">Button 2 Link</label>
                                    <input type="text" class="form-control"
                                        value="@if ($data != null) {{ $data->btn2_link }} @endif"
                                        name="btn2_link">
                                    @if ($errors->has('btn2_link'))
                                        <span class="text-danger">{{ $errors->first('btn2_link') }}</span>
                                    @endif
                                </div>
                                <br>

                                <div class="">
                                    <label class="form-label">Banner Description</label>
                                    <textarea class="ckeditor form-control" name="banner_des">
                                    @if ($data != null)
                                    {!! $data->banner_des !!}
                                    @endif
                                    </textarea>
                                    @if ($errors->has('banner_des'))
                                        <span class="text-danger">{{ $errors->first('banner_des') }}</span>
                                    @endif
                                </div>
                                <br>

                                <h4>About Section</h4>
                                <div class="mb-3">
                                    <label class="form-label">Home About Heading</label>
                                    <input type="text" class="form-control"
                                        value="@if ($data != null) {{ $data->home_about_heading }} @endif"
                                        name="home_about_heading">
                                    @if ($errors->has('home_about_heading'))
                                        <span class="text-danger">{{ $errors->first('home_about_heading') }}</span>
                                    @endif
                                </div>
                                <br>

                                <div class="">
                                    <label class="form-label">Home About Description</label>
                                    <textarea class="ckeditor form-control" name="home_about_des">
@if ($data != null)
{{ $data->home_about_des }}
@endif
</textarea>
                                    @if ($errors->has('home_about_des'))
                                        <span class="text-danger">{{ $errors->first('home_about_des') }}</span>
                                    @endif
                                </div>
                                <br>

                                <div class="">
                                    <label class="form-label">Home About Video</label>
                                    <input type="text" class="form-control" name="home_about_video"
                                        value="@if ($data != null) {{ $data->home_about_video }} @endif" />
                                    @if ($errors->has('home_about_video'))
                                        <span class="text-danger">{{ $errors->first('home_about_video') }}</span>
                                    @endif
                                </div>
                                <br>

                                <h4>Feature Section</h4>
                                <div class="mb-3">
                                    <label class="form-label">Feature Heading</label>
                                    <input type="text" class="form-control"
                                        value="@if ($data != null) {{ $data->feature_heading }} @endif"
                                        name="feature_heading">
                                    @if ($errors->has('feature_heading'))
                                        <span class="text-danger">{{ $errors->first('feature_heading') }}</span>
                                    @endif
                                </div>
                                <br>

                                <div class="">
                                    <label class="form-label">Feature Background Image</label>
                                    <br>
                                    @if ($data != null)
                                        <img src="{{ asset('uploads/feature_banners/' . $data->feature_banner) }}"
                                            width="200" alt="banner">
                                    @endif
                                    <br>
                                    <input type="file" class="ckeditor form-control" name="feature_banner">
                                    @if ($errors->has('feature_banner'))
                                        <span class="text-danger">{{ $errors->first('feature_banner') }}</span>
                                    @endif
                                </div>
                                <br>

                                <div class="">
                                    <label class="form-label">Feature Side Image</label>
                                    <br>
                                    @if ($data != null)
                                        <img src="{{ asset('uploads/feature_side_imgs/' . $data->feature_side_img) }}"
                                            width="200" alt="banner">
                                    @endif
                                    <br>
                                    <input type="file" class="form-control" name="feature_side_img">
                                    @if ($errors->has('feature_side_img'))
                                        <span class="text-danger">{{ $errors->first('feature_side_img') }}</span>
                                    @endif
                                </div>
                                <br>

                                <!-- Features 1 -->
                                <br>
                                <h5>Feature Image - 1</h5>
                                <div class="">
                                    <label class="form-label">Feature Image 1</label>
                                    <br>
                                    @if ($data != null)
                                        <img src="{{ asset('uploads/feature_img_1/' . $data->feature_img_1) }}"
                                            width="200" alt="banner">
                                    @endif
                                    <br>
                                    <input type="file" class="form-control" name="feature_img_1">
                                    @if ($errors->has('feature_img_1'))
                                        <span class="text-danger">{{ $errors->first('feature_img_1') }}</span>
                                    @endif
                                </div>
                                <div class="">
                                    <label class="form-label">Feature Title 1</label>
                                    <input type="text" class="form-control" name="feature_title_1"
                                        value="@if ($data != null) {{ $data->feature_title_1 }} @endif">
                                    @if ($errors->has('feature_title_1'))
                                        <span class="text-danger">{{ $errors->first('feature_title_1') }}</span>
                                    @endif
                                </div>
                                <div class="">
                                    <label class="form-label">Feature Description 1</label>
                                    <textarea class="ckeditor form-control" name="feature_description_1">
@if ($data != null)
{{ $data->feature_description_1 }}
@endif
</textarea>
                                    @if ($errors->has('feature_description_1'))
                                        <span class="text-danger">{{ $errors->first('feature_description_1') }}</span>
                                    @endif
                                </div>

                                <!-- Features 2 -->
                                <br>
                                <h5>Feature Image - 2</h5>
                                <div class="">
                                    <label class="form-label">Feature Image 2</label>
                                    <br>
                                    @if ($data != null)
                                        <img src="{{ asset('uploads/feature_img_2/' . $data->feature_img_2) }}"
                                            width="200" alt="banner">
                                    @endif
                                    <br>
                                    <input type="file" class="form-control" name="feature_img_2">
                                    @if ($errors->has('feature_img_2'))
                                        <span class="text-danger">{{ $errors->first('feature_img_2') }}</span>
                                    @endif
                                </div>
                                <div class="">
                                    <label class="form-label">Feature Title 2</label>
                                    <input type="text" class="form-control"
                                        value="@if ($data != null) {{ $data->feature_title_2 }} @endif"
                                        name="feature_title_2">
                                    @if ($errors->has('feature_title_2'))
                                        <span class="text-danger">{{ $errors->first('feature_title_2') }}</span>
                                    @endif
                                </div>
                                <div class="">
                                    <label class="form-label">Feature Description 2</label>
                                    <textarea class="ckeditor form-control" name="feature_description_2">
@if ($data != null)
{{ $data->feature_description_2 }}
@endif
</textarea>
                                    @if ($errors->has('feature_description_2'))
                                        <span class="text-danger">{{ $errors->first('feature_description_2') }}</span>
                                    @endif
                                </div>


                                <!-- Features 3 -->
                                <br>
                                <h5>Feature Image - 3</h5>
                                <div class="">
                                    <label class="form-label">Feature Image 3</label>
                                    <br>
                                    @if ($data != null)
                                        <img src="{{ asset('uploads/feature_img_3/' . $data->feature_img_3) }}"
                                            width="200" alt="banner">
                                    @endif
                                    <br>
                                    <input type="file" class="form-control" name="feature_img_3">
                                    @if ($errors->has('feature_img_3'))
                                        <span class="text-danger">{{ $errors->first('feature_img_3') }}</span>
                                    @endif
                                </div>
                                <div class="">
                                    <label class="form-label">Feature Title 3</label>
                                    <input type="text" class="form-control"
                                        value="@if ($data != null) {{ $data->feature_title_3 }} @endif"
                                        name="feature_title_3">
                                    @if ($errors->has('feature_title_3'))
                                        <span class="text-danger">{{ $errors->first('feature_title_3') }}</span>
                                    @endif
                                </div>
                                <div class="">
                                    <label class="form-label">Feature Description 3</label>
                                    <textarea class="ckeditor form-control" name="feature_description_3">
@if ($data != null)
{{ $data->feature_description_3 }}
@endif
</textarea>
                                    @if ($errors->has('feature_description_3'))
                                        <span class="text-danger">{{ $errors->first('feature_description_3') }}</span>
                                    @endif
                                </div>

                                <!-- Features 4 -->
                                <br>
                                <h5>Feature Image - 4</h5>
                                <div class="">
                                    <label class="form-label">Feature Image 4</label>
                                    <br>
                                    @if ($data != null)
                                        <img src="{{ asset('uploads/feature_img_4/' . $data->feature_img_4) }}"
                                            width="200" alt="banner">
                                    @endif
                                    <br>
                                    <input type="file" class="form-control" name="feature_img_4">
                                    @if ($errors->has('feature_img_4'))
                                        <span class="text-danger">{{ $errors->first('feature_img_4') }}</span>
                                    @endif
                                </div>
                                <div class="">
                                    <label class="form-label">Feature Title 4</label>
                                    <input type="text" class="form-control"
                                        value="@if ($data != null) {{ $data->feature_title_4 }} @endif"
                                        name="feature_title_4">
                                    @if ($errors->has('feature_title_4'))
                                        <span class="text-danger">{{ $errors->first('feature_title_4') }}</span>
                                    @endif
                                </div>
                                <div class="">
                                    <label class="form-label">Feature Description 4</label>
                                    <textarea class="ckeditor form-control" name="feature_description_4">
@if ($data != null)
{{ $data->feature_description_4 }}
@endif
</textarea>
                                    @if ($errors->has('feature_description_4'))
                                        <span class="text-danger">{{ $errors->first('feature_description_4') }}</span>
                                    @endif
                                </div>

                                <!-- Features 5 -->
                                <br>
                                <h5>Feature Image - 5</h5>
                                <div class="">
                                    <label class="form-label">Feature Image 5</label>
                                    <br>
                                    @if ($data != null)
                                        <img src="{{ asset('uploads/feature_img_5/' . $data->feature_img_5) }}"
                                            width="200" alt="banner">
                                    @endif
                                    <br>
                                    <input type="file" class="form-control" name="feature_img_5">
                                    @if ($errors->has('feature_img_5'))
                                        <span class="text-danger">{{ $errors->first('feature_img_5') }}</span>
                                    @endif
                                </div>
                                <div class="">
                                    <label class="form-label">Feature Title 5</label>
                                    <input type="text" class="form-control"
                                        value="@if ($data != null) {{ $data->feature_title_5 }} @endif"
                                        name="feature_title_5">
                                    @if ($errors->has('feature_title_5'))
                                        <span class="text-danger">{{ $errors->first('feature_title_5') }}</span>
                                    @endif
                                </div>
                                <div class="">
                                    <label class="form-label">Feature Description 5</label>
                                    <textarea class="ckeditor form-control" name="feature_description_5">
@if ($data != null)
{{ $data->feature_description_5 }}
@endif
</textarea>
                                    @if ($errors->has('feature_description_5'))
                                        <span class="text-danger">{{ $errors->first('feature_description_5') }}</span>
                                    @endif
                                </div>

                                <br>

                                <h3>Offer -1</h3>
                                <div class="">
                                    <label class="form-label">Offer Title 1</label>
                                    <input type="text" class="form-control"
                                        value="@if ($data != null) {{ $data->offer_title_1 }} @endif"
                                        name="offer_title_1">
                                    @if ($errors->has('offer_title_1'))
                                        <span class="text-danger">{{ $errors->first('offer_title_1') }}</span>
                                    @endif
                                </div>
                                <div class="">
                                    <label class="form-label">Offer Subtitle 1</label>
                                    <input type="text" class="form-control"
                                        value="@if ($data != null) {{ $data->offer_subtitle_1 }} @endif"
                                        name="offer_subtitle_1">
                                    @if ($errors->has('offer_subtitle_1'))
                                        <span class="text-danger">{{ $errors->first('offer_subtitle_1') }}</span>
                                    @endif
                                </div>
                                <div class="">
                                    <label class="form-label">Offer Banner 1</label>
                                    <br>
                                    @if ($data != null)
                                        <img src="{{ asset('uploads/offer_banner_1/' . $data->offer_banner_1) }}"
                                            width="200" alt="banner">
                                    @endif
                                    <br>
                                    <input type="file" class="form-control" name="offer_banner_1">
                                    @if ($errors->has('offer_banner_1'))
                                        <span class="text-danger">{{ $errors->first('offer_banner_1') }}</span>
                                    @endif
                                </div>
                                <div class="">
                                    <label class="form-label">Offer Link 1</label>
                                    <input type="text" class="form-control"
                                        value="@if ($data != null) {{ $data->offer_link_1 }} @endif"
                                        name="offer_link_1">
                                    @if ($errors->has('offer_link_1'))
                                        <span class="text-danger">{{ $errors->first('offer_link_1') }}</span>
                                    @endif
                                </div>

                                <br>


                                <h3>Offer - 2</h3>
                                <div class="">
                                    <label class="form-label">Offer Title 2</label>
                                    <input type="text" class="form-control"
                                        value="@if ($data != null) {{ $data->offer_title_2 }} @endif"
                                        name="offer_title_2">
                                    @if ($errors->has('offer_title_2'))
                                        <span class="text-danger">{{ $errors->first('offer_title_2') }}</span>
                                    @endif
                                </div>
                                <div class="">
                                    <label class="form-label">Offer Subtitle 2</label>
                                    <input type="text" class="form-control"
                                        value="@if ($data != null) {{ $data->offer_subtitle_2 }} @endif"
                                        name="offer_subtitle_2">
                                    @if ($errors->has('offer_subtitle_2'))
                                        <span class="text-danger">{{ $errors->first('offer_subtitle_2') }}</span>
                                    @endif
                                </div>
                                <div class="">
                                    <label class="form-label">Offer Banner 2</label>
                                    <br>
                                    @if ($data != null)
                                        <img src="{{ asset('uploads/offer_banner_2/' . $data->offer_banner_2) }}"
                                            width="200" alt="banner">
                                    @endif
                                    <br>
                                    <input type="file" class="form-control" name="offer_banner_2">
                                    @if ($errors->has('offer_banner_2'))
                                        <span class="text-danger">{{ $errors->first('offer_banner_2') }}</span>
                                    @endif
                                </div>
                                <div class="">
                                    <label class="form-label">Offer Link 2</label>
                                    <input type="text" class="form-control"
                                        value="@if ($data != null) {{ $data->offer_link_2 }} @endif"
                                        name="offer_link_2">
                                    @if ($errors->has('offer_link_2'))
                                        <span class="text-danger">{{ $errors->first('offer_link_2') }}</span>
                                    @endif
                                </div>

                                <br>

                                <h3>Explore Technology</h3>
                                <div class="">
                                    <label class="form-label">Explore Technology Heading</label>
                                    <input type="text" class="form-control"
                                        value="@if ($data != null) {{ $data->explore_tech_heading }} @endif"
                                        name="explore_tech_heading">
                                    @if ($errors->has('explore_tech_heading'))
                                        <span class="text-danger">{{ $errors->first('explore_tech_heading') }}</span>
                                    @endif
                                </div>

                                <div class="">
                                    <label class="form-label">Explore Technology Banner</label>
                                    <br>
                                    @if ($data != null)
                                        <img src="{{ asset('uploads/explore_tech_banner/' . $data->explore_tech_banner) }}"
                                            width="200" alt="banner">
                                    @endif
                                    <br>
                                    <input type="file" class="form-control" name="explore_tech_banner">
                                    @if ($errors->has('explore_tech_banner'))
                                        <span class="text-danger">{{ $errors->first('explore_tech_banner') }}</span>
                                    @endif
                                </div>
                                <br>

                                <!-- technology - 1 -->
                                <h4>Technology - 1</h4>
                                <div class="">
                                    <label class="form-label">Technology Title 1</label>
                                    <input type="text" class="form-control"
                                        value="@if ($data != null) {{ $data->tech_title_1 }} @endif"
                                        name="tech_title_1">
                                    @if ($errors->has('tech_title_1'))
                                        <span class="text-danger">{{ $errors->first('tech_title_1') }}</span>
                                    @endif
                                </div>

                                <div class="">
                                    <label class="form-label">Technology Image 1</label>
                                    <br>
                                    @if ($data != null)
                                        <img src="{{ asset('uploads/tech_img_1/' . $data->tech_img_1) }}" width="200"
                                            alt="banner">
                                    @endif
                                    <br>
                                    <input type="file" class="form-control" name="tech_img_1">
                                    @if ($errors->has('tech_img_1'))
                                        <span class="text-danger">{{ $errors->first('tech_img_1') }}</span>
                                    @endif
                                </div>
                                <div class="">
                                    <label class="form-label">Technology Description 1</label>
                                    <textarea class="ckeditor form-control" name="technology_description_1">
@if ($data != null)
{{ $data->technology_description_1 }}
@endif
</textarea>
                                    @if ($errors->has('technology_description_1'))
                                        <span class="text-danger">{{ $errors->first('technology_description_1') }}</span>
                                    @endif
                                </div>
                                <br>

                                <!-- technology - 2 -->
                                <h4>Technology - 2</h4>
                                <div class="">
                                    <label class="form-label">Technology Title 2</label>
                                    <input type="text" class="form-control"
                                        value="@if ($data != null) {{ $data->tech_title_2 }} @endif"
                                        name="tech_title_2">
                                    @if ($errors->has('tech_title_2'))
                                        <span class="text-danger">{{ $errors->first('tech_title_2') }}</span>
                                    @endif
                                </div>

                                <div class="">
                                    <label class="form-label">Technology Image 2</label>
                                    <br>
                                    @if ($data != null)
                                        <img src="{{ asset('uploads/tech_img_2/' . $data->tech_img_2) }}" width="200"
                                            alt="banner">
                                    @endif
                                    <br>
                                    <input type="file" class="form-control" name="tech_img_2">
                                    @if ($errors->has('tech_img_2'))
                                        <span class="text-danger">{{ $errors->first('tech_img_2') }}</span>
                                    @endif
                                </div>
                                <div class="">
                                    <label class="form-label">Technology Description 2</label>
                                    <textarea class="ckeditor form-control" name="technology_description_2">
@if ($data != null)
{{ $data->technology_description_2 }}
@endif
</textarea>
                                    @if ($errors->has('technology_description_2'))
                                        <span class="text-danger">{{ $errors->first('technology_description_2') }}</span>
                                    @endif
                                </div>
                                <br>

                                <!-- technology - 3 -->
                                <h4>Technology - 3</h4>
                                <div class="">
                                    <label class="form-label">Technology Title 3</label>
                                    <input type="text" class="form-control"
                                        value="@if ($data != null) {{ $data->tech_title_3 }} @endif"
                                        name="tech_title_3">
                                    @if ($errors->has('tech_title_3'))
                                        <span class="text-danger">{{ $errors->first('tech_title_3') }}</span>
                                    @endif
                                </div>

                                <div class="">
                                    <label class="form-label">Technology Image 3</label>
                                    <br>
                                    @if ($data != null)
                                        <img src="{{ asset('uploads/tech_img_3/' . $data->tech_img_3) }}" width="200"
                                            alt="banner">
                                    @endif
                                    <br>
                                    <input type="file" class="form-control" name="tech_img_3">
                                    @if ($errors->has('tech_img_3'))
                                        <span class="text-danger">{{ $errors->first('tech_img_3') }}</span>
                                    @endif
                                </div>
                                <div class="">
                                    <label class="form-label">Technology Description 3</label>
                                    <textarea class="ckeditor form-control" name="technology_description_3">
@if ($data != null)
{{ $data->technology_description_3 }}
@endif
</textarea>
                                    @if ($errors->has('technology_description_3'))
                                        <span class="text-danger">{{ $errors->first('technology_description_3') }}</span>
                                    @endif
                                </div>
                                <br>

                                <h3>Why Choose Us?</h3>
                                <div class="">
                                    <label class="form-label">Heading</label>
                                    <input type="text" class="form-control"
                                        value="@if ($data != null) {{ $data->why_us_heading }} @endif"
                                        name="why_us_heading">
                                    @if ($errors->has('why_us_heading'))
                                        <span class="text-danger">{{ $errors->first('why_us_heading') }}</span>
                                    @endif
                                </div>

                                <h4>Why Us - 1</h4>
                                <div class="">
                                    <label class="form-label">Title - 1</label>
                                    <input type="text" class="form-control"
                                        value="@if ($data != null) {{ $data->why_us_title_1 }} @endif"
                                        name="why_us_title_1">
                                    @if ($errors->has('why_us_title_1'))
                                        <span class="text-danger">{{ $errors->first('why_us_title_1') }}</span>
                                    @endif
                                </div>

                                <div class="">
                                    <label class="form-label">Image</label>
                                    <br>
                                    @if ($data != null)
                                        @if ($data->why_us_img_1 != null)
                                            <img src="{{ asset('uploads/why_us_img_1/' . $data->why_us_img_1) }}"
                                                width="200" alt="banner">
                                        @endif
                                    @endif
                                    <br>
                                    <input type="file" class="form-control" name="why_us_img_1">
                                    @if ($errors->has('why_us_img_1'))
                                        <span class="text-danger">{{ $errors->first('why_us_img_1') }}</span>
                                    @endif
                                </div>
                                <div class="">
                                    <label class="form-label">Description 1</label>
                                    <textarea class="ckeditor form-control" name="why_us_desc_1">
@if ($data != null)
{{ $data->why_us_desc_1 }}
@endif
</textarea>
                                    @if ($errors->has('why_us_desc_1'))
                                        <span class="text-danger">{{ $errors->first('why_us_desc_1') }}</span>
                                    @endif
                                </div>
                                <br>

                                <h4>Why Us - 2</h4>
                                <div class="">
                                    <label class="form-label">Title - 2</label>
                                    <input type="text" class="form-control"
                                        value="@if ($data != null) {{ $data->why_us_title_2 }} @endif"
                                        name="why_us_title_2">
                                    @if ($errors->has('why_us_title_2'))
                                        <span class="text-danger">{{ $errors->first('why_us_title_2') }}</span>
                                    @endif
                                </div>

                                <div class="">
                                    <label class="form-label">Image</label>
                                    <br>
                                    @if ($data != null)
                                        @if ($data->why_us_img_2 != null)
                                            <img src="{{ asset('uploads/why_us_img_2/' . $data->why_us_img_2) }}"
                                                width="200" alt="banner">
                                        @endif
                                    @endif
                                    <br>
                                    <input type="file" class="form-control" name="why_us_img_2">
                                    @if ($errors->has('why_us_img_2'))
                                        <span class="text-danger">{{ $errors->first('why_us_img_2') }}</span>
                                    @endif
                                </div>
                                <div class="">
                                    <label class="form-label">Description 2</label>
                                    <textarea class="ckeditor form-control" name="why_us_desc_2">
@if ($data != null)
{{ $data->why_us_desc_2 }}
@endif
</textarea>
                                    @if ($errors->has('why_us_desc_2'))
                                        <span class="text-danger">{{ $errors->first('why_us_desc_2') }}</span>
                                    @endif
                                </div>
                                <br>

                                <h4>Why Us - 3</h4>
                                <div class="">
                                    <label class="form-label">Title - 3</label>
                                    <input type="text" class="form-control"
                                        value="@if ($data != null) {{ $data->why_us_title_3 }} @endif"
                                        name="why_us_title_3">
                                    @if ($errors->has('why_us_title_3'))
                                        <span class="text-danger">{{ $errors->first('why_us_title_3') }}</span>
                                    @endif
                                </div>

                                <div class="">
                                    <label class="form-label">Image</label>
                                    <br>
                                    @if ($data != null)
                                        @if ($data->why_us_img_3 != null)
                                            <img src="{{ asset('uploads/why_us_img_3/' . $data->why_us_img_3) }}"
                                                width="200" alt="banner">
                                        @endif
                                    @endif
                                    <br>
                                    <input type="file" class="form-control" name="why_us_img_3">
                                    @if ($errors->has('why_us_img_3'))
                                        <span class="text-danger">{{ $errors->first('why_us_img_3') }}</span>
                                    @endif
                                </div>
                                <div class="">
                                    <label class="form-label">Description 3</label>
                                    <textarea class="ckeditor form-control" name="why_us_desc_3">
@if ($data != null)
{{ $data->why_us_desc_3 }}
@endif
</textarea>
                                    @if ($errors->has('why_us_desc_3'))
                                        <span class="text-danger">{{ $errors->first('why_us_desc_3') }}</span>
                                    @endif
                                </div>
                                <br>

                                <h4>Why Us - 4</h4>
                                <div class="">
                                    <label class="form-label">Title - 4</label>
                                    <input type="text" class="form-control"
                                        value="@if ($data != null) {{ $data->why_us_title_4 }} @endif"
                                        name="why_us_title_4">
                                    @if ($errors->has('why_us_title_4'))
                                        <span class="text-danger">{{ $errors->first('why_us_title_4') }}</span>
                                    @endif
                                </div>

                                <div class="">
                                    <label class="form-label">Image</label>
                                    <br>
                                    @if ($data != null)
                                        @if ($data->why_us_img_4 != null)
                                            <img src="{{ asset('uploads/why_us_img_4/' . $data->why_us_img_4) }}"
                                                width="200" alt="banner">
                                        @endif
                                    @endif
                                    <br>
                                    <input type="file" class="form-control" name="why_us_img_4">
                                    @if ($errors->has('why_us_img_4'))
                                        <span class="text-danger">{{ $errors->first('why_us_img_4') }}</span>
                                    @endif
                                </div>
                                <div class="">
                                    <label class="form-label">Description 4</label>
                                    <textarea class="ckeditor form-control" name="why_us_desc_4">
@if ($data != null)
{{ $data->why_us_desc_4 }}
@endif
</textarea>
                                    @if ($errors->has('why_us_desc_4'))
                                        <span class="text-danger">{{ $errors->first('why_us_desc_4') }}</span>
                                    @endif
                                </div>

                                <br>
                                <h3>FAQ Section</h3>
                                <div class="">
                                    <label class="form-label">Banner Image</label>
                                    <br>
                                    @if ($data != null)
                                        @if ($data->faq_banner != null)
                                            <img src="{{ asset('uploads/faq_banner/' . $data->faq_banner) }}"
                                                width="200" alt="banner">
                                        @endif
                                    @endif
                                    <br>
                                    <input type="file" class="form-control" name="faq_banner">
                                    @if ($errors->has('faq_banner'))
                                        <span class="text-danger">{{ $errors->first('faq_banner') }}</span>
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

@endsection


<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.ckeditor').ckeditor();
    });

    function removeRows(button) {
        $(button).closest('.row').remove();
    }

    function addRows() {
        var container = document.getElementById('banner_div');
        var row = document.createElement('div');
        row.classList.add('row');

        // document.getElementById("more_variations").innerHTML 

        row.innerHTML = `<div class="row">
            <div class="">
                                <input type="file" class="form-control" name="banner[]" />
                                <input type="hidden" name="hidden_banner[]">
                            </div>
                            <div class="col-md-2 col-12 rope-chan mt-3">
                                    <span class="btn btn-primary m-b-5 m-t-5 add-remv-btn" id="addrow" onclick="return addRows();" style="float: left;" ><i class="bx bx-plus" aria-hidden="true"></i></span>
                                    <span class="btn btn-danger m-b-5 m-t-5 add-remv-btn" id="removerow"
                                        style="float: right;" onclick="return removeRows(this);"><i
                                            class="bx bx-trash" aria-hidden="true"></i></span>
                                </div>
                                </div>`;

        container.appendChild(row);

    }
</script>
