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
                <h6 class="mb-0 text-uppercase">Add Product</h6>
                <hr />

                <form action="{{ url('admin/product/add') }}" method="post" enctype= "multipart/form-data">
                    @csrf

                    <div class="card">
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">Category *</label>
                                
                                <select name="categories" id="categories" class="select2-field form-control" onchange="subCategoryDetails()">
                                    <option value="Select a Category">Select a Category</option>

                                    @foreach($categories as $category)
                                       <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('categories'))
                                <span class="text-danger">{{ $errors->first('categories') }}</span>
                                @endif
                            </div>
                            <br>


                            <!-- Sub-category section -->
                            
                            <div class="mb-3" style="display: none;" id="sub_cat_div">
                                <label class="form-label">Sub Category</label>
                                <select name="subcategories" id="subcategories"  class="form-control">
                                </select>
                                @if ($errors->has('subcategories'))
                                <span class="text-danger">{{ $errors->first('subcategories') }}</span>
                                @endif
                            </div>
                          
                            <br>
                            <!-- -->

                            <div class="">
                                <label class="form-label">Name *</label>
                                <input type="text" class="form-control" name="name" required />
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <br>


                            <div class="">
                                <label class="form-label">Short Description</label>
                                <textarea class="ckeditor form-control" name="short_description"></textarea>
                                @if ($errors->has('short_description'))
                                <span class="text-danger">{{ $errors->first('short_description') }}</span>
                                @endif
                            </div>
                            <br>


                            <div class="">
                                <label class="form-label">SKU Code</label>
                                <input type="text" class="form-control" name="sku_code"  />
                            </div>
                            <br>

                            <div class="">
                                <label class="form-label">Featured Image *</label>
                                <input type="file" class="form-control" name="featured_img" required />
                                @if ($errors->has('featured_img'))
                                <span class="text-danger">{{ $errors->first('featured_img') }}</span>
                                @endif
                            </div>
                            <br>

                            <div class="">
                                <label class="form-label">Product Price *</label>
                                <input type="number" class="form-control" name="product_price"  required />
                            </div>
                            <br>

                            <div class="">
                                <label class="form-label">Product Discount Price</label>
                                <input type="number" class="form-control" name="product_discount"  value="0" />
                            </div>
                            <br>


                            <div class="">
                                <label class="form-label">Delivary Charge</label>
                                <input type="number" class="form-control" name="delivary_charge"  value="0" />
                            </div>
                            <br>

                            <div class="">
                                <label class="form-label">Features</label>
                                <textarea class="ckeditor form-control" name="features"></textarea>
                                @if ($errors->has('features'))
                                <span class="text-danger">{{ $errors->first('features') }}</span>
                                @endif
                            </div>
                            <br>


                            <div class="" id="stock_status_div">
                                <label class="form-label">Product Status</label>

                                <select name="stock_status" id="stock_status" class="form-control" onchange="product_status();">
                                    <option value="Select Status">Select Status</option>
                                    <option value="In Stock">In Stock</option>
                                    <option value="Out of Stock">Out of Stock</option>
                                </select>
                            </div>
                            <br>

                            <!-- no of products in stock -->
                            <div class="" id="no_in_stock_div" style="display: none;">
                                <label class="form-label">No. of Product in stock</label>
                                <input type="number" class="form-control" name="no_in_stock" value="1" min="1" />
                            </div>
                            <br>


                            <div class="" id="no_in_stock_div">
                                <label class="form-label">Want to add QTY?</label>
                                <input type="checkbox" name="qty_checkbox" id="qty_checkbox" onclick="QtyAdd()">
                            </div>
                            <br>
                            
                         <!-- Variation code start -->
                         <div class="row">
                        <div class="borderBp" id="variations" style="display: none;">
                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label>Variation</label>
                                        <input type="text" name="ropeChain[]" id="ropeChain" class="form-control" placeholder="0.68 Mm Thickness 18 Inch" value=""  />
                                    </div>
                                </div>

                                <div class="col-md-12 col-12 mt-3">
                                    <div class="form-group">
                                        <label>Final Price</label>
                                        <input type="num" name="final_price[]" id="final_price1" class="form-control" placeholder="Final Price" value="{{ old('final_price') }}" /> 
                                        <input type="hidden" name="discount_amt[]" id="discount_amt1" class="form-control" placeholder="Final Price" value="{{ old('discount_amt') }}" /> 
                                        @if ($errors->has('final_price'))
                                        <span class="text-danger">{{ $errors->first('final_price') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-2 col-12 rope-chan mt-3">
                                <p id="line_no" ></p>
                                        <span class="btn btn-primary m-b-5 m-t-5" id="addrow" onclick="return addRows();" style="float: left;" ><i class="bx bx-plus" aria-hidden="true"></i></span>
                                        <!-- <span class="btn btn-primary m-b-5 m-t-5" id="removerow" style="float: right;" onclick="return removeRows();"><i class="bx bx-minus" aria-hidden="true"></i></span> -->
                                </div>
                            </div>
                        </div>
                            <!-- variations code ends -->
                            
                                        
                            <div class="row" id="outerdiv">
                                <div style="padding:10px;" id="more_variations"></div>
                            </div>
                            <br>


                            <div class="">
                                <label class="form-label">Description</label>
                                <textarea class="ckeditor form-control" name="description"></textarea>
                                @if ($errors->has('description'))
                                <span class="text-danger">{{ $errors->first('description') }}</span>
                                @endif
                            </div>
                            <br>

                            <div class="">
                                <label class="form-label">Video</label>
                                <input type="file" class="form-control" name="video"  />
                                @if ($errors->has('video'))
                                <span class="text-danger">{{ $errors->first('video') }}</span>
                                @endif
                            </div>
                            <br>

                            <div class="">
                                <label class="form-label">Link</label>
                                <input type="text" class="form-control" name="website_link"  />
                                @if ($errors->has('website_link'))
                                <span class="text-danger">{{ $errors->first('website_link') }}</span>
                                @endif
                            </div>
                            <br>
                            
                            
                            <!-- tags -->
                            <div class="">
                                <label class="form-label">Tags</label>
                                <input type="text" class="form-control" name="tags"  />
                                @if ($errors->has('tags'))
                                <span class="text-danger">{{ $errors->first('tags') }}</span>
                                @endif
                            </div>
                            <br>
                            
                            
                            <!-- new coliumns -->

                            <div class="">
                                <label class="form-label">Weight (kg)</label>
                                <input type="text" class="form-control" name="weight"  />
                                @if ($errors->has('weight'))
                                <span class="text-danger">{{ $errors->first('weight') }}</span>
                                @endif
                            </div>
                            <br>

                            <div class="">
                                <label class="form-label">Length (cm)</label>
                                <input type="text" class="form-control" name="length"  />
                                @if ($errors->has('length'))
                                <span class="text-danger">{{ $errors->first('length') }}</span>
                                @endif
                            </div>
                            <br>

                            <div class="">
                                <label class="form-label">Width (cm)</label>
                                <input type="text" class="form-control" name="width"  />
                                @if ($errors->has('width'))
                                <span class="text-danger">{{ $errors->first('width') }}</span>
                                @endif
                            </div>
                            <br>

                            <div class="">
                                <label class="form-label">Height (cm)</label>
                                <input type="text" class="form-control" name="height"  />
                                @if ($errors->has('height'))
                                <span class="text-danger">{{ $errors->first('height') }}</span>
                                @endif
                            </div>
                            <br>
                            <!-- -->

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

                            {{-- <div class="" id="">
                                <label class="form-label">Rating</label>
                                <input type="number" class="form-control" name="rating"  />
                            </div>
                            <br> --}}

                            <div class="">
                                <label class="form-label">Let Users choose Color?</label>
                                <input type="checkbox" name="color_added" id="color_added" class="">
                                {{-- <textarea class="ckeditor form-control" name="features"></textarea> --}}
                                @if ($errors->has('color_added'))
                                <span class="text-danger">{{ $errors->first('color_added') }}</span>
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

<!-- Add duplicate variations -->
<script src="../js/product_add.js"></script>
@endsection