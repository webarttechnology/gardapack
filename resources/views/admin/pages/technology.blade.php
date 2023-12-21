@extends('admin.commons.dashboard_header')
@section('content')

<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">


        </div>
       
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <h6 class="mb-0 text-uppercase">Update Page</h6>
                <hr />

                
                <form action="{{ url('admin/technology/save/action') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="card">
                        <div class="card-body">

                            <h3>Graph Details</h3>
                            <div class="">
                                <label class="form-label">Graph Title</label>
                                <input type="text" class="form-control" name="graph_title" value="@if($technology != null) {{ $technology->graph_title }} @endif"
                                    required />
                                @if ($errors->has('graph_title'))
                                <span class="text-danger">{{ $errors->first('graph_title') }}</span>
                                @endif
                            </div>
                            <br>

                            <div class="">
                                <label class="form-label">Graph Short Title</label>
                                <input type="text" class="form-control" name="graph_sub_title" value="@if($technology != null) {{ $technology->graph_sub_title }} @endif"
                                    required />
                                @if ($errors->has('graph_sub_title'))
                                <span class="text-danger">{{ $errors->first('graph_sub_title') }}</span>
                                @endif
                            </div>
                            <br>


                            <div class="">
                                <label class="form-label">Graph Short Description</label>
                                <input type="text" class="form-control" name="graph_sub_sub_title" value="@if($technology != null) {{ $technology->graph_sub_sub_title }} @endif"
                                    required />
                                @if ($errors->has('graph_sub_sub_title'))
                                <span class="text-danger">{{ $errors->first('graph_sub_sub_title') }}</span>
                                @endif
                            </div>
                            <br>


                            <div class="">
                                <label class="form-label">Graph Footer Title</label>
                                <input type="text" class="form-control" name="graph_footer_title" value="@if($technology != null) {{ $technology->graph_footer_title }} @endif"
                                    required />
                                @if ($errors->has('graph_footer_title'))
                                <span class="text-danger">{{ $errors->first('graph_footer_title') }}</span>
                                @endif
                            </div>
                            <br>

                            <div class="">
                                <label class="form-label">Graph Footer short Title</label>
                                <input type="text" class="form-control" name="graph_footer_sub_title" value="@if($technology != null) {{ $technology->graph_footer_sub_title }} @endif"
                                    required />
                                @if ($errors->has('graph_footer_sub_title'))
                                <span class="text-danger">{{ $errors->first('graph_footer_sub_title') }}</span>
                                @endif
                            </div>
                            <br>


                            <!-- Graph multiple -->
                            <h3>Graph Value</h3>
                            
                            <div class="row p-2" id="graph_div">
                                @if($technology == null)
                                 <div class="borderBp" id="variations">
                                        <div class="col-md-12 col-12">
                                            <div class="form-group">
                                                <label>Graph Key</label>
                                                <input type="text" name="graph_key[]" class="form-control" value=""  />
                                            </div>
                                        </div>
        
                                        <div class="col-md-12 col-12 mt-3">
                                            <div class="form-group">
                                                <label>Graph Value-1</label>
                                                <input type="text" name="graph_value1[]" class="form-control" value=""  />
                                            </div>
                                        </div>

                                        <div class="col-md-12 col-12 mt-3">
                                            <div class="form-group">
                                                <label>Graph Value-2</label>
                                                <input type="text" name="graph_value2[]" class="form-control" value=""  />
                                            </div>
                                        </div>
        
                                        <div class="col-md-2 col-12 rope-chan mt-3">
                                        <p id="line_no" ></p>
                                                <span class="btn btn-primary m-b-5 m-t-5" id="addrow" onclick="return addRows();" style="float: left;" ><i class="bx bx-plus" aria-hidden="true"></i></span>
                                                {{-- <span class="btn btn-danger m-b-5 m-t-5" id="removerow" style="float: right;" onclick="return removeRows(this);"><i class="bx bx-trash" aria-hidden="true"></i></span> --}}
                                        </div>
                                    </div>
                                    @else
                                    @php
                                        $graphDatas = json_decode($technology->graph_data, true);
                                    @endphp

                                  @foreach($graphDatas as $key => $value)
                                  <div class="borderBp">
                                        <div class="col-md-12 col-12">
                                            <div class="form-group">
                                                <label>Graph Key</label>
                                                <input type="text" name="graph_key[]" class="form-control" value="{{ $value['key'] }}"  />
                                            </div>
                                        </div>
        
                                        <div class="col-md-12 col-12 mt-3">
                                            <div class="form-group">
                                                <label>Graph Value-1</label>
                                                <input type="text" name="graph_value1[]" class="form-control" value="{{ $value['value1'] }}"  />
                                            </div>
                                        </div>

                                        <div class="col-md-12 col-12 mt-3">
                                            <div class="form-group">
                                                <label>Graph Value-2</label>
                                                <input type="text" name="graph_value2[]" class="form-control" value="{{ $value['value2'] }}"  />
                                            </div>
                                        </div>
        
                                        <div class="col-md-2 col-12 rope-chan mt-3">
                                        <p id="line_no" ></p>
                                                <span class="btn btn-primary m-b-5 m-t-5" id="addrow" onclick="return addRows();" style="float: left;" ><i class="bx bx-plus" aria-hidden="true"></i></span>
                                                <span class="btn btn-danger m-b-5 m-t-5" id="removerow" style="float: right;" onclick="return removeRows(this);"><i class="bx bx-trash" aria-hidden="true"></i></span>
                                        </div>
                                    </div>
                                    @endforeach
                                    @endif
                            </div>
                            <!-- Graph MUltiple End -->

                            <!-- Graph section ends -->

                            <h3>Banner 1</h3>
                            <div class="">
                                <label class="form-label">Title</label>
                                <input type="text" class="form-control" name="technology_effect_title" value="@if($technology != null) {{ $technology->technology_effect_title }} @endif"
                                    required />
                                @if ($errors->has('technology_effect_title'))
                                <span class="text-danger">{{ $errors->first('technology_effect_title') }}</span>
                                @endif
                            </div>
                            <br>
                            <div class="">
                                <label class="form-label">Image 1</label>
                                @if($technology != null)
                                <br>
                                <img class="bg bg-dark m-2 p-2" src="{{ asset('uploads/technology/'.$technology->technology_effect_img_1) }}" width="200" alt="">
                                @endif

                                <input type="file" class="form-control" name="technology_effect_img_1" value="@if($technology != null) {{ $technology->technology_effect_img_1 }} @endif"
                                     />
                                @if ($errors->has('technology_effect_img_1'))
                                <span class="text-danger">{{ $errors->first('technology_effect_img_1') }}</span>
                                @endif
                            </div>
                            <br>
                            <div class="">
                                <label class="form-label">Image 2</label>
                                @if($technology != null)
                                <br>
                                <img class="bg bg-dark m-2 p-2" src="{{ asset('uploads/technology/'.$technology->technology_effect_img_2) }}" width="200" alt="">
                                @endif
                                <input type="file" class="form-control" name="technology_effect_img_2" value="@if($technology != null) {{ $technology->technology_effect_img_2 }} @endif"
                                     />
                                @if ($errors->has('technology_effect_img_2'))
                                <span class="text-danger">{{ $errors->first('technology_effect_img_2') }}</span>
                                @endif
                            </div>
                            <br>

                            <!-- Banner 1 part end -->


                            <h3>Product 1</h3>

                            <!-- product - 1 -->
                            <div class="">
                                <label class="form-label">Sku</label>
                                <input type="text" class="form-control" name="prod_1_sku" value="@if($technology != null) {{ $technology->prod_1_sku }} @endif"
                                    required />
                                @if ($errors->has('prod_1_sku'))
                                <span class="text-danger">{{ $errors->first('prod_1_sku') }}</span>
                                @endif
                            </div>
                            <br>
                            <div class="">
                                <label class="form-label">Image</label>
                                @if($technology != null)
                                <br>
                                <img class="m-2 p-2" src="{{ asset('uploads/technology/'.$technology->prod_1_img) }}" width="200" alt="">
                                @endif
                                <input type="file" class="form-control" name="prod_1_img" value="@if($technology != null) {{ $technology->prod_1_img }} @endif"
                                     />
                                @if ($errors->has('prod_1_img'))
                                <span class="text-danger">{{ $errors->first('prod_1_img') }}</span>
                                @endif
                            </div>
                            <br>
                            <div class="">
                                <label class="form-label">Title</label>
                                <input type="text" class="form-control" name="prod_1_title" value="@if($technology != null) {{ $technology->prod_1_title }} @endif"
                                    required />
                                @if ($errors->has('prod_1_title'))
                                <span class="text-danger">{{ $errors->first('prod_1_title') }}</span>
                                @endif
                            </div>
                            <div class="">
                                <label class="form-label">Short Desc</label>
                                <input type="text" class="form-control" name="prod_1_short_desc" value="@if($technology != null) {{ $technology->prod_1_short_desc }} @endif"
                                    required />
                                @if ($errors->has('prod_1_short_desc'))
                                <span class="text-danger">{{ $errors->first('prod_1_short_desc') }}</span>
                                @endif
                            </div>
                            <div class="">
                                <label class="form-label">Specification</label>
                                <input type="text" class="form-control" name="prod_1_spec" value="@if($technology != null) {{ $technology->prod_1_spec }} @endif"
                                    required />
                                @if ($errors->has('prod_1_spec'))
                                <span class="text-danger">{{ $errors->first('prod_1_spec') }}</span>
                                @endif
                            </div>
                            <br>


                            <h3>Product 2</h3>

                            <!-- product - 2 -->
                            <div class="">
                                <label class="form-label">Sku</label>
                                <input type="text" class="form-control" name="prod_2_sku" value="@if($technology != null) {{ $technology->prod_2_sku }} @endif"
                                    required />
                                @if ($errors->has('prod_2_sku'))
                                <span class="text-danger">{{ $errors->first('prod_2_sku') }}</span>
                                @endif
                            </div>
                            <br>
                            <div class="">
                                <label class="form-label">Image</label>
                                @if($technology != null)
                                <br>
                                <img class="m-2 p-2" src="{{ asset('uploads/technology/'.$technology->prod_2_img) }}" width="200" alt="">
                                @endif
                                <input type="file" class="form-control" name="prod_2_img" value="@if($technology != null) {{ $technology->prod_2_img }} @endif"
                                     />
                                @if ($errors->has('prod_2_img'))
                                <span class="text-danger">{{ $errors->first('prod_2_img') }}</span>
                                @endif
                            </div>
                            <br>
                            <div class="">
                                <label class="form-label">Title</label>
                                <input type="text" class="form-control" name="prod_2_title" value="@if($technology != null) {{ $technology->prod_2_title }} @endif"
                                    required />
                                @if ($errors->has('prod_2_title'))
                                <span class="text-danger">{{ $errors->first('prod_2_title') }}</span>
                                @endif
                            </div>
                            <div class="">
                                <label class="form-label">Short Desc</label>
                                <input type="text" class="form-control" name="prod_2_short_desc" value="@if($technology != null) {{ $technology->prod_2_short_desc }} @endif"
                                    required />
                                @if ($errors->has('prod_2_short_desc'))
                                <span class="text-danger">{{ $errors->first('prod_2_short_desc') }}</span>
                                @endif
                            </div>
                            <div class="">
                                <label class="form-label">Specification</label>
                                <input type="text" class="form-control" name="prod_2_spec" value="@if($technology != null) {{ $technology->prod_2_spec }} @endif"
                                    required />
                                @if ($errors->has('prod_2_spec'))
                                <span class="text-danger">{{ $errors->first('prod_2_spec') }}</span>
                                @endif
                            </div>
                            <br>

                            <h3>Product 3</h3>

                            <!-- product - 2 -->
                            <div class="">
                                <label class="form-label">Sku</label>
                                <input type="text" class="form-control" name="prod_3_sku" value="@if($technology != null) {{ $technology->prod_3_sku }} @endif"
                                    required />
                                @if ($errors->has('prod_3_sku'))
                                <span class="text-danger">{{ $errors->first('prod_3_sku') }}</span>
                                @endif
                            </div>
                            <br>
                            <div class="">
                                <label class="form-label">Image</label>
                                @if($technology != null)
                                <br>
                                <img class="m-2 p-2" src="{{ asset('uploads/technology/'.$technology->prod_3_img) }}" width="200" alt="">
                                @endif
                                <input type="file" class="form-control" name="prod_3_img" value="@if($technology != null) {{ $technology->prod_3_img }} @endif"
                                     />
                                @if ($errors->has('prod_3_img'))
                                <span class="text-danger">{{ $errors->first('prod_3_img') }}</span>
                                @endif
                            </div>
                            <br>
                            <div class="">
                                <label class="form-label">Title</label>
                                <input type="text" class="form-control" name="prod_3_title" value="@if($technology != null) {{ $technology->prod_3_title }} @endif"
                                    required />
                                @if ($errors->has('prod_3_title'))
                                <span class="text-danger">{{ $errors->first('prod_3_title') }}</span>
                                @endif
                            </div>
                            <div class="">
                                <label class="form-label">Short Desc</label>
                                <input type="text" class="form-control" name="prod_3_short_desc" value="@if($technology != null) {{ $technology->prod_3_short_desc }} @endif"
                                    required />
                                @if ($errors->has('prod_3_short_desc'))
                                <span class="text-danger">{{ $errors->first('prod_3_short_desc') }}</span>
                                @endif
                            </div>
                            <div class="">
                                <label class="form-label">Specification</label>
                                <input type="text" class="form-control" name="prod_3_spec" value="@if($technology != null) {{ $technology->prod_3_spec }} @endif"
                                    required />
                                @if ($errors->has('prod_3_spec'))
                                <span class="text-danger">{{ $errors->first('prod_3_spec') }}</span>
                                @endif
                            </div>
                            <br>

                            <!-- Banner 1 part end -->
                            
                            <h3>Banner 2</h3>
                            <div class="">
                                <label class="form-label">Title</label>
                                <input type="text" class="form-control" name="technology_effect2_title" value="@if($technology != null) {{ $technology->technology_effect2_title }} @endif"
                                    required />
                                @if ($errors->has('technology_effect2_title'))
                                <span class="text-danger">{{ $errors->first('technology_effect2_title') }}</span>
                                @endif
                            </div>
                            <br>
                            <div class="">
                                <label class="form-label">Image 1</label>
                                @if($technology != null)
                                <br>
                                <img class="m-2 p-2 bg bg-dark" src="{{ asset('uploads/technology/'.$technology->technology_effect2_img_1) }}" width="200" alt="">
                                @endif
                                <input type="file" class="form-control" name="technology_effect2_img_1" value="@if($technology != null) {{ $technology->technology_effect2_img_1 }} @endif"
                                     />
                                @if ($errors->has('technology_effect2_img_1'))
                                <span class="text-danger">{{ $errors->first('technology_effect2_img_1') }}</span>
                                @endif
                            </div>
                            <br>
                            <div class="">
                                <label class="form-label">Image 2</label>
                                @if($technology != null)
                                <br>
                                <img class="m-2 p-2 bg bg-dark" src="{{ asset('uploads/technology/'.$technology->technology_effect2_img_2) }}" width="200" alt="">
                                @endif
                                <input type="file" class="form-control" name="technology_effect2_img_2" value="@if($technology != null) {{ $technology->technology_effect2_img_2 }} @endif"
                                     />
                                @if ($errors->has('technology_effect2_img_2'))
                                <span class="text-danger">{{ $errors->first('technology_effect2_img_2') }}</span>
                                @endif
                            </div>
                            <br>

                            <h3>Features</h3>
                            <div class="">
                                <label class="form-label">Title</label>
                                <input type="text" class="form-control" name="feature_title" value="@if($technology != null) {{ $technology->feature_title }} @endif"
                                    required />
                                @if ($errors->has('feature_title'))
                                <span class="text-danger">{{ $errors->first('feature_title') }}</span>
                                @endif
                            </div>
                            <br>
                            <div class="">
                                <label class="form-label">Feature 1</label>
                                <input type="text" class="form-control" name="feature1" value="@if($technology != null) {{ $technology->feature1 }} @endif"
                                    required />
                                @if ($errors->has('feature1'))
                                <span class="text-danger">{{ $errors->first('feature1') }}</span>
                                @endif
                            </div>
                            <br>
                            <div class="">
                                <label class="form-label">Feature 2</label>
                                <input type="text" class="form-control" name="feature2" value="@if($technology != null) {{ $technology->feature2 }} @endif"
                                    required />
                                @if ($errors->has('feature2'))
                                <span class="text-danger">{{ $errors->first('feature2') }}</span>
                                @endif
                            </div>
                            <br>
                            <div class="">
                                <label class="form-label">Feature 3</label>
                                <input type="text" class="form-control" name="feature3" value="@if($technology != null) {{ $technology->feature3 }} @endif"
                                    required />
                                @if ($errors->has('feature3'))
                                <span class="text-danger">{{ $errors->first('feature3') }}</span>
                                @endif
                            </div>
                            <br>
                            <div class="">
                                <label class="form-label">Feature 4</label>
                                <input type="text" class="form-control" name="feature4" value="@if($technology != null) {{ $technology->feature4 }} @endif"
                                    required />
                                @if ($errors->has('feature4'))
                                <span class="text-danger">{{ $errors->first('feature4') }}</span>
                                @endif
                            </div>
                            <br>
                            <div class="">
                                <label class="form-label">Feature 5</label>
                                <input type="text" class="form-control" name="feature5" value="@if($technology != null) {{ $technology->feature5 }} @endif"
                                    required />
                                @if ($errors->has('feature5'))
                                <span class="text-danger">{{ $errors->first('feature5') }}</span>
                                @endif
                            </div>
                            <br>


                            <h3>Factors</h3>
                            <div class="">
                                <label class="form-label">Title</label>
                                <input type="text" class="form-control" name="factor_title" value="@if($technology != null) {{ $technology->factor_title }} @endif"
                                    required />
                                @if ($errors->has('factor_title'))
                                <span class="text-danger">{{ $errors->first('factor_title') }}</span>
                                @endif
                            </div>
                            <br>
                            
                            <h4>Factor - 1</h4>
                            <div class="">
                                <label class="form-label">Title</label>
                                <input type="text" class="form-control" name="factor_1_title" value="@if($technology != null) {{ $technology->factor_1_title }} @endif"
                                    required />
                                @if ($errors->has('factor_1_title'))
                                <span class="text-danger">{{ $errors->first('factor_1_title') }}</span>
                                @endif
                            </div>
                            <br>
                            <div class="">
                                <label class="form-label">Image</label>
                                @if($technology != null)
                                <br>
                                <img class="m-2 p-2" src="{{ asset('uploads/technology/'.$technology->factor_1_img) }}" width="200" alt="">
                                @endif
                                <input type="file" class="form-control" name="factor_1_img" value="@if($technology != null) {{ $technology->factor_1_img }} @endif"
                                     />
                                @if ($errors->has('factor_1_img'))
                                <span class="text-danger">{{ $errors->first('factor_1_img') }}</span>
                                @endif
                            </div>
                            <br>
                            <div class="">
                                <label class="form-label">Short Desc</label>
                                <input type="text" class="form-control" name="factor_1_short_desc" value="@if($technology != null) {{ $technology->factor_1_short_desc }} @endif"
                                    required />
                                @if ($errors->has('factor_1_short_desc'))
                                <span class="text-danger">{{ $errors->first('factor_1_short_desc') }}</span>
                                @endif
                            </div>
                            <br>


                            <h4>Factor - 2</h4>
                            <div class="">
                                <label class="form-label">Title</label>
                                <input type="text" class="form-control" name="factor_2_title" value="@if($technology != null) {{ $technology->factor_2_title }} @endif"
                                    required />
                                @if ($errors->has('factor_2_title'))
                                <span class="text-danger">{{ $errors->first('factor_2_title') }}</span>
                                @endif
                            </div>
                            <br>
                            <div class="">
                                <label class="form-label">Image</label>
                                @if($technology != null)
                                <br>
                                <img class="m-2 p-2" src="{{ asset('uploads/technology/'.$technology->factor_2_img) }}" width="200" alt="">
                                @endif
                                <input type="file" class="form-control" name="factor_2_img" value="@if($technology != null) {{ $technology->factor_2_img }} @endif"
                                     />
                                @if ($errors->has('factor_2_img'))
                                <span class="text-danger">{{ $errors->first('factor_2_img') }}</span>
                                @endif
                            </div>
                            <br>
                            <div class="">
                                <label class="form-label">Short Desc</label>
                                <input type="text" class="form-control" name="factor_2_short_desc" value="@if($technology != null) {{ $technology->factor_2_short_desc }} @endif"
                                    required />
                                @if ($errors->has('factor_2_short_desc'))
                                <span class="text-danger">{{ $errors->first('factor_2_short_desc') }}</span>
                                @endif
                            </div>
                            <br>


                            <h4>Factor - 3</h4>
                            <div class="">
                                <label class="form-label">Title</label>
                                <input type="text" class="form-control" name="factor_3_title" value="@if($technology != null) {{ $technology->factor_3_title }} @endif"
                                    required />
                                @if ($errors->has('factor_3_title'))
                                <span class="text-danger">{{ $errors->first('factor_3_title') }}</span>
                                @endif
                            </div>
                            <br>
                            <div class="">
                                <label class="form-label">Image</label>
                                @if($technology != null)
                                <br>
                                <img class="m-2 p-2" src="{{ asset('uploads/technology/'.$technology->factor_3_img) }}" width="200" alt="">
                                @endif
                                <input type="file" class="form-control" name="factor_3_img" value="@if($technology != null) {{ $technology->factor_3_img }} @endif"
                                     />
                                @if ($errors->has('factor_3_img'))
                                <span class="text-danger">{{ $errors->first('factor_3_img') }}</span>
                                @endif
                            </div>
                            <br>
                            <div class="">
                                <label class="form-label">Short Desc</label>
                                <input type="text" class="form-control" name="factor_3_short_desc" value="@if($technology != null) {{ $technology->factor_3_short_desc }} @endif"
                                    required />
                                @if ($errors->has('factor_3_short_desc'))
                                <span class="text-danger">{{ $errors->first('factor_3_short_desc') }}</span>
                                @endif
                            </div>
                            <br>


                            <h4>Factor - 4</h4>
                            <div class="">
                                <label class="form-label">Title</label>
                                <input type="text" class="form-control" name="factor_4_title" value="@if($technology != null) {{ $technology->factor_4_title }} @endif"
                                    required />
                                @if ($errors->has('factor_4_title'))
                                <span class="text-danger">{{ $errors->first('factor_4_title') }}</span>
                                @endif
                            </div>
                            <br>
                            <div class="">
                                <label class="form-label">Image</label>
                                @if($technology != null)
                                <br>
                                <img class="m-2 p-2" src="{{ asset('uploads/technology/'.$technology->factor_4_img) }}" width="200" alt="">
                                @endif
                                <input type="file" class="form-control" name="factor_4_img" value="@if($technology != null) {{ $technology->factor_4_img }} @endif"
                                     />
                                @if ($errors->has('factor_4_img'))
                                <span class="text-danger">{{ $errors->first('factor_4_img') }}</span>
                                @endif
                            </div>
                            <br>
                            <div class="">
                                <label class="form-label">Short Desc</label>
                                <input type="text" class="form-control" name="factor_4_short_desc" value="@if($technology != null) {{ $technology->factor_4_short_desc }} @endif"
                                    required />
                                @if ($errors->has('factor_4_short_desc'))
                                <span class="text-danger">{{ $errors->first('factor_4_short_desc') }}</span>
                                @endif
                            </div>
                            <br>

                            <h3>Approach</h3>
                            <div class="">
                                <label class="form-label">Title</label>
                                <input type="text" class="form-control" name="approach_title" value="@if($technology != null) {{ $technology->approach_title }} @endif"
                                    required />
                                @if ($errors->has('approach_title'))
                                <span class="text-danger">{{ $errors->first('approach_title') }}</span>
                                @endif
                            </div>
                            <br>

                            <h4>Approach 1</h4>
                            <div class="">
                                <label class="form-label">Title</label>
                                <input type="text" class="form-control" name="approach_1" value="@if($technology != null) {{ $technology->approach_1 }} @endif"
                                    required />
                                @if ($errors->has('approach_1'))
                                <span class="text-danger">{{ $errors->first('approach_1') }}</span>
                                @endif
                            </div>
                            <br>
                            <div class="">
                                <label class="form-label">Image</label>
                                @if($technology != null)
                                <br>
                                <img class="m-2 p-2" src="{{ asset('uploads/technology/'.$technology->approach_1_img) }}" width="200" alt="">
                                @endif
                                <input type="file" class="form-control" name="approach_1_img" value="@if($technology != null) {{ $technology->approach_1_img }} @endif"
                                     />
                                @if ($errors->has('approach_1_img'))
                                <span class="text-danger">{{ $errors->first('approach_1_img') }}</span>
                                @endif
                            </div>
                            <br>


                            <h4>Approach 2</h4>
                            <div class="">
                                <label class="form-label">Title</label>
                                <input type="text" class="form-control" name="approach_2" value="@if($technology != null) {{ $technology->approach_2 }} @endif"
                                    required />
                                @if ($errors->has('approach_2'))
                                <span class="text-danger">{{ $errors->first('approach_2') }}</span>
                                @endif
                            </div>
                            <br>
                            <div class="">
                                <label class="form-label">Image</label>
                                @if($technology != null)
                                <br>
                                <img class="m-2 p-2" src="{{ asset('uploads/technology/'.$technology->approach_2_img) }}" width="200" alt="">
                                @endif
                                <input type="file" class="form-control" name="approach_2_img" value="@if($technology != null) {{ $technology->approach_2_img }} @endif"
                                     />
                                @if ($errors->has('approach_2_img'))
                                <span class="text-danger">{{ $errors->first('approach_2_img') }}</span>
                                @endif
                            </div>
                            <br>


                            <h4>Approach 3</h4>
                            <div class="">
                                <label class="form-label">Title</label>
                                <input type="text" class="form-control" name="approach_3" value="@if($technology != null) {{ $technology->approach_3 }} @endif"
                                    required />
                                @if ($errors->has('approach_3'))
                                <span class="text-danger">{{ $errors->first('approach_3') }}</span>
                                @endif
                            </div>
                            <br>
                            <div class="">
                                <label class="form-label">Image</label>
                                @if($technology != null)
                                <br>
                                <img class="m-2 p-2" src="{{ asset('uploads/technology/'.$technology->approach_3_img) }}" width="200" alt="">
                                @endif
                                <input type="file" class="form-control" name="approach_3_img" value="@if($technology != null) {{ $technology->approach_3_img }} @endif"
                                     />
                                @if ($errors->has('approach_3_img'))
                                <span class="text-danger">{{ $errors->first('approach_3_img') }}</span>
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

@section('custom_js')
<script>
    function removeRows(button){
        $(button).closest('.row').remove();
    }

    function addRows(){
        var container = document.getElementById('graph_div');
        var row = document.createElement('div');
        row.classList.add('row'); 

        // document.getElementById("more_variations").innerHTML 

        row.innerHTML = `<div class="row p-2">
                                <div class="borderBp" id="variations">
                                        <div class="col-md-12 col-12">
                                            <div class="form-group">
                                                <label>Graph Key</label>
                                                <input type="text" name="graph_key[]" class="form-control" value=""  />
                                            </div>
                                        </div>
        
                                        <div class="col-md-12 col-12 mt-3">
                                            <div class="form-group">
                                                <label>Graph Value-1</label>
                                                <input type="text" name="graph_value1[]" class="form-control" value=""  />
                                            </div>
                                        </div>

                                        <div class="col-md-12 col-12 mt-3">
                                            <div class="form-group">
                                                <label>Graph Value-2</label>
                                                <input type="text" name="graph_value2[]" class="form-control" value=""  />
                                            </div>
                                        </div>
        
                                        <div class="col-md-3 col-12 rope-chan mt-3">
                                        <p id="line_no" ></p>
                                                <span class="btn btn-primary m-b-5 m-t-5" id="addrow" onclick="return addRows();" style="float: left;" ><i class="bx bx-plus" aria-hidden="true"></i></span>
                                                <span class="btn btn-danger m-b-5 m-t-5 m-l-2" id="removerow" style="float: left;" onclick="return removeRows(this);"><i class="bx bx-trash" aria-hidden="true"></i></span>
                                        </div>
                                    </div>
                                </div>`;
                
                            container.appendChild(row);

    }

    function removeRows(button){
            // Find the closest parent div with class 'borderBp' and remove it
            // $(this).closest('.borderBp').remove();
            $(button).closest('.borderBp').remove();
    };
</script>
@endsection