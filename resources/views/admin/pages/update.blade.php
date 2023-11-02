@extends('admin.commons.dashboard_header')
@section('content')

<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">


        </div>
        <!--end breadcrumb-->
        @if(Session::has('page_success'))
        <div class="alert alert-success">
            {{ Session::get('page_success') }}
            @php
            Session::forget('page_success');
            @endphp
        </div>
        @endif


        <div class="row">
            <div class="col-xl-9 mx-auto">
                <h6 class="mb-0 text-uppercase">Update Page</h6>
                <hr />

                <!-- About us page -->
                @if($details->name == "About Us")
                <form action="{{url('admin/save/pages')}}" method="post" enctype= "multipart/form-data">
                    @csrf

                    <div class="card">
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">Page Name</label>
                                <input type="text" class="form-control datepicker" name="name"
                                    value="{{ $details->name }}" readonly />
                                <input type="hidden" value="{{ $details->id }}" name="id">
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <br>

                            <div class="">
                                <label class="form-label">Image 1</label><br>

                                @if($details->featured_img != null)
                                <a href="{{asset('pages/featured_img/'.$details->featured_img)}}" target="_blank">
                                    <img src="{{asset('pages/featured_img/'.$details->featured_img)}}" height="100" width="175" alt="">
                                </a>
                                @else
                                <a href="{{asset('pages/featured_img/no_imge_found.jpg')}}" target="_blank">
                                    <img src="{{asset('pages/featured_img/no_imge_found.jpg')}}" height="100" width="175" alt="">
                                </a>
                                @endif
                                
                                <br>
                                <input type="file" class="form-control" name="featured_img" />
                                @if ($errors->has('featured_img'))
                                <span class="text-danger">{{ $errors->first('featured_img') }}</span>
                                @endif
                            </div>
                            <br>


                            <div class="">
                                <label class="form-label">Description1</label>
                                <textarea class="ckeditor form-control"
                                    name="description">{!! $details->description !!}</textarea>
                                @if ($errors->has('description'))
                                <span class="text-danger">{{ $errors->first('description') }}</span>
                                @endif
                            </div>
                            <br>


                            <div class="">
                                <label class="form-label">Image 2</label><br>

                                @if($details->featured_img != null)
                                <a href="{{asset('pages/img2/'.$details->img2)}}" target="_blank">
                                    <img src="{{asset('pages/img2/'.$details->img2)}}" height="100" width="175" alt="">
                                </a>
                                @else
                                <a href="{{asset('pages/featured_img/no_imge_found.jpg')}}" target="_blank">
                                    <img src="{{asset('pages/featured_img/no_imge_found.jpg')}}" height="100" width="175" alt="">
                                </a>
                                @endif
                                
                                <br>
                                <input type="file" class="form-control" name="img2" />
                                @if ($errors->has('img2'))
                                <span class="text-danger">{{ $errors->first('img2') }}</span>
                                @endif
                            </div>
                            <br>


                            <div class="">
                                <label class="form-label">Description2</label>
                                <textarea class="ckeditor form-control"
                                    name="description2">{!! $details->description2 !!}</textarea>
                                @if ($errors->has('description2'))
                                <span class="text-danger">{{ $errors->first('description2') }}</span>
                                @endif
                            </div>
                            <br>

                            <!-- Green Mall Benefit -->
                            <h3>Green Mall Benefit</h3>
                            <div class="">
                                <label class="form-label">Benefit Img1</label><br>

                                @if($details->img3 != null)
                                <a href="{{asset('pages/img3/'.$details->img3)}}" target="_blank">
                                    <img src="{{asset('pages/img3/'.$details->img3)}}" height="100" width="175" alt="">
                                </a>
                                @else
                                <a href="{{asset('pages/featured_img/no_imge_found.jpg')}}" target="_blank">
                                    <img src="{{asset('pages/featured_img/no_imge_found.jpg')}}" height="100" width="175" alt="">
                                </a>
                                @endif
                                
                                <br>
                                <input type="file" class="form-control" name="img3" />
                                @if ($errors->has('img3'))
                                <span class="text-danger">{{ $errors->first('img3') }}</span>
                                @endif
                            </div>
                            <br>


                            <div class="">
                                <label class="form-label">Benefit Description1</label>
                                <textarea class="ckeditor form-control"
                                    name="description3">{!! $details->description3 !!}</textarea>
                                @if ($errors->has('description3'))
                                <span class="text-danger">{{ $errors->first('description3') }}</span>
                                @endif
                            </div>
                            <br>

                            <div class="">
                                <label class="form-label">Benefit Image 2</label><br>

                                @if($details->img4 != null)
                                <a href="{{asset('pages/img4/'.$details->img4)}}" target="_blank">
                                    <img src="{{asset('pages/img4/'.$details->img4)}}" height="100" width="175" alt="">
                                </a>
                                @else
                                <a href="{{asset('pages/featured_img/no_imge_found.jpg')}}" target="_blank">
                                    <img src="{{asset('pages/featured_img/no_imge_found.jpg')}}" height="100" width="175" alt="">
                                </a>
                                @endif
                                
                                <br>
                                <input type="file" class="form-control" name="img4" />
                                @if ($errors->has('img4'))
                                <span class="text-danger">{{ $errors->first('img4') }}</span>
                                @endif
                            </div>
                            <br>


                            <div class="">
                                <label class="form-label">Description2</label>
                                <textarea class="ckeditor form-control"
                                    name="description4">{!! $details->description4 !!}</textarea>
                                @if ($errors->has('description4'))
                                <span class="text-danger">{{ $errors->first('description4') }}</span>
                                @endif
                            </div>
                            <br>
                            

                            <!-- How It Works -->

                            <!-- More About Greenmall -->
                            <h3>Know More About Green Mall</h3>
                            <div class="">
                                <label class="form-label">More Img1</label><br>

                                @if($details->img5 != null)
                                <a href="{{asset('pages/img5/'.$details->img5)}}" target="_blank">
                                    <img src="{{asset('pages/img5/'.$details->img5)}}" height="100" width="175" alt="">
                                </a>
                                @else
                                <a href="{{asset('pages/featured_img/no_imge_found.jpg')}}" target="_blank">
                                    <img src="{{asset('pages/featured_img/no_imge_found.jpg')}}" height="100" width="175" alt="">
                                </a>
                                @endif
                                
                                <br>
                                <input type="file" class="form-control" name="img5" />
                                @if ($errors->has('img5'))
                                <span class="text-danger">{{ $errors->first('img5') }}</span>
                                @endif
                            </div>
                            <br>


                            <div class="">
                                <label class="form-label">More Description</label>
                                <textarea class="ckeditor form-control"
                                    name="description5">{!! $details->description5 !!}</textarea>
                                @if ($errors->has('description5'))
                                <span class="text-danger">{{ $errors->first('description5') }}</span>
                                @endif
                            </div>
                            <br>


                            <!-- youtube Links -->
                            <div class="">
                                <label class="form-label">Youtube Link1</label>
                                <input type="text" class="form-control" name="youtube_link1" value="{{ $details->youtube_link1 }}"
                                     />
                                @if ($errors->has('youtube_link1'))
                                <span class="text-danger">{{ $errors->first('youtube_link1') }}</span>
                                @endif
                            </div>
                            <br>

                            <div class="">
                                <label class="form-label">Youtube Link2</label>
                                <input type="text" class="form-control" name="youtube_link2" value="{{ $details->youtube_link2 }}"
                                     />
                                @if ($errors->has('youtube_link2'))
                                <span class="text-danger">{{ $errors->first('youtube_link2') }}</span>
                                @endif
                            </div>
                            <br>

                            <div class="">
                                <input type="submit" class="form-control btn btn-primary px-4" value="Save" />
                            </div>
                        </div>
                    </div>
                </form>
                @endif


                @if($details->name == "Contact Us Page")
                <form action="{{url('admin/save/pages')}}" method="post" enctype= "multipart/form-data">
                    @csrf

                    <div class="card">
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">Page Name</label>
                                <input type="text" class="form-control datepicker" name="name"
                                    value="{{ $details->name }}" readonly />
                                <input type="hidden" value="{{ $details->id }}" name="id">
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <br>

                            <div class="">
                                <label class="form-label">Address</label>
                                <input type="text" class="form-control" name="address" value="{{ $details->address }}"
                                    required />
                                @if ($errors->has('address'))
                                <span class="text-danger">{{ $errors->first('address') }}</span>
                                @endif
                            </div>
                            <br>

                            <div class="">
                                <label class="form-label">Phone</label>
                                <input type="text" class="form-control" name="phone" value="{{ $details->phone }}"
                                    required />
                                @if ($errors->has('phone'))
                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                                @endif
                            </div>
                            <br>


                            <div class="">
                                <label class="form-label">Email</label>
                                <input type="text" class="form-control" name="email" value="{{ $details->email }}"
                                    required />
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <br>

                            <div class="">
                                <label class="form-label">Google Map Link</label>
                                <input type="text" class="form-control" name="map_link" value="{{ $details->map_link }}"
                                    required />
                                @if ($errors->has('map_link'))
                                <span class="text-danger">{{ $errors->first('map_link') }}</span>
                                @endif
                            </div>
                            <br>

                            <div class="">
                                <label class="form-label">Page Description</label>
                                <textarea class="ckeditor form-control"
                                    name="description">{!! $details->description !!}</textarea>
                                @if ($errors->has('description'))
                                <span class="text-danger">{{ $errors->first('description') }}</span>
                                @endif
                            </div>
                            <br>


                            <div class="">
                                <input type="submit" class="form-control btn btn-primary px-4" value="Save" />
                            </div>
                        </div>
                    </div>
                </form>
                @endif

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